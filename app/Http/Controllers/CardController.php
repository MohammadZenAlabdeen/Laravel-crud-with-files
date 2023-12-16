<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Card=Card::all();
        return view('dash',compact('Card'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $Card = new Card();
        $Card->title=$request->input('title');
        $Card->description=$request->input('description');
        if($request->hasFile('image')){   
        $image = $request->file('image');
            $imageName= time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'),$imageName);
            $Card->image=$imageName;
        }
    $Card->save();
    return redirect()->route('Card.index'); 
 
}

    /**
     * Display the specified resource.
     */
    public function show(Card $Card)
    {
        return view('view',compact('Card'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Card $Card)
    {

        return view('edit',compact('Card'));    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Card $Card)
    {
        $Card->title=$request->input('title');
        $Card->description=$request->input('description');
        if($request->hasFile('image')){   
        $image = $request->file('image');
            $imageName= time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'),$imageName);
            $Card->image=$imageName;
        }
    $Card->save();
    return redirect()->route('Card.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Card $Card)
    {
        
        $Card->delete();
        return redirect()->route('Card.index');
    }
}

