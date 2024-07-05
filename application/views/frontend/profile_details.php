<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from html.hixstudio.net/shofy-prv/shofy/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2024 11:28:17 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Shofy - Multipurpose eCommerce HTML Template</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Place favicon.ico in the root directory -->
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets_front/img/logo/favicon.png">

  <!-- CSS here -->
  <link rel="stylesheet" href="<?= base_url() ?>assets_front/css/bootstrap.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets_front/css/animate.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets_front/css/swiper-bundle.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets_front/css/slick.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets_front/css/magnific-popup.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets_front/css/font-awesome-pro.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets_front/css/flaticon_shofy.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets_front/css/spacing.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets_front/css/main.css">
</head>

<body>
  <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


  <!-- pre loader area start -->
  <div id="loading">
    <div id="loading-center">
      <div id="loading-center-absolute">
        <!-- loading content here -->
        <div class="tp-preloader-content">
          <div class="tp-preloader-logo">
            <div class="tp-preloader-circle">
              <svg width="190" height="190" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle>
                <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle>
              </svg>
            </div>
            <img src="<?= base_url() ?>assets_front/img/logo/preloader/preloader-icon.svg" alt="">
          </div>
          <h3 class="tp-preloader-title">Shofy</h3>
          <p class="tp-preloader-subtitle">Loading</p>
        </div>
      </div>
    </div>
  </div>
  <!-- pre loader area end -->

  <!-- back to top start -->
  <div class="back-to-top-wrapper">
    <button id="back_to_top" type="button" class="back-to-top-btn">
      <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </button>
  </div>
  <!-- back to top end -->

  <!-- offcanvas area start -->
  <div class="offcanvas__area">
    <div class="offcanvas__wrapper">
      <div class="offcanvas__close">
        <button class="offcanvas__close-btn offcanvas-close-btn">
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
      <div class="offcanvas__content">
        <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
          <div class="offcanvas__logo logo">
            <a href="index.html">
              <img src="<?= base_url() ?>assets_front/img/logo/logo.svg" alt="logo">
            </a>
          </div>
        </div>
        <div class="offcanvas__category pb-40">
          <button class="tp-offcanvas-category-toggle">
            <i class="fa-solid fa-bars"></i>
            All Categories
          </button>
          <div class="tp-category-mobile-menu">

          </div>
        </div>
        <div class="tp-main-menu-mobile fix mb-40"></div>

        <div class="offcanvas__contact align-items-center d-none">
          <div class="offcanvas__contact-icon mr-20">
            <span>
              <img src="<?= base_url() ?>assets_front/img/icon/contact.png" alt="">
            </span>
          </div>
          <div class="offcanvas__contact-content">
            <h3 class="offcanvas__contact-title">
              <a href="tel:098-852-987">004524865</a>
            </h3>
          </div>
        </div>
        <div class="offcanvas__btn">
          <a href="contact.html" class="tp-btn-2 tp-btn-border-2">Contact Us</a>
        </div>
      </div>
      <div class="offcanvas__bottom">
        <div class="offcanvas__footer d-flex align-items-center justify-content-between">
          <div class="offcanvas__currency-wrapper currency">
            <span class="offcanvas__currency-selected-currency tp-currency-toggle" id="tp-offcanvas-currency-toggle">Currency : USD</span>
            <ul class="offcanvas__currency-list tp-currency-list">
              <li>USD</li>
              <li>ERU</li>
              <li>BDT </li>
              <li>INR</li>
            </ul>
          </div>
          <div class="offcanvas__select language">
            <div class="offcanvas__lang d-flex align-items-center justify-content-md-end">
              <div class="offcanvas__lang-img mr-15">
                <img src="<?= base_url() ?>assets_front/img/icon/language-flag.png" alt="">
              </div>
              <div class="offcanvas__lang-wrapper">
                <span class="offcanvas__lang-selected-lang tp-lang-toggle" id="tp-offcanvas-lang-toggle">English</span>
                <ul class="offcanvas__lang-list tp-lang-list">
                  <li>Spanish</li>
                  <li>Portugese</li>
                  <li>American</li>
                  <li>Canada</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="body-overlay"></div>
  <!-- offcanvas area end -->

  <!-- mobile menu area start -->
  <div id="tp-bottom-menu-sticky" class="tp-mobile-menu d-lg-none">
    <div class="container">
      <div class="row row-cols-5">
        <div class="col">
          <div class="tp-mobile-item text-center">
            <a href="shop.html" class="tp-mobile-item-btn">
              <i class="flaticon-store"></i>
              <span>Store</span>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="tp-mobile-item text-center">
            <button class="tp-mobile-item-btn tp-search-open-btn">
              <i class="flaticon-search-1"></i>
              <span>Search</span>
            </button>
          </div>
        </div>
        <div class="col">
          <div class="tp-mobile-item text-center">
            <a href="wishlist.html" class="tp-mobile-item-btn">
              <i class="flaticon-love"></i>
              <span>Wishlist</span>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="tp-mobile-item text-center">
            <a href="profile.html" class="tp-mobile-item-btn">
              <i class="flaticon-user"></i>
              <span>Account</span>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="tp-mobile-item text-center">
            <button class="tp-mobile-item-btn tp-offcanvas-open-btn">
              <i class="flaticon-menu-1"></i>
              <span>Menu</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- mobile menu area end -->

  <!-- search area start -->
  <section class="tp-search-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="tp-search-form">
            <div class="tp-search-close text-center mb-20">
              <button class="tp-search-close-btn tp-search-close-btn"></button>
            </div>
            <form action="#">
              <div class="tp-search-input mb-10">
                <input type="text" placeholder="Search for product...">
                <button type="submit"><i class="flaticon-search-1"></i></button>
              </div>
              <div class="tp-search-category">
                <span>Search by : </span>
                <a href="#">Men, </a>
                <a href="#">Women, </a>
                <a href="#">Children, </a>
                <a href="#">Shirt, </a>
                <a href="#">Demin</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- search area end -->

  <!-- cart mini area start -->
  <div class="cartmini__area">
    <div class="cartmini__wrapper d-flex justify-content-between flex-column">
      <div class="cartmini__top-wrapper">
        <div class="cartmini__top p-relative">
          <div class="cartmini__top-title">
            <h4>Shopping cart</h4>
          </div>
          <div class="cartmini__close">
            <button type="button" class="cartmini__close-btn cartmini-close-btn"><i class="fal fa-times"></i></button>
          </div>
        </div>
        <div class="cartmini__shipping">
          <p> Free Shipping for all orders over <span>$50</span></p>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" data-width="70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="cartmini__widget">
          <div class="cartmini__widget-item">
            <div class="cartmini__thumb">
              <a href="product-details.html">
                <img src="<?= base_url() ?>assets_front/img/product/product-1.jpg" alt="">
              </a>
            </div>
            <div class="cartmini__content">
              <h5 class="cartmini__title"><a href="product-details.html">Level Bolt Smart Lock</a></h5>
              <div class="cartmini__price-wrapper">
                <span class="cartmini__price">$46.00</span>
                <span class="cartmini__quantity">x2</span>
              </div>
            </div>
            <a href="#" class="cartmini__del"><i class="fa-regular fa-xmark"></i></a>
          </div>
        </div>
        <!-- for wp -->
        <!-- if no item in cart -->
        <div class="cartmini__empty text-center d-none">
          <img src="<?= base_url() ?>assets_front/img/product/cartmini/empty-cart.png" alt="">
          <p>Your Cart is empty</p>
          <a href="shop.html" class="tp-btn">Go to Shop</a>
        </div>
      </div>
      <div class="cartmini__checkout">
        <div class="cartmini__checkout-title mb-30">
          <h4>Subtotal:</h4>
          <span>$113.00</span>
        </div>
        <div class="cartmini__checkout-btn">
          <a href="cart.html" class="tp-btn mb-10 w-100"> view cart</a>
          <a href="checkout.html" class="tp-btn tp-btn-border w-100"> checkout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- cart mini area end -->

  <!-- header area start -->
  <header>
    <div class="tp-header-area tp-header-style-primary tp-header-height">
      <!-- header top start  -->
      <div class="tp-header-top-2 p-relative z-index-11 tp-header-top-border d-none d-md-block">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="tp-header-info d-flex align-items-center">
                <div class="tp-header-info-item">
                  <a href="#">
                    <span>
                      <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 0H5.81818C4.85376 0 3.92883 0.383116 3.24688 1.06507C2.56493 1.74702 2.18182 2.67194 2.18182 3.63636V5.81818H0V8.72727H2.18182V14.5455H5.09091V8.72727H7.27273L8 5.81818H5.09091V3.63636C5.09091 3.44348 5.16753 3.25849 5.30392 3.1221C5.44031 2.98571 5.6253 2.90909 5.81818 2.90909H8V0Z" fill="currentColor" />
                      </svg>
                    </span> 7500k Followers
                  </a>
                </div>
                <div class="tp-header-info-item">
                  <a href="tel:402-763-282-46">
                    <span>
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.359 2.73916C1.59079 2.35465 2.86862 0.958795 3.7792 1.00093C4.05162 1.02426 4.29244 1.1883 4.4881 1.37943H4.48885C4.93737 1.81888 6.22423 3.47735 6.29648 3.8265C6.47483 4.68282 5.45362 5.17645 5.76593 6.03954C6.56213 7.98771 7.93402 9.35948 9.88313 10.1549C10.7455 10.4679 11.2392 9.44752 12.0956 9.62511C12.4448 9.6981 14.1042 10.9841 14.5429 11.4333V11.4333C14.7333 11.6282 14.8989 11.8698 14.9214 12.1422C14.9553 13.1016 13.4728 14.3966 13.1838 14.5621C12.502 15.0505 11.6125 15.0415 10.5281 14.5373C7.50206 13.2784 2.66618 8.53401 1.38384 5.39391C0.893174 4.31561 0.860062 3.42016 1.359 2.73916Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9.84082 1.18318C12.5534 1.48434 14.6952 3.62393 15 6.3358" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9.84082 3.77927C11.1378 4.03207 12.1511 5.04544 12.4039 6.34239" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </span> +(402) 763 282 46
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="tp-header-top-right tp-header-top-black d-flex align-items-center justify-content-end">
                <div class="tp-header-top-menu d-flex align-items-center justify-content-end">
                  <div class="tp-header-top-menu-item tp-header-lang">
                    <span class="tp-header-lang-toggle" id="tp-header-lang-toggle">English</span>
                    <ul>
                      <li>
                        <a href="#">Spanish</a>
                      </li>
                      <li>
                        <a href="#">Russian</a>
                      </li>
                      <li>
                        <a href="#">Portuguese</a>
                      </li>
                    </ul>
                  </div>
                  <div class="tp-header-top-menu-item tp-header-currency">
                    <span class="tp-header-currency-toggle" id="tp-header-currency-toggle">USD</span>
                    <ul>
                      <li>
                        <a href="#">EUR</a>
                      </li>
                      <li>
                        <a href="#">CHF</a>
                      </li>
                      <li>
                        <a href="#">GBP</a>
                      </li>
                      <li>
                        <a href="#">KWD</a>
                      </li>
                    </ul>
                  </div>
                  <div class="tp-header-top-menu-item tp-header-setting">
                    <span class="tp-header-setting-toggle" id="tp-header-setting-toggle">Setting</span>
                    <ul>
                      <li>
                        <a href="profile.html">My Profile</a>
                      </li>
                      <li>
                        <a href="wishlist.html">Wishlist</a>
                      </li>
                      <li>
                        <a href="cart.html">Cart</a>
                      </li>
                      <li>
                        <a href="login.html">Logout</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- header bottom start -->
      <div id="header-sticky" class="tp-header-bottom-2 tp-header-sticky">
        <div class="container">
          <div class="tp-mega-menu-wrapper p-relative">
            <div class="row align-items-center">
              <div class="col-xl-2 col-lg-5 col-md-5 col-sm-4 col-6">
                <div class="logo">
                  <a href="index.html">
                    <img src="<?= base_url() ?>assets_front/img/logo/logo.svg" alt="logo">
                  </a>
                </div>
              </div>
              <div class="col-xl-5 d-none d-xl-block">
                <div class="main-menu menu-style-2">
                  <nav class="tp-main-menu-content">
                    <ul>
                      <!-- <li class="has-dropdown has-mega-menu">
                        <a href="index.html">Home</a>
                        <div class="home-menu tp-submenu tp-mega-menu">
                          <div class="row row-cols-1 row-cols-lg-4 row-cols-xl-5">
                            <div class="col">
                              <div class="home-menu-item ">
                                <a href="index.html">
                                  <div class="home-menu-thumb p-relative fix">
                                    <img src="<?= base_url() ?>assets_front/img/menu/menu-home-1.jpg" alt="">
                                  </div>
                                  <div class="home-menu-content">
                                    <h5 class="home-menu-title">Electronics </h5>
                                  </div>
                                </a>
                              </div>
                            </div>
                            <div class="col">
                              <div class="home-menu-item ">
                                <a href="index-2.html">
                                  <div class="home-menu-thumb p-relative fix">
                                    <img src="<?= base_url() ?>assets_front/img/menu/menu-home-2.jpg" alt="">
                                  </div>
                                  <div class="home-menu-content">
                                    <h5 class="home-menu-title">Fashion</h5>
                                  </div>
                                </a>
                              </div>
                            </div>
                            <div class="col">
                              <div class="home-menu-item ">
                                <a href="index-3.html">
                                  <div class="home-menu-thumb p-relative fix">
                                    <img src="<?= base_url() ?>assets_front/img/menu/menu-home-3.jpg" alt="">
                                  </div>
                                  <div class="home-menu-content">
                                    <h5 class="home-menu-title">Beauty</h5>
                                  </div>
                                </a>
                              </div>
                            </div>
                            <div class="col">
                              <div class="home-menu-item ">
                                <a href="index-4.html">
                                  <div class="home-menu-thumb p-relative fix">
                                    <img src="<?= base_url() ?>assets_front/img/menu/menu-home-4.jpg" alt="">
                                  </div>
                                  <div class="home-menu-content">
                                    <h5 class="home-menu-title">Jewelry </h5>
                                  </div>
                                </a>
                              </div>
                            </div>
                            <div class="col">
                              <div class="home-menu-item ">
                                <a href="index-5.html">
                                  <div class="home-menu-thumb p-relative fix">
                                    <img src="<?= base_url() ?>assets_front/img/menu/menu-home-5.jpg" alt="">
                                  </div>
                                  <div class="home-menu-content">
                                    <h5 class="home-menu-title">Grocery</h5>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li> -->
                      <li><a href="coupon.html">Home</a></li>
                      <li><a href="coupon.html">About</a></li>
                      <li><a href="coupon.html">Products</a></li>
                      <li><a href="contact.html">Contact</a></li>
                    </ul>
                  </nav>
                </div>
                <div class="tp-category-menu-wrapper d-none">
                  <nav class="tp-category-menu-content">
                    <ul>
                      <li>
                        <a href="shop.html">
                          <span>
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M5.90532 14.8316V12.5719C5.9053 11.9971 6.37388 11.5301 6.95443 11.5262H9.08101C9.66434 11.5262 10.1372 11.9944 10.1372 12.5719V12.5719V14.8386C10.1371 15.3266 10.5305 15.7254 11.0233 15.7368H12.441C13.8543 15.7368 15 14.6026 15 13.2035V13.2035V6.77525C14.9925 6.22482 14.7314 5.70794 14.2911 5.37171L9.44253 1.50496C8.59311 0.83168 7.38562 0.83168 6.5362 1.50496L1.70886 5.37873C1.26693 5.7136 1.00544 6.23133 1 6.78227V13.2035C1 14.6026 2.1457 15.7368 3.55899 15.7368H4.97671C5.48173 15.7368 5.89114 15.3315 5.89114 14.8316V14.8316" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </span>
                          New Arrivals</a>
                      </li>
                      <li class="has-dropdown">
                        <a href="shop.html" class="has-mega-menu">
                          <span>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.6856 4.54975C2.6856 3.52014 3.51984 2.6859 4.54945 2.68508H5.3977C5.88984 2.68508 6.36136 2.48971 6.71089 2.14348L7.30359 1.54995C8.02984 0.819578 9.21031 0.816281 9.94068 1.54253L9.9415 1.54336L9.94892 1.54995L10.5425 2.14348C10.892 2.49053 11.3635 2.68508 11.8556 2.68508H12.7031C13.7327 2.68508 14.5677 3.51932 14.5677 4.54975V5.39636C14.5677 5.88849 14.7623 6.36084 15.1093 6.71037L15.7029 7.3039C16.4332 8.03015 16.4374 9.21061 15.7111 9.94098L15.7103 9.94181L15.7029 9.94923L15.1093 10.5428C14.7623 10.8915 14.5677 11.363 14.5677 11.8551V12.7034C14.5677 13.733 13.7335 14.5672 12.7039 14.5672H12.7031H11.854C11.3619 14.5672 10.8895 14.7626 10.5408 15.1096L9.94727 15.7024C9.22185 16.4327 8.04221 16.4368 7.31183 15.7122C7.31101 15.7114 7.31019 15.7106 7.30936 15.7098L7.30194 15.7024L6.70924 15.1096C6.36054 14.7626 5.88819 14.568 5.39605 14.5672H4.54945C3.51984 14.5672 2.6856 13.733 2.6856 12.7034V11.8535C2.6856 11.3613 2.49023 10.8898 2.14318 10.5411L1.55047 9.94758C0.820097 9.22215 0.815976 8.04251 1.5414 7.31214C1.5414 7.31132 1.54223 7.31049 1.54305 7.30967L1.55047 7.30225L2.14318 6.70872C2.49023 6.35919 2.6856 5.88767 2.6856 5.39471V4.54975" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M6.50787 10.7453L10.745 6.50812" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M10.6823 10.6862H10.6897" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M6.56053 6.56446H6.56795" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </span>
                          Electronics</a>

                        <ul class="mega-menu tp-submenu">
                          <li>
                            <a href="shop.html" class="mega-menu-title">Featured</a>
                            <ul>
                              <li>
                                <a href="shop.html"><img src="<?= base_url() ?>assets_front/img/header/menu/menu-1.jpg" alt=""></a>
                              </li>
                              <li>
                                <a href="shop.html">New Arrivals</a>
                              </li>
                              <li>
                                <a href="shop.html">Best Seller</a>
                              </li>
                              <li>
                                <a href="shop.html">Top Rated</a>
                              </li>
                            </ul>
                          </li>

                          <li>
                            <a href="shop.html" class="mega-menu-title">Computer & Laptops</a>
                            <ul>
                              <li>
                                <a href="shop.html"><img src="<?= base_url() ?>assets_front/img/header/menu/menu-2.jpg" alt=""></a>
                              </li>
                              <li>
                                <a href="shop.html">Top Brands</a>
                              </li>
                              <li>
                                <a href="shop.html">Weekly Best Selling</a>
                              </li>
                              <li>
                                <a href="shop.html">Most Viewed</a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="shop.html" class="mega-menu-title">Accessories</a>
                            <ul>
                              <li>
                                <a href="shop.html"><img src="<?= base_url() ?>assets_front/img/header/menu/menu-3.jpg" alt=""></a>
                              </li>
                              <li>
                                <a href="shop.html">Headphones</a>
                              </li>
                              <li>
                                <a href="shop.html">TWS Earphone</a>
                              </li>
                              <li>
                                <a href="shop.html">Gaming Headset</a>
                              </li>
                            </ul>
                          </li>

                        </ul>
                      </li>
                      <li>
                        <a href="shop.html">
                          <span>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.5 8.5V16H2.50003V8.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M16 4.75H1V8.5H16V4.75Z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M8.5 16V4.75" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M8.49997 4.75H5.12497C4.62769 4.75 4.15077 4.55246 3.79914 4.20083C3.44751 3.84919 3.24997 3.37228 3.24997 2.875C3.24997 2.37772 3.44751 1.90081 3.79914 1.54917C4.15077 1.19754 4.62769 1 5.12497 1C7.74997 1 8.49997 4.75 8.49997 4.75Z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M8.5 4.75H11.875C12.3723 4.75 12.8492 4.55246 13.2008 4.20083C13.5525 3.84919 13.75 3.37228 13.75 2.875C13.75 2.37772 13.5525 1.90081 13.2008 1.54917C12.8492 1.19754 12.3723 1 11.875 1C9.25 1 8.5 4.75 8.5 4.75Z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </span>
                          Gifts</a>
                      </li>
                      <li class="has-dropdown">
                        <a href="shop.html">
                          <span>
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.5 1H2.5C1.67157 1 1 1.67157 1 2.5V10C1 10.8284 1.67157 11.5 2.5 11.5H14.5C15.3284 11.5 16 10.8284 16 10V2.5C16 1.67157 15.3284 1 14.5 1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M5.5 14.5H11.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M8.5 11.5V14.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </span>
                          Computers</a>

                        <ul class="tp-submenu">
                          <li class="has-dropdown">
                            <a href="shop.html">Desktop</a>
                            <ul class="tp-submenu">
                              <li><a href="shop.html">Gaming</a></li>
                              <li><a href="shop.html">WorkSpace</a></li>
                              <li><a href="shop.html">Customize</a></li>
                              <li><a href="shop.html">Luxury</a></li>
                            </ul>
                          </li>
                          <li><a href="shop.html">Laptop</a></li>
                          <li><a href="shop.html">Console</a></li>
                          <li><a href="shop.html">Top Rated</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="shop.html">
                          <span>
                            <svg width="15" height="18" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12.375 1H2.625C1.72754 1 1 1.72754 1 2.625V15.625C1 16.5225 1.72754 17.25 2.625 17.25H12.375C13.2725 17.25 14 16.5225 14 15.625V2.625C14 1.72754 13.2725 1 12.375 1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M7.5 14H7.50875" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </span>
                          Smartphones & Tablets</a>
                      </li>
                      <li>
                        <a href="shop.html">
                          <span>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M9 1C13.4176 1 17 4.5816 17 9C17 13.4184 13.4176 17 9 17C4.5816 17 1 13.4184 1 9C1 4.5816 4.5816 1 9 1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5263 8.99592C11.5263 8.31286 8.02529 6.12769 7.62814 6.5206C7.23099 6.9135 7.19281 11.0413 7.62814 11.4712C8.06348 11.9027 11.5263 9.67898 11.5263 8.99592Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </span>
                          TV, Video & Musice</a>
                      </li>
                      <li>
                        <a href="shop.html">
                          <span>
                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6292 1.26076C12.5027 1.60843 12.7699 2.81924 13.1271 3.20843C13.4843 3.59762 13.9955 3.72995 14.2783 3.72995C15.7814 3.72995 17 4.94854 17 6.45081V11.4627C17 13.4778 15.3654 15.1124 13.3503 15.1124H4.64973C2.63373 15.1124 1 13.4778 1 11.4627V6.45081C1 4.94854 2.21859 3.72995 3.72173 3.72995C4.00368 3.72995 4.51481 3.59762 4.87287 3.20843C5.23005 2.81924 5.49643 1.60843 6.36995 1.26076C7.24432 0.913081 10.7557 0.913081 11.6292 1.26076Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M13.7527 5.97314H13.7605" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7491 9.11086C11.7491 7.59215 10.5184 6.36145 8.99974 6.36145C7.48104 6.36145 6.25034 7.59215 6.25034 9.11086C6.25034 10.6296 7.48104 11.8603 8.99974 11.8603C10.5184 11.8603 11.7491 10.6296 11.7491 9.11086Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </span>
                          Cameras</a>
                      </li>
                      <li>
                        <a href="shop.html">
                          <span>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M2.30431 1C1.58423 1 1 1.59405 1 2.32534V3.10537C1 3.64706 1.20599 4.16798 1.57446 4.55981L5.61258 8.8536L5.61436 8.8509C6.39393 9.64899 6.83254 10.7279 6.83254 11.8528V15.6626C6.83254 15.9172 7.09891 16.0798 7.32 15.9597L9.61963 14.7066C9.96679 14.517 10.1834 14.1486 10.1834 13.7487V11.8428C10.1834 10.7242 10.6158 9.64989 11.3883 8.8536L15.4264 4.55981C15.794 4.16798 16 3.64706 16 3.10537V2.32534C16 1.59405 15.4167 1 14.6966 1H2.30431Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </span>
                          Cooking</a>
                      </li>
                      <li>
                        <a href="shop.html">
                          <span>
                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M15.7462 7.16473V13.167C15.7462 13.6457 15.556 14.1049 15.2175 14.4434C14.8789 14.782 14.4197 14.9722 13.941 14.9722H4.3058C3.82703 14.9722 3.3679 14.782 3.02936 14.4434C2.69083 14.1049 2.50061 13.6457 2.50061 13.167V9.36255" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M3.46186 1.00001C3.18176 0.999863 2.90854 1.08659 2.6798 1.24825C2.45106 1.4099 2.27807 1.63852 2.18471 1.9026L1.11062 5.01655C0.713475 6.15382 1.41752 7.16021 2.71274 7.16021C3.18296 7.14863 3.64325 7.02257 4.05374 6.79294C4.46424 6.56331 4.81255 6.23705 5.0685 5.84243C5.20151 6.24071 5.46067 6.58479 5.80676 6.82258C6.15285 7.06036 6.56702 7.17889 6.98651 7.16021C7.18566 6.7642 7.4909 6.43132 7.86823 6.19871C8.24556 5.96611 8.68013 5.84294 9.1234 5.84294C9.56666 5.84294 10.0012 5.96611 10.3785 6.19871C10.7558 6.43132 11.0611 6.7642 11.2603 7.16021V7.16021C11.679 7.17789 12.0922 7.0589 12.4373 6.82119C12.7825 6.58348 13.041 6.23994 13.1738 5.84243C13.431 6.23686 13.7802 6.56288 14.1914 6.79243C14.6026 7.02199 15.0633 7.1482 15.5341 7.16021C16.8293 7.16021 17.5288 6.15382 17.1362 5.01655L16.0621 1.9026C15.9685 1.6378 15.7948 1.40866 15.5652 1.24694C15.3355 1.08522 15.0613 0.998927 14.7804 1.00001H3.46186Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M11.0707 14.9722H7.19861V11.4701C7.19861 10.983 7.3921 10.5158 7.73656 10.1713C8.08102 9.82685 8.54822 9.63333 9.03536 9.63333H9.22041C9.70755 9.63333 10.1747 9.82685 10.5192 10.1713C10.8637 10.5158 11.0572 10.983 11.0572 11.4701L11.0707 14.9722Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </span>
                          Accessories</a>
                      </li>
                      <li>
                        <a href="shop.html">
                          <span>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M6.92384 11.3525C10.1178 11.3525 12.8477 11.8365 12.8477 13.7698C12.8477 15.7032 10.136 16.201 6.92384 16.201C3.72902 16.201 1 15.7213 1 13.7871C1 11.8529 3.71084 11.3525 6.92384 11.3525Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M6.92383 8.59311C4.82685 8.59311 3.1264 6.89354 3.1264 4.79656C3.1264 2.69958 4.82685 1 6.92383 1C9.01994 1 10.7204 2.69958 10.7204 4.79656C10.7282 6.88575 9.03986 8.58532 6.95067 8.59311H6.92383Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M12.8906 7.60761C14.2768 7.41281 15.3443 6.22319 15.3469 4.78336C15.3469 3.3643 14.3123 2.18681 12.9556 1.96429" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M14.7195 10.9416C16.0623 11.1416 17 11.6126 17 12.5823C17 13.2498 16.5584 13.6827 15.845 13.9537" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </span>
                          Sports</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8 col-6">
                <div class="tp-header-bottom-right d-flex align-items-center justify-content-end pl-30">
                  <div class="tp-header-search-2 d-none d-sm-block">
                    <form action="#">
                      <input type="text" placeholder="Search for Products...">
                      <button type="submit">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M18.9999 19L14.6499 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </button>
                    </form>
                  </div>
                  <div class="tp-header-action d-flex align-items-center ml-30">
                    <div class="tp-header-action-item d-none d-lg-block">
                      <a href="compare.html" class="tp-header-action-btn">
                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M14.8396 17.3319V3.71411" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M19.1556 13L15.0778 17.0967L11 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M4.91115 1.00056V14.6183" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M0.833496 5.09667L4.91127 1L8.98905 5.09667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </a>
                    </div>
                    <div class="tp-header-action-item d-none d-lg-block">
                      <a href="wishlist.html" class="tp-header-action-btn">
                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M11.239 18.8538C13.4096 17.5179 15.4289 15.9456 17.2607 14.1652C18.5486 12.8829 19.529 11.3198 20.1269 9.59539C21.2029 6.25031 19.9461 2.42083 16.4289 1.28752C14.5804 0.692435 12.5616 1.03255 11.0039 2.20148C9.44567 1.03398 7.42754 0.693978 5.57894 1.28752C2.06175 2.42083 0.795919 6.25031 1.87187 9.59539C2.46978 11.3198 3.45021 12.8829 4.73806 14.1652C6.56988 15.9456 8.58917 17.5179 10.7598 18.8538L10.9949 19L11.239 18.8538Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M7.26062 5.05302C6.19531 5.39332 5.43839 6.34973 5.3438 7.47501" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="tp-header-action-badge">4</span>
                      </a>
                    </div>
                    <div class="tp-header-action-item">
                      <button class="tp-header-action-btn cartmini-open-btn">
                        <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.48626 20.5H14.8341C17.9004 20.5 20.2528 19.3924 19.5847 14.9348L18.8066 8.89359C18.3947 6.66934 16.976 5.81808 15.7311 5.81808H5.55262C4.28946 5.81808 2.95308 6.73341 2.4771 8.89359L1.69907 14.9348C1.13157 18.889 3.4199 20.5 6.48626 20.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M6.34902 5.5984C6.34902 3.21232 8.28331 1.27803 10.6694 1.27803V1.27803C11.8184 1.27316 12.922 1.72619 13.7362 2.53695C14.5504 3.3477 15.0081 4.44939 15.0081 5.5984V5.5984" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M7.70365 10.1018H7.74942" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M13.5343 10.1018H13.5801" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="tp-header-action-badge">13</span>
                      </button>
                    </div>
                    <div class="tp-header-action-item tp-header-hamburger mr-20 d-xl-none">
                      <button type="button" class="tp-offcanvas-open-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                          <rect x="10" width="20" height="2" fill="currentColor" />
                          <rect x="5" y="7" width="25" height="2" fill="currentColor" />
                          <rect x="10" y="14" width="20" height="2" fill="currentColor" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header area end -->

  <main>

    <!-- breadcrumb area start -->
    <section class="breadcrumb__area breadcrumb__style-2 include-bg pt-50 pb-20">
      <div class="container">
        <div class="row">
          <div class="col-xxl-12">
            <div class="breadcrumb__content p-relative z-index-1">
              <div class="breadcrumb__list has-icon">
                <span class="breadcrumb-icon">
                  <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.42393 16H15.5759C15.6884 16 15.7962 15.9584 15.8758 15.8844C15.9553 15.8104 16 15.71 16 15.6054V6.29143C16 6.22989 15.9846 6.1692 15.9549 6.11422C15.9252 6.05923 15.8821 6.01147 15.829 5.97475L8.75305 1.07803C8.67992 1.02736 8.59118 1 8.5 1C8.40882 1 8.32008 1.02736 8.24695 1.07803L1.17098 5.97587C1.11791 6.01259 1.0748 6.06035 1.04511 6.11534C1.01543 6.17033 0.999976 6.23101 1 6.29255V15.6063C1.00027 15.7108 1.04504 15.8109 1.12451 15.8847C1.20398 15.9585 1.31165 16 1.42393 16ZM10.1464 15.2107H6.85241V10.6202H10.1464V15.2107ZM1.84866 6.48977L8.4999 1.88561L15.1517 6.48977V15.2107H10.9946V10.2256C10.9946 10.1209 10.95 10.0206 10.8704 9.94654C10.7909 9.87254 10.683 9.83096 10.5705 9.83096H6.42848C6.316 9.83096 6.20812 9.87254 6.12858 9.94654C6.04904 10.0206 6.00435 10.1209 6.00435 10.2256V15.2107H1.84806L1.84866 6.48977Z" fill="#55585B" stroke="#55585B" stroke-width="0.5" />
                  </svg>
                </span>
                <span><a href="#">Home</a></span>
                <!-- <span><a href="#">Electronics</a></span>
                <span><a href="#">Computers & Tablets</a></span> -->
                <span><?= $get_product->product_name ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- product details area start -->
    <section class="tp-product-details-area">
      <div class="tp-product-details-top pb-115">
        <div class="container">
          <div class="row">
            <div class="col-xl-7 col-lg-6">
              <div class="tp-product-details-thumb-wrapper tp-tab d-sm-flex">
                <!-- <nav>
                  <div class="nav nav-tabs flex-sm-column " id="productDetailsNavThumb" role="tablist">
                    <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="true">
                      <img src="<?= base_url() ?>assets_front/img/product/details/nav/product-details-nav-1.jpg" alt="">
                    </button>
                    <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2" aria-selected="false">
                      <img src="<?= base_url() ?>assets_front/img/product/details/nav/product-details-nav-2.jpg" alt="">
                    </button>
                    <button class="nav-link" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3" type="button" role="tab" aria-controls="nav-3" aria-selected="false">
                      <img src="<?= base_url() ?>assets_front/img/product/details/nav/product-details-nav-3.jpg" alt="">
                    </button>
                    <button class="nav-link" id="nav-4-tab" data-bs-toggle="tab" data-bs-target="#nav-4" type="button" role="tab" aria-controls="nav-4" aria-selected="false">
                      <img src="<?= base_url() ?>assets_front/img/product/details/nav/product-details-nav-4.jpg" alt="">
                    </button>
                    <button class="nav-link" id="nav-5-tab" data-bs-toggle="tab" data-bs-target="#nav-5" type="button" role="tab" aria-controls="nav-5" aria-selected="false">
                      <img src="<?= base_url() ?>assets_front/img/product/details/nav/product-details-nav-5.jpg" alt="">
                    </button>
                  </div>
                </nav> -->
                <div class="tab-content m-img" id="productDetailsNavContent">
                  <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab" tabindex="0">
                    <div class="tp-product-details-nav-main-thumb">
                      <img src="<?= base_url("uploads/").$get_product->prod_main_image?>" alt="">
                    </div>
                  </div>
                  <!-- <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab" tabindex="0">
                    <div class="tp-product-details-nav-main-thumb">
                      <img src="<?= base_url() ?>assets_front/img/product/details/main/product-details-main-2.jpg" alt="">
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab" tabindex="0">
                    <div class="tp-product-details-nav-main-thumb">
                      <img src="<?= base_url() ?>assets_front/img/product/details/main/product-details-main-3.jpg" alt="">
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab" tabindex="0">
                    <div class="tp-product-details-nav-main-thumb">
                      <img src="<?= base_url() ?>assets_front/img/product/details/main/product-details-main-4.jpg" alt="">
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav-5-tab" tabindex="0">
                    <div class="tp-product-details-nav-main-thumb">
                      <img src="<?= base_url() ?>assets_front/img/product/details/main/product-details-main-5.jpg" alt="">
                    </div>
                  </div> -->
                </div>
              </div>
            </div> <!-- col end -->
            <div class="col-xl-5 col-lg-6">
              <div class="tp-product-details-wrapper">
                <div class="tp-product-details-category">
                  <span><?= $this->Home_model->category_name($get_product->category) ?></span>
                </div>
                <h3 class="tp-product-details-title"><?= $get_product->product_name ?></h3>

                <!-- inventory details -->
                <div class="tp-product-details-inventory d-flex align-items-center mb-10">
                  <div class="tp-product-details-stock mb-10">
                    <?php if ($get_product->stock > 0) { ?>
                      <span>In Stock</span>
                    <?php } else { ?>
                      <span>Out Of Stock</span>
                    <?php } ?>

                  </div>
                  <!-- <div class="tp-product-details-rating-wrapper d-flex align-items-center mb-10">
                    <div class="tp-product-details-rating">
                      <span><i class="fa-solid fa-star"></i></span>
                      <span><i class="fa-solid fa-star"></i></span>
                      <span><i class="fa-solid fa-star"></i></span>
                      <span><i class="fa-solid fa-star"></i></span>
                      <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="tp-product-details-reviews">
                      <span>(36 Reviews)</span>
                    </div>
                  </div> -->
                </div>
                <p><?= $get_product->highlights ?></p>

                <!-- price -->
                <div class="tp-product-details-price-wrapper mb-20">
                  <span class="tp-product-details-price old-price">Rs.<?= number_format($get_product->mrp, 2) ?></span>
                  <span class="tp-product-details-price new-price">Rs.<?= number_format($get_product->selling_price, 2) ?></span>
                </div>

                <!-- variations -->


                <!-- actions -->
                <div class="tp-product-details-action-wrapper">
                  <h3 class="tp-product-details-action-title">Quantity</h3>
                  <div class="tp-product-details-action-item-wrapper d-flex align-items-center">
                    <div class="tp-product-details-quantity">
                      <div class="tp-product-quantity mb-15 mr-15">
                        <span class="tp-cart-minus">
                          <svg width="11" height="2" viewBox="0 0 11 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </span>
                        <input class="tp-cart-input" type="text" value="1">
                        <span class="tp-cart-plus">
                          <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 6H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5.5 10.5V1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </span>
                      </div>
                    </div>
                    <div class="tp-product-details-add-to-cart mb-15 w-100">
                      <button class="tp-product-details-buy-now-btn w-100">Add To Cart</button>
                    </div>
                  </div>
                  <!-- <button class="tp-product-details-buy-now-btn w-100">Buy Now</button> -->
                </div>
                <div class="tp-product-details-action-sm">
                  <!-- <button type="button" class="tp-product-details-action-sm-btn">
                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 3.16431H10.8622C12.0451 3.16431 12.9999 4.08839 12.9999 5.23315V7.52268" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M3.25177 0.985168L1 3.16433L3.25177 5.34354" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M12.9999 12.5983H3.13775C1.95486 12.5983 1 11.6742 1 10.5295V8.23993" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M10.748 14.7774L12.9998 12.5983L10.748 10.4191" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Compare
                  </button> -->
                  <button type="button" class="tp-product-details-action-sm-btn">
                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M2.33541 7.54172C3.36263 10.6766 7.42094 13.2113 8.49945 13.8387C9.58162 13.2048 13.6692 10.6421 14.6635 7.5446C15.3163 5.54239 14.7104 3.00621 12.3028 2.24514C11.1364 1.8779 9.77578 2.1014 8.83648 2.81432C8.64012 2.96237 8.36757 2.96524 8.16974 2.81863C7.17476 2.08487 5.87499 1.86999 4.69024 2.24514C2.28632 3.00549 1.68259 5.54167 2.33541 7.54172ZM8.50115 15C8.4103 15 8.32018 14.9784 8.23812 14.9346C8.00879 14.8117 2.60674 11.891 1.29011 7.87081C1.28938 7.87081 1.28938 7.8701 1.28938 7.8701C0.462913 5.33895 1.38316 2.15812 4.35418 1.21882C5.7492 0.776121 7.26952 0.97088 8.49895 1.73195C9.69029 0.993159 11.2729 0.789057 12.6401 1.21882C15.614 2.15956 16.5372 5.33966 15.7115 7.8701C14.4373 11.8443 8.99571 14.8088 8.76492 14.9332C8.68286 14.9777 8.592 15 8.50115 15Z" fill="currentColor" />
                      <path d="M8.49945 13.8387L8.42402 13.9683L8.49971 14.0124L8.57526 13.9681L8.49945 13.8387ZM14.6635 7.5446L14.5209 7.4981L14.5207 7.49875L14.6635 7.5446ZM12.3028 2.24514L12.348 2.10211L12.3478 2.10206L12.3028 2.24514ZM8.83648 2.81432L8.92678 2.93409L8.92717 2.9338L8.83648 2.81432ZM8.16974 2.81863L8.25906 2.69812L8.25877 2.69791L8.16974 2.81863ZM4.69024 2.24514L4.73548 2.38815L4.73552 2.38814L4.69024 2.24514ZM8.23812 14.9346L8.16727 15.0668L8.16744 15.0669L8.23812 14.9346ZM1.29011 7.87081L1.43266 7.82413L1.39882 7.72081H1.29011V7.87081ZM1.28938 7.8701L1.43938 7.87009L1.43938 7.84623L1.43197 7.82354L1.28938 7.8701ZM4.35418 1.21882L4.3994 1.36184L4.39955 1.36179L4.35418 1.21882ZM8.49895 1.73195L8.42 1.85949L8.49902 1.90841L8.57801 1.85943L8.49895 1.73195ZM12.6401 1.21882L12.6853 1.0758L12.685 1.07572L12.6401 1.21882ZM15.7115 7.8701L15.5689 7.82356L15.5686 7.8243L15.7115 7.8701ZM8.76492 14.9332L8.69378 14.8011L8.69334 14.8013L8.76492 14.9332ZM2.19287 7.58843C2.71935 9.19514 4.01596 10.6345 5.30013 11.744C6.58766 12.8564 7.88057 13.6522 8.42402 13.9683L8.57487 13.709C8.03982 13.3978 6.76432 12.6125 5.49626 11.517C4.22484 10.4185 2.97868 9.02313 2.47795 7.49501L2.19287 7.58843ZM8.57526 13.9681C9.12037 13.6488 10.4214 12.8444 11.7125 11.729C12.9999 10.6167 14.2963 9.17932 14.8063 7.59044L14.5207 7.49875C14.0364 9.00733 12.7919 10.4 11.5164 11.502C10.2446 12.6008 8.9607 13.3947 8.42364 13.7093L8.57526 13.9681ZM14.8061 7.59109C15.1419 6.5613 15.1554 5.39131 14.7711 4.37633C14.3853 3.35729 13.5989 2.49754 12.348 2.10211L12.2576 2.38816C13.4143 2.75381 14.1347 3.54267 14.4905 4.48255C14.8479 5.42648 14.8379 6.52568 14.5209 7.4981L14.8061 7.59109ZM12.3478 2.10206C11.137 1.72085 9.72549 1.95125 8.7458 2.69484L8.92717 2.9338C9.82606 2.25155 11.1357 2.03494 12.2577 2.38821L12.3478 2.10206ZM8.74618 2.69455C8.60221 2.8031 8.40275 2.80462 8.25906 2.69812L8.08043 2.93915C8.33238 3.12587 8.67804 3.12163 8.92678 2.93409L8.74618 2.69455ZM8.25877 2.69791C7.225 1.93554 5.87527 1.71256 4.64496 2.10213L4.73552 2.38814C5.87471 2.02742 7.12452 2.2342 8.08071 2.93936L8.25877 2.69791ZM4.64501 2.10212C3.39586 2.49722 2.61099 3.35688 2.22622 4.37554C1.84299 5.39014 1.85704 6.55957 2.19281 7.58826L2.478 7.49518C2.16095 6.52382 2.15046 5.42513 2.50687 4.48154C2.86175 3.542 3.58071 2.7534 4.73548 2.38815L4.64501 2.10212ZM8.50115 14.85C8.43415 14.85 8.36841 14.8341 8.3088 14.8023L8.16744 15.0669C8.27195 15.1227 8.38645 15.15 8.50115 15.15V14.85ZM8.30897 14.8024C8.19831 14.7431 6.7996 13.9873 5.26616 12.7476C3.72872 11.5046 2.07716 9.79208 1.43266 7.82413L1.14756 7.9175C1.81968 9.96978 3.52747 11.7277 5.07755 12.9809C6.63162 14.2373 8.0486 15.0032 8.16727 15.0668L8.30897 14.8024ZM1.29011 7.72081C1.31557 7.72081 1.34468 7.72745 1.37175 7.74514C1.39802 7.76231 1.41394 7.78437 1.42309 7.8023C1.43191 7.81958 1.43557 7.8351 1.43727 7.84507C1.43817 7.8504 1.43869 7.85518 1.43898 7.85922C1.43913 7.86127 1.43923 7.8632 1.43929 7.865C1.43932 7.86591 1.43934 7.86678 1.43936 7.86763C1.43936 7.86805 1.43937 7.86847 1.43937 7.86888C1.43937 7.86909 1.43937 7.86929 1.43938 7.86949C1.43938 7.86959 1.43938 7.86969 1.43938 7.86979C1.43938 7.86984 1.43938 7.86992 1.43938 7.86994C1.43938 7.87002 1.43938 7.87009 1.28938 7.8701C1.13938 7.8701 1.13938 7.87017 1.13938 7.87025C1.13938 7.87027 1.13938 7.87035 1.13938 7.8704C1.13938 7.8705 1.13938 7.8706 1.13938 7.8707C1.13938 7.8709 1.13938 7.87111 1.13938 7.87131C1.13939 7.87173 1.13939 7.87214 1.1394 7.87257C1.13941 7.87342 1.13943 7.8743 1.13946 7.8752C1.13953 7.87701 1.13962 7.87896 1.13978 7.88103C1.14007 7.88512 1.14059 7.88995 1.14151 7.89535C1.14323 7.90545 1.14694 7.92115 1.15585 7.93861C1.16508 7.95672 1.18114 7.97896 1.20762 7.99626C1.2349 8.01409 1.26428 8.02081 1.29011 8.02081V7.72081ZM1.43197 7.82354C0.623164 5.34647 1.53102 2.26869 4.3994 1.36184L4.30896 1.0758C1.23531 2.04755 0.302663 5.33142 1.14679 7.91665L1.43197 7.82354ZM4.39955 1.36179C5.7527 0.932384 7.22762 1.12136 8.42 1.85949L8.57791 1.60441C7.31141 0.820401 5.74571 0.619858 4.30881 1.07585L4.39955 1.36179ZM8.57801 1.85943C9.73213 1.14371 11.2694 0.945205 12.5951 1.36192L12.685 1.07572C11.2763 0.632908 9.64845 0.842602 8.4199 1.60447L8.57801 1.85943ZM12.5948 1.36184C15.4664 2.27018 16.3769 5.34745 15.5689 7.82356L15.8541 7.91663C16.6975 5.33188 15.7617 2.04893 12.6853 1.07581L12.5948 1.36184ZM15.5686 7.8243C14.9453 9.76841 13.2952 11.4801 11.7526 12.7288C10.2142 13.974 8.80513 14.7411 8.69378 14.8011L8.83606 15.0652C8.9555 15.0009 10.3826 14.2236 11.9413 12.9619C13.4957 11.7037 15.2034 9.94602 15.8543 7.91589L15.5686 7.8243ZM8.69334 14.8013C8.6337 14.8337 8.56752 14.85 8.50115 14.85V15.15C8.61648 15.15 8.73201 15.1217 8.83649 15.065L8.69334 14.8013Z" fill="currentColor" />
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8384 6.93209C12.5548 6.93209 12.3145 6.71865 12.2911 6.43693C12.2427 5.84618 11.8397 5.34743 11.266 5.1656C10.9766 5.07361 10.8184 4.76962 10.9114 4.48718C11.0059 4.20402 11.3129 4.05023 11.6031 4.13934C12.6017 4.45628 13.3014 5.32371 13.3872 6.34925C13.4113 6.64606 13.1864 6.90622 12.8838 6.92993C12.8684 6.93137 12.8538 6.93209 12.8384 6.93209Z" fill="currentColor" />
                      <path d="M12.8384 6.93209C12.5548 6.93209 12.3145 6.71865 12.2911 6.43693C12.2427 5.84618 11.8397 5.34743 11.266 5.1656C10.9766 5.07361 10.8184 4.76962 10.9114 4.48718C11.0059 4.20402 11.3129 4.05023 11.6031 4.13934C12.6017 4.45628 13.3014 5.32371 13.3872 6.34925C13.4113 6.64606 13.1864 6.90622 12.8838 6.92993C12.8684 6.93137 12.8538 6.93209 12.8384 6.93209" stroke="currentColor" stroke-width="0.3" />
                    </svg>
                    Add Wishlist
                  </button>
                  <!-- <button type="button" class="tp-product-details-action-sm-btn">
                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.575 12.6927C8.775 12.6927 8.94375 12.6249 9.08125 12.4895C9.21875 12.354 9.2875 12.1878 9.2875 11.9907C9.2875 11.7937 9.21875 11.6275 9.08125 11.492C8.94375 11.3565 8.775 11.2888 8.575 11.2888C8.375 11.2888 8.20625 11.3565 8.06875 11.492C7.93125 11.6275 7.8625 11.7937 7.8625 11.9907C7.8625 12.1878 7.93125 12.354 8.06875 12.4895C8.20625 12.6249 8.375 12.6927 8.575 12.6927ZM8.55625 5.0638C8.98125 5.0638 9.325 5.17771 9.5875 5.40553C9.85 5.63335 9.98125 5.92582 9.98125 6.28294C9.98125 6.52924 9.90625 6.77245 9.75625 7.01258C9.60625 7.25272 9.3625 7.5144 9.025 7.79763C8.7 8.08087 8.44063 8.3795 8.24688 8.69352C8.05313 9.00754 7.95625 9.29385 7.95625 9.55246C7.95625 9.68792 8.00938 9.79567 8.11563 9.87572C8.22188 9.95576 8.34375 9.99578 8.48125 9.99578C8.63125 9.99578 8.75625 9.94653 8.85625 9.84801C8.95625 9.74949 9.01875 9.62635 9.04375 9.47857C9.08125 9.23228 9.16562 9.0137 9.29688 8.82282C9.42813 8.63195 9.63125 8.42568 9.90625 8.20402C10.2812 7.89615 10.5531 7.58829 10.7219 7.28042C10.8906 6.97256 10.975 6.62775 10.975 6.246C10.975 5.59333 10.7594 5.06996 10.3281 4.67589C9.89688 4.28183 9.325 4.0848 8.6125 4.0848C8.1375 4.0848 7.7 4.17716 7.3 4.36187C6.9 4.54659 6.56875 4.81751 6.30625 5.17463C6.20625 5.31009 6.16563 5.44863 6.18438 5.59025C6.20313 5.73187 6.2625 5.83962 6.3625 5.91351C6.5 6.01202 6.64688 6.04281 6.80313 6.00587C6.95937 5.96892 7.0875 5.88272 7.1875 5.74726C7.35 5.5256 7.54688 5.35627 7.77813 5.23929C8.00938 5.1223 8.26875 5.0638 8.55625 5.0638ZM8.5 15.7775C7.45 15.7775 6.46875 15.5897 5.55625 15.2141C4.64375 14.8385 3.85 14.3182 3.175 13.6532C2.5 12.9882 1.96875 12.2062 1.58125 11.3073C1.19375 10.4083 1 9.43547 1 8.38873C1 7.35431 1.19375 6.38762 1.58125 5.48866C1.96875 4.58969 2.5 3.80772 3.175 3.14273C3.85 2.47775 4.64375 1.95438 5.55625 1.57263C6.46875 1.19088 7.45 1 8.5 1C9.5375 1 10.5125 1.19088 11.425 1.57263C12.3375 1.95438 13.1313 2.47775 13.8063 3.14273C14.4813 3.80772 15.0156 4.58969 15.4094 5.48866C15.8031 6.38762 16 7.35431 16 8.38873C16 9.43547 15.8031 10.4083 15.4094 11.3073C15.0156 12.2062 14.4813 12.9882 13.8063 13.6532C13.1313 14.3182 12.3375 14.8385 11.425 15.2141C10.5125 15.5897 9.5375 15.7775 8.5 15.7775ZM8.5 14.6692C10.2625 14.6692 11.7656 14.0534 13.0094 12.822C14.2531 11.5905 14.875 10.1128 14.875 8.38873C14.875 6.6647 14.2531 5.18695 13.0094 3.95549C11.7656 2.72404 10.2625 2.10831 8.5 2.10831C6.7125 2.10831 5.20312 2.72404 3.97188 3.95549C2.74063 5.18695 2.125 6.6647 2.125 8.38873C2.125 10.1128 2.74063 11.5905 3.97188 12.822C5.20312 14.0534 6.7125 14.6692 8.5 14.6692Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                    </svg>
                    Ask a question
                  </button> -->
                </div>
                <div class="tp-product-details-query">
                  <!-- <div class="tp-product-details-query-item d-flex align-items-center">
                    <span>SKU: </span>
                    <p>NTB7SDVX44</p>
                  </div> -->
                  <div class="tp-product-details-query-item d-flex align-items-center">
                    <span>Category: </span>
                    <p><?= $this->Home_model->category_name($get_product->category) ?></p>
                  </div>
                  <!-- <div class="tp-product-details-query-item d-flex align-items-center">
                    <span>Tag: </span>
                    <p>Android</p>
                  </div> -->
                </div>
                <!-- <div class="tp-product-details-social">
                  <span>Share: </span>
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                </div> -->
                <div class="tp-product-details-msg mb-15">
                  <ul>
                    <li>30 days easy returns</li>
                    <li>Order yours before 2.30pm for same day dispatch</li>
                  </ul>
                </div>
                <div class="tp-product-details-payment d-flex align-items-center flex-wrap justify-content-between">
                  <p>Guaranteed safe <br> & secure checkout</p>
                  <img src="<?= base_url() ?>assets_front/img/product/icons/payment-option.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tp-product-details-bottom pb-140">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="tp-product-details-tab-nav tp-tab">
                <nav>
                  <div class="nav nav-tabs justify-content-center p-relative tp-product-tab" id="navPresentationTab" role="tablist">
                    <button class="nav-link active " id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description" aria-selected="true">Description</button>
                    <!-- <button class="nav-link active" id="nav-addInfo-tab" data-bs-toggle="tab" data-bs-target="#nav-addInfo" type="button" role="tab" aria-controls="nav-addInfo" aria-selected="false">Additional information</button>
                    <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Reviews (2)</button> -->

                    <span id="productTabMarker" class="tp-product-details-tab-line"></span>
                  </div>
                </nav>
                <div class="tab-content" id="navPresentationTabContent">
                  <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab" tabindex="0">
                    <div class="tp-product-details-desc-wrapper pt-80">
                      <div class="row justify-content-center">
                        <div class="col-xl-10">
                          <div class="tp-product-details-desc-item pb-105">

                            <div class="row">
                            
                              <div class="col-lg-12">
                                <div class="tp-product-details-desc-content pt-25">
                                  <!-- <span>Galaxy A8 tablet</span> -->
                                  <!-- <h3 class="tp-product-details-desc-title">Your world at a glance</h3> -->
                                  <p><?= $get_product->description ?></p>
                                </div>
                                <!-- <div class="tp-product-details-desc-content">
                                  <h3 class="tp-product-details-desc-title">Draw inspiration with S Pen</h3>
                                  <p>S Pen is a bundle of writing instruments in one. Its natural grip, <br> low latency and impressive pressure sensitivity will make it your go-to for everything from drawing to editing documents. And S Pen won't get misplaced thanks.</p>
                                </div> -->
                              </div>
                              <!-- <div class="col-lg-6">
                                <div class="tp-product-details-desc-thumb">
                                  <img src="<?= base_url() ?>assets_front/img/product/details/desc/product-details-desc-1.jpg" alt="">
                                </div>
                              </div> -->
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="tab-pane fade show active" id="nav-addInfo" role="tabpanel" aria-labelledby="nav-addInfo-tab" tabindex="0">

                    <div class="tp-product-details-additional-info ">
                      <div class="row justify-content-center">
                        <div class="col-xl-10">
                          <table>
                            <tbody>
                              <tr>
                                <td>Standing screen display size</td>
                                <td>Screen display Size 10.4</td>
                              </tr>
                              <tr>
                                <td>Color</td>
                                <td>Gray, Dark gray, Mystic black</td>
                              </tr>
                              <tr>
                                <td>Screen Resolution</td>
                                <td>1920 x 1200 Pixels</td>
                              </tr>
                              <tr>
                                <td>Max Screen Resolution</td>
                                <td>2000 x 1200</td>
                              </tr>
                              <tr>
                                <td>Processor</td>
                                <td>2.3 GHz (128 GB)</td>
                              </tr>
                              <tr>
                                <td>Graphics Coprocessor</td>
                                <td>Exynos 9611, Octa Core (4x2.3GHz + 4x1.7GHz)</td>
                              </tr>
                              <tr>
                                <td>Wireless Type</td>
                                <td>802.11a/b/g/n/ac, Bluetooth</td>
                              </tr>
                              <tr>
                                <td>Average Battery Life (in hours)</td>
                                <td>13 Hours</td>
                              </tr>
                              <tr>
                                <td>Series</td>
                                <td>Samsung Galaxy tab S6 Lite WiFi</td>
                              </tr>
                              <tr>
                                <td>Item model number</td>
                                <td>SM-P6102ZAEXOR</td>
                              </tr>
                              <tr>
                                <td>Hardware Platform</td>
                                <td>Android</td>
                              </tr>
                              <tr>
                                <td>Operating System</td>
                                <td>Android 12</td>
                              </tr>
                              <tr>
                                <td>Batteries</td>
                                <td>1 Lithium Polymer batteries required. (included)</td>
                              </tr>
                              <tr>
                                <td>Product Dimensions</td>
                                <td>0.28 x 6.07 x 9.63 inches</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab" tabindex="0">
                    <div class="tp-product-details-review-wrapper pt-60">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="tp-product-details-review-statics">
                            <!-- number -->
                            <div class="tp-product-details-review-number d-inline-block mb-50">
                              <h3 class="tp-product-details-review-number-title">Customer reviews</h3>
                              <div class="tp-product-details-review-summery d-flex align-items-center">
                                <div class="tp-product-details-review-summery-value">
                                  <span>4.5</span>
                                </div>
                                <div class="tp-product-details-review-summery-rating d-flex align-items-center">
                                  <span><i class="fa-solid fa-star"></i></span>
                                  <span><i class="fa-solid fa-star"></i></span>
                                  <span><i class="fa-solid fa-star"></i></span>
                                  <span><i class="fa-solid fa-star"></i></span>
                                  <span><i class="fa-solid fa-star"></i></span>
                                  <p>(36 Reviews)</p>
                                </div>
                              </div>
                              <div class="tp-product-details-review-rating-list">
                                <!-- single item -->
                                <div class="tp-product-details-review-rating-item d-flex align-items-center">
                                  <span>5 Start</span>
                                  <div class="tp-product-details-review-rating-bar">
                                    <span class="tp-product-details-review-rating-bar-inner" data-width="82%"></span>
                                  </div>
                                  <div class="tp-product-details-review-rating-percent">
                                    <span>82%</span>
                                  </div>
                                </div> <!-- end single item -->

                                <!-- single item -->
                                <div class="tp-product-details-review-rating-item d-flex align-items-center">
                                  <span>4 Start</span>
                                  <div class="tp-product-details-review-rating-bar">
                                    <span class="tp-product-details-review-rating-bar-inner" data-width="30%"></span>
                                  </div>
                                  <div class="tp-product-details-review-rating-percent">
                                    <span>30%</span>
                                  </div>
                                </div> <!-- end single item -->

                                <!-- single item -->
                                <div class="tp-product-details-review-rating-item d-flex align-items-center">
                                  <span>3 Start</span>
                                  <div class="tp-product-details-review-rating-bar">
                                    <span class="tp-product-details-review-rating-bar-inner" data-width="15%"></span>
                                  </div>
                                  <div class="tp-product-details-review-rating-percent">
                                    <span>15%</span>
                                  </div>
                                </div> <!-- end single item -->

                                <!-- single item -->
                                <div class="tp-product-details-review-rating-item d-flex align-items-center">
                                  <span>2 Start</span>
                                  <div class="tp-product-details-review-rating-bar">
                                    <span class="tp-product-details-review-rating-bar-inner" data-width="6%"></span>
                                  </div>
                                  <div class="tp-product-details-review-rating-percent">
                                    <span>6%</span>
                                  </div>
                                </div> <!-- end single item -->

                                <!-- single item -->
                                <div class="tp-product-details-review-rating-item d-flex align-items-center">
                                  <span>1 Start</span>
                                  <div class="tp-product-details-review-rating-bar">
                                    <span class="tp-product-details-review-rating-bar-inner" data-width="10%"></span>
                                  </div>
                                  <div class="tp-product-details-review-rating-percent">
                                    <span>10%</span>
                                  </div>
                                </div> <!-- end single item -->
                              </div>
                            </div>

                            <!-- reviews -->
                            <div class="tp-product-details-review-list pr-110">
                              <h3 class="tp-product-details-review-title">Rating & Review</h3>
                              <div class="tp-product-details-review-avater d-flex align-items-start">
                                <div class="tp-product-details-review-avater-thumb">
                                  <a href="#">
                                    <img src="<?= base_url() ?>assets_front/img/users/user-3.jpg" alt="">
                                  </a>
                                </div>
                                <div class="tp-product-details-review-avater-content">
                                  <div class="tp-product-details-review-avater-rating d-flex align-items-center">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                  </div>
                                  <h3 class="tp-product-details-review-avater-title">Eleanor Fant</h3>
                                  <span class="tp-product-details-review-avater-meta">06 March, 2023 </span>

                                  <div class="tp-product-details-review-avater-comment">
                                    <p>Designed very similarly to the nearly double priced Galaxy tab S6, with the only removal being.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="tp-product-details-review-avater d-flex align-items-start">
                                <div class="tp-product-details-review-avater-thumb">
                                  <a href="#">
                                    <img src="<?= base_url() ?>assets_front/img/users/user-2.jpg" alt="">
                                  </a>
                                </div>
                                <div class="tp-product-details-review-avater-content">
                                  <div class="tp-product-details-review-avater-rating d-flex align-items-center">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                  </div>
                                  <h3 class="tp-product-details-review-avater-title">Shahnewaz Sakil</h3>
                                  <span class="tp-product-details-review-avater-meta">06 March, 2023 </span>

                                  <div class="tp-product-details-review-avater-comment">
                                    <p>This review is for the Samsung Tab S6 Lite, 64gb wifi in blue. purchased this product performed.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> <!-- end col -->
                        <div class="col-lg-6">
                          <div class="tp-product-details-review-form">
                            <h3 class="tp-product-details-review-form-title">Review this product</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form action="#">
                              <div class="tp-product-details-review-form-rating d-flex align-items-center">
                                <p>Your Rating :</p>
                                <div class="tp-product-details-review-form-rating-icon d-flex align-items-center">
                                  <span><i class="fa-solid fa-star"></i></span>
                                  <span><i class="fa-solid fa-star"></i></span>
                                  <span><i class="fa-solid fa-star"></i></span>
                                  <span><i class="fa-solid fa-star"></i></span>
                                  <span><i class="fa-solid fa-star"></i></span>
                                </div>
                              </div>
                              <div class="tp-product-details-review-input-wrapper">
                                <div class="tp-product-details-review-input-box">
                                  <div class="tp-product-details-review-input">
                                    <textarea id="msg" name="msg" placeholder="Write your review here..."></textarea>
                                  </div>
                                  <div class="tp-product-details-review-input-title">
                                    <label for="msg">Your Name</label>
                                  </div>
                                </div>
                                <div class="tp-product-details-review-input-box">
                                  <div class="tp-product-details-review-input">
                                    <input name="name" id="name" type="text" placeholder="Shahnewaz Sakil">
                                  </div>
                                  <div class="tp-product-details-review-input-title">
                                    <label for="name">Your Name</label>
                                  </div>
                                </div>
                                <div class="tp-product-details-review-input-box">
                                  <div class="tp-product-details-review-input">
                                    <input name="email" id="email" type="email" placeholder="shofy@mail.com">
                                  </div>
                                  <div class="tp-product-details-review-input-title">
                                    <label for="email">Your Email</label>
                                  </div>
                                </div>
                              </div>
                              <div class="tp-product-details-review-suggetions mb-20">
                                <div class="tp-product-details-review-remeber">
                                  <input id="remeber" type="checkbox">
                                  <label for="remeber">Save my name, email, and website in this browser for the next time I comment.</label>
                                </div>
                              </div>
                              <div class="tp-product-details-review-btn-wrapper">
                                <button class="tp-product-details-review-btn">Submit</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- product details area end -->

    <!-- related product area start -->
    <section class="tp-related-product pt-95 pb-120">
      <div class="container">
        <div class="row">
          <div class="tp-section-title-wrapper-6 text-center mb-40">
            <span class="tp-section-title-pre-6">Next day Products</span>
            <h3 class="tp-section-title-6">Related Products</h3>
          </div>
        </div>
        <div class="row">
          <div class="tp-product-related-slider">
            <div class="tp-product-related-slider-active swiper-container  mb-10">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="tp-product-item-3 tp-product-style-primary mb-50">
                    <div class="tp-product-thumb-3 mb-15 fix p-relative z-index-1">
                      <a href="product-details.html">
                        <img src="<?= base_url() ?>assets_front/img/product/related/product-related-1.jpg" alt="">
                      </a>

                      <!-- product badge -->
                      <div class="tp-product-badge">
                        <span class="product-offer">-25%</span>
                      </div>

                      <!-- product action -->
                      <div class="tp-product-action-3 tp-product-action-4 has-shadow tp-product-action-primaryStyle">
                        <div class="tp-product-action-item-3 d-flex flex-column">
                          <button type="button" class="tp-product-action-btn-3 tp-product-add-cart-btn">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M3.34706 4.53799L3.85961 10.6239C3.89701 11.0923 4.28036 11.4436 4.74871 11.4436H4.75212H14.0265H14.0282C14.4711 11.4436 14.8493 11.1144 14.9122 10.6774L15.7197 5.11162C15.7384 4.97924 15.7053 4.84687 15.6245 4.73995C15.5446 4.63218 15.4273 4.5626 15.2947 4.54393C15.1171 4.55072 7.74498 4.54054 3.34706 4.53799ZM4.74722 12.7162C3.62777 12.7162 2.68001 11.8438 2.58906 10.728L1.81046 1.4837L0.529505 1.26308C0.181854 1.20198 -0.0501969 0.873587 0.00930333 0.526523C0.0705036 0.17946 0.406255 -0.0462578 0.746256 0.00805037L2.51426 0.313534C2.79901 0.363599 3.01576 0.5995 3.04042 0.888012L3.24017 3.26484C15.3748 3.26993 15.4139 3.27587 15.4726 3.28266C15.946 3.3514 16.3625 3.59833 16.6464 3.97849C16.9303 4.35779 17.0493 4.82535 16.9813 5.29376L16.1747 10.8586C16.0225 11.9177 15.1011 12.7162 14.0301 12.7162H14.0259H4.75402H4.74722Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6629 7.67446H10.3067C9.95394 7.67446 9.66919 7.38934 9.66919 7.03804C9.66919 6.68673 9.95394 6.40161 10.3067 6.40161H12.6629C13.0148 6.40161 13.3004 6.68673 13.3004 7.03804C13.3004 7.38934 13.0148 7.67446 12.6629 7.67446Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38171 15.0212C4.63756 15.0212 4.84411 15.2278 4.84411 15.4836C4.84411 15.7395 4.63756 15.9469 4.38171 15.9469C4.12501 15.9469 3.91846 15.7395 3.91846 15.4836C3.91846 15.2278 4.12501 15.0212 4.38171 15.0212Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38082 15.3091C4.28477 15.3091 4.20657 15.3873 4.20657 15.4833C4.20657 15.6763 4.55592 15.6763 4.55592 15.4833C4.55592 15.3873 4.47687 15.3091 4.38082 15.3091ZM4.38067 16.5815C3.77376 16.5815 3.28076 16.0884 3.28076 15.4826C3.28076 14.8767 3.77376 14.3845 4.38067 14.3845C4.98757 14.3845 5.48142 14.8767 5.48142 15.4826C5.48142 16.0884 4.98757 16.5815 4.38067 16.5815Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9701 15.0212C14.2259 15.0212 14.4333 15.2278 14.4333 15.4836C14.4333 15.7395 14.2259 15.9469 13.9701 15.9469C13.7134 15.9469 13.5068 15.7395 13.5068 15.4836C13.5068 15.2278 13.7134 15.0212 13.9701 15.0212Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9692 15.3092C13.874 15.3092 13.7958 15.3874 13.7958 15.4835C13.7966 15.6781 14.1451 15.6764 14.1443 15.4835C14.1443 15.3874 14.0652 15.3092 13.9692 15.3092ZM13.969 16.5815C13.3621 16.5815 12.8691 16.0884 12.8691 15.4826C12.8691 14.8767 13.3621 14.3845 13.969 14.3845C14.5768 14.3845 15.0706 14.8767 15.0706 15.4826C15.0706 16.0884 14.5768 16.5815 13.969 16.5815Z" fill="currentColor" />
                            </svg>
                            <span class="tp-product-tooltip">Add to Cart</span>
                          </button>
                          <button type="button" class="tp-product-action-btn-3 tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                            <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99948 5.06828C7.80247 5.06828 6.82956 6.04044 6.82956 7.23542C6.82956 8.42951 7.80247 9.40077 8.99948 9.40077C10.1965 9.40077 11.1703 8.42951 11.1703 7.23542C11.1703 6.04044 10.1965 5.06828 8.99948 5.06828ZM8.99942 10.7482C7.0581 10.7482 5.47949 9.17221 5.47949 7.23508C5.47949 5.29705 7.0581 3.72021 8.99942 3.72021C10.9407 3.72021 12.5202 5.29705 12.5202 7.23508C12.5202 9.17221 10.9407 10.7482 8.99942 10.7482Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.41273 7.2346C3.08674 10.9265 5.90646 13.1215 8.99978 13.1224C12.0931 13.1215 14.9128 10.9265 16.5868 7.2346C14.9128 3.54363 12.0931 1.34863 8.99978 1.34773C5.90736 1.34863 3.08674 3.54363 1.41273 7.2346ZM9.00164 14.4703H8.99804H8.99714C5.27471 14.4676 1.93209 11.8629 0.0546754 7.50073C-0.0182251 7.33091 -0.0182251 7.13864 0.0546754 6.96883C1.93209 2.60759 5.27561 0.00288103 8.99714 0.000185582C8.99894 -0.000712902 8.99894 -0.000712902 8.99984 0.000185582C9.00164 -0.000712902 9.00164 -0.000712902 9.00254 0.000185582C12.725 0.00288103 16.0676 2.60759 17.945 6.96883C18.0188 7.13864 18.0188 7.33091 17.945 7.50073C16.0685 11.8629 12.725 14.4676 9.00254 14.4703H9.00164Z" fill="currentColor" />
                            </svg>
                            <span class="tp-product-tooltip">Quick View</span>
                          </button>
                          <button type="button" class="tp-product-action-btn-3 tp-product-add-to-wishlist-btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.60355 7.98635C2.83622 11.8048 7.7062 14.8923 9.0004 15.6565C10.299 14.8844 15.2042 11.7628 16.3973 7.98985C17.1806 5.55102 16.4535 2.46177 13.5644 1.53473C12.1647 1.08741 10.532 1.35966 9.40484 2.22804C9.16921 2.40837 8.84214 2.41187 8.60476 2.23329C7.41078 1.33952 5.85105 1.07778 4.42936 1.53473C1.54465 2.4609 0.820172 5.55014 1.60355 7.98635ZM9.00138 17.0711C8.89236 17.0711 8.78421 17.0448 8.68574 16.9914C8.41055 16.8417 1.92808 13.2841 0.348132 8.3872C0.347252 8.3872 0.347252 8.38633 0.347252 8.38633C-0.644504 5.30321 0.459792 1.42874 4.02502 0.284605C5.69904 -0.254635 7.52342 -0.0174044 8.99874 0.909632C10.4283 0.00973263 12.3275 -0.238878 13.9681 0.284605C17.5368 1.43049 18.6446 5.30408 17.6538 8.38633C16.1248 13.2272 9.59485 16.8382 9.3179 16.9896C9.21943 17.0439 9.1104 17.0711 9.00138 17.0711Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M14.203 6.67473C13.8627 6.67473 13.5743 6.41474 13.5462 6.07159C13.4882 5.35202 13.0046 4.7445 12.3162 4.52302C11.9689 4.41097 11.779 4.04068 11.8906 3.69666C12.0041 3.35175 12.3724 3.16442 12.7206 3.27297C13.919 3.65901 14.7586 4.71561 14.8615 5.96479C14.8905 6.32632 14.6206 6.64322 14.2575 6.6721C14.239 6.67385 14.2214 6.67473 14.203 6.67473Z" fill="currentColor" />
                            </svg>
                            <span class="tp-product-tooltip">Add To Wishlist</span>
                          </button>
                        </div>
                      </div>

                      <div class="tp-product-add-cart-btn-large-wrapper">
                        <button type="button" class="tp-product-add-cart-btn-large">
                          Add To Cart
                        </button>
                      </div>
                    </div>
                    <div class="tp-product-content-3">
                      <div class="tp-product-tag-3">
                        <span>Tablet</span>
                      </div>
                      <h3 class="tp-product-title-3">
                        <a href="product-details.html">GalaxyS6 Android Tablet</a>
                      </h3>
                      <div class="tp-product-price-wrapper-3">
                        <span class="tp-product-price-3 new-price">$102.00</span>
                        <span class="tp-product-price-3 old-price">$226.00</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="tp-product-item-3 tp-product-style-primary mb-50">
                    <div class="tp-product-thumb-3 mb-15 fix p-relative z-index-1">
                      <a href="product-details.html">
                        <img src="<?= base_url() ?>assets_front/img/product/related/product-related-2.jpg" alt="">
                      </a>


                      <!-- product action -->
                      <div class="tp-product-action-3 tp-product-action-4 has-shadow tp-product-action-primaryStyle">
                        <div class="tp-product-action-item-3 d-flex flex-column">
                          <button type="button" class="tp-product-action-btn-3 tp-product-add-cart-btn">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M3.34706 4.53799L3.85961 10.6239C3.89701 11.0923 4.28036 11.4436 4.74871 11.4436H4.75212H14.0265H14.0282C14.4711 11.4436 14.8493 11.1144 14.9122 10.6774L15.7197 5.11162C15.7384 4.97924 15.7053 4.84687 15.6245 4.73995C15.5446 4.63218 15.4273 4.5626 15.2947 4.54393C15.1171 4.55072 7.74498 4.54054 3.34706 4.53799ZM4.74722 12.7162C3.62777 12.7162 2.68001 11.8438 2.58906 10.728L1.81046 1.4837L0.529505 1.26308C0.181854 1.20198 -0.0501969 0.873587 0.00930333 0.526523C0.0705036 0.17946 0.406255 -0.0462578 0.746256 0.00805037L2.51426 0.313534C2.79901 0.363599 3.01576 0.5995 3.04042 0.888012L3.24017 3.26484C15.3748 3.26993 15.4139 3.27587 15.4726 3.28266C15.946 3.3514 16.3625 3.59833 16.6464 3.97849C16.9303 4.35779 17.0493 4.82535 16.9813 5.29376L16.1747 10.8586C16.0225 11.9177 15.1011 12.7162 14.0301 12.7162H14.0259H4.75402H4.74722Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6629 7.67446H10.3067C9.95394 7.67446 9.66919 7.38934 9.66919 7.03804C9.66919 6.68673 9.95394 6.40161 10.3067 6.40161H12.6629C13.0148 6.40161 13.3004 6.68673 13.3004 7.03804C13.3004 7.38934 13.0148 7.67446 12.6629 7.67446Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38171 15.0212C4.63756 15.0212 4.84411 15.2278 4.84411 15.4836C4.84411 15.7395 4.63756 15.9469 4.38171 15.9469C4.12501 15.9469 3.91846 15.7395 3.91846 15.4836C3.91846 15.2278 4.12501 15.0212 4.38171 15.0212Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38082 15.3091C4.28477 15.3091 4.20657 15.3873 4.20657 15.4833C4.20657 15.6763 4.55592 15.6763 4.55592 15.4833C4.55592 15.3873 4.47687 15.3091 4.38082 15.3091ZM4.38067 16.5815C3.77376 16.5815 3.28076 16.0884 3.28076 15.4826C3.28076 14.8767 3.77376 14.3845 4.38067 14.3845C4.98757 14.3845 5.48142 14.8767 5.48142 15.4826C5.48142 16.0884 4.98757 16.5815 4.38067 16.5815Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9701 15.0212C14.2259 15.0212 14.4333 15.2278 14.4333 15.4836C14.4333 15.7395 14.2259 15.9469 13.9701 15.9469C13.7134 15.9469 13.5068 15.7395 13.5068 15.4836C13.5068 15.2278 13.7134 15.0212 13.9701 15.0212Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9692 15.3092C13.874 15.3092 13.7958 15.3874 13.7958 15.4835C13.7966 15.6781 14.1451 15.6764 14.1443 15.4835C14.1443 15.3874 14.0652 15.3092 13.9692 15.3092ZM13.969 16.5815C13.3621 16.5815 12.8691 16.0884 12.8691 15.4826C12.8691 14.8767 13.3621 14.3845 13.969 14.3845C14.5768 14.3845 15.0706 14.8767 15.0706 15.4826C15.0706 16.0884 14.5768 16.5815 13.969 16.5815Z" fill="currentColor" />
                            </svg>
                            <span class="tp-product-tooltip">Add to Cart</span>
                          </button>
                          <button type="button" class="tp-product-action-btn-3 tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                            <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99948 5.06828C7.80247 5.06828 6.82956 6.04044 6.82956 7.23542C6.82956 8.42951 7.80247 9.40077 8.99948 9.40077C10.1965 9.40077 11.1703 8.42951 11.1703 7.23542C11.1703 6.04044 10.1965 5.06828 8.99948 5.06828ZM8.99942 10.7482C7.0581 10.7482 5.47949 9.17221 5.47949 7.23508C5.47949 5.29705 7.0581 3.72021 8.99942 3.72021C10.9407 3.72021 12.5202 5.29705 12.5202 7.23508C12.5202 9.17221 10.9407 10.7482 8.99942 10.7482Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.41273 7.2346C3.08674 10.9265 5.90646 13.1215 8.99978 13.1224C12.0931 13.1215 14.9128 10.9265 16.5868 7.2346C14.9128 3.54363 12.0931 1.34863 8.99978 1.34773C5.90736 1.34863 3.08674 3.54363 1.41273 7.2346ZM9.00164 14.4703H8.99804H8.99714C5.27471 14.4676 1.93209 11.8629 0.0546754 7.50073C-0.0182251 7.33091 -0.0182251 7.13864 0.0546754 6.96883C1.93209 2.60759 5.27561 0.00288103 8.99714 0.000185582C8.99894 -0.000712902 8.99894 -0.000712902 8.99984 0.000185582C9.00164 -0.000712902 9.00164 -0.000712902 9.00254 0.000185582C12.725 0.00288103 16.0676 2.60759 17.945 6.96883C18.0188 7.13864 18.0188 7.33091 17.945 7.50073C16.0685 11.8629 12.725 14.4676 9.00254 14.4703H9.00164Z" fill="currentColor" />
                            </svg>
                            <span class="tp-product-tooltip">Quick View</span>
                          </button>
                          <button type="button" class="tp-product-action-btn-3 tp-product-add-to-wishlist-btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.60355 7.98635C2.83622 11.8048 7.7062 14.8923 9.0004 15.6565C10.299 14.8844 15.2042 11.7628 16.3973 7.98985C17.1806 5.55102 16.4535 2.46177 13.5644 1.53473C12.1647 1.08741 10.532 1.35966 9.40484 2.22804C9.16921 2.40837 8.84214 2.41187 8.60476 2.23329C7.41078 1.33952 5.85105 1.07778 4.42936 1.53473C1.54465 2.4609 0.820172 5.55014 1.60355 7.98635ZM9.00138 17.0711C8.89236 17.0711 8.78421 17.0448 8.68574 16.9914C8.41055 16.8417 1.92808 13.2841 0.348132 8.3872C0.347252 8.3872 0.347252 8.38633 0.347252 8.38633C-0.644504 5.30321 0.459792 1.42874 4.02502 0.284605C5.69904 -0.254635 7.52342 -0.0174044 8.99874 0.909632C10.4283 0.00973263 12.3275 -0.238878 13.9681 0.284605C17.5368 1.43049 18.6446 5.30408 17.6538 8.38633C16.1248 13.2272 9.59485 16.8382 9.3179 16.9896C9.21943 17.0439 9.1104 17.0711 9.00138 17.0711Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M14.203 6.67473C13.8627 6.67473 13.5743 6.41474 13.5462 6.07159C13.4882 5.35202 13.0046 4.7445 12.3162 4.52302C11.9689 4.41097 11.779 4.04068 11.8906 3.69666C12.0041 3.35175 12.3724 3.16442 12.7206 3.27297C13.919 3.65901 14.7586 4.71561 14.8615 5.96479C14.8905 6.32632 14.6206 6.64322 14.2575 6.6721C14.239 6.67385 14.2214 6.67473 14.203 6.67473Z" fill="currentColor" />
                            </svg>
                            <span class="tp-product-tooltip">Add To Wishlist</span>
                          </button>
                        </div>
                      </div>

                      <div class="tp-product-add-cart-btn-large-wrapper">
                        <button type="button" class="tp-product-add-cart-btn-large">
                          Add To Cart
                        </button>
                      </div>
                    </div>
                    <div class="tp-product-content-3">
                      <div class="tp-product-tag-3">
                        <span>SmartPhone</span>
                      </div>
                      <h3 class="tp-product-title-3">
                        <a href="product-details.html">Microsoft Surface Pro 8-13"</a>
                      </h3>
                      <div class="tp-product-price-wrapper-3">
                        <span class="tp-product-price-3">$240.00</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="tp-product-item-3 tp-product-style-primary mb-50">
                    <div class="tp-product-thumb-3 mb-15 fix p-relative z-index-1">
                      <a href="product-details.html">
                        <img src="<?= base_url() ?>assets_front/img/product/related/product-related-3.jpg" alt="">
                      </a>

                      <!-- product badge -->
                      <div class="tp-product-badge">
                        <span class="product-hot">hot</span>
                      </div>

                      <!-- product action -->
                      <div class="tp-product-action-3 tp-product-action-4 has-shadow tp-product-action-primaryStyle">
                        <div class="tp-product-action-item-3 d-flex flex-column">
                          <button type="button" class="tp-product-action-btn-3 tp-product-add-cart-btn">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M3.34706 4.53799L3.85961 10.6239C3.89701 11.0923 4.28036 11.4436 4.74871 11.4436H4.75212H14.0265H14.0282C14.4711 11.4436 14.8493 11.1144 14.9122 10.6774L15.7197 5.11162C15.7384 4.97924 15.7053 4.84687 15.6245 4.73995C15.5446 4.63218 15.4273 4.5626 15.2947 4.54393C15.1171 4.55072 7.74498 4.54054 3.34706 4.53799ZM4.74722 12.7162C3.62777 12.7162 2.68001 11.8438 2.58906 10.728L1.81046 1.4837L0.529505 1.26308C0.181854 1.20198 -0.0501969 0.873587 0.00930333 0.526523C0.0705036 0.17946 0.406255 -0.0462578 0.746256 0.00805037L2.51426 0.313534C2.79901 0.363599 3.01576 0.5995 3.04042 0.888012L3.24017 3.26484C15.3748 3.26993 15.4139 3.27587 15.4726 3.28266C15.946 3.3514 16.3625 3.59833 16.6464 3.97849C16.9303 4.35779 17.0493 4.82535 16.9813 5.29376L16.1747 10.8586C16.0225 11.9177 15.1011 12.7162 14.0301 12.7162H14.0259H4.75402H4.74722Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6629 7.67446H10.3067C9.95394 7.67446 9.66919 7.38934 9.66919 7.03804C9.66919 6.68673 9.95394 6.40161 10.3067 6.40161H12.6629C13.0148 6.40161 13.3004 6.68673 13.3004 7.03804C13.3004 7.38934 13.0148 7.67446 12.6629 7.67446Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38171 15.0212C4.63756 15.0212 4.84411 15.2278 4.84411 15.4836C4.84411 15.7395 4.63756 15.9469 4.38171 15.9469C4.12501 15.9469 3.91846 15.7395 3.91846 15.4836C3.91846 15.2278 4.12501 15.0212 4.38171 15.0212Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38082 15.3091C4.28477 15.3091 4.20657 15.3873 4.20657 15.4833C4.20657 15.6763 4.55592 15.6763 4.55592 15.4833C4.55592 15.3873 4.47687 15.3091 4.38082 15.3091ZM4.38067 16.5815C3.77376 16.5815 3.28076 16.0884 3.28076 15.4826C3.28076 14.8767 3.77376 14.3845 4.38067 14.3845C4.98757 14.3845 5.48142 14.8767 5.48142 15.4826C5.48142 16.0884 4.98757 16.5815 4.38067 16.5815Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9701 15.0212C14.2259 15.0212 14.4333 15.2278 14.4333 15.4836C14.4333 15.7395 14.2259 15.9469 13.9701 15.9469C13.7134 15.9469 13.5068 15.7395 13.5068 15.4836C13.5068 15.2278 13.7134 15.0212 13.9701 15.0212Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9692 15.3092C13.874 15.3092 13.7958 15.3874 13.7958 15.4835C13.7966 15.6781 14.1451 15.6764 14.1443 15.4835C14.1443 15.3874 14.0652 15.3092 13.9692 15.3092ZM13.969 16.5815C13.3621 16.5815 12.8691 16.0884 12.8691 15.4826C12.8691 14.8767 13.3621 14.3845 13.969 14.3845C14.5768 14.3845 15.0706 14.8767 15.0706 15.4826C15.0706 16.0884 14.5768 16.5815 13.969 16.5815Z" fill="currentColor" />
                            </svg>
                            <span class="tp-product-tooltip">Add to Cart</span>
                          </button>
                          <button type="button" class="tp-product-action-btn-3 tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                            <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99948 5.06828C7.80247 5.06828 6.82956 6.04044 6.82956 7.23542C6.82956 8.42951 7.80247 9.40077 8.99948 9.40077C10.1965 9.40077 11.1703 8.42951 11.1703 7.23542C11.1703 6.04044 10.1965 5.06828 8.99948 5.06828ZM8.99942 10.7482C7.0581 10.7482 5.47949 9.17221 5.47949 7.23508C5.47949 5.29705 7.0581 3.72021 8.99942 3.72021C10.9407 3.72021 12.5202 5.29705 12.5202 7.23508C12.5202 9.17221 10.9407 10.7482 8.99942 10.7482Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.41273 7.2346C3.08674 10.9265 5.90646 13.1215 8.99978 13.1224C12.0931 13.1215 14.9128 10.9265 16.5868 7.2346C14.9128 3.54363 12.0931 1.34863 8.99978 1.34773C5.90736 1.34863 3.08674 3.54363 1.41273 7.2346ZM9.00164 14.4703H8.99804H8.99714C5.27471 14.4676 1.93209 11.8629 0.0546754 7.50073C-0.0182251 7.33091 -0.0182251 7.13864 0.0546754 6.96883C1.93209 2.60759 5.27561 0.00288103 8.99714 0.000185582C8.99894 -0.000712902 8.99894 -0.000712902 8.99984 0.000185582C9.00164 -0.000712902 9.00164 -0.000712902 9.00254 0.000185582C12.725 0.00288103 16.0676 2.60759 17.945 6.96883C18.0188 7.13864 18.0188 7.33091 17.945 7.50073C16.0685 11.8629 12.725 14.4676 9.00254 14.4703H9.00164Z" fill="currentColor" />
                            </svg>
                            <span class="tp-product-tooltip">Quick View</span>
                          </button>
                          <button type="button" class="tp-product-action-btn-3 tp-product-add-to-wishlist-btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.60355 7.98635C2.83622 11.8048 7.7062 14.8923 9.0004 15.6565C10.299 14.8844 15.2042 11.7628 16.3973 7.98985C17.1806 5.55102 16.4535 2.46177 13.5644 1.53473C12.1647 1.08741 10.532 1.35966 9.40484 2.22804C9.16921 2.40837 8.84214 2.41187 8.60476 2.23329C7.41078 1.33952 5.85105 1.07778 4.42936 1.53473C1.54465 2.4609 0.820172 5.55014 1.60355 7.98635ZM9.00138 17.0711C8.89236 17.0711 8.78421 17.0448 8.68574 16.9914C8.41055 16.8417 1.92808 13.2841 0.348132 8.3872C0.347252 8.3872 0.347252 8.38633 0.347252 8.38633C-0.644504 5.30321 0.459792 1.42874 4.02502 0.284605C5.69904 -0.254635 7.52342 -0.0174044 8.99874 0.909632C10.4283 0.00973263 12.3275 -0.238878 13.9681 0.284605C17.5368 1.43049 18.6446 5.30408 17.6538 8.38633C16.1248 13.2272 9.59485 16.8382 9.3179 16.9896C9.21943 17.0439 9.1104 17.0711 9.00138 17.0711Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M14.203 6.67473C13.8627 6.67473 13.5743 6.41474 13.5462 6.07159C13.4882 5.35202 13.0046 4.7445 12.3162 4.52302C11.9689 4.41097 11.779 4.04068 11.8906 3.69666C12.0041 3.35175 12.3724 3.16442 12.7206 3.27297C13.919 3.65901 14.7586 4.71561 14.8615 5.96479C14.8905 6.32632 14.6206 6.64322 14.2575 6.6721C14.239 6.67385 14.2214 6.67473 14.203 6.67473Z" fill="currentColor" />
                            </svg>
                            <span class="tp-product-tooltip">Add To Wishlist</span>
                          </button>
                        </div>
                      </div>

                      <div class="tp-product-add-cart-btn-large-wrapper">
                        <button type="button" class="tp-product-add-cart-btn-large">
                          Add To Cart
                        </button>
                      </div>
                    </div>
                    <div class="tp-product-content-3">
                      <div class="tp-product-tag-3">
                        <span>Video & Camera</span>
                      </div>
                      <h3 class="tp-product-title-3">
                        <a href="product-details.html">4K Digital Video Camera.</a>
                      </h3>
                      <div class="tp-product-price-wrapper-3">
                        <span class="tp-product-price-3 new-price">$76.00</span>
                        <span class="tp-product-price-3 old-price">$106.00</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="tp-product-item-3 tp-product-style-primary mb-50">
                    <div class="tp-product-thumb-3 mb-15 fix p-relative z-index-1">
                      <a href="product-details.html">
                        <img src="<?= base_url() ?>assets_front/img/product/related/product-related-4.jpg" alt="">
                      </a>

                      <!-- product badge -->
                      <div class="tp-product-badge">
                        <span class="product-trending">trending</span>
                      </div>

                      <!-- product action -->
                      <div class="tp-product-action-3 tp-product-action-4 has-shadow tp-product-action-primaryStyle">
                        <div class="tp-product-action-item-3 d-flex flex-column">
                          <button type="button" class="tp-product-action-btn-3 tp-product-add-cart-btn">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M3.34706 4.53799L3.85961 10.6239C3.89701 11.0923 4.28036 11.4436 4.74871 11.4436H4.75212H14.0265H14.0282C14.4711 11.4436 14.8493 11.1144 14.9122 10.6774L15.7197 5.11162C15.7384 4.97924 15.7053 4.84687 15.6245 4.73995C15.5446 4.63218 15.4273 4.5626 15.2947 4.54393C15.1171 4.55072 7.74498 4.54054 3.34706 4.53799ZM4.74722 12.7162C3.62777 12.7162 2.68001 11.8438 2.58906 10.728L1.81046 1.4837L0.529505 1.26308C0.181854 1.20198 -0.0501969 0.873587 0.00930333 0.526523C0.0705036 0.17946 0.406255 -0.0462578 0.746256 0.00805037L2.51426 0.313534C2.79901 0.363599 3.01576 0.5995 3.04042 0.888012L3.24017 3.26484C15.3748 3.26993 15.4139 3.27587 15.4726 3.28266C15.946 3.3514 16.3625 3.59833 16.6464 3.97849C16.9303 4.35779 17.0493 4.82535 16.9813 5.29376L16.1747 10.8586C16.0225 11.9177 15.1011 12.7162 14.0301 12.7162H14.0259H4.75402H4.74722Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6629 7.67446H10.3067C9.95394 7.67446 9.66919 7.38934 9.66919 7.03804C9.66919 6.68673 9.95394 6.40161 10.3067 6.40161H12.6629C13.0148 6.40161 13.3004 6.68673 13.3004 7.03804C13.3004 7.38934 13.0148 7.67446 12.6629 7.67446Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38171 15.0212C4.63756 15.0212 4.84411 15.2278 4.84411 15.4836C4.84411 15.7395 4.63756 15.9469 4.38171 15.9469C4.12501 15.9469 3.91846 15.7395 3.91846 15.4836C3.91846 15.2278 4.12501 15.0212 4.38171 15.0212Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38082 15.3091C4.28477 15.3091 4.20657 15.3873 4.20657 15.4833C4.20657 15.6763 4.55592 15.6763 4.55592 15.4833C4.55592 15.3873 4.47687 15.3091 4.38082 15.3091ZM4.38067 16.5815C3.77376 16.5815 3.28076 16.0884 3.28076 15.4826C3.28076 14.8767 3.77376 14.3845 4.38067 14.3845C4.98757 14.3845 5.48142 14.8767 5.48142 15.4826C5.48142 16.0884 4.98757 16.5815 4.38067 16.5815Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9701 15.0212C14.2259 15.0212 14.4333 15.2278 14.4333 15.4836C14.4333 15.7395 14.2259 15.9469 13.9701 15.9469C13.7134 15.9469 13.5068 15.7395 13.5068 15.4836C13.5068 15.2278 13.7134 15.0212 13.9701 15.0212Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9692 15.3092C13.874 15.3092 13.7958 15.3874 13.7958 15.4835C13.7966 15.6781 14.1451 15.6764 14.1443 15.4835C14.1443 15.3874 14.0652 15.3092 13.9692 15.3092ZM13.969 16.5815C13.3621 16.5815 12.8691 16.0884 12.8691 15.4826C12.8691 14.8767 13.3621 14.3845 13.969 14.3845C14.5768 14.3845 15.0706 14.8767 15.0706 15.4826C15.0706 16.0884 14.5768 16.5815 13.969 16.5815Z" fill="currentColor" />
                            </svg>
                            <span class="tp-product-tooltip">Add to Cart</span>
                          </button>
                          <button type="button" class="tp-product-action-btn-3 tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                            <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99948 5.06828C7.80247 5.06828 6.82956 6.04044 6.82956 7.23542C6.82956 8.42951 7.80247 9.40077 8.99948 9.40077C10.1965 9.40077 11.1703 8.42951 11.1703 7.23542C11.1703 6.04044 10.1965 5.06828 8.99948 5.06828ZM8.99942 10.7482C7.0581 10.7482 5.47949 9.17221 5.47949 7.23508C5.47949 5.29705 7.0581 3.72021 8.99942 3.72021C10.9407 3.72021 12.5202 5.29705 12.5202 7.23508C12.5202 9.17221 10.9407 10.7482 8.99942 10.7482Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.41273 7.2346C3.08674 10.9265 5.90646 13.1215 8.99978 13.1224C12.0931 13.1215 14.9128 10.9265 16.5868 7.2346C14.9128 3.54363 12.0931 1.34863 8.99978 1.34773C5.90736 1.34863 3.08674 3.54363 1.41273 7.2346ZM9.00164 14.4703H8.99804H8.99714C5.27471 14.4676 1.93209 11.8629 0.0546754 7.50073C-0.0182251 7.33091 -0.0182251 7.13864 0.0546754 6.96883C1.93209 2.60759 5.27561 0.00288103 8.99714 0.000185582C8.99894 -0.000712902 8.99894 -0.000712902 8.99984 0.000185582C9.00164 -0.000712902 9.00164 -0.000712902 9.00254 0.000185582C12.725 0.00288103 16.0676 2.60759 17.945 6.96883C18.0188 7.13864 18.0188 7.33091 17.945 7.50073C16.0685 11.8629 12.725 14.4676 9.00254 14.4703H9.00164Z" fill="currentColor" />
                            </svg>
                            <span class="tp-product-tooltip">Quick View</span>
                          </button>
                          <button type="button" class="tp-product-action-btn-3 tp-product-add-to-wishlist-btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.60355 7.98635C2.83622 11.8048 7.7062 14.8923 9.0004 15.6565C10.299 14.8844 15.2042 11.7628 16.3973 7.98985C17.1806 5.55102 16.4535 2.46177 13.5644 1.53473C12.1647 1.08741 10.532 1.35966 9.40484 2.22804C9.16921 2.40837 8.84214 2.41187 8.60476 2.23329C7.41078 1.33952 5.85105 1.07778 4.42936 1.53473C1.54465 2.4609 0.820172 5.55014 1.60355 7.98635ZM9.00138 17.0711C8.89236 17.0711 8.78421 17.0448 8.68574 16.9914C8.41055 16.8417 1.92808 13.2841 0.348132 8.3872C0.347252 8.3872 0.347252 8.38633 0.347252 8.38633C-0.644504 5.30321 0.459792 1.42874 4.02502 0.284605C5.69904 -0.254635 7.52342 -0.0174044 8.99874 0.909632C10.4283 0.00973263 12.3275 -0.238878 13.9681 0.284605C17.5368 1.43049 18.6446 5.30408 17.6538 8.38633C16.1248 13.2272 9.59485 16.8382 9.3179 16.9896C9.21943 17.0439 9.1104 17.0711 9.00138 17.0711Z" fill="currentColor" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M14.203 6.67473C13.8627 6.67473 13.5743 6.41474 13.5462 6.07159C13.4882 5.35202 13.0046 4.7445 12.3162 4.52302C11.9689 4.41097 11.779 4.04068 11.8906 3.69666C12.0041 3.35175 12.3724 3.16442 12.7206 3.27297C13.919 3.65901 14.7586 4.71561 14.8615 5.96479C14.8905 6.32632 14.6206 6.64322 14.2575 6.6721C14.239 6.67385 14.2214 6.67473 14.203 6.67473Z" fill="currentColor" />
                            </svg>
                            <span class="tp-product-tooltip">Add To Wishlist</span>
                          </button>
                        </div>
                      </div>

                      <div class="tp-product-add-cart-btn-large-wrapper">
                        <button type="button" class="tp-product-add-cart-btn-large">
                          Add To Cart
                        </button>
                      </div>
                    </div>
                    <div class="tp-product-content-3">
                      <div class="tp-product-tag-3">
                        <span>Smart Watch</span>
                      </div>
                      <h3 class="tp-product-title-3">
                        <a href="product-details.html">Discover Skincare watch</a>
                      </h3>
                      <div class="tp-product-price-wrapper-3">
                        <span class="tp-product-price-3">$44.00</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tp-related-swiper-scrollbar tp-swiper-scrollbar"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- related product area end -->

    <div class="modal fade tp-product-modal" id="producQuickViewModal" tabindex="-1" aria-labelledby="producQuickViewModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="tp-product-modal-content d-lg-flex align-items-start">
            <button type="button" class="tp-product-modal-close-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal"><i class="fa-regular fa-xmark"></i></button>
            <div class="tp-product-details-thumb-wrapper tp-tab d-sm-flex">
              <nav>
                <div class="nav nav-tabs flex-sm-column " id="productDetailsNavThumb" role="tablist">
                  <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="true">
                    <img src="<?= base_url() ?>assets_front/img/product/details/nav/product-details-nav-1.jpg" alt="">
                  </button>
                  <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2" aria-selected="false">
                    <img src="<?= base_url() ?>assets_front/img/product/details/nav/product-details-nav-2.jpg" alt="">
                  </button>
                  <button class="nav-link" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3" type="button" role="tab" aria-controls="nav-3" aria-selected="false">
                    <img src="<?= base_url() ?>assets_front/img/product/details/nav/product-details-nav-3.jpg" alt="">
                  </button>
                  <button class="nav-link" id="nav-4-tab" data-bs-toggle="tab" data-bs-target="#nav-4" type="button" role="tab" aria-controls="nav-4" aria-selected="false">
                    <img src="<?= base_url() ?>assets_front/img/product/details/nav/product-details-nav-4.jpg" alt="">
                  </button>
                </div>
              </nav>
              <div class="tab-content m-img" id="productDetailsNavContent">
                <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab" tabindex="0">
                  <div class="tp-product-details-nav-main-thumb">
                    <img src="<?= base_url() ?>assets_front/img/product/details/main/product-details-main-1.jpg" alt="">
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab" tabindex="0">
                  <div class="tp-product-details-nav-main-thumb">
                    <img src="<?= base_url() ?>assets_front/img/product/details/main/product-details-main-2.jpg" alt="">
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab" tabindex="0">
                  <div class="tp-product-details-nav-main-thumb">
                    <img src="<?= base_url() ?>assets_front/img/product/details/main/product-details-main-3.jpg" alt="">
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab" tabindex="0">
                  <div class="tp-product-details-nav-main-thumb">
                    <img src="<?= base_url() ?>assets_front/img/product/details/main/product-details-main-4.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="tp-product-details-wrapper">
              <div class="tp-product-details-category">
                <span>Computers & Tablets</span>
              </div>
              <h3 class="tp-product-details-title">Samsung galaxy A8 tablet</h3>

              <!-- inventory details -->
              <div class="tp-product-details-inventory d-flex align-items-center mb-10">
                <div class="tp-product-details-stock mb-10">
                  <span>In Stock</span>
                </div>
                <div class="tp-product-details-rating-wrapper d-flex align-items-center mb-10">
                  <div class="tp-product-details-rating">
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                  </div>
                  <div class="tp-product-details-reviews">
                    <span>(36 Reviews)</span>
                  </div>
                </div>
              </div>
              <p>A Screen Everyone Will Love: Whether your family is streaming or video chatting with friends tablet A8... <span>See more</span></p>

              <!-- price -->
              <div class="tp-product-details-price-wrapper mb-20">
                <span class="tp-product-details-price old-price">$320.00</span>
                <span class="tp-product-details-price new-price">$236.00</span>
              </div>

              <!-- variations -->
              <div class="tp-product-details-variation">
                <!-- single item -->
                <div class="tp-product-details-variation-item">
                  <h4 class="tp-product-details-variation-title">Color :</h4>
                  <div class="tp-product-details-variation-list">
                    <button type="button" class="color tp-color-variation-btn">
                      <span data-bg-color="#F8B655"></span>
                      <span class="tp-color-variation-tootltip">Yellow</span>
                    </button>
                    <button type="button" class="color tp-color-variation-btn active">
                      <span data-bg-color="#CBCBCB"></span>
                      <span class="tp-color-variation-tootltip">Gray</span>
                    </button>
                    <button type="button" class="color tp-color-variation-btn">
                      <span data-bg-color="#494E52"></span>
                      <span class="tp-color-variation-tootltip">Black</span>
                    </button>
                    <button type="button" class="color tp-color-variation-btn">
                      <span data-bg-color="#B4505A"></span>
                      <span class="tp-color-variation-tootltip">Brown</span>
                    </button>
                  </div>
                </div>
              </div>

              <!-- actions -->
              <div class="tp-product-details-action-wrapper">
                <h3 class="tp-product-details-action-title">Quantity</h3>
                <div class="tp-product-details-action-item-wrapper d-sm-flex align-items-center">
                  <div class="tp-product-details-quantity">
                    <div class="tp-product-quantity mb-15 mr-15">
                      <span class="tp-cart-minus">
                        <svg width="11" height="2" viewBox="0 0 11 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 1H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </span>
                      <input class="tp-cart-input" type="text" value="1">
                      <span class="tp-cart-plus">
                        <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 6H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M5.5 10.5V1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </span>
                    </div>
                  </div>
                  <div class="tp-product-details-add-to-cart mb-15 w-100">
                    <button class="tp-product-details-add-to-cart-btn w-100">Add To Cart</button>
                  </div>
                </div>
                <button class="tp-product-details-buy-now-btn w-100">Buy Now</button>
              </div>
              <div class="tp-product-details-action-sm">
                <button type="button" class="tp-product-details-action-sm-btn">
                  <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 3.16431H10.8622C12.0451 3.16431 12.9999 4.08839 12.9999 5.23315V7.52268" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3.25177 0.985168L1 3.16433L3.25177 5.34354" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12.9999 12.5983H3.13775C1.95486 12.5983 1 11.6742 1 10.5295V8.23993" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.748 14.7774L12.9998 12.5983L10.748 10.4191" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  Compare
                </button>
                <button type="button" class="tp-product-details-action-sm-btn">
                  <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.33541 7.54172C3.36263 10.6766 7.42094 13.2113 8.49945 13.8387C9.58162 13.2048 13.6692 10.6421 14.6635 7.5446C15.3163 5.54239 14.7104 3.00621 12.3028 2.24514C11.1364 1.8779 9.77578 2.1014 8.83648 2.81432C8.64012 2.96237 8.36757 2.96524 8.16974 2.81863C7.17476 2.08487 5.87499 1.86999 4.69024 2.24514C2.28632 3.00549 1.68259 5.54167 2.33541 7.54172ZM8.50115 15C8.4103 15 8.32018 14.9784 8.23812 14.9346C8.00879 14.8117 2.60674 11.891 1.29011 7.87081C1.28938 7.87081 1.28938 7.8701 1.28938 7.8701C0.462913 5.33895 1.38316 2.15812 4.35418 1.21882C5.7492 0.776121 7.26952 0.97088 8.49895 1.73195C9.69029 0.993159 11.2729 0.789057 12.6401 1.21882C15.614 2.15956 16.5372 5.33966 15.7115 7.8701C14.4373 11.8443 8.99571 14.8088 8.76492 14.9332C8.68286 14.9777 8.592 15 8.50115 15Z" fill="currentColor" />
                    <path d="M8.49945 13.8387L8.42402 13.9683L8.49971 14.0124L8.57526 13.9681L8.49945 13.8387ZM14.6635 7.5446L14.5209 7.4981L14.5207 7.49875L14.6635 7.5446ZM12.3028 2.24514L12.348 2.10211L12.3478 2.10206L12.3028 2.24514ZM8.83648 2.81432L8.92678 2.93409L8.92717 2.9338L8.83648 2.81432ZM8.16974 2.81863L8.25906 2.69812L8.25877 2.69791L8.16974 2.81863ZM4.69024 2.24514L4.73548 2.38815L4.73552 2.38814L4.69024 2.24514ZM8.23812 14.9346L8.16727 15.0668L8.16744 15.0669L8.23812 14.9346ZM1.29011 7.87081L1.43266 7.82413L1.39882 7.72081H1.29011V7.87081ZM1.28938 7.8701L1.43938 7.87009L1.43938 7.84623L1.43197 7.82354L1.28938 7.8701ZM4.35418 1.21882L4.3994 1.36184L4.39955 1.36179L4.35418 1.21882ZM8.49895 1.73195L8.42 1.85949L8.49902 1.90841L8.57801 1.85943L8.49895 1.73195ZM12.6401 1.21882L12.6853 1.0758L12.685 1.07572L12.6401 1.21882ZM15.7115 7.8701L15.5689 7.82356L15.5686 7.8243L15.7115 7.8701ZM8.76492 14.9332L8.69378 14.8011L8.69334 14.8013L8.76492 14.9332ZM2.19287 7.58843C2.71935 9.19514 4.01596 10.6345 5.30013 11.744C6.58766 12.8564 7.88057 13.6522 8.42402 13.9683L8.57487 13.709C8.03982 13.3978 6.76432 12.6125 5.49626 11.517C4.22484 10.4185 2.97868 9.02313 2.47795 7.49501L2.19287 7.58843ZM8.57526 13.9681C9.12037 13.6488 10.4214 12.8444 11.7125 11.729C12.9999 10.6167 14.2963 9.17932 14.8063 7.59044L14.5207 7.49875C14.0364 9.00733 12.7919 10.4 11.5164 11.502C10.2446 12.6008 8.9607 13.3947 8.42364 13.7093L8.57526 13.9681ZM14.8061 7.59109C15.1419 6.5613 15.1554 5.39131 14.7711 4.37633C14.3853 3.35729 13.5989 2.49754 12.348 2.10211L12.2576 2.38816C13.4143 2.75381 14.1347 3.54267 14.4905 4.48255C14.8479 5.42648 14.8379 6.52568 14.5209 7.4981L14.8061 7.59109ZM12.3478 2.10206C11.137 1.72085 9.72549 1.95125 8.7458 2.69484L8.92717 2.9338C9.82606 2.25155 11.1357 2.03494 12.2577 2.38821L12.3478 2.10206ZM8.74618 2.69455C8.60221 2.8031 8.40275 2.80462 8.25906 2.69812L8.08043 2.93915C8.33238 3.12587 8.67804 3.12163 8.92678 2.93409L8.74618 2.69455ZM8.25877 2.69791C7.225 1.93554 5.87527 1.71256 4.64496 2.10213L4.73552 2.38814C5.87471 2.02742 7.12452 2.2342 8.08071 2.93936L8.25877 2.69791ZM4.64501 2.10212C3.39586 2.49722 2.61099 3.35688 2.22622 4.37554C1.84299 5.39014 1.85704 6.55957 2.19281 7.58826L2.478 7.49518C2.16095 6.52382 2.15046 5.42513 2.50687 4.48154C2.86175 3.542 3.58071 2.7534 4.73548 2.38815L4.64501 2.10212ZM8.50115 14.85C8.43415 14.85 8.36841 14.8341 8.3088 14.8023L8.16744 15.0669C8.27195 15.1227 8.38645 15.15 8.50115 15.15V14.85ZM8.30897 14.8024C8.19831 14.7431 6.7996 13.9873 5.26616 12.7476C3.72872 11.5046 2.07716 9.79208 1.43266 7.82413L1.14756 7.9175C1.81968 9.96978 3.52747 11.7277 5.07755 12.9809C6.63162 14.2373 8.0486 15.0032 8.16727 15.0668L8.30897 14.8024ZM1.29011 7.72081C1.31557 7.72081 1.34468 7.72745 1.37175 7.74514C1.39802 7.76231 1.41394 7.78437 1.42309 7.8023C1.43191 7.81958 1.43557 7.8351 1.43727 7.84507C1.43817 7.8504 1.43869 7.85518 1.43898 7.85922C1.43913 7.86127 1.43923 7.8632 1.43929 7.865C1.43932 7.86591 1.43934 7.86678 1.43936 7.86763C1.43936 7.86805 1.43937 7.86847 1.43937 7.86888C1.43937 7.86909 1.43937 7.86929 1.43938 7.86949C1.43938 7.86959 1.43938 7.86969 1.43938 7.86979C1.43938 7.86984 1.43938 7.86992 1.43938 7.86994C1.43938 7.87002 1.43938 7.87009 1.28938 7.8701C1.13938 7.8701 1.13938 7.87017 1.13938 7.87025C1.13938 7.87027 1.13938 7.87035 1.13938 7.8704C1.13938 7.8705 1.13938 7.8706 1.13938 7.8707C1.13938 7.8709 1.13938 7.87111 1.13938 7.87131C1.13939 7.87173 1.13939 7.87214 1.1394 7.87257C1.13941 7.87342 1.13943 7.8743 1.13946 7.8752C1.13953 7.87701 1.13962 7.87896 1.13978 7.88103C1.14007 7.88512 1.14059 7.88995 1.14151 7.89535C1.14323 7.90545 1.14694 7.92115 1.15585 7.93861C1.16508 7.95672 1.18114 7.97896 1.20762 7.99626C1.2349 8.01409 1.26428 8.02081 1.29011 8.02081V7.72081ZM1.43197 7.82354C0.623164 5.34647 1.53102 2.26869 4.3994 1.36184L4.30896 1.0758C1.23531 2.04755 0.302663 5.33142 1.14679 7.91665L1.43197 7.82354ZM4.39955 1.36179C5.7527 0.932384 7.22762 1.12136 8.42 1.85949L8.57791 1.60441C7.31141 0.820401 5.74571 0.619858 4.30881 1.07585L4.39955 1.36179ZM8.57801 1.85943C9.73213 1.14371 11.2694 0.945205 12.5951 1.36192L12.685 1.07572C11.2763 0.632908 9.64845 0.842602 8.4199 1.60447L8.57801 1.85943ZM12.5948 1.36184C15.4664 2.27018 16.3769 5.34745 15.5689 7.82356L15.8541 7.91663C16.6975 5.33188 15.7617 2.04893 12.6853 1.07581L12.5948 1.36184ZM15.5686 7.8243C14.9453 9.76841 13.2952 11.4801 11.7526 12.7288C10.2142 13.974 8.80513 14.7411 8.69378 14.8011L8.83606 15.0652C8.9555 15.0009 10.3826 14.2236 11.9413 12.9619C13.4957 11.7037 15.2034 9.94602 15.8543 7.91589L15.5686 7.8243ZM8.69334 14.8013C8.6337 14.8337 8.56752 14.85 8.50115 14.85V15.15C8.61648 15.15 8.73201 15.1217 8.83649 15.065L8.69334 14.8013Z" fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8384 6.93209C12.5548 6.93209 12.3145 6.71865 12.2911 6.43693C12.2427 5.84618 11.8397 5.34743 11.266 5.1656C10.9766 5.07361 10.8184 4.76962 10.9114 4.48718C11.0059 4.20402 11.3129 4.05023 11.6031 4.13934C12.6017 4.45628 13.3014 5.32371 13.3872 6.34925C13.4113 6.64606 13.1864 6.90622 12.8838 6.92993C12.8684 6.93137 12.8538 6.93209 12.8384 6.93209Z" fill="currentColor" />
                    <path d="M12.8384 6.93209C12.5548 6.93209 12.3145 6.71865 12.2911 6.43693C12.2427 5.84618 11.8397 5.34743 11.266 5.1656C10.9766 5.07361 10.8184 4.76962 10.9114 4.48718C11.0059 4.20402 11.3129 4.05023 11.6031 4.13934C12.6017 4.45628 13.3014 5.32371 13.3872 6.34925C13.4113 6.64606 13.1864 6.90622 12.8838 6.92993C12.8684 6.93137 12.8538 6.93209 12.8384 6.93209" stroke="currentColor" stroke-width="0.3" />
                  </svg>
                  Add Wishlist
                </button>
                <button type="button" class="tp-product-details-action-sm-btn">
                  <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.575 12.6927C8.775 12.6927 8.94375 12.6249 9.08125 12.4895C9.21875 12.354 9.2875 12.1878 9.2875 11.9907C9.2875 11.7937 9.21875 11.6275 9.08125 11.492C8.94375 11.3565 8.775 11.2888 8.575 11.2888C8.375 11.2888 8.20625 11.3565 8.06875 11.492C7.93125 11.6275 7.8625 11.7937 7.8625 11.9907C7.8625 12.1878 7.93125 12.354 8.06875 12.4895C8.20625 12.6249 8.375 12.6927 8.575 12.6927ZM8.55625 5.0638C8.98125 5.0638 9.325 5.17771 9.5875 5.40553C9.85 5.63335 9.98125 5.92582 9.98125 6.28294C9.98125 6.52924 9.90625 6.77245 9.75625 7.01258C9.60625 7.25272 9.3625 7.5144 9.025 7.79763C8.7 8.08087 8.44063 8.3795 8.24688 8.69352C8.05313 9.00754 7.95625 9.29385 7.95625 9.55246C7.95625 9.68792 8.00938 9.79567 8.11563 9.87572C8.22188 9.95576 8.34375 9.99578 8.48125 9.99578C8.63125 9.99578 8.75625 9.94653 8.85625 9.84801C8.95625 9.74949 9.01875 9.62635 9.04375 9.47857C9.08125 9.23228 9.16562 9.0137 9.29688 8.82282C9.42813 8.63195 9.63125 8.42568 9.90625 8.20402C10.2812 7.89615 10.5531 7.58829 10.7219 7.28042C10.8906 6.97256 10.975 6.62775 10.975 6.246C10.975 5.59333 10.7594 5.06996 10.3281 4.67589C9.89688 4.28183 9.325 4.0848 8.6125 4.0848C8.1375 4.0848 7.7 4.17716 7.3 4.36187C6.9 4.54659 6.56875 4.81751 6.30625 5.17463C6.20625 5.31009 6.16563 5.44863 6.18438 5.59025C6.20313 5.73187 6.2625 5.83962 6.3625 5.91351C6.5 6.01202 6.64688 6.04281 6.80313 6.00587C6.95937 5.96892 7.0875 5.88272 7.1875 5.74726C7.35 5.5256 7.54688 5.35627 7.77813 5.23929C8.00938 5.1223 8.26875 5.0638 8.55625 5.0638ZM8.5 15.7775C7.45 15.7775 6.46875 15.5897 5.55625 15.2141C4.64375 14.8385 3.85 14.3182 3.175 13.6532C2.5 12.9882 1.96875 12.2062 1.58125 11.3073C1.19375 10.4083 1 9.43547 1 8.38873C1 7.35431 1.19375 6.38762 1.58125 5.48866C1.96875 4.58969 2.5 3.80772 3.175 3.14273C3.85 2.47775 4.64375 1.95438 5.55625 1.57263C6.46875 1.19088 7.45 1 8.5 1C9.5375 1 10.5125 1.19088 11.425 1.57263C12.3375 1.95438 13.1313 2.47775 13.8063 3.14273C14.4813 3.80772 15.0156 4.58969 15.4094 5.48866C15.8031 6.38762 16 7.35431 16 8.38873C16 9.43547 15.8031 10.4083 15.4094 11.3073C15.0156 12.2062 14.4813 12.9882 13.8063 13.6532C13.1313 14.3182 12.3375 14.8385 11.425 15.2141C10.5125 15.5897 9.5375 15.7775 8.5 15.7775ZM8.5 14.6692C10.2625 14.6692 11.7656 14.0534 13.0094 12.822C14.2531 11.5905 14.875 10.1128 14.875 8.38873C14.875 6.6647 14.2531 5.18695 13.0094 3.95549C11.7656 2.72404 10.2625 2.10831 8.5 2.10831C6.7125 2.10831 5.20312 2.72404 3.97188 3.95549C2.74063 5.18695 2.125 6.6647 2.125 8.38873C2.125 10.1128 2.74063 11.5905 3.97188 12.822C5.20312 14.0534 6.7125 14.6692 8.5 14.6692Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                  </svg>
                  Ask a question
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <?php include("footer.php") ?>