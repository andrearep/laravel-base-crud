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
            return view('comics.show', compact('comic'));
    }
        
    

  
     
    public function store(Request $request)
    {
        $comic = new Comic();
        $comic->title = $request->title;
        $comic->release_date = $request->release_date;
        $comic->price = $request->price;
        $comic->description = $request->description;
        $comic->save();

        return redirect()->route('comics.show',$comic->id);
    }

    public function create()
    {
        
        return view('comics.create');
    }

 
    public function edit(Comic $comic)
    {
    
        return view('comics.edit', compact('comic'));
    }

  
    public function update(Request $request, Comic $comic)
    {
        $comic->update($request->all());
        return redirect()->route('comics.show',$comic->id);
        
    }

    
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}