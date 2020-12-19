<?php

namespace App\Http\Controllers;
use App\Users;
use Hash;
use Illuminate\Http\Request;
use App\Http\Requests\rqUsers;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $us = Users::all();
        return view('admin.users.index', compact('us'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(rqUsers $request)
    {
        $fileimg = $request->file('avatar'); // tạo biến lấy dữ liệu từ input
        $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
        $pathimg = $fileimg->move(public_path().'/imguser/', $filename); //chỗ chứa file
        $th = new Users([
            'avatar' => $filename,
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'address' => $request->get('address'),
            'phone' => $request->get('phone'),
            'idgroup' => $request->get('idgroup'),
            'active' => $request->get('active'),
        ]);
        toast('Thêm Người Mới Thành Công!','success');
        $th->save();
        return redirect ()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Users::find($id);
        return view('admin.users.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(rqUsers $request, $id)
    {
        $us = Users::find($id);
        $fileimg = $request->file('avatar'); // tạo biến lấy dữ liệu từ input
        if ($fileimg){
            $fileimg = $request->file('avatar'); // tạo biến lấy dữ liệu từ input
            $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
            $pathimg = $fileimg->move(public_path().'/imguser/', $filename); //chỗ chứa file
            $us->avatar = $filename;
            $us->name = $request->get('name');
            $us->email = $request->get('email');
            $us->address = $request->get('address');
            $us->password = Hash::make($request->get('password'));
            $us->phone = $request->get('phone');
            $us->idgroup = $request->get('idgroup');
            $us->active = $request->get('active');
        }
        else{
            $us->name = $request->get('name');
            $us->email = $request->get('email');
            $us->address = $request->get('address');
            $us->password = Hash::make($request->get('password'));
            $us->phone = $request->get('phone');
            $us->idgroup = $request->get('idgroup');
            $us->active = $request->get('active');
        }

          $us->save();
          toast('Cập Nhật Người Dùng Thành Công!','success');

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $us = Users::find($id);
        $us -> delete ($id);
        toast ('Xóa người dùng thành công!', 'success');
        return redirect()->route('users.index');
    }
}
