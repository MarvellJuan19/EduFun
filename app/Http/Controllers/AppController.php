<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryDetail;

class AppController extends Controller
{
    public function home(){
        $category_details = CategoryDetail::latest()->get();
        return view('home', ['category_details' => $category_details
        ]);
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function popular(){
        $category_details = CategoryDetail::with('category')->paginate(3);
        
        return view('popular', [
            'category_details' => $category_details
        ]);

    }
}
