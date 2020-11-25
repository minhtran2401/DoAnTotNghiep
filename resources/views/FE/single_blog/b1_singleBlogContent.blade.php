<!--Single Blog Content-->
<div class="single-post-contain">

    <div class="post-head">
        <div class="thumbnail">
        <figure><img src="{{ asset('') }}/imgblog/{{ $chitiet_blog->img_blog }}" width="870" height="635" alt=""></figure>
        </div>
        <h2 class="post-name">{{ $chitiet_blog->name_blog }}</h2>
        <?php $loai_blog = App\LoaiBlog::where('id_loaiblog', $chitiet_blog->id_loaiblog)->firstOrFail('name_loaiblog'); ?>
    <p class="post-archive"><b class="post-cat">{{ $loai_blog->name_loaiblog }}</b><span class="post-date"> / {{ date('d-m-Y ', strtotime($chitiet_blog->time_blog))    }}</span><span
    class="author">Người Đăng: {{$chitiet_blog->name}}</span></p>
    </div>

    <div class="post-content">
        <blockquote>
            <b>
            <?php
                echo $chitiet_blog->tomtat_blog;
            ?>
            </b>
        </blockquote>
        <p>
            <?php
                echo $chitiet_blog->noidung_blog;
            ?>
        </p>
    </div>

    <div class="post-foot">
        <div class="post-tags">
            <span class="tag-title">Tags:</span>
            <ul class="tags">
                <?php
                    $tags = $chitiet_blog->tag_blog;
                    $concac_tags = explode(",", $tags);
                ?>
                @foreach ($concac_tags as $tag)
                <li><a href="javascript:void(0)" class="tag-link">{{ $tag }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="auth-info">
            <div class="ath">
                <a href="#" class="avata"><img src="{{ asset('imguser') }}/{{$chitiet_blog->avatar}}" width="29" height="28"
                        alt="Christian Doe">{{$chitiet_blog->name}}</a>
                <span class="count-item viewer"><i class="fa fa-eye" aria-hidden="true"></i>{{$chitiet_blog->luotxem}}</span>
               
            </div>
            <div class="socials-connection">
                <span class="title">chia sẻ:</span>
                <ul class="social-list">
                    <li><a href="#" class="socail-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="socail-link"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="socail-link"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="socail-link"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="socail-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>

    </div>

</div>