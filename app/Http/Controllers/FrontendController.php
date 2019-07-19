<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\tag;
Use App\categori;

class FrontendController extends Controller
{
     public function index()
    {
        $artikel = Artikel::with('categori','tag')->orderBy('created_at','desc')->paginate(4);
        $categori = Categori::all();
        $tag = Tag::all();
        return view('index', compact('artikel','categori','tag'));
    }
    
    public function allblog(Request $request)
    {

        // $artikel = Artikel::orderBy('created_at','desc');
        // $kategori = Kategori::all();
        // $tag = Tag::all();
        // return view('news', compact('artikel','kategori','tag'));

        $artikel = Artikel::all();
        $categori = Categori::all();
        $tag = Tag::all();

        $cari = $request->cari;

        if($cari){
            $artikel = Artikel::where('judul', 'LIKE', "%$cari%")->paginate(4);
        }
        return view('blog', compact('artikel','categori','tag'));
    }

    public function detailblog(Artikel $artikel)
    {
        $categori = Categori::all();
        $tag = Tag::all();
        return view('single', compact('artikel','categori','tag'));
    }

    public function blogcat(Kategori $cat)
    {
        $tag = Tag::all();
        $artikel = $cat->artikel()->latest()->paginate(5);
        return view('category', compact('artikel', 'cat', 'tag'));
    }

    public function blogtag(Tag $tag)
    {
        $artikel = $tag->artikel()->latest()->paginate(5);
        return view('tag', compact('artikel', 'tag'));
    }
}
