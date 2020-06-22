<?php

namespace App\Http\Controllers;

use App\Page;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
    
    
    /*
    |
    |--- Store Location
    |--- About US
    |--- Terms of Service
    |--- Privacy Policy
    |--- Shipping Policy
    |    
    */


    public function store_location(){
        $page = Page::latest()->first();
        return view('frontend.policy.store-location', compact('page'));
    }
    
    public function about_us(){
        $page = Page::latest()->first();
        return view('frontend.policy.about-us', compact('page'));
    }
    
    public function disclaimer(){
        $page = Page::latest()->first();
        return view('frontend.policy.disclaimer', compact('page'));
    }
    
    public function privacy_policy(){
        $page = Page::latest()->first();
        return view('frontend.policy.privacy-policy', compact('page'));
    }
    public function return_policy(){
        $page = Page::latest()->first();
        return view('frontend.policy.return-policy', compact('page'));
    }
    public function refund_policy(){
        $page = Page::latest()->first();
        return view('frontend.policy.refund-policy', compact('page'));
    }
    public function payment_policy(){
        $page = Page::latest()->first();
        return view('frontend.policy.payment-policy', compact('page'));
    }
    public function damaged_lost_policy(){
        $page = Page::latest()->first();
        return view('frontend.policy.damaged-lost-policy', compact('page'));
    }
    
}
