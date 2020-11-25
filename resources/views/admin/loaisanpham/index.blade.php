@extends('admin.layoutadmin')
@section('pagetitle', 'LOẠI SẢN PHẨM ')
@section('main')
    @include('admin/loaisanpham/loop')
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
                  url:"{{ route('changeStatus.type-product') }}",
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
                  if(result==1){
                    
                      change.prop('checked','checked')
                      content.text('Hiện')
                      //k cho chạy lệnh bên dưới nhờ return
                      return;
                  }
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

<script src="{{asset('cssBE')}}/js/sweetalert.min.js"></script>

<script>
function xoaha(event) {
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
  title: "Bạn có chắc ?",
  text: "Không thể khôi phục dữ liệu sau khi xóa",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Xóa Đi",
  cancelButtonText: "Từ Từ",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    form.submit();          // submitting the form when user press yes
  } else {
    swal("Đã hủy", " Chưa xóa gì cả :)", "error");
  }
});
}
  </script>
@endsection


