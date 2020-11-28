<!-- Cart Form -->
<div class="action-form">
    <div class="quantity-box">
        <span class="title">Số lượng :</span>
        <div class="qty-input">
        <form id="qtysp" action="Add-Cart-Detail/{{$sp->id_sanpham}}" method="POST">
                {{csrf_field()}}
                <input type="text" id="input-1" name="qty_sp" value="1" data-max_value="3" data-min_value="1"
                    data-step="1">
                <input id="sendqty" hidden name="sendqty" type="submit" value="send" >
                <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
        </div>
    
    </div>
    <div class="buttons">
        <a href="javascript:0"  onclick="AddCartDetail()" class="btn add-to-cart-btn">Thêm Vào Giỏ</a>
        
    </div> 
</form>
    <div class="location-shipping-to">
        <span class="title">Giao hàng đến</span>
        <select name="shipping_to" class="country">
            <option value="-1">Quận</option>
            <option value="id1">Quận 1</option>
            <option value="id2">Quận 12</option>
            <option value="id3">Quận Thủ Đức</option>
            <option value="id4">Quận 9</option>
            <option value="id5">Quận Gò Vấp</option>
            <option value="id6">Quận Bình Thạnh</option>
            <option value="id7">Quận Tân Bình</option>
            <option value="id8">Quận Tân Phú</option>
            <option value="id9">Quận Phú Nhuận</option>
            <option value="id10">Quận 2</option>
            <option value="id11">Quận 3</option>
            <option value="id12">Quận 10</option>
            <option value="id13">Quận 11</option>
            <option value="id14">Quận 4</option>
            <option value="id15">Quận 5</option>
            <option value="id16">Quận 6</option>
            <option value="id17">Quận 8</option>
            <option value="id18">Quận Bình Tân</option>
            <option value="id19">Quận 7</option>
            <option value="id20">Huyện Củ Chi</option>
            <option value="id21">Huyện Hóc Môn</option>
            <option value="id22">Huyện Bình Chánh</option>
            <option value="id23">Huyện Nhà Bè</option>
            <option value="id24">Huyện Cần Giờ</option>


        </select>
    </div>
    <div class="social-media">
        <ul class="social-list">
            <li>  <div class="fb-share-button" data-href="http://nhatminhtran.com" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fnhatminhtran.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
            </li>
            <li> <div class="zalo-share-button" data-href="" data-oaid="3409370780368281520" data-layout="1" data-color="blue" data-customize=false></div></li>
            
        </ul>
    </div>
   

   
</div>