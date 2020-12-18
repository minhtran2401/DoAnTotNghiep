<?php
namespace App\Http\ViewComposers;
use App\LoaiBlog;
use App\Blog;
use Illuminate\View\View;
use DB;
use Carbon\Carbon;
use Auth;
use App\SanPham;
 class TabComposer
 {
     /**
      * Create a movie composer.
      *
      * @return void
      */
     public function __construct()
     {
       
     }

     /**
      * Bind data to the view.
      *
      * @param  View  $view
      * @return void
      */
     public function compose(View $view)
     {

        Carbon::setLocale('vi'); // hiển thị ngôn ngữ tiếng việt.
        $timenow = Carbon::now('Asia/Ho_Chi_Minh');
        $timetime = $timenow->addDays(5);
        $nownow = Carbon::now('Asia/Ho_Chi_Minh');



         // tab b.3 products trang chủ
        $view->with('tab', DB::table('nhomsp')->where('Anhien',1)->get());
        // tab b6 products sale theo time trang chủ
        $view->with('tabsaletime', DB::table('sanpham')
        ->join('loaisp','loaisp.id_loaisp','sanpham.id_loaisp')
        ->join('donvitinh','donvitinh.id_donvitinh','sanpham.id_donvitinh')
        ->where('sanpham.Anhien',1)->where('time_discount','>',$nownow)->orderby('sanpham.updated_at','desc')->get());
        
        // tab b6 products sale trang chủ
        $view->with('tabsale', DB::table('sanpham')
        ->join('loaisp','loaisp.id_loaisp','sanpham.id_loaisp')
        ->join('donvitinh','donvitinh.id_donvitinh','sanpham.id_donvitinh')
        ->where('sanpham.Anhien',1)->where('old_price_sp','!=',null)->orderby('sanpham.updated_at','desc')->get());
        // tab b7 brand trang chủ
        $view->with('tabbrand', DB::table('nhacungcap')->orderby('id_thuonghieu','asc')->get());
        

        // menu FE       
        $view->with('getgroup', DB::table('nhomsp')->where('Anhien',1)->orderby('id_nhomsp','desc')->get());

        //blog menu    
        $view['blognew'] = Blog::with('ktloaiblog')->join('loaiblog','loaiblog.id_loaiblog','blog.id_loaiblog')->where('blog.Anhien',1)->orderby('id_blog','desc')->limit(3)->get();
        $view['blognewz'] = Blog::with('ktloaiblog')->join('loaiblog','loaiblog.id_loaiblog','blog.id_loaiblog')
        ->join('users','users.id','blog.id')
        ->where('blog.Anhien',1)->orderby('id_blog','desc')->limit(10)->get();
        $view['countblogz']  = LoaiBlog::withCount('ktblog')->where('Anhien',1)->get();
        $view['bloghot'] = DB::table('blog')->where('noibat','1')->limit(5)->get();

        //tuyển dụng
        $view['tuyendung'] = DB::table('tuyendung')->where('Anhien','1')->get();

        //menu sidebar FE
        $view['menuloaisp'] = DB::table('loaisp')->get();
        $view['sidebar'] = DB::table('nhomsp')->where('Anhien',1)->get();

        // email khách hàng
        $view['product'] =DB::table('sanpham')->where('Anhien',1)->where('sp_khuyenmai','0')->orderby('id_sanpham','desc')->limit(2)->get();
        $view['productsale'] =DB::table('sanpham')->where('Anhien',1)->where('sp_khuyenmai','1')->orderby('id_sanpham','desc')->limit(2)->get();
        $view['blog'] =DB::table('blog')->where('Anhien',1)->orderby('time_blog','desc')->limit(2)->get();

        //info website
        $view['infokh'] = DB::table('donhang')->latest()->first();
        if($view['infokh']){
        $view['chitiethd'] = DB::table('chitiethd')->where('id_donhang',$view['infokh']->id_donhang)->get();
        };
        

        //menu admin || thông báo đơn hàng mới 

        $view['newbill'] = DB::table('donhang')->where('id_tinhtrang','1')->orderby('created_at','desc')->get();

        // menu admin || thông báo khi có sản phẩm gần hết hạn hoặc gần hết số lượng

       
        $view['notipro'] = DB::table('khohang')->where('khohang_soluong','<',15)->orWhere('khohang_hsd','<',$timetime,)
        ->join('sanpham','sanpham.sku','khohang.sku')
        ->get();
       
        
      // cate sản phẩm

   

        //thống kê dashboard admin
        $view['countbill'] = DB::table('donhang')->get();   
        $view['countuser'] = DB::table('users')->where('idgroup',0)->get();
        $view['countproduct'] = DB::table('sanpham')->get();
        $view['countblog'] = DB::table('blog')->get ();

        // banner trang chủ
        $view['bannerhome'] = DB::table('quangcao')->where('Anhien',1)->where('loai_quangcao','1')->get();
        $view['bannersaleoff'] = DB::table('quangcao')->where('loai_quangcao',2)
        ->where('quangcao.Anhien','1')
        ->join('sanpham','sanpham.id_sanpham','quangcao.id_sanpham')
        ->join('loaisp','sanpham.id_loaisp','loaisp.id_loaisp')
        ->orderby('quangcao.created_at','desc')
        ->get();
      
        $view['banner3'] = DB::table('quangcao')->join('sanpham','sanpham.id_sanpham','quangcao.id_sanpham')
        ->join('loaisp','sanpham.id_loaisp','loaisp.id_loaisp')->where('quangcao.Anhien',1)->first();
        
       
        $view['bannerblog'] = DB::table('quangcao')->where('quangcao.Anhien',1)
        ->join('blog','blog.id_blog','quangcao.id_blog')
        ->where('loai_quangcao','3')->first();

       // thông tin khách hàng
    //    $view['infouser'] = DB::table('users')->FirstorFail();
        if(Auth::user()){
       $view['lich_su_mua_hang'] =DB::table('donhang')->where('users.id','=',Auth::user()->id)->join('users','users.id','donhang.id')
       ->orderby('donhang.id_donhang','desc')
       ->get();
       $view['lich_su_don_hang'] =DB::table('donhang')->where('users.id','=',Auth::user()->id)->join('users','users.id','donhang.id')
       ->orderby('donhang.id_donhang','desc')
       ->paginate(5);
       
        }
         // protect website
        
      $view['nof12'] = DB::table('protectweb')->where('id',1)->first();
      $view['baotri'] = DB::table('protectweb')->where('id',2)->first();

         //session san pham vua xem
         if(session('products.recently_viewed')){
         $products = session()->get('products.recently_viewed');
         $view->with([
             'recentlyViewed' => SanPham::whereIn('id_sanpham', $products)->orderBy('created_at', 'desc')->take('7')->get(),
         ]);
        }
        else{
            $view['recentlyViewed'] = null;
        }
        
     }

   
 }