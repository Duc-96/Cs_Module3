<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li>{{__('language.Địa chỉ')}}: Đông Hà-Quảng Trị</li>
                        <li>{{__('language.Điện thoại')}}: 012.345.6789</li>
                        <li>Email: thucphamsach@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>{{__('language.Về chúng tôi')}}</h6>
                    <ul>
                        <li><a href="{{route('gioi-thieu')}}">{{__('language.Giới thiệu')}}</a></li>
                        
                    </ul>
                    <ul>
                        <li><a href="{{route('lien-he')}}">{{__('language.Liên Hệ')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>{{__('language.Đăng ký nhận thông tin')}}</h6>
                    <p>{{__('language.Nhận thông tin cập nhật qua email về dịch vụ và các ưu đãi sớm nhất')}}.</p>
                    <form action="#">
                        <input type="text" placeholder="{{__('language.Điền email')}}">
                        <button type="submit" class="site-btn">{{__('language.Gửi đi')}}</button>
                    </form>
                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Bản quyền &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> Đã đăng ký bản quyền <i class="fa fa-heart" aria-hidden="true"></i> by OGANI
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>