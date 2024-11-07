<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\CategoryDetail;


class CategoryController extends Controller
{
    //

    public function index($id) {
        $category = Categories::find($id);
        $category_details = CategoryDetail::where('category_id', $id)->get();

        return view('category.category', [
            'category' => $category,
            'category_details' => $category_details
        ]);
    }

    public function show($id, $cdsSlug) {
        $category = Categories::find($id);
        $categoryDetail = CategoryDetail::where('slug', $cdsSlug)->firstOrFail();

        return view('category.category', [
            'category' => $category,
            'cds' => $categoryDetail
        ]);
    }
}