<?php
use Illuminate\Support\Facades\Route;
// use RealRashid\SweetAlert\Facades\Alert;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('index');
Route::get('/infosp/{id}', [App\Http\Controllers\PageController::class, 'getinfo'])->name('getinfo');
Route::get('/tat-ca-san-pham.html', [App\Http\Controllers\PageController::class, 'allprod'])->name('allprod');
Route::get('{slug}.html', [App\Http\Controllers\PageController::class, 'singleproduct'])->name('singleproduct');
Route::get('/danh-muc-san-pham/{slug_loaisp}.html', [App\Http\Controllers\PageController::class, 'cateprod'])->name('cateprod');
Route::get('bai-viet/{slug_blog}.html', [App\Http\Controllers\PageController::class, 'singleblog'])->name('singleblog');
Route::get('/danh-muc-blog/{slug_loaiblog}.html', [App\Http\Controllers\PageController::class, 'cateblog'])->name('cateblog');
Route::get('/tat-ca-blog', [App\Http\Controllers\PageController::class, 'allblog'])->name('allblog');
Route::get('/gio-hang', [App\Http\Controllers\PageController::class, 'shoppingcart'])->name('shoppingcart');
Route::get('/tuyen-dung/tin-tuyen-dung-{id}.html', [App\Http\Controllers\PageController::class, 'tuyendung'])->name('tuyendung');

//render menu giỏ hàng
Route::get('/me-nu', [App\Http\Controllers\PageController::class, 'menufe'])->name('menufe');

// thông tin khách hàng

Route::group(['middleware' => ['auth','Checklogin','verified']], function () {

Route::get('/lich-su-mua-hang', [App\Http\Controllers\PageController::class, 'canhan_donhang'])->name('canhan_donhang');
Route::get('/doi-mat-khau', [App\Http\Controllers\PageController::class, 'dmk'])->name('dmk');
Route::post('/update-info/{id}', [App\Http\Controllers\PageController::class, 'update_info'])->name('update_info');
});


// Route::get('/thanh-toan', [App\Http\Controllers\PageController::class, 'checkout'])->name('checkout')->middleware('verified');
Route::get('/thong-tin-ca-nhan', [App\Http\Controllers\PageController::class, 'canhan'])->name('canhan');
Route::get('/thanh-toan', [App\Http\Controllers\PageController::class, 'checkout'])->name('checkout');
Route::post('/thanhtoan', [App\Http\Controllers\CartController::class, 'thanhtoan'])->name('thanhtoan');

Route::get('/xemgan', [App\Http\Controllers\PageController::class, 'viewedProduct'])->name('xemgan');



// search
Route::get('/name', [App\Http\Controllers\PageController::class, 'searchname'])->name('searchname');
Route::get('/price', [App\Http\Controllers\PageController::class, 'searchprice'])->name('searchprice');
Route::get('/search-sp', [App\Http\Controllers\PageController::class, 'searchsubmited'])->name('searchsp');

// tìm kiếm và lọc sản phẩm
// Route::get('/ket-qua-sap-xep', [App\Http\Controllers\SanPhamController::class, 'indexSorting'])->name('indexSorting');
// Route::get('/ket-qua-tim-kiem', [App\Http\Controllers\SanPhamController::class, 'indexFiltering'])->name('indexFiltering');

//ajax lọc nhóm sp
Route::post('/loc-thuong-hieu', [App\Http\Controllers\PageController::class, 'searchbrand'])->name('locthuonghieu');
Route::post('/pro-filter', [App\Http\Controllers\PageController::class, 'profilter'])->name('profilter');


// ajax lọc sản phẩm theo giá ( 2 button )
// Route::get('/paginate-san-pham', [App\Http\Controllers\PageController::class, 'search2gia'])->name('search2gias');
Route::post('/loc-theo-gia/', [App\Http\Controllers\PageController::class, 'search2gia'])->name('search2gia');
// Route::get('/loc-theo-gia/*', [App\Http\Controllers\PageController::class, 'search2gia'])->name('search2gia');







