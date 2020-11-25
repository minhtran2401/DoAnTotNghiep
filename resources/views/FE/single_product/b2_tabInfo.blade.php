<!-- Tab info -->
<div class="product-tabs single-layout biolife-tab-contain">
    <!-- menu tab -->
    <div class="tab-head">
        <ul class="tabs">
            <li class="tab-element active"><a href="#tab_1st" class="tab-link">Mô Tả Sản Phẩm</a>
            </li>
           
            <li class="tab-element"><a href="#tab_3rd" class="tab-link">Giao Hàng & Thanh Toán</a></li>
            <li class="tab-element"><a href="#tab_4th" class="tab-link">Đánh Giá Của Khách Hàng</a></li>
        </ul>
    </div>
    <div class="tab-content">

        <!-- Pro description -->
        <div id="tab_1st" class="tab-contain desc-tab active">
        <div class="desc">{!!$sp->motadai_sp!!}</div>
            <div class="desc-expand">
                <span class="title">Sản phẩm của GreenFresh</span>
                <ul class="list">
                    <li>100% nguyên chất</li>
                    <li>Không hóa chất, không chất bảo quản</li>
                    <li>Tất cả sản phẩm đều được kiểm định , đảm bảo vệ sinh an toàn thực phẩm</li>
                </ul>
            </div>
        </div>



        <!-- shipping and delivery -->
        <div style="z-index: 9999999" id="tab_3rd" class="tab-contain shipping-delivery-tab">
            <div class="accodition-tab biolife-accodition">
                <ul class="tabs">
                    <li class="tab-item">
                        <span class="title btn-expand">Đơn hàng từ dưới 200.000 VNĐ ?</span>
                        <div class="content">
                            <p>Khách hàng vui lòng thanh toán hoặc chuyển khoản trước.
                            GreenFresh hỗ trợ book xe giúp khách hàng. Khách hàng sẽ thanh toán chi phí riêng với đơn vị vận chuyển.</p>
                            
                        </div>
                    </li>
                    <li class="tab-item">
                        <span class="title btn-expand">Đơn hàng từ 200.000 đến dưới 500.000 VNĐ</span>
                        <div class="content">
                             <span class="title">Cách tính :</span>
                                <ul class="list">
                                    <li>Bán kính 1 km: Miễn phí.</li>
                                    <li>Bán kính 1-5km: 15.000 VNĐ.</li>
                                    <li>Bán kính 5-10km: 30.000 VN.</li>
                                    <li>Bán kính dưới 13km: 40.000 VNĐ.</li>
                                </ul>
                           
                        </div>
                    </li>
                    <li class="tab-item">
                        <span class="title btn-expand">Đơn hàng trên 500.000 VNĐ</span>
                        <div class="content">
                             <span class="title">Cách tính :</span>
                                <ul class="list">
                                    <li>Bán kính 5 km: Miễn phí.</li>
                                    <li>Bán kính 5-10km: 20.000 VNĐ.</li>
                                    <li>Bán kính dưới 13km: 30.000 VNĐ.</li>
                                    <li>Trên 13km, GreenFresh sẽ giao đến đơn vị vận chuyển được chỉ định bởi khách hàng.
                                         Khách hàng thanh toán trước giá trị đơn hàng và chi phí vận chuyển cho GreenFresh</li>
                                </ul>
                        </div>
                    </li>
                    <li class="tab-item">
                        <span class="title btn-expand">Đơn hàng trên 1.500.000 VNĐ</span>
                        <div class="content">
                             <span class="title">Cách tính :</span>
                                <ul class="list">
                                    <li>Giao hàng miễn phí trong bán kính 13km</li>
                                    <li>Giao hàng riêng không ghép đơn hàng khác.</li>
                                    <li>Thời gian giao hàng nhanh nhất.</li>
                                    <li>Ưu tiên giao hàng so với các đơn hàng khác.</li>
                                </ul>
                        </div>
                    </li>
                   
                </ul>
            </div>
        </div>

        <!-- Customer Review + FORM comment -->
        <div id="tab_4th" class="tab-contain review-tab">
            <div class="container">
            <div class="fb-comments" data-href="http://localhost/Laravel/DuAnTotNghiep/public/{{$sp->slug_sp}}" colorscheme="light" data-numposts="5" data-width="100%"></div>
                
            </div>
        </div>

    </div>
</div>