<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function listUsers()
    {
        $listUser = User::select('id','name', 'email', 'role')
            ->paginate(5);
        return view('admin.users.list-user')->with([
            'listUser' => $listUser
        ]);
    }

    // public function addUser(){
    //     return view('admin.users.add-user');
    // }

    public function updateUsers($idUser){

        $user = User::where('id', $idUser)->first();

        return view('admin.users.update-user')->with([
            'user' => $user
        ]);

    }

    public function updatePatchUsers($idUser, Request $req){
        // $user = User::where('id', $idUser)->first();
        $data = [
            'name' => $req->name,
            'role' => $req->role
        ];
        User::where('id', $idUser)->update($data);
        return redirect()->route('admin.users.listUsers')->with([
            'message' => 'Chỉnh sửa thành công'
        ]);
    }

    public function deleteUsers(Request $req){
        $user = User::where('id', $req->idUser);
        $user->delete();
        return redirect()->route('admin.users.listUsers')->with([
            'message' => 'Xóa thành công'
        ]);
    }

    public function detailUsers($idUser){
        $user = User::where('id', $idUser)->first();
        return view('admin.users.detail-user')->with([
            'user' => $user
        ]);
    }
}
