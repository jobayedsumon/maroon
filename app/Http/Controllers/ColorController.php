<?php

namespace App\Http\Controllers;

use App\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $colors = Color::all();
        return view('backend.ecommerce.color', compact('colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Color::create([
            'color_name' => $request->color_name,
        ]);

        return redirect('/admin/color');

    }

    public function destroy($id)
    {
        //
        Color::find($id)->delete();

    }

}
