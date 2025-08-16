<section>
    <div class="container-fluid z-0 pt-5 mt-5" style="background-color: #c3c3c3">
        <div class="container">
            <div class="row flex-grow">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <h6 class="text-uppercase fw-bold fz-16">Cửa hàng</h6>
                    <ul class="p-0">
                        <li class="list-unstyled pt-2 pb-2">
                            <a href="{{ route('home.about_us') }}"
                                class="text-decoration-none text-dark fz-15 fw-normal">Về chúng tôi</a>
                        </li>
                        <li class="list-unstyled pt-2 pb-2">
                            <a href="#"
                                class="text-decoration-none text-dark fz-15 fw-normal">Sản phẩm</a>
                        </li>
                        <li class="list-unstyled pt-2 pb-2">
                            <a href="{{ route('home.contact') }}"
                                class="text-decoration-none text-dark fz-15 fw-normal">Liên hệ</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <h6 class="text-uppercase fw-bold fz-16">Hỗ trợ</h6>
                    <ul class="p-0">
                        <li class="list-unstyled pt-2 pb-2">
                            <a href="{{ route('home.faq') }}"
                                class="text-decoration-none text-dark fz-15 fw-normal">Câu hỏi thường gặp</a>
                        </li>
                        <li class="list-unstyled pt-2 pb-2">
                            <a href="{{ route('home.terms_and_conditions') }}"
                                class="text-decoration-none text-dark fz-15 fw-normal">Điều khoản & Điều kiện</a>
                        </li>
                        <li class="list-unstyled pt-2 pb-2">
                            <a href="{{ route('home.security_center') }}"
                                class="text-decoration-none text-dark fz-15 fw-normal">Chính sách bảo mật</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h6 class="text-uppercase fw-bold fz-16">Liên hệ</h6>
                    <p class="text-dark fz-15 fw-normal mb-1">Hotline: <a href="tel:{{ env('PHONE', '0123456789') }}">
                        {{ env('PHONE', '0123456789') }}</a></p>
                    <p class="text-dark fz-15 fw-normal mb-1">Email: info@beecloudy.vn</p>
                    <div class="d-flex gap-3 mt-2">
                        <a href="https://zalo.me/{{ env('PHONE', '0123456789') }}">
                            <img style="width: 40px" src="{{ asset('libaries/icon/zalo.png') }}" alt="Zalo">
                        </a>
                        <a href="{{ env('FACEBOOK', '#') }}">
                            <img style="width: 40px" src="{{ asset('libaries/icon/facebook.png') }}" alt="Facebook">
                        </a>
                        <a href="tel:{{ env('PHONE', '0123456789') }}">
                            <img style="width: 40px" src="{{ asset('libaries/icon/phone.png') }}" alt="Phone">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mt-4 border-top pt-3">
                <div class="col text-center">
                    <span class="fz-14">© 2025 BeeCloudy - Phát triển toàn diện</span>
                </div>
            </div>
        </div>
    </div>
</section>
