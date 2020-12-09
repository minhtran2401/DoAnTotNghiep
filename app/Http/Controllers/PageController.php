<?php
namespace App\Http\Controllers;
use Auth;
use Hash;
use App\Models\User;
use App\SanPham;
use App\HinhSanPham;
use App\LoaiSanPham;
use App\LoaiBlog;
use App\Blog;
use DB;
use Illuminate\Database\QueryException;
use Validator; 
use Illuminate\Http\Request;
use App\RegEmail;
// use Illuminate\Support\Facades\Mail;
use Mail;
use App\Http\Requests\checkemail;
use App\Http\Requests\checkinfokh;
use App\NhomSanPham;
use Illuminate\Support\Facades\DB as FacadesDB;
use RealRashid\SweetAlert\Facades\Alert;
use Jenssegers\Agent\Agent;
use App\TuyenDung;



class PageController extends Controller
{
    //
    public function index(){
      $agent = new Agent();
      $agent->platform();
// Ubuntu, Windows, OS X, ...
$agent->browser();
// Chrome, IE, Safari, Firefox, ...
$browser = $agent->browser();
$version = $agent->version($browser);
$platform = $agent->platform();
$version = $agent->version($platform);
$agent->is('Windows');
$agent->is('Firefox');
$agent->is('iPhone');
$agent->is('OS X');
$agent->isAndroidOS();
$agent->isNexus();
$agent->isSafari();
$agent->languages();
// ['nl-nl', 'nl', 'en-us', 'en']
$agent->device();
// iPhone, Nexus, AsusTablet, ...
$agent->isDesktop();
$agent->isPhone();
$agent->isMobile();
$agent->isTablet();
$agent->isRobot();
$agent->robot();
// dd($agent);
// robot name
        return view('FE.home.index');
   
    }
     function getinfo($id){
        $popup = SanPham::join('loaisp','sanpham.id_loaisp','loaisp.id_loaisp')
        ->join('nhacungcap','sanpham.id_thuonghieu','nhacungcap.id_thuonghieu')
        ->findOrfail($id);
        $hinh = HinhSanPham::where('id_sanpham',$id)->get();
        return view('FE.layouts.popup', compact('popup','hinh'));

    }
    

    // Products:
    public function allprod(){
        $title = "TẤT CẢ SẢN PHẨM";
        $productpage = SanPham::orderby('id_sanpham','desc')->where('sanpham.Anhien','1')
        ->join('loaisp','loaisp.id_loaisp','sanpham.id_loaisp')
        ->where('sp_khuyenmai','0')->paginate(12);
        $productsalepage = SanPham::where('sanpham.Anhien',1)->where('sp_khuyenmai',1)->orderby('time_discount','desc')
        ->join('loaisp','loaisp.id_loaisp','sanpham.id_loaisp')
        ->get();
        $data = ['type_product' => 'all-products', 'title'=>$title,'productpage'=>$productpage,'productsalepage'=>$productsalepage];
        return view('FE.products.index',$data);
    }
    public function cateprod($id){
        $cate_pro = LoaiSanPham::where('slug_loaisp',$id)->firstOrFail();
        $sale_pro = SanPham::join('loaisp','loaisp.id_loaisp','sanpham.id_loaisp')
        ->where('slug_loaisp',$id)->where('sp_khuyenmai','1')->orderby('time_discount','desc')->get();
        $new_pro = SanPham::join('loaisp','loaisp.id_loaisp','sanpham.id_loaisp')
        ->where('slug_loaisp',$id)->where('sp_khuyenmai',0)->orderby('id_sanpham','desc')->get();
        return view('FE.products.index',compact('cate_pro','sale_pro','new_pro'));
    }

