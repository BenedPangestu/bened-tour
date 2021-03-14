<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $items = TravelPackage::with(['galleries'])->get();
        return view('pages.home', [
            'item' => $items
        ]);
    }
}