Route::get('/lien-he', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');
Route::post('/phan-hoi-thong-tin-lien-he', [App\Http\Controllers\PageController::class, 'sendmailcontact'])->name('phanhoithongtinlienhe');
Route::get('/gioi-thieu', [App\Http\Controllers\PageController::class, 'aboutus'])->name('aboutus');
Route::post('/dang-ki-thong-bao', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send-email');

//
Route::get('/dang-ki', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('dang-ki');
Route::get('/dang-nhap', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('dang-nhap');
Route::get('/dang-nhap/{provider}', [App\Http\Controllers\SocialController::class, 'redirect'])->name('re-fblogin');
Route::get('/callback/{provider}', [App\Http\Controllers\SocialController::class, 'callback'])->name('fb-login');

//add to cart
Route::get('/Add-Cart/{id}',[App\Http\Controllers\CartController::class, 'AddCart'])->name('addCart');
Route::post('/Add-Cart-Detail/{id}',[App\Http\Controllers\CartController::class, 'AddCartDetail'])->name('addCartDetail');
Route::get('/Delete-Item-Cart/{id}',[App\Http\Controllers\CartController::class, 'DeleteItemCart'])->name('xoaCart');
Route::get('/Delete-Item-List-Cart/{id}',[App\Http\Controllers\CartController::class, 'DeleteListItemCart'])->name('xoaCart');
Route::get('/Save-Item-List-Cart/{id}/{quanty}',[App\Http\Controllers\CartController::class, 'SaveListItemCart'])->name('saveCart');
Route::post('/Save-All',[App\Http\Controllers\CartController::class, 'SaveAllListItemCart'])->name('saveAll');
Route::post('/Del-All',[App\Http\Controllers\CartController::class, 'DelAllListItemCart'])->name('delAll');


//mã giảm giá
Route::post('/check-coupon',[App\Http\Controllers\CartController::class, 'check_coupon'])->name('checkcoupon');
Route::get('/unset-coupon',[App\Http\Controllers\CartController::class, 'unset_coupon'])->name('unsetcoupon');

// doi mat khau
Route::post('/changePassword',[App\Http\Controllers\PageController::class, 'postCredentials'])->name('postCredentials');

//login admin

Route::get('dang-nhap-admin', [App\Http\Controllers\AuthController::class, 'getlogin'])->name('getlogin');
Route::post('dang-nhap-admin', [App\Http\Controllers\Auth\LoginController::class, 'loginadmin'])->name('loginadmin');

// khách hàng login
// Auth::routes();
Auth::routes(['verify' => true]);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



//dashboard admin , tất cả các route admin đều nằm trong này
Route::group(['middleware' => ['auth','CheckAdmin']], function () {

    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admindashboard'])->name('admindashboard');
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'admindashboard'])->name('admindashboard');
    Route::get('/email-kh', [App\Http\Controllers\AdminController::class, 'emailkh'])->name('emailkh');
    Route::post('/xoa-email/{id}', [App\Http\Controllers\AdminController::class, 'xoa_email'])->name('xoa_email');
    Route::resource('nhom-san-pham', App\Http\Controllers\NhomSanPhamController::class);
    Route::resource('loai-san-pham', App\Http\Controllers\LoaiSanPhamController::class);
    Route::resource('san-pham', App\Http\Controllers\SanPhamController::class);
    Route::resource('thuong-hieu', App\Http\Controllers\ThuongHieuController::class);
    Route::resource('donvitinh', App\Http\Controllers\DonViController::class);
    Route::resource('blog', App\Http\Controllers\BlogController::class);
    Route::resource('loai-blog', App\Http\Controllers\LoaiBlogController::class);
    Route::resource('info', App\Http\Controllers\InfoController::class);
    Route::resource('sns', App\Http\Controllers\SnsController::class);
    Route::resource('tuyendung', App\Http\Controllers\TuyenDungController::class);
    Route::resource('counpon', App\Http\Controllers\CounponController::class);
    Route::resource('quang-cao', App\Http\Controllers\QuangCaoController::class);
    Route::resource('don-hang', App\Http\Controllers\DonHangController::class);
    Route::resource('users', App\Http\Controllers\UsersController::class);
    Route::resource('nhap-kho-hang', App\Http\Controllers\KhoHangController::class);
    Route::resource('thongbao', App\Http\Controllers\ThongBaoController::class);


    //lấy loại sp theo nhóm
    Route::get('/get-type-pro/{id_nhomsp}', [App\Http\Controllers\SanPhamController::class, 'get_type_pro'])->name('get_type_pro');

    //backup-database
    Route::get('/our_backup_database', 'App\Http\Controllers\PageController@our_backup_database')->name('our_backup_database');
    Route::post('/shutdown', 'App\Http\Controllers\PageController@shutdown')->name('shutdown');
    Route::post('/start', 'App\Http\Controllers\PageController@start')->name('start');




    //thay đổi ẩn hiện
    Route::post('change-status-group-product','App\Http\Controllers\NhomSanPhamController@changeStatus')->name('changeStatus.group-product');
    Route::post('change-status-type-product','App\Http\Controllers\LoaiSanPhamController@changeStatus')->name('changeStatus.type-product');
    Route::post('change-status-product','App\Http\Controllers\SanPhamController@changeStatus')->name('changeStatus.product');
    Route::post('change-sale-product','App\Http\Controllers\SanPhamController@changeSale')->name('changeSale.product');
    Route::post('change-status-blog','App\Http\Controllers\BlogController@changeStatus')->name('changeStatus.blog');
    Route::post('change-noibat-blog','App\Http\Controllers\BlogController@changeNoiBat')->name('changenoibat.blog');
    Route::post('change-status-blog-type','App\Http\Controllers\LoaiBlogController@changeStatus')->name('changeStatus.blog-type');
    Route::post('change-status-brand','App\Http\Controllers\ThuongHieuController@changeStatus')->name('changeStatus.brand');
    Route::post('change-status-tuyendung','App\Http\Controllers\TuyenDungController@changeStatus')->name('changeStatus.tuyendung');
    Route::post('change-status-counpon','App\Http\Controllers\CounponController@changeStatus')->name('changeStatus.counpon');
    Route::post('change-status-ads','App\Http\Controllers\QuangCaoController@changeStatus')->name('changeStatus.ads');
    Route::post('change-status-kho','App\Http\Controllers\KhoHangController@changeStatus')->name('changeStatus.kho');
    Route::post('change-status-web','App\Http\Controllers\PageController@changeStatusWeb')->name('changeStatus.web');




    //check đọc tất cả thông báo
    Route::post('check-all-bill','App\Http\Controllers\DonHangController@check_all_bill')->name('check_all_bill');


    //xoa hình chi tiết ajax
    Route::post('xoahinh','App\Http\Controllers\SanPhamController@delImage')->name('delImage');


});
