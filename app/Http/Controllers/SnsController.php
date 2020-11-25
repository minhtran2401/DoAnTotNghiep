<?php
use RealRashid\SweetAlert\Facades\Alert;
namespace App\Http\Controllers;
use App\Sns;
use Illuminate\Http\Request;
use App\Http\Requests\rqSocial;
class SnsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sns = Sns::all();
        return view('admin.sns.index', compact('sns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sns.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(rqSocial $request)
    {
        $fileimg = $request->file('snsicon');
        $filename = $fileimg->getClientOriginalName();
        $pathimg = $fileimg->move(public_path().'/snsicon/', $filename);
        $sns = new Sns([
            'snsicon' => $filename,
            'snslink' => $request->get('snslink')
        ]);
        toast('Thêm Thành Công!','success');
        $sns->save();
        return redirect()->route('sns.index');
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
        $row = Sns::find($id);
        return view('admin.sns.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(rqSocial $request, $id)
    {
        $sns = Sns::find($id);
        $fileimg = $request->file('snsicon');
        if($fileimg){
            $fileimg = $request->file('snsicon');
            $filename = $fileimg->getClientOriginalName();
            $pathimg = $fileimg->move(public_path().'/snsicon/', $filename);
            $sns->snsicon = $filename;
            $sns->snslink = $request->get('snslink');
        }
        $sns->snslink = $request->get('snslink');
        $sns->save();
        toast('Chỉnh Sửa Thành Công!','success');
        return redirect('/sns');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sns = Sns::find($id);
        $sns->delete($id);
        toast('Xóa Thành Công!','success');
        return redirect()->route('sns.index');
    }
}
