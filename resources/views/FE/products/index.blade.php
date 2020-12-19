@extends('FE.layouts.layout')

@if ( isset($type_product) && $type_product === "all-products" )
    @section('title','Sản Phẩm Mới')
    <!-- breadrum -->
    @section('breadrum')
        @include('FE.products.breadrum')
    @endsection
    @section('main')
    <div class="page-contain category-page no-sidebar">
        <div class="container">
            <div class="row">
                <!-- hot products -->
                @include('FE.products.b1_hotProducts')
                <!-- all products -->
                @include('FE.products.b1_allProducts')
            </div>
        </div>
    </div>
    @endsection
@else
    @section('title', "Danh Mục Sản Phẩm | $cate_pro->name_loaisp")
    <!-- breadrum -->
    @section('breadrum')
        @include('FE.products.breadrum')
    @endsection
    @section('main')
    <div class="page-contain category-page left-sidebar">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                @include('FE.products.leftSidebar')
                <!-- Main content -->
                <div id="main-content" class="main-content col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    @include('FE.products.b2_saleProducts')
                    @include('FE.products.b3_newProducts')
                </div>
            </div>
        </div>
    </div> 
    @endsection
    @section('js')
     <script>
        $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
 $(document).ready(function () {
var id_thuonghieu = [];
var id_loaisp = $("#cay-vl").val();
// Listen for 'change' event, so this triggers when the user clicks on the checkboxes labels
$('input[name="cat[]"]').on('change', function (e) {
    e.preventDefault();
    id_thuonghieu = []; // reset 
    $('input[name="cat[]"]:checked').each(function()
    {
        id_thuonghieu.push($(this).val());
    });
    
    $.post('{{route('locthuonghieu')}}', {id_thuonghieu: id_thuonghieu,id_loaisp: id_loaisp, _token: '{{csrf_token()}}'}, function(markup){
        
        $('#search-brand-results').html(markup);
    });            
});

});

$('#price-filter').on('submit', function (event){
    event.preventDefault();
    var form_element = this;
    var formData = new FormData(form_element);

    $.ajax({
        url: $(this).attr('action'),
        method: "post",
        dataType: 'json',
        contentType: false,
        processData: false,
        data: formData,
        success: function(response) {
            $('#render-price-button').html(response.html);
        }
    });
});  
</script>   




    @endsection
    
@endif
