<?php

namespace App\Http\Controllers;

use App\Size;
use App\SizeChart;
use Illuminate\Http\Request;

class SizeController extends Controller
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
        $sizes = Size::all();
        $sizeCharts = SizeChart::all();
        return view('backend.ecommerce.size', compact('sizes', 'sizeCharts'));
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
        Size::create([
            'size_name' => $request->size_name,
        ]);

        return redirect('/admin/size');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        //
        Size::find($id)->delete();

        return redirect('/admin/size');

    }

    public function sizechart(Request $request)
    {
        $size_code = Size::where('id', $request->size_code)->value('size_name');

        SizeChart::create([
            'item_name' => $request->item_name,
            'size' => $request->size,
            'size_code' => $size_code,
            'measurement' => $request->measurement
        ]);

        return redirect('/admin/size');
    }
}