    // single product:
    public function singleproduct($id){  
        $sp = SanPham::where('slug_sp', $id)
        ->join('nhacungcap','nhacungcap.id_thuonghieu','sanpham.id_thuonghieu')
        ->join('donvitinh','donvitinh.id_donvitinh','sanpham.id_donvitinh')
        ->join('loaisp','loaisp.id_loaisp','sanpham.id_loaisp')
        ->join('nhomsp','nhomsp.id_nhomsp','sanpham.id_nhomsp')
        ->firstOrFail();
        $hinh = HinhSanPham::join('sanpham','sanpham.id_sanpham','imgchitiet.id_sanpham')->where('sanpham.slug_sp',$id)->orderby('sanpham.id_sanpham','desc')->limit(15)->get();
        $splq = SanPham::where('sanpham.id_nhomsp','=',$sp->id_nhomsp)
        ->join('nhomsp','nhomsp.id_nhomsp','sanpham.id_nhomsp')
        ->join('loaisp','loaisp.id_loaisp','sanpham.id_loaisp')
        ->get();
        return view('FE.single_product.index', compact('sp','hinh','splq'));
    }

    // blog:
    public function singleblog($id){
        $chitiet_blog = Blog::where('slug_blog', $id)
        ->join('users','users.id','blog.id')
        ->join('loaiblog','loaiblog.id_loaiblog','blog.id_loaiblog')
        ->firstOrFail();
        DB::table('blog')
        ->where('slug_blog', $id)
        ->update([
            'luotxem' => DB::raw('luotxem + 1')
        ]);
        return view('FE.single_blog.index', compact('chitiet_blog'));
    }
    public function cateblog($id){
        $cate_blog = LoaiBlog::where('slug_loaiblog', $id)->where('Anhien', 1)->firstOrFail();
        $blogmini = Blog::where('id_loaiblog',$cate_blog->id_loaiblog)
        ->join('users','users.id','blog.id')
        ->orderby('id_blog','desc')->get();
        return view('FE.blog.index', compact('cate_blog','blogmini'));
    }
    public function allblog(){
        $type_blog = "all-blog";
        $all_blog = DB::table('blog')->where('Anhien',1)->orderby('id_blog','desc')
        ->join('users','users.id','blog.id')
        ->paginate(6);
        return view('FE.blog.index', compact('type_blog', 'all_blog'));
    }
    public function tuyendung($id){  
      $td = TuyenDung::where('id_tuyendung',$id)->where('Anhien',1)->firstorfail();
      return view('FE.tuyendung.tuyendung',compact('td'));
  }
    public function canhan(){  
      return view('FE.canhan.index');
  }
  public function update_info(checkinfokh $request, $id){
 
    $dv = User::Find($id);
    $dv->name = request()->get('name');
    // $dv->email = request()->get('email');
    $dv->phone = request()->get('phone');
    $dv->update();
    toast('Đã Cập Nhật Thông Tin Cá Nhân','success');
    return redirect()->back();
  }
    public function canhan_donhang(){  
      return view('FE.canhan.donhang');
  }
    public function dmk(){  
      // $td = TuyenDung::where($id)
      // ->firstOrFail();
      return view('FE.canhan.dmk');
  }
    // shopping cart & checkout:
    public function shoppingcart(){
        return view('FE.shopping_cart.index');
    }
    public function checkout(){
        return view('FE.checkout.checkout');
    }

    // contact & about us:
    public function contact(){
        return view('FE.ingredients_page.contact');
    }
    public function sendmailcontact(Request $request) {
        // $this->validate($request, [
        //     'email'=>'required|max:50',
        // ]);
        $contact_email = $request->all();
        // dd($contact_email['name']);
        if (empty($contact_email['name']) || empty($contact_email['email']) || empty($contact_email['mes'])) {
            return response()->json(['kq' => 'failed']);
        }
   
        Mail::send('FE.emails.callback_contact', array(
            'name' => $contact_email['name'],
            'email' => $contact_email['email'],
            'phone' => $contact_email['phone'],
            'msg' => $contact_email['mes'],
        ), function ($message) {
            $message->from('gfcustomer@gmail.com');
            $message->to('contactgreenfresh@gmail.com', 'Admin')->subject('CỬA HÀNG GREENFRESH');
        });
        
        // này ông viết 1 cái mới nha, quy ước trùng email thì tạo mới hay thế nào đó:
        // $regemail = new RegEmail([
        //     'email' => $request->get('email')
        // ]);
        // $saved =  $regemail->save();
        return response()->json(['kq' => 'success']);
    }


