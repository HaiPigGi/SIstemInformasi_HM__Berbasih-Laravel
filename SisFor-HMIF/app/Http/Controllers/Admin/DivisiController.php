<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DivisiController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = divisi::latest()->paginate(5);

        return view('admin.divisi.index', compact('posts'));
    }

    public function create()
    {
        $divisi = divisi::all();

        return view('admin.divisi.create', ['divisi' => $divisi]);
    }





     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate form
        $this->validate($request, [
            'nama'     => 'required',
            'image'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
        ]);

        // Upload image
        $image = $request->file('image');
        $image->storeAs('public/divisi', $image->hashName());

        // Create post
        try {
            divisi::create([
                'nama'     => $request->nama,
                'image'    => $image->hashName(),
            ]);

            // Redirect to index
            return redirect()->route('divisi.index')->with('success', 'Data Berhasil Disimpan!');
        } catch (\Exception $e) {
            // Handle database error
            return redirect()->back()->with('error', 'Terjadi kesalahan dalam menyimpan data divisi.')->withInput();
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\divisi
     * @return \Illuminate\View\View
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\divisi  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, divisi $post)
    {
        // Validate form
        $request->validate([
            'nama'     => 'required',
            'image'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:20480',
        ]);

        // Check if image is uploaded
        if ($request->hasFile('image')) {
            // Upload new image
            $image = $request->file('image');
            $image->storeAs('public/divisi', $image->hashName());

            // Delete old image
            if ($post->image) {
                Storage::delete('public/divisi/' . $post->image);
            }

            // Update post with new image
            try {
                $post->update([
                    'nama'     => $request->nama,
                    'image'    => $image->hashName(),
                ]);

                // Redirect to index
                return redirect()->route('divisi.index')->with('success', 'Data Berhasil Diubah!');
            } catch (\Exception $e) {
                // Handle database error
                return redirect()->back()->with('error', 'Terjadi kesalahan dalam mengubah data divisi.')->withInput();
            }
        } else {
            // Update post without image
            try {
                $post->update([
                    'nama'     => $request->nama,
                ]);

                // Redirect to index
                return redirect()->route('divisi.index')->with('success', 'Data Berhasil Diubah!');
            } catch (\Exception $e) {
                // Handle database error
                return redirect()->back()->with('error', 'Terjadi kesalahan dalam mengubah data divisi.')->withInput();
            }
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\divisi  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(divisi $post)
    {
        // Delete image
        Storage::delete('public/divisi/' . $post->image);

        // Delete post
        $post->delete();

        // Redirect to index
        return redirect()->route('divisi.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
