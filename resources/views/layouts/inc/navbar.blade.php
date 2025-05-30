    {{-- <div class="mode_switcher my_switcher">
        <button id="light--to-dark-button" class="light align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon dark__mode" viewBox="0 0 512 512"><path d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>

            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon light__mode" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"/></svg>

            <span class="light__mode">Light</span>
            <span class="dark__mode">Dark</span>
        </button>
    </div> --}}
    
    <!-- header__start -->
    <header>
        <div class="headerarea headerarea--3 headerarea__display__none header__sticky bg__black">      
            <div class="container desktop__menu__wrapper">
                <div class="headerarea__main__wrapper headerarea__main__wrapper--3 position-relative">
                    <div class="headerarea__component__wrap">
                        <div class="headerarea__component">
                            <div class="headercompany__logo">
                            <a href="/">
                                <img src="img\company logo\Clarus-IV_Portrait-logo.png" alt="Logo">
                            </a>
                            </div>
                        </div>
                        <div class="headerarea__component">
                            <div class="headerarea__main__menu">
                                <nav>
                                    <ul>
                                        <li><a href="/">HOME </a></li> 
                                        <li class="headerarea__common__dropdown"><a class="headerarea__has__dropdown" href="/about">ABOUT US<i class="icofont-long-arrow-down"></i></a>
                                            <ul class="headerarea__submenu headerarea__submenu--five--wrap">
                                                <li><a href="/about">About Us</a></li>
                                                <li><a href="/history">History</a></li>
                                                <li><a href="/departments">Departments</a></li>
                                                <li><a href="/strategies">Strategies & Methodologies</a></li>
                                                <li><a href="/career">Career</a></li>
                                                <li><a href="/academic">Academic Activities and Participation </a></li>
                                            </ul>
                                        </li>
                                        <li class="headerarea__common__dropdown"><a class="headerarea__has__dropdown" data-content="product1" href="/products">PRODUCTS<i class="icofont-long-arrow-down"></i></a>
                                            <ul class="headerarea__submenu headerarea__submenu--five--wrap">
                                                <li><a class="navbar__product" data-content="product2" href="/products#product2">Cryptocurrencies</a></li>
                                                <li><a class="navbar__product" data-content="product3" href="/products#product3">Equities</a></li>
                                                <li><a class="navbar__product" data-content="product4" href="/products#product4">Commodities</a></li>
                                                <li><a class="navbar__product" data-content="product5" href="/products#product5">Financial Planning</a></li>
                                                <li><a class="navbar__product" data-content="product6" href="/products#product6">Retirement Planning</a></li>
                                            </ul>
                                        </li>
                                        <li class="headerarea__common__dropdown"><a class="headerarea__has__dropdown" href="/portfolios">PORTFOLIO<i class="icofont-long-arrow-down"></i></a>
                                            <ul class="headerarea__submenu headerarea__submenu--five--wrap">
                                                <li><a class="navbar__portfolio" data-content="portfolio1" href="/portfolios#portfolio1">Financial Planning Portfolios</a></li>
                                                <li><a class="navbar__portfolio" data-content="portfolio2" href="/portfolios#portfolio2">The Programs of Advisory </a></li>
                                                <li><a class="navbar__portfolio" data-content="portfolio3" href="/portfolios#portfolio3">Portfolios that are Personalized </a></li>
                                                <li><a class="navbar__portfolio" data-content="portfolio4" href="/portfolios#portfolio4">Providers of Advisory Services </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/featured">FEATURED </a></li>
                                        <li><a href="/contact">CONTACT US</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="headerarea__component">
                            <div class="headerarea__right">
                                <div class="headerarea__button">
                                    <a class="default__button btn__white" href="https://app.clarusiv.com/accounts/login">LOGIN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mob_menu_wrapper container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="offcanvas__header--menu__open ">
                        <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/></svg>
                            <span class="visually-hidden">Offcanvas Menu Open</span>
                        </a>
                    </div>
                    <div class="mobile__log">
                        <div class="mobile__log--title"><a class="mobile__log--link" href="/">
                            <img class="mobile__log--img" src="img\company logo\Clarus-landscape-white.png" alt="logo-img">
                        </a></div>
                    </div>
                    <div class="headerarea__component mobile__component__right">
                        <div class="headerarea__right">
                            <div class="headerarea__cart__wraper">
                            <div class="headerarea__button">
                                <a class="default__button btn__white" href="https://app.clarusiv.com/accounts/login">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header__end -->

    <!-- Start Offcanvas header menu -->
    <div class="offcanvas__header">
        <div class="offcanvas__inner">
            <div class="offcanvas__logo">
                <a class="offcanvas__logo_link" href="/">
                    <img src="img\company logo\Clarus-IV_Landscape-logo.png" alt="Logo-img">
                </a>
                <button class="offcanvas__close--btn" data-offcanvas>Close</button>
            </div>
            <nav class="offcanvas__menu">
                <ul class="offcanvas__menu_ul">
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="/">HOME</a>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="/about">ABOUT US</a>
                        <ul class="offcanvas__sub_menu">
                            <li class="offcanvas__sub_menu_li"><a href="/history" class="offcanvas__sub_menu_item">History</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="/departments" class="offcanvas__sub_menu_item">Departments</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="/strategies" class="offcanvas__sub_menu_item">Strategies & Methodologies</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="/career" class="offcanvas__sub_menu_item">Career</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="/academic" class="offcanvas__sub_menu_item">Academic Activities and Participation</a></li>
                        </ul>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="/products">PRODUCTS</a>
                        <ul class="offcanvas__sub_menu">
                            <li class="offcanvas__sub_menu_li"><a href="/products#product2" data-content="product2" class="navbar__product offcanvas__sub_menu_item">Cryptocurrencies</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="/products#product3" data-content="product3" class="navbar__product offcanvas__sub_menu_item">Equities</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="/products#product4" data-content="product4" class="navbar__product offcanvas__sub_menu_item">Commodities</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="/products#product5" data-content="product5" class="navbar__product offcanvas__sub_menu_item">Financial Planning</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="/products#product6" data-content="product6" class="navbar__product offcanvas__sub_menu_item">Retirement Planning</a></li>
                        </ul>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="navbar__portfolio offcanvas__menu_item" data-content="portfolio1" href="/portfolios#portfolio1">PORTFOLIO</a>
                        <ul class="offcanvas__sub_menu">
                            <li class="offcanvas__sub_menu_li"><a href="/portfolios#portfolio1" data-content="portfolio1" class="navbar__portfolio offcanvas__sub_menu_item">Financial Planning Portfolios</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="/portfolios#portfolio2" data-content="portfolio2" class="navbar__portfolio offcanvas__sub_menu_item">The Programs of Advisory</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="/portfolios#portfolio3" data-content="portfolio3" class="navbar__portfolio offcanvas__sub_menu_item">Portfolios that are Personalized</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="/portfolios#portfolio4" data-content="portfolio4" class="navbar__portfolio offcanvas__sub_menu_item">Providers of Advisory Services</a></li>
                        </ul>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="/featured">FEATURED</a>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="/contact">CONTACT US</a>
                    </li>
                </ul>
                <div class="offcanvas__account--items">
                    <a class="offcanvas__account--items__btn d-flex align-items-center" href="https://app.clarusiv.com/accounts/login">
                        <span class="offcanvas__account--items__icon"> 
                            <svg xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg> 
                        </span>
                        <span class="offcanvas__account--items__label">Login</span>
                    </a>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Offcanvas header menu -->