<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categori;

class CategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Categori::all();

        return view ('backend.categori.index',compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Categori::all();

        return view ('backend.categori.create',compact('cat'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Categori;
        
        $cat->nama_categori = $request->nama_categori;
        $cat->slug = str_slug($request->nama_categori);
        $cat->save();

        return redirect()->route('categori.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Categori::findOrFail($id);
        return view('backend.categori.edit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cat = Categori::findOrFail($id);
        $cat->nama_categori = $request->nama_categori;
        $cat->slug = str_slug($request->nama_categori);
        $cat->save();

        return redirect()->route('categori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Categori::findOrFail($id);
        $cat->nama_categori;
        $cat->delete();    
        return redirect()->route('categori.index');
}
}