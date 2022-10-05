<?php

namespace App\Http\Controllers;
use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('id', 'desc')->get();
        return view('comic.index', compact('comics'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view ('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'thumb' => 'required|max:250|url',
                'title' => 'required|max:100|min:3',
                'type' => ['required', Rule::in(['comic book', 'graphic novel'])],
                'price' => 'required|max:10|min:5',
                'series' => 'required|max:100|min:4',
                'description' => 'nullable|max:65535',
                'sale_date' => 'required',
            ]
        );
        $data=$request->all();
        $newComic = new Comic();
        // *Specificare il valore di $fillable nel model.
        $newComic->fill($data);
        $newComic->save();
        return redirect()->route('comics.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        if ($comic){
        return view ('comic.show', compact('comic'));
    }
    abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        if($comic){
            return view('comic.edit', compact('comic'));
        }
        else {
        abort(404);
        }
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
        
        $request->validate(
            [
                'thumb' => 'required|max:250|url',
                'title' => 'required|max:100|min:3',
                'type' => ['required', Rule::in(['comic book', 'graphic novel'])],
                'price' => 'required|max:10|min:3',
                'series' => 'required|max:100|min:4',
                'description' => 'nullable|max:65535',
                'sale_date' => 'required',
            ]
        );



        $comic= Comic::find($id);
        if($comic){
            $data = $request->all();
            $comic->update($data);
            $comic->save();
            //redirect 
            return redirect()->route('comics.index',['comic'=> $comic])->with('status', 'Profile updated!');

        }else{
            abort(404);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic= Comic::find($id);
        if($comic){
            $comic->delete();
            return redirect()->route('comics.index');

        } else {
        abort(404);
        }
    }
}
