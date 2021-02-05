
<div class="col-lg-3">
    <div class="hero__categories">
        <div class="hero__categories__all">
            <i class="fa fa-bars"></i>
            <span>{{__('language.Danh mục sản phẩm')}}</span>
        </div>
        <ul>
            <?php foreach ($danhmucsanpham as $key => $value) : ?>
                <li> <a href="/danh-muc/{{ $value->slug}}">{{$value->tendanhmuc}}</a> </li>
            <?php endforeach;
            ?>
        </ul>
    </div>
</div>