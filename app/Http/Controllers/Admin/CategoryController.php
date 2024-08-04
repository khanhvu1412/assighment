<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function listCategory(){
        $listCategory = Category::select('name','id')->paginate(5);
        return view('admin.categories.list-category')->with([
            'listCategory' => $listCategory
        ]);

        // dd($listCategory);

        
        // return view('admin.categories.list-category', compact('category'));
    }

    public function addCategory(){
        return view('admin.categories.add-category');
    }

    public function addPostCategory(Request $req){
        $data = [
            'name' => $req->nameDM
        ];

        Category::create($data);
        return redirect()->route('admin.categories.listCategory')->with([
            'message' => 'Thêm danh mục thành công'
        ]);
    }

    public function deleteCategory(Request $req){
        $category = Category::where('id', $req->idcategory);
        $category->delete();
        return redirect()->route('admin.categories.listCategory')->with([
            'message' => 'Xóa thành công'
        ]);
    }

    public function updateCategory($idCategory){
        $category = Category::where('id', $idCategory)->first();
        return view('admin.categories.update-category')
        ->with([
            'category' => $category
        ]);
    }
    

    public function updatePatchCategory($idCategory, Request $req){
        // $category = Category::where('id', $idCategory)->first();
        $data = [
            'name' => $req->nameDM
        ];

        Category::where('id', $idCategory)->update($data);
        return redirect()->route('admin.categories.listCategory')->with([
            'message' => 'Chỉnh sửa thành công'
        ]);
    }
}
