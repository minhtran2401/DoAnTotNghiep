<?php

namespace App\Http\Controllers;
use App\RegEmail;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
// namespace App\Http\Middleware;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
        public function __construct()
        {
            $this->middleware('auth');
        }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function admindashboard()
    {
        return view('admin.dashboard');
    }

    public function emailkh(){
        $ds = RegEmail::all();
        return view('admin.email.index', compact('ds'));
    }

    public function xoa_email($id)
    {
        $blog = RegEmail::find($id);
        $blog->delete();
        toast('Đã Xóa Email khỏi danh sách','success');
        return redirect()->route('emailkh');
    }

}
