// $(document).ready(function(){
//     //get loại theo id
//     $("#findBtnn").click(function(){
//         var cat = $("#ID_sp").val();
//         var price = $('#price').val();
//         // alert(cat);
//         $.ajax({
//             type:'get',
//             dateType: 'html',
//             url: '{{url("/allprod")}}',
//             data: 'id_lsp=' + cat + '&price=' + price,
//             success:function(response){
//                 console.log(response);
//                 $("#productData").html(response);
//             }
//         });
// });
// });

$(document).ready(function(){
    $("#sort").on('change', function(){
        this.form.submit();
    });
});
