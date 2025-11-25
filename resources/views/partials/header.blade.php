<header id="header" class="header d-flex align-items-center fixed-top" style="padding: 40px 0 10px 0;">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{route('home')}}" class="logo d-flex align-items-center">
            <h1 class="sitename">
                <img src="{{asset('assets/img/Black%20Well%202.png')}}" alt="Blackwell Your Supply Chain Partner" />
            </h1>

        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{route('home')}}" class="active">Home</a></li>
                <li><a href="{{route('about.index')}}">About</a></li>
                <li><a href="{{route('product.index')}}">Product</a></li>
                <li><a href="partners.html">Partners</a></li>
                <li><a href="{{route('blog.index')}}">Blog</a></li>
                <li><a href="{{route('contact.index')}}">Contact</a></li>
                <!-- translate for mobile -->
                <li>
                    <div class="elfsight-app-d3a63166-be5f-414d-be8e-111b893d9461" data-elfsight-app-lazy></div>

                    <a href="https://elfsight.com/website-translator-widget/?utm_source=websites&amp;utm_medium=clients&amp;utm_content=website-translator&amp;utm_term=127.0.0.1&amp;utm_campaign=free-widget"
                       target="_blank" rel="noreferrer" style="display: none !important;">
                    </a>

                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <nav id="navmenu-for-pc" class="navmenu">
            <ul>
                <li><a href="{{route('home')}}" class="active">Home</a></li>
                <li><a href="{{route('about.index')}}">About</a></li>
                <li><a href="{{route('stock')}}">Our Stock</a></li>
                <li><a href="{{route('product.index')}}"> Product</a></li>
                <li><a href="{{route('blog.index')}}">Blog</a></li>
                <li><a href="{{route('contact.index')}}">Contact</a></li>
            </ul>

            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <div id="dropdown-pc" class="dropdown-pc">
            <div onclick="toggleDropdownMenu()" class="drowpdown-close-icon"><i class="bi bi-x-lg "></i></div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-3 black-tab-item">
                        <!-- Vertical Tabs -->
                        <ul class="nav nav-tabs flex-column black-tab-list" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab"
                                   aria-controls="tab1" aria-selected="true">Partner <i
                                        class="bi bi-chevron-right toggle-dropdown"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2"
                                   aria-selected="false">Block <i class="bi bi-chevron-right toggle-dropdown"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3"
                                   aria-selected="false">Dropdown <i class="bi bi-chevron-right toggle-dropdown"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4"
                                   aria-selected="false">Contact <i class="bi bi-chevron-right toggle-dropdown"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab5-tab" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5"
                                   aria-selected="false">Dropdown second <i class="bi bi-chevron-right toggle-dropdown"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-9 white-list-tab-panel">
                        <!-- Tab Content -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                                <ul>
                                    <li><a href="./dropdown pages/partners/tab-1.html">Deep Dropdown 1</a></li>
                                    <li><a href="./dropdown pages/partners/tab-2.html">Deep Dropdown 2</a></li>
                                    <li><a href="./dropdown pages/partners/tab-3.html">Deep Dropdown 3</a></li>
                                    <li><a href="./dropdown pages/partners/tab-4.html">Deep Dropdown 4</a></li>
                                    <li><a href="./dropdown pages/partners/tab-5.html">Deep Dropdown 5</a></li>
                                    <li><a href="./dropdown pages/partners/tab-6.html">Deep Dropdown 6</a></li>
                                    <li><a href="./dropdown pages/partners/tab-7.html">Deep Dropdown 7</a></li>
                                    <li><a href="./dropdown pages/partners/tab-8.html">Deep Dropdown 8</a></li>
                                    <li><a href="./dropdown pages/partners/tab-9.html">Deep Dropdown 9</a></li>
                                    <li><a href="./dropdown pages/partners/tab-10.html">Deep Dropdown 10</a></li>
                                    <li><a href="./dropdown pages/partners/tab-11.html">Deep Dropdown 11</a></li>
                                    <li><a href="./dropdown pages/partners/tab-12.html">Deep Dropdown 12</a></li>
                                    <li><a href="./dropdown pages/partners/tab-13.html">Deep Dropdown 13</a></li>
                                    <li><a href="./dropdown pages/partners/tab-14.html">Deep Dropdown 14</a></li>
                                    <li><a href="./dropdown pages/partners/tab-15.html">Deep Dropdown 15</a></li>
                                    <li><a href="./dropdown pages/partners/tab-16.html">Deep Dropdown 16</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                <ul>
                                    <li><a href="./dropdown pages/block/tab-1.html">Deep Dropdown 1</a></li>
                                    <li><a href="./dropdown pages/block/tab-2.html">Deep Dropdown 2</a></li>
                                    <li><a href="./dropdown pages/block/tab-3.html">Deep Dropdown 3</a></li>
                                    <li><a href="./dropdown pages/block/tab-4.html">Deep Dropdown 4</a></li>
                                    <li><a href="./dropdown pages/block/tab-5.html">Deep Dropdown 5</a></li>
                                    <li><a href="./dropdown pages/block/tab-6.html">Deep Dropdown 6</a></li>
                                    <li><a href="./dropdown pages/block/tab-7.html">Deep Dropdown 7</a></li>
                                    <li><a href="./dropdown pages/block/tab-8.html">Deep Dropdown 8</a></li>
                                    <li><a href="./dropdown pages/block/tab-9.html">Deep Dropdown 9</a></li>
                                    <li><a href="./dropdown pages/block/tab-10.html">Deep Dropdown 10</a></li>
                                    <li><a href="./dropdown pages/block/tab-11.html">Deep Dropdown 11</a></li>
                                    <li><a href="./dropdown pages/block/tab-12.html">Deep Dropdown 12</a></li>
                                    <li><a href="./dropdown pages/block/tab-13.html">Deep Dropdown 13</a></li>
                                    <li><a href="./dropdown pages/block/tab-14.html">Deep Dropdown 14</a></li>
                                    <li><a href="./dropdown pages/block/tab-15.html">Deep Dropdown 15</a></li>
                                    <li><a href="./dropdown pages/block/tab-16.html">Deep Dropdown 16</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                <ul>
                                    <li><a href="./dropdown pages/dropdown/tab-1.html">Deep Dropdown 1</a></li>
                                    <li><a href="./dropdown pages/dropdown/tab-2.html">Deep Dropdown 2</a></li>
                                    <li><a href="./dropdown pages/dropdown/tab-3.html">Deep Dropdown 3</a></li>
                                    <li><a href="./dropdown pages/dropdown/tab-4.html">Deep Dropdown 4</a></li>
                                    <li><a href="./dropdown pages/dropdown/tab-5.html">Deep Dropdown 5</a></li>
                                    <li><a href="./dropdown pages/dropdown/tab-6.html">Deep Dropdown 6</a></li>
                                    <li><a href="./dropdown pages/dropdown/tab-7.html">Deep Dropdown 7</a></li>
                                    <li><a href="./dropdown pages/dropdown/tab-8.html">Deep Dropdown 8</a></li>
                                    <li><a href="./dropdown pages/dropdown/tab-9.html">Deep Dropdown 9</a></li>
                                    <li><a href="./dropdown pages/dropdown/tab-10.html">Deep Dropdown 10</a></li>
                                    <li><a href="./dropdown pages/dropdown/tab-11.html">Deep Dropdown 11</a></li>
                                    <li><a href="./dropdown pages/dropdown/tab-12.html">Deep Dropdown 12</a></li>
                                    <li><a href="./dropdown pages/dropdown/tab-13.html">Deep Dropdown 13</a></li>
                                    <li><a href="./dropdown pages/dropdown/tab-14.html">Deep Dropdown 14</a></li>
                                    <li><a href="./dropdown pages/dropdown/tab-15.html">Deep Dropdown 15</a></li>
                                    <li><a href="./dropdown pages/dropdown/tab-16.html">Deep Dropdown 16</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                                <ul>
                                    <li><a href="./dropdown pages/contact/tab-1.html">Deep Dropdown 1</a></li>
                                    <li><a href="./dropdown pages/contact/tab-2.html">Deep Dropdown 2</a></li>
                                    <li><a href="./dropdown pages/contact/tab-3.html">Deep Dropdown 3</a></li>
                                    <li><a href="./dropdown pages/contact/tab-4.html">Deep Dropdown 4</a></li>
                                    <li><a href="./dropdown pages/contact/tab-5.html">Deep Dropdown 5</a></li>
                                    <li><a href="./dropdown pages/contact/tab-6.html">Deep Dropdown 6</a></li>
                                    <li><a href="./dropdown pages/contact/tab-7.html">Deep Dropdown 7</a></li>
                                    <li><a href="./dropdown pages/contact/tab-8.html">Deep Dropdown 8</a></li>
                                    <li><a href="./dropdown pages/contact/tab-9.html">Deep Dropdown 9</a></li>
                                    <li><a href="./dropdown pages/contact/tab-10.html">Deep Dropdown 10</a></li>
                                    <li><a href="./dropdown pages/contact/tab-11.html">Deep Dropdown 11</a></li>
                                    <li><a href="./dropdown pages/contact/tab-12.html">Deep Dropdown 12</a></li>
                                    <li><a href="./dropdown pages/contact/tab-13.html">Deep Dropdown 13</a></li>
                                    <li><a href="./dropdown pages/contact/tab-14.html">Deep Dropdown 14</a></li>
                                    <li><a href="./dropdown pages/contact/tab-15.html">Deep Dropdown 15</a></li>
                                    <li><a href="./dropdown pages/contact/tab-16.html">Deep Dropdown 16</a></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                                <ul>
                                    <li><a href="./dropdown pages/dropdown second/tab-1.html">Deep Dropdown 1</a></li>
                                    <li><a href="./dropdown pages/dropdown second/tab-2.html">Deep Dropdown 2</a></li>
                                    <li><a href="./dropdown pages/dropdown second/tab-3.html">Deep Dropdown 3</a></li>
                                    <li><a href="./dropdown pages/dropdown second/tab-4.html">Deep Dropdown 4</a></li>
                                    <li><a href="./dropdown pages/dropdown second/tab-5.html">Deep Dropdown 5</a></li>
                                    <li><a href="./dropdown pages/dropdown second/tab-6.html">Deep Dropdown 6</a></li>
                                    <li><a href="./dropdown pages/dropdown second/tab-7.html">Deep Dropdown 7</a></li>
                                    <li><a href="./dropdown pages/dropdown second/tab-8.html">Deep Dropdown 8</a></li>
                                    <li><a href="./dropdown pages/dropdown second/tab-9.html">Deep Dropdown 9</a></li>
                                    <li><a href="./dropdown pages/dropdown second/tab-10.html">Deep Dropdown 10</a></li>
                                    <li><a href="./dropdown pages/dropdown second/tab-11.html">Deep Dropdown 11</a></li>
                                    <li><a href="./dropdown pages/dropdown second/tab-12.html">Deep Dropdown 12</a></li>
                                    <li><a href="./dropdown pages/dropdown second/tab-13.html">Deep Dropdown 13</a></li>
                                    <li><a href="./dropdown pages/dropdown second/tab-14.html">Deep Dropdown 14</a></li>
                                    <li><a href="./dropdown pages/dropdown second/tab-15.html">Deep Dropdown 15</a></li>
                                    <li><a href="./dropdown pages/dropdown second/tab-16.html">Deep Dropdown 16</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</header>
