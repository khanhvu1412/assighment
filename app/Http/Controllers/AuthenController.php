<?php

namespace App\Http\Controllers;

// use App\Mail\ForgotPassword;
use App\Mail\NewUserRegister;
// use App\Models\CustomerResetToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Authentication
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Session;
use Illuminate\Support\Facades\Mail;

// use Illuminate\Support\Str;

class AuthenController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $req)
    {
        $req->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ], [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu không được để trống',
        ]);

        $remember = $req->has('remember');

        if (
            Auth::attempt([
                'email' => $req->email,
                'password' => $req->password,
            ], $remember)
        ) {
            // Logout hết các tài khoản khác
            Session::where('user_id', Auth::id())->delete();
            // Tạo phiên đăng nhập mới
            session()->put('user_id', Auth::id());

            // Đăng nhập thành công
            if (Auth::user()->role == '1') {
                return redirect()->route('admin.dashboard')->with([
                    'message' => 'Đăng nhập thành công'
                ]);
            } else {
                // Đăng nhập vào user
                // echo ("Đăng nhập vào user");
                return redirect()->route('client.shops.home');
            }

        } else {
            return redirect()->back()->with([
                'messageError' => 'Email hoặc mật khẩu không đúng'
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with([
            'messageError' => "Đăng xuất thành công"
        ]);
    }

    public function register()
    {
        return view('register');
    }

    public function postRegister(Request $req)
    {
        
        $check = User::where('email', $req->email)->exists();
        if ($check) {
            return redirect()->back()->with([
                'message' => 'Tài khoản email đã tồn tại'
            ]);
        } else {

            $linkImage = '';
            if ($req->hasFile('image')){
            $image = $req->file('image');
            $newName = time() . '.' . $image->getClientOriginalExtension();
            $linkStorage = 'imageUsers/';
            $image->move(public_path($linkStorage), $newName);

            $linkImage = $linkStorage . $newName;
            }

            $data = [
                'name' => $req->name,
                'email' => $req->email,
                'phone' => $req->phone,
                'address' => $req->address,
                'password' => Hash::make($req->password),
                'image' => $linkImage
            ];

            $newUser = User::create($data);

            // if(!$newUser){
            //     return redirect()->back()->withErrors('Đã có lỗi xảy ra khi đăng ký');
            // }
            // Gửi mail thông báo
            // Mail::to($newUser->email)->send(new NewUserRegister($newUser));

            // C1
            // Auth::login( $newUser ); // Tự dộng đăng nhập cho user này
            // return dashboard (trang chủ)


            // C2
            return redirect()->route('login')->with([
                'message' => 'Đăng ký thành công. Vui lòng đăng nhập'
            ]);

        }
    }


    public function forgotPassword()
    {
        return view('forgot_password');
    }

    public function check_forgot_password(Request $req)
    {

        // $user = User::where('email', 'like', $req->email)->first();
        // if(!empty($user)){
        //     $req->validate([
        //         'email' => ['required', 'email'],
        //     ], [
        //         'email.required' => 'Email không được để trống',
        //         'email.email' => 'Email không đúng định dạng',
        //     ]);

        //     $customer = User::where('email', $req->email)->first();
        //     // dd($user);
        //     $token = Str::random(50);
        //     $tokenData = [
        //         'email' => $req->email,
        //         'token' => $token
        //     ];
        //     // dd($tokenData);

        //     if(CustomerResetToken::create($tokenData)){
        //         Mail::to($req->email)->send(new ForgotPassword($customer, $token));
        //         return redirect()->route('login')->with([
        //             'message' => 'Vui lòng kiểm tra lại email'
        //         ]);
        //     }
        // }else{
        //     return redirect()->back()->with([
        //         'message' => 'Lỗi không lấy được mật khẩu'
        //     ]);
        // }

        // dd($tokenData);
        // dd($user);
    }
}



