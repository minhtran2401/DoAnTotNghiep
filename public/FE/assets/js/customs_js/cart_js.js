const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    grow:'row',
    width:'250px',
    padding:'2.5rem',
    // background:'#7faf51',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    },

       
  })
// JavaScript Cart:
    function AddCart(id){
        $.ajax({
            url: 'Add-Cart/'+id,
            type: 'GET',
        }).done(function(res) {
        RenderCart(res);
            Toast.fire({
                icon: 'success',
                title: 'Đã thêm sản phẩm vào giỏ',
              })
        });
      
    }


    $("#change-item-cart").on("click", ".remove i" , function(){
        $.ajax({
            url: 'Delete-Item-Cart/'+$(this).data("id"),
            type: 'GET',
        }).done(function(res) {
            RenderCart(res);
            $("#change-item-list-cart").load('gio-hang .shopping-cart-container');
            
            Toast.fire({
                icon: 'error',
                title: 'Đã xóa sản phẩm'
              })
        });

    });
   
  function RenderCart(res){
    $("#total-quanty-show").text($("#total-quanty-cart").val());
        $("#change-item-cart").empty();
        $("#render").empty();
        $("#change-item-cart").html(res);
    
  }

  
  $(".edit-all").on("click", function(){
    console.log('clicked');

    var lists = [];
    $("table tbody tr td").each(function(){
        $(this).find("input").each(function(){
            var element = {key: $(this).data("id"), value: $(this).val()};
            lists.push(element);
        });
    });
    $.ajax({
        url: 'Save-All',
        type: 'POST',
        data:{
            "_token" : "{{ csrf_token() }}" ,
            "data" : lists
        }
    }).done(function(responsive){
        Toast.fire({
            icon: 'success',
            title: 'Đã cập nhật giỏ hàng',
          })
        location.reload();
    });
  
});