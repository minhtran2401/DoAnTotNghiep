<?php
use RealRashid\SweetAlert\Facades\Alert;

namespace App\Http\Controllers;
use App\Info;

use Illuminate\Http\Request;
use App\Http\Requests\rqInfo;
class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = Info::all();
        return view('admin.info.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $fileimg = $request->file('sitelogo'); // tạo biến lấy dữ liệu từ input
        $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
        $pathimg = $fileimg->move(public_path().'/siteinfo/', $filename); //chỗ chứa file
        $inf = new Info([
            'sitelogo' => $filename,
            'sitename' => $request->get('sitename'),
            'address' => $request->get('address'),
            'address2' => $request->get('address2'),
            'address3' => $request->get('address3'),
            'contactphone' => $request->get('contactphone'),
            'contactphone2' => $request->get('contactphone2'),
            'contactphone3' => $request->get('contactphone3'),
            'contactemail' => $request->get('contactemail'),
            'googlemap' => $request->get('googlemap'),
            'introduction' => $request->get('introduction'),
        ]);
        toast('Thêm Thành Công!','success');
        $inf->save();
        return redirect ()->route('info.index');
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
        $row =Info::find($id);
        return view('admin.info.edit',compact('row'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(rqInfo $request, $id)
    {
        $inf = Info::find($id);
        $fileimg = $request->file('sitelogo'); // tạo biến lấy dữ liệu từ input
        if ($fileimg){
            $fileimg = $request->file('sitelogo'); // tạo biến lấy dữ liệu từ input
            $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
            $pathimg = $fileimg->move(public_path().'/siteinfo/', $filename); //chỗ chứa file
            $inf->sitelogo = $filename;
            $inf->sitename = $request->get('sitename');
            $inf->contactemail = $request->get('contactemail');
            $inf->contactphone = $request->get('contactphone');
            $inf->contactphone3 = $request->get('contactphone3');
            $inf->contactphone2 = $request->get('contactphone2');
            $inf->googlemap = $request->get('googlemap');
            $inf->address = $request->get('address');
            $inf->address2 = $request->get('address2');
            $inf->address3 = $request->get('address3');
            $inf->introduction = $request->get('introduction');
        }
        else{
            $inf->sitename = $request->get('sitename');
            $inf->contactemail = $request->get('contactemail');
            $inf->contactphone = $request->get('contactphone');
            $inf->contactphone2 = $request->get('contactphone2');
            $inf->contactphone3 = $request->get('contactphone3');
            $inf->googlemap = $request->get('googlemap');
            $inf->address = $request->get('address');
            $inf->address2 = $request->get('address2');
            $inf->address3 = $request->get('address3');
            $inf->introduction = $request->get('introduction');
        }
       
          $inf->save();
          toast('Cập Nhật Thành Công!','success');

        return redirect('/info');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
