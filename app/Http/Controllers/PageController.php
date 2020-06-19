<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function about_us() {
        $page = Page::first();
        return view('backend.pages.about_us', compact('page'));
    }

    public function store_about_us(Request $request) {
        $page = Page::first();
        $page->update([
           'about_us' => $request->about_us
        ]);
        return redirect()->back()->with([
           'message' => 'Saved Successfully'
        ]);
    }

    public function store_location() {
        $page = Page::first();
        return view('backend.pages.store_location', compact('page'));
    }

    public function store_store_location(Request $request) {
        $page = Page::first();
        $page->update([
            'store_location' => $request->store_location
        ]);
        return redirect()->back()->with([
            'message' => 'Saved Successfully'
        ]);
    }

    public function disclaimer() {
        $page = Page::first();
        return view('backend.pages.disclaimer', compact('page'));
    }

    public function store_disclaimer(Request $request) {
        $page = Page::first();
        $page->update([
            'disclaimer' => $request->disclaimer
        ]);
        return redirect()->back()->with([
            'message' => 'Saved Successfully'
        ]);
    }

    public function privacy_policy() {
        $page = Page::first();
        return view('backend.pages.privacy_policy', compact('page'));
    }

    public function store_privacy_policy(Request $request) {
        $page = Page::first();
        $page->update([
            'privacy_policy' => $request->privacy_policy
        ]);
        return redirect()->back()->with([
            'message' => 'Saved Successfully'
        ]);
    }

    public function payment_policy() {
        $page = Page::first();
        return view('backend.pages.payment_policy', compact('page'));
    }

    public function store_payment_policy(Request $request) {
        $page = Page::first();
        $page->update([
            'payment_policy' => $request->payment_policy
        ]);
        return redirect()->back()->with([
            'message' => 'Saved Successfully'
        ]);
    }


    public function return_policy() {
        $page = Page::first();
        return view('backend.pages.return_policy', compact('page'));
    }

    public function store_return_policy(Request $request) {
        $page = Page::first();
        $page->update([
            'return_policy' => $request->return_policy
        ]);
        return redirect()->back()->with([
            'message' => 'Saved Successfully'
        ]);
    }

    public function refund_policy() {
        $page = Page::first();
        return view('backend.pages.refund_policy', compact('page'));
    }

    public function store_refund_policy(Request $request) {
        $page = Page::first();
        $page->update([
            'refund_policy' => $request->refund_policy
        ]);
        return redirect()->back()->with([
            'message' => 'Saved Successfully'
        ]);
    }

    public function damaged_lost_policy() {
        $page = Page::first();
        return view('backend.pages.damaged_lost_policy', compact('page'));
    }

    public function store_damaged_lost_policy(Request $request) {
        $page = Page::first();
        $page->update([
            'damaged_lost_policy' => $request->damaged_lost_policy
        ]);
        return redirect()->back()->with([
            'message' => 'Saved Successfully'
        ]);
    }


}
