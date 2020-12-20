<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showshowLoginForm (){
        return view('auth.login'); 
   }

   public function login(Request $request){
        $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
        ]);
     
            if(\Auth::attempt([
                'email' => $request->email,
                'password' => $request->password]))
        { 
        toast('Đăng Nhập Thành Công','success');
        return redirect()->back();
        }
        else{
            alert()->error('Thất Bại','Sai Tên Tài Khoản Hoặc Mật Khẩu');
            return redirect()->route('dang-nhap');
        }
}
public function loginadmin(Request $request){
    $this->validate($request, [
    'email' => 'required|email|',
    'password' => 'required',
    ]);
    
        if(\Auth::attempt([
            'email' => $request->email,
            'password' => $request->password]))
    { 
    // alert()->success('Thành Công','Đã Đăng Nhập Vào Trang Quản Trị');
    toast('Đăng Nhập Thành Công','success');
    return redirect()->route('admindashboard');
    }
    else{
        return redirect()->back();
        toast('Tài khoản hoặc mật khẩu không chính xác','error');
    }
}



}
