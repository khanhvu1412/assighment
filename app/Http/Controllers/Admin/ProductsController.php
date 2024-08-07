<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{
    public function listProduct()
    {

        $listProduct = Product::select('product.*', 'category.name as category_name')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->paginate(5);
        return view('admin.products.list-product')->with([
            'listProduct' => $listProduct
        ]);
    }

    public function addProduct()
    {
        $category = Category::orderBy('id', 'DESC')->get();
        return view('admin.products.add-product', compact('category'));
    }

    public function addPostProduct(Request $req)
    {
        // C1
        // $product = new Product();
        // $product->name = $req -> nameSP;
        // $product->price = $req -> priceSP;
        // $product->description = $req -> descriptionSP;
        // $product->category_id = $req -> category;
        // $product->quantity = $req -> quantitySP;
        // $product->save();

        // C2
        $req->validate([
            'nameSP' => 'required|min:5|max:50',
            'priceSP' => 'required|numeric',
            'descriptionSP' => 'required|max:200',
            'quantitySP' => 'required|integer',
            'imageSP' => 'image',

        ], [
            'nameSP.required' => 'Tên sản phẩm không được để trống',
            'nameSP.min' => 'Tên sản phẩm phải có 5 ký tự',
            'nameSP.max' => 'Tên sản phẩm không quá 50 ký tự',

            'priceSP.required' => 'Giá sản phẩm không được để trống',
            'priceSP.numeric' => 'Giá sản phẩm phải là số nguyên',
            
            'descriptionSP.required' => 'Không được để trống mô tả',
            'descriptionSP.max' => 'Mô tả không được quá 200',

            'quantitySP.required' => 'Không được để trống số lượng',
            'quantitySP.integer' => 'Số lượng phải là số nguyên',

            'imageSP.image' => 'Image phải đúng định dạng(jpeg, png, bmp, gif, svg, hoặc webp)',
        ]);

        $linkImage = '';
        if ($req->hasFile('imageSP')) {
            $image = $req->file('imageSP');
            $newName = time() . '.' . $image->getClientOriginalExtension();
            $linkStorage = 'imageProducts/';
            $image->move(public_path($linkStorage), $newName);

            $linkImage = $linkStorage . $newName;
        }
        $data = [
            'name' => $req->nameSP,
            'price' => $req->priceSP,
            'description' => $req->descriptionSP,
            'category_id' => $req->category,
            'quantity' => $req->quantitySP,
            'image' => $linkImage
        ];

        Product::create($data);

        return redirect()->route('admin.products.listProduct')->with([
            'message' => 'Thêm mới thành công'
        ]);
    }

    public function deleteProduct(Request $req)
    {
        // $product = Product::where('id', $req->id);
        // if($product->first()->image != null && $product->first()->image != ''){
        //     File::delete(public_path($product->first()->image));
        // }

        // Product::where('id', $req->idproduct)->delete();

        // C1
        // $product = Product::where('id', $req->idproduct)->first();
        // if($product->image != null && $product->image != ''){
        //     File::delete(public_path($product->image));
        // }

        // Product::where('id', $req->idproduct)->delete();

        // C2
        $product = Product::where('id', $req->idproduct);
        if ($product->first()->image != null && $product->first()->image != '') {
            File::delete(public_path($product->first()->image));
        }

        $product->delete();
        return redirect()->route('admin.products.listProduct')->with([
            'message' => 'Xóa thành công'
        ]);
    }

    public function detailProduct($idProduct)
    {
        $category = Category::all();

        $product = Product::where('product.id', $idProduct)
            ->select('product.*', 'category.name as cate_name')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->first();
        return view('admin.products.detail-product')->with([
            'product' => $product,
            'category' => $category
        ]);
    }

    public function updateProduct($idProduct)
    {

        $category = Category::all();

        $product = Product::where('id', $idProduct)->first();
        return view('admin.products.update-product')->with([
            'product' => $product,
            'category' => $category
        ]);
    }

    public function updatePatchProduct($idProduct, Request $req)
    {

        $req->validate([
            'nameSP' => 'required|min:5|max:50',
            'priceSP' => 'required|numeric',
            'descriptionSP' => 'required|max:200',
            'quantitySP' => 'required|integer',
            'imageSP' => 'image',

        ], [
            'nameSP.required' => 'Tên sản phẩm không được để trống',
            'nameSP.min' => 'Tên sản phẩm phải có 5 ký tự',
            'nameSP.max' => 'Tên sản phẩm không quá 50 ký tự',

            'priceSP.required' => 'Giá sản phẩm không được để trống',
            'priceSP.numeric' => 'Giá sản phẩm phải là số nguyên',
            
            'descriptionSP.required' => 'Không được để trống mô tả',
            'descriptionSP.max' => 'Mô tả không được quá 200',

            'quantitySP.required' => 'Không được để trống số lượng',
            'quantitySP.integer' => 'Số lượng phải là số nguyên',
            
            'imageSP.image' => 'Image phải đúng định dạng(jpeg, png, bmp, gif, svg, hoặc webp)',
        ]);
        // $linkImage = '';
        $product = Product::where('id', $idProduct)->first();
        $linkImage = $product->image;
        if ($req->hasFile('imageSP')) {
            File::delete(public_path($product->image)); // Xóa file ảnh cũ
            $image = $req->file('imageSP');
            $newName = time() . "." . $image->getClientOriginalExtension();
            $linkStorage = 'imageProducts/';
            $image->move(public_path($linkStorage), $newName);

            $linkImage = $linkStorage . $newName;
        }
        $data = [
            'name' => $req->nameSP,
            'price' => $req->priceSP,
            'description' => $req->descriptionSP,
            'quantity' => $req->quantitySP,
            'category_id' => $req->category,
            'image' => $linkImage

        ];
        Product::where('id', $idProduct)->update($data);
        return redirect()->route('admin.products.listProduct')->with([
            'message' => 'Sửa thành công'
        ]);
    }
}
