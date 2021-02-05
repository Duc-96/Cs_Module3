<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> thucphamsach@gmail.com</li>
                            <li>{{__('language.Miễn phí giao hàng đơn hàng trên 100k')}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__language">
                            <img src="img/language.png" alt="">
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="{{route('ngonngu',['vi'])}}">Tiếng Việt</a></li>
                                <li><a href="{{route('ngonngu',['en'])}}">English</a></li>
                            </ul>
                        </div>
                        <div class="header__top__right__auth">
                            <a href="{{ route('dang-nhap') }}"><i class="fa fa-user"></i> {{__('language.Đăng Nhập')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="/"><img src="{{asset('img/logo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-8">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="/">{{__('language.Trang Chủ')}}</a></li>
                        <li><a href="{{route('danh-sach-san-pham')}}">{{__('language.Cửa Hàng')}}</a></li>
                        <li><a href="{{route('gioi-thieu')}}">{{__('language.Giới Thiệu')}}</a></li>
                        <li><a href="{{route('lien-he')}}">{{__('language.Liên Hệ')}}</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-1">
                <div class="header__cart">
                    <ul>
                        <li><a href="{{route('giohang.xem')}}"><i class="fa fa-shopping-bag"></i> <span>
                        @if(session('cart'))
                        {{ count(session('cart'))}}
                        @else
                        {{0}}
                        @endif
                        </span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
@if (session('success'))
<div class="alert alert-info" style="text-align: center;">{{session('success')}}</div>
@endif