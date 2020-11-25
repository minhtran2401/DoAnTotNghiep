<?php
namespace App\Http\ViewComposers;
use App\LoaiBlog;
use App\Blog;
use Illuminate\View\View;
use DB;
use Carbon\Carbon;
 class InfoComposer
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

       
        //info website
        $view['info'] = DB::table('info')->first();
     }
     
     // logo website
   
    
 }