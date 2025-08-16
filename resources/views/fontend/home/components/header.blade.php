<section>
    <header>
        <div class="container-fluid text-bg-dark">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center p-2 fz-15">
                    <div>
                        <span>Chào mừng bạn đến với BeeCloudy!</span>
                    </div>
                    <div class="fw-medium d-none d-lg-block">
                        <a href="#" class="text-white">Cửa hàng</a>
                        <span class="ms-2">Hotline: <a href="tel:{{ env('PHONE', '0123456789') }}">{{ env('PHONE', '0123456789') }}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
</section>

<section>
    <header>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg shadow-sm bg-white p-0 sticky-nav">
                <div class="container p-0">
                    <a class="navbar-brand" href="{{ route('home.index') }}">
                        <img src="{{ env('LOGO', '/libaries/upload/images/logo/logo_index.png') }}" 
                             class="object-fit-contain logo-index" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="nav fw-bold align-items-center text-color">
                            <li class="px-2 py-3">
                                <a href="{{ route('home.index') }}" 
                                   class="menu-item-a text-uppercase text-decoration-none fz-16 {{ request()->routeIs('home.index') ? 'active' : '' }}">
                                   Trang chủ
                                </a>
                            </li>
                            <li class="px-2 py-3">
                                <a href="#" 
                                   class="menu-item-a text-uppercase text-decoration-none fz-16">
                                   Cửa hàng
                                </a>
                            </li>
                            <li class="px-2 py-3">
                                <a href="#" 
                                   class="menu-item-a text-uppercase text-decoration-none fz-16">
                                   Bài viết
                                </a>
                            </li>
                            <li class="px-2 py-3">
                                <a href="#" 
                                   class="menu-item-a text-uppercase text-decoration-none fz-16">
                                   Liên hệ
                                </a>
                            </li>
                            <li class="px-2 py-3">
                                <a href="#" 
                                   class="menu-item-a text-uppercase text-decoration-none fz-16">
                                   Giới thiệu
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="d-flex icon-header align-items-center">
                        <div class="icon-item">
                            <a class="acount-profile" href="{{ route('auth.login') }}">
                                <i class="fa-solid fa-user fz-20 p-3" data-bs-toggle="tooltip"
                                    data-bs-title="Đăng nhập"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</section>
