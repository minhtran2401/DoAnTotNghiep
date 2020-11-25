@extends('admin.layoutadmin')
@section('pagetitle', ' SẢN PHẨM ')
@section('main')
    @include('admin/sanpham/loop')
@endsection

@section('jsc')

  <script>
    
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$("#table-1").on("click", ".change-status", function(e){
// $(document).ready(function(){
    $('.change-status').change(function(e){
        // ngăn sự kiện change-status này khi click sẽ lan ra các sự kiện khác
        //thường áp dụng cho các button form hoặc thẻ link ( tag a )
          e.preventDefault();

          //lấy id nhóm sản phẩm từ thẻ td ( data-id )
          var id=$(this).parent().parent().data('id');

        
        var status=$(this).prop('checked')?1:0;
   
          //tạo biến global cho element đang click
          var change=$(this)
          var content=$(this).parent().find('.content-status')
          //nếu có id thì mới gửi ajax
          if(id){
              $.ajax({
                  //tên route có url là ....
                  url:"{{ route('changeStatus.product') }}",
                  // kiểu method nên là post
                  type:"post",

                  //truyền biến id bà status
                  data:{id:id,status:status}

                  //nếu gửi thành công
              }).done(function(result){
                //nếu k nhận dc id
                  if(result=='error'){
                      alert("Không nhận được id.");
                  let old= change.prop('checked')?false:true;
                    change.prop('checked',old)
                      //k cho chạy lệnh bên dưới nhờ return
                      return;
                  }


                  //nếu status là 1 ( hiện )
                  if(status==1){
                      change.prop('checked','checked')
                      content.text('Hiện')
                   
                      //k cho chạy lệnh bên dưới nhờ return
                      return;
                  }
                  else
                  //nếu status là 0 ( ẩn )
                     
                      change.prop('checked','')
                      content.text('Ẩn')
                    //nếu gửi thất bại
              }).fail(function(){
                  let old= change.prop('checked')?false:true;
                    change.prop('checked',old)
                  alert("Xảy ra lỗi từ phía server.");
              })
          }
      })
    })
</script>


<script>
    
  $.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$("#table-1").on("click", ".change-sale", function(e){
  $('.change-sale').change(function(e){
        e.preventDefault();
        var id=$(this).parent().parent().data('sale'); 
        var km=$(this).prop('checked')?1:0;
        var status=$(this).prop('checked')?999999:null;
        var time=$(this).prop('checked')?null:null;
        var check=$('#sale'+id);
        var content=$(this).parent().find('.content-sales')
        //nếu có id thì mới gửi ajax
        if(id){
            $.ajax({
                url:"{{ route('changeSale.product') }}",
                type:"post",
                data:{id:id,status:status,km:km}
            }).done(function(result){
                if(result=='error'){
                    alert("Không nhận được id.");
                    return;
                }
               
                if(result == 1){
                  content.text('Có')
                  check.html('<del> 999,999 đ</del>')
                    return;
                }
                  content.text('Không')
                  check.html('Không giảm giá')
            }).fail(function(){
                let old= change.prop('checked')?false:true;
                  change.prop('checked',old)
                alert("Xảy ra lỗi từ phía server.");
            })
        }
    })
  })
</script>

@endsection


