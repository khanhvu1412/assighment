<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function listCategory(){
        $category = Category::orderBy('id')->get();
        return view('admin.categories.list-category', compact('category'));
        // return view('admin.products.list-product')->with([
        //     'listCategory' => $listCategory
        // ]);
    }

    public function addCategory(){
        return view('admin.categories.add-category');
    }
    
}
