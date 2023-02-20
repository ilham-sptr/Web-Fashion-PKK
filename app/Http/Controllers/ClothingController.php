<?php

namespace App\Http\Controllers;

use App\Models\Cloting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ClothingController extends Controller
{
    /**
     * index
     */
    public function index() {
        $clothings = Cloting::all();
        return view('admin.index', [
            'clothings' => $clothings,
            'title' => 'Data Clothing - XII SIJA 1 ',
        ]);
    }

        /**
    * create
    *
    * @return void
    */
    public function create()
    {
        return view('admin.create', [
            'title' => 'Buat Data Clothing - XII SIJA 1',
        ]);
    }


    /**
     * show
     * 
     * 
     */

    public function show(Cloting $clothing) {
        return view('cloting', [
            'title' => 'Single Cloting',
            'clothing' => $clothing,
        ]);
    }

    /**
    * store
    *
    * @param  mixed $request
    * @return void
    */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'      => 'required',
            'kelas'     => 'required',
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'title'     => 'required',
            'content'   => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/cloth', $image->hashName());

        $clothing = Cloting::create([
            'image'     => $image->hashName(),
            'nama'      => $request->nama,
            'kelas'     => $request->kelas,
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        if($clothing){
            //redirect dengan pesan sukses
            return redirect()->route('clothing.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('clothing.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
* edit
*
* @param  mixed $blog
* @return void
*/
public function edit(Cloting $clothing)
{
    return view('admin.edit', [
        'clothing' => $clothing,
        'title' => 'Edit Data Clothing - XII SIJA 1',
    ]);
}


/**
* update
*
* @param  mixed $request
* @param  mixed $blog
* @return void
*/
public function update(Request $request, Cloting $clothing)
{
    $this->validate($request, [
        'nama'      => 'required',
        'kelas'     => 'required',
        'title'     => 'required',
        'content'   => 'required'
    ]);

    //get data Blog by ID
    $clothing = Cloting::findOrFail($clothing->id);

    if($request->file('image') == "") {

        $clothing->update([
            'nama'      => $request->nama,
            'kelas'     => $request->kelas,
            'title'     => $request->title,
            'content'   => $request->content
        ]);

    } else {

        //hapus old image
        Storage::disk('local')->delete('public/cloth/'.$clothing->image);

        //upload new image
        $image = $request->file('image');
        $image->storeAs('public/cloth', $image->hashName());

        $clothing->update([
            'image'     => $image->hashName(),
            'nama'      => $request->nama,
            'kelas'     => $request->kelas,
            'title'     => $request->title,
            'content'   => $request->content
        ]);

    }

    if($clothing){
        //redirect dengan pesan sukses
        return redirect()->route('clothing.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('clothing.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
}

/**
* destroy
*
* @param  mixed $id
* @return void
*/
public function destroy($id)
{
  $clothing = Cloting::findOrFail($id);
  Storage::disk('local')->delete('public/cloth/'.$clothing->image);
  $clothing->delete();

  if($clothing){
     //redirect dengan pesan sukses
     return redirect()->route('clothing.index')->with(['success' => 'Data Berhasil Dihapus!']);
  }else{
    //redirect dengan pesan error
    return redirect()->route('clothing.index')->with(['error' => 'Data Gagal Dihapus!']);
  }
}
}