    public function aboutus(){
        return view('FE.ingredients_page.aboutUs');
    }
    

    public function menufe(){
        return view('FE.layouts.menu');
    }
 
    public function admin_credential_rules(array $data)
    {
      $messages = [
        'current-password.required' => 'Hãy nhập mật khẩu hiện tại',
        'password.required' => 'Hãy nhập mật khẩu',
      ];
    
      $validator = Validator::make($data, [
        'current-password' => 'required',
        'password' => 'required|same:password',
        'password_confirmation' => 'required|same:password',     
      ], $messages);
    
      return $validator;
    }  

    public function postCredentials(Request $request)
    {
      if(Auth::Check())
      {
        $request_data = $request->All();
        $validator = $this->admin_credential_rules($request_data);
        if($validator->fails())
        {
        //   return response()->json(array('error' => $validator->getMessageBag()->toArray()), 400);
        alert()->warning('Thất bại','Thông tin bạn vừa nhập bị sai hoặc thiếu sót, hãy kiểm tra lại !');
        return redirect()->back();
        }
        else
        {  
          $current_password = Auth::User()->password;           
          if(Hash::check($request_data['current-password'], $current_password))
          {           
            $user_id = Auth::User()->id;                       
            $obj_user = User::find($user_id);
            $obj_user->password = Hash::make($request_data['password']);
            $obj_user->save(); 
            toast('Đổi mật khẩu thành công !','success');
            return redirect()->back();
          
          }
          else
          {           
            alert()->warning('Thất bại','Có vẻ như bạn đang đăng nhập bằng tài khoản mạng xã hội, hãy đăng kí tài khoản GreenFresh và thử lại nhé !');
            return redirect()->back();
          }
        }        
      }
      else
      {
        return redirect()->to('/');
      }    
    }

    // search khi nhập
    public function searchname(Request $request)
    {
        $sanpham = SanPham::where('name_sp', 'like', '%' . $request->value . '%')->get();
      
        return response()->json($sanpham);
    }

    public function searchprice(Request $request)
    {
        $sanpham = SanPham::where('price_sp', 'like', '%' . $request->value . '%')->get();

        return response()->json($sanpham);
    }

    // search khi submit (cái này tui méo rõ ntn nữa, rảnh ông fix lại hoặc làm cho xịn hơn cũng đc)
    public function searchsubmited(Request $request)
    {
        // dd($request->all());
        $kq = DB::table('sanpham');
        if ($request->get('category') == 0) {
            $kq = $kq;
        } else {
            $kq = $kq->where('id_loaisp', $request->get('category'));
        }
        $kq = $kq->where('name_sp', 'like', '%' . $request->get('q') . '%')->orWhere('price_sp', 'like', '%' . $request->get('q') . '%')->where('Anhien',1)->orderby('id_sanpham','desc')->paginate(6);
        return view('FE.products.search_products', compact('kq'));
    }

    function changeStatusWeb(Request $request){
      //kiểm tra xem có phải ajax gửi request k
      if($request->ajax()){
          // không nhận được id thì báo lỗi
          if(!$request->id){
              return "error";
          }
  
          // hien 1 _____ an 0
          //lấy nhóm sản phảm dựa theo id và update lai trạng thái
          DB::update("update protectweb set status = '$request->status' where id = '$request->id'");
          // \App\SanPham::where('id_sanpham',$request->id)->update(['Anhien'=>$request->status]);
          // trả về status hiện tại để xử lý front end
          return $request->status;
      }
  }

  public function status_web(){
    $data = array();
    $status =  DB::select('select * from protectweb where id = 1');
    // $data[] = array($status);
    foreach ($status as $t){
      $tt['status'] = $t->status;
      $tt['code'] = $t->code;

    }
    return response()->json($tt);
  }

}
