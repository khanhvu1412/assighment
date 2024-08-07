<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function home()
    {

        $listCate = Category::select('id', 'name')->get();

        $newPro = Product::select('id','name', 'price', 'image')
            ->orderBy('id', 'DESC')
            ->limit(5)
            ->get();

        $newPro2 = Product::select('id','name', 'price', 'image')
            ->orderBy('id', 'ASC')
            ->limit(5)
            ->get();

        $newPro3 = Product::select('id','name', 'price', 'image')
            ->where('price', '<=', 40.55)
            ->limit(5)
            ->get();

        return view('client.home')->with([
            'listCate' => $listCate,
            'newPro' => $newPro,
            'newPro2' => $newPro2,
            'newPro3' => $newPro3
        ]);
    }

    public function searchCategory($idCategory){
        $category = Category::findOrFail($idCategory);

        // Tìm kiếm sản phẩm theo category
        $product = Product::where('category_id', $idCategory)
            ->select('id', 'name', 'price', 'image', 'description')
            ->get();

        return view('client.shop.sptheodm')->with([
            'category' => $category,
            'product' => $product
        ]);
    }

    public function searchProduct(Request $req){
        $query = $req->input('query');

        // Tìm kiếm sản phẩm theo tên
        $product = Product::where('name', 'like', '%' . $query . '%')
            ->get();
        
            // ->select('id', 'name', 'price', 'image', 'description')


        return view('client.shop.search')->with([
            'product' => $product,
            'query' => $query

        ]);
    }

    public function listProduct()
    {
        $listProduct = Product::select('name', 'price', 'image')
            ->orderBy('name', 'DESC')
            ->limit(12)
            ->get();

        // dd($listProduct);
        return view('client.shop.list-shop')->with([
            'listProduct' => $listProduct
        ]);
    }

    public function about()
    {
        return view('client.shop.about');
    }

    public function lienHe()
    {
        return view('client.shop.lienhe');
    }

    public function detailProduct($idProduct)
    {
        $product = Product::where('product.id', $idProduct)
            ->select('product.*', 'category.name as cate_name')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->first();
        
        // $otherProduct = Product::where('category_id', $product->category_id)
        //     ->where('product.id', '<>',$idProduct)
        //     ->select('product.*', 'category.name as cate_name')
        //     ->join('category', 'category.id', '=', 'product.category_id')
        //     ->limit(5)
        //     ->get();
        $otherProduct = Product::select('id', 'name', 'price', 'image')
                ->orderBy('created_at', 'asc')
                ->limit(5)
                ->get();
        return view('client.shop.detail')->with([
            'product' => $product,
            'otherProduct' => $otherProduct
        ]);
    }


    public function userInfo(){
        $user = Auth::user();
        return view('client.account.user-info')->with([
            'user' => $user
        ]);
    }

    public function updateInfo(){
        $user = Auth::user();
        return view('client.account.update-info')->with([
            'user' => $user
        ]);
    }

    public function updatePatchInfo(Request $req){
        $user = User::find(Auth::user()->id);

        $linkImage = $user->image; // Giữ ảnh hiện tại
        if ($req->hasFile('imageUS')){
        $image = $req->file('imageUS');
        $newName = time() . '.' . $image->getClientOriginalExtension();
        $linkStorage = 'imageUsers/';
        $image->move(public_path($linkStorage), $newName);

        $linkImage = $linkStorage . $newName;
        }

        $data = [
            'name' => $req->nameUS,
            'email' => $req->emailUS,
            'phone' => $req->phoneUS,
            'address' => $req->addressUS,
            'image' => $linkImage

        ];
        // dd($data);
        
        $user->update($data);
        return redirect()->back()->with([
            'message' => "Cập nhật thành công"
        ]);

    }
    public function changePassword(){
        $user = Auth::user();
        return view('client.account.doimk')->with([
            'user' => $user
        ]);
    }

    public function changePatchPassword(Request $req){
        $user = User::find(Auth::user()->id);
        // Auth::user()

        // $req->validate([
        //     'matkhaucu' => 'required',
        //     'matkhaumoi' => 'required|string:8|confirmed',
        // ]);

        // Kiểm tra matkhaumoi có khớp không
        // if(!Hash::check($req->matkhaucu, $user->password)){
        //     return redirect()->back()->with([
        //         'message' => 'Mật khẩu cũ không đúng'
        //     ]);
        // }

        // Cập nhật mật khẩu
        $user->password = Hash::make($req->matkhaumoi);
        $user->save();

        // dd($req->all('matkhaucu', 'matkhaumoi'));
        // return redirect()->route('login')->with([
        //     'message' => 'Đổi mật khẩu thành công'
        // ]);
        return redirect()->back()->with([
            'message' => 'Đổi mật khẩu thành công'
        ]);
    }


}
