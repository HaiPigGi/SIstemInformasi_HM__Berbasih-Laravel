<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kepengurusan;
use App\Models\Divisi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class KepengurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = Kepengurusan::latest()->paginate(5);

        return view('admin.kepengurusan.index', compact('posts'));
    }

    public function create()
    {
        $kepengurusan = Kepengurusan::all();

        return view('admin.kepengurusan.create', ['kepengurusan' => $kepengurusan]);
    }

    public function indexUser()
    {
        $divisions = Divisi::latest()->get();
        $posts = Kepengurusan::latest()->get();

        return view('kepengurusan.index', compact('divisions', 'posts'));
    }




    public function edit($id)
    {
        // Retrieve the post with the given ID
        $post = Kepengurusan::find($id);

        // Check if the post exists
        if (!$post) {
            abort(404); // Or handle the case where the post doesn't exist
        }

        // Pass the retrieved post to the view
        return view('Admin.kepengurusan.edit', compact('post'));
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
            'divisi'   => 'required',
            'jabatan'  => 'required',
            'periode'  => 'required',
            'image'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
            'judul'    => 'required',
        ]);

        // Upload image
        $image = $request->file('image');
        $image->storeAs('public/kepengurusan', $image->hashName());

        // Create post
        try {
            Kepengurusan::create([
                'nama'     => $request->nama,
                'divisi'   => $request->divisi,
                'jabatan'  => $request->jabatan,
                'periode'  => $request->periode,
                'image'    => $image->hashName(),
                'judul'    => $request->judul,
            ]);

            // Redirect to index
            return redirect()->route('kepengurusan.index')->with('success', 'Data Berhasil Disimpan!');
        } catch (\Exception $e) {
            // Handle database error
            return redirect()->back()->with('error', 'Terjadi kesalahan dalam menyimpan data kepengurusan.')->withInput();
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kepengurusan
     * @return \Illuminate\View\View
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kepengurusan  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Kepengurusan $post)
    {
        // Validate form
        $request->validate([
            'nama'     => 'required',
            'divisi'   => 'required',
            'jabatan'  => 'required',
            'periode'  => 'required',
            'image'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:20480',
            'judul'    => 'required',
        ]);

        // Check if image is uploaded
        if ($request->hasFile('image')) {
            // Upload new image
            $image = $request->file('image');
            $image->storeAs('public/kepengurusan', $image->hashName());

            // Delete old image
            if ($post->image) {
                Storage::delete('public/kepengurusan/' . $post->image);
            }

            // Update post with new image
            try {
                $post->update([
                    'nama'     => $request->nama,
                    'divisi'   => $request->divisi,
                    'jabatan'  => $request->jabatan,
                    'periode'  => $request->periode,
                    'image'    => $image->hashName(),
                    'judul'    => $request->judul,
                ]);

                // Redirect to index
                return redirect()->route('kepengurusan.index')->with('success', 'Data Berhasil Diubah!');
            } catch (\Exception $e) {
                // Handle database error
                return redirect()->back()->with('error', 'Terjadi kesalahan dalam mengubah data kepengurusan.')->withInput();
            }
        } else {
            // Update post without image
            try {
                $post->update([
                    'nama'     => $request->nama,
                    'divisi'   => $request->divisi,
                    'jabatan'  => $request->jabatan,
                    'periode'  => $request->periode,
                    'judul'    => $request->judul
                ]);

                // Redirect to index
                return redirect()->route('kepengurusan.index')->with('success', 'Data Berhasil Diubah!');
            } catch (\Exception $e) {
                // Handle database error
                return redirect()->back()->with('error', 'Terjadi kesalahan dalam mengubah data kepengurusan.')->withInput();
            }
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kepengurusan  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Kepengurusan $post)
    {
        // Delete image
        Storage::delete('public/Kepengurusan/' . $post->image);

        // Delete post
        $post->delete();

        // Redirect to index
        return redirect()->route('kepengurusan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
