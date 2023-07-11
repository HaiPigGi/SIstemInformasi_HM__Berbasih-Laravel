<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kepengurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

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
            'jabatan'     => 'required',
            'periode'     => 'required',
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
            'judul'     => 'required',
        ]);

        // Upload image
        $image = $request->file('image');
        $image->storeAs('public/kepengurusan', $image->hashName());

        // Create post
        Kepengurusan::create([
            'nama'     => $request->nama,
            'divisi'   => $request->divisi,
            'jabatan'     => $request->jabatan,
            'periode'     => $request->periode,
            'image'     => $image->hashName(),
            'judul'     => $request->judul,
        ]);

        // Redirect to index
        return redirect()->route('kepengurusan.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $this->validate($request, [
            'nama'     => 'required',
            'divisi'   => 'required',
            'jabatan'     => 'required',
            'periode'     => 'required',
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
            'judul'     => 'required',
        ]);

        // Check if image is uploaded
        if ($request->hasFile('image')) {
            // Upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            // Delete old image
            Storage::delete('public/posts/' . $post->image);

            // Update post with new image
            $post->update([
                'nama'     => $request->nama,
                'divisi'   => $request->divisi,
                'jabatan'     => $request->jabatan,
                'periode'     => $request->periode,
                'image'     => $image->hashName(),
                'judul'     => $request->judul,
            ]);
        } else {
            // Update post without image
            $post->update([
                'nama'     => $request->nama,
                'divisi'   => $request->divisi,
                'jabatan'     => $request->jabatan,
                'periode'     => $request->periode,
                'judul'     => $request->judul
            ]);
        }
        // Redirect to index
        return redirect()->route('kepengurusan.index')->with(['success' => 'Data Berhasil Diubah!']);
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
