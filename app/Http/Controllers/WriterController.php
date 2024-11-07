<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;
use App\Models\Categories;
use App\Models\CategoryDetail;

class WriterController extends Controller
{
    //
    public function index() {
        $writers = Writer::all();
        $categories = Categories::all();

        return view('writer.writer', [
            'writers' => $writers,
            'categories' => $categories
        ]);
    }

    public function show($wid, $cid) {
        $writer = Writer::find($wid);
        $category = Categories::find($cid);
        $category_details = CategoryDetail::where('category_id', $cid)->get();

        return view('writer.Detail', [
            'writer' => $writer,
            'category' => $category,
            'category_details' =>$category_details
        ]);
    }
}
