<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class PageController extends Controller
{
  
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index' , compact('comics'));
    }

   
    public function show(Comic $comic)
    {
        return view('comics.show' , compact('comics'));
    }

  
     
    public function store(Request $request)
    {
        $comic = new Comic();
        $comic->title = $request->title;
        $comic->release_date = $request->release_date;
        $comic->price = $request->price;
        $comic->description = $request->description;
        $comic->save();
        return redirect()->router('movies.show',$comic->id);
    }

    public function create()
    {
        return view('comics.create');
    }

 
    public function edit($id)
    {
        return view('');
    }

  
    public function update(Request $request, $id)
    {
        return view('');
    }

    
    public function destroy($id)
    {
        return view('');
    }
}