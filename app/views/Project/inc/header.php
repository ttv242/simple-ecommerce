<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title_page ?></title>
    <link rel="icon" href="public/img/favicon.png">

    <link rel="stylesheet" href="public/css/bootstrap.min.css">

    <link rel="stylesheet" href="public/css/animate.css">

    <link rel="stylesheet" href="public/css/owl.carousel.min.css">

    <link rel="stylesheet" href="public/css/all.css">

    <link rel="stylesheet" href="public/css/flaticon.css">
    <link rel="stylesheet" href="public/css/themify-icons.css">

    <link rel="stylesheet" href="public/css/magnific-popup.css">

    <link rel="stylesheet" href="public/css/slick.css">

    <link rel="stylesheet" href="public/css/style.css">

</head>

<body>

    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?=_WEB_ROOT?>/?page=home"> <img src="public/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=_WEB_ROOT?>/?page=home">Trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=_WEB_ROOT?>/?page=about">Giới thiệu</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?=_WEB_ROOT?>/?page=blog" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sản phẩm
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="<?=_WEB_ROOT?>/?page=product">Tất cả sản phẩm</a>
                                        <a class="dropdown-item" href="<?=_WEB_ROOT?>/?page=singleProduct">Chi tiết sản phẩm</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?=_WEB_ROOT?>/?page=blog" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="<?=_WEB_ROOT?>/?page=login">
                                            Đăng nhập
                                        </a>
                                        <a class="dropdown-item" href="<?=_WEB_ROOT?>/?page=checkout">Thanh toán</a>
                                        <a class="dropdown-item" href="<?=_WEB_ROOT?>/?page=cart">Giỏ hàng</a>
                                        <a class="dropdown-item" href="<?=_WEB_ROOT?>/?page=confirmation">Xác nhận</a>
                                        <a class="dropdown-item" href="<?=_WEB_ROOT?>/?page=elements">elements</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?=_WEB_ROOT?>/?page=blog" id="navbarDropdown_2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tin tức
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="<?=_WEB_ROOT?>/?page=blog">Tất cả bài viết</a>
                                        <!-- <a class="dropdown-item" href="<?=_WEB_ROOT?>/?page=single.html">Chi tiết bài viết</a> -->
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=_WEB_ROOT?>/?page=contact">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a id="search_1" href="<?=_WEB_ROOT?>/?page=javascript(0)"><i class="ti-search"></i></a>
                            <a href="<?=_WEB_ROOT?>/?page=cart">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>