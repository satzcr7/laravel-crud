<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.home');
    }

}
