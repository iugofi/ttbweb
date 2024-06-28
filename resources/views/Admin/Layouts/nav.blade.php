<aside class="app-sidebar" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="{{asset('assets/images/brand-logos/favicon.png')}}" alt="logo" class="toggle-logo">
            <img src="{{asset('assets/images/brand-logos/favicon.png')}}" alt="logo" class="desktop-dark">
            <img src="{{asset('assets/images/brand-logos/favicon.png')}}" alt="logo" class="desktop-logo">
            <img src="{{asset('assets/images/brand-logos/favicon.png')}}" alt="logo" class="toggle-dark">
            <img src="{{asset('assets/images/brand-logos/favicon.png')}}" alt="logo" class="desktop-white">
            <img src="{{asset('assets/images/brand-logos/favicon.png')}}" alt="logo" class="toggle-white">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg></div>
            <ul class="main-menu">

                <li class="slide__category"><span class="category-name">Home</span></li>
                <li class="slide">
                    <a href="{{route('admin.indexp')}}" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">Home</span>
                    </a>
                </li>

                              
                <li class="slide__category"><span class="category-name">News</span></li>               
                <li class="slide">
                    <a href="{{route('admin.newslist')}}" class="side-menu__item">
                        <i class="bi bi-newspaper  side-menu__icon"></i>
                        <span class="side-menu__label">News List</span>
                    </a>
                </li>
                    <li class="slide">
                        <a href="{{route('admin.newscreate')}}" class="side-menu__item">
                            <i class="bi bi-file-earmark-plus  side-menu__icon"></i>
                            <span class="side-menu__label">News Create</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="{{route('admin.newscommentlist')}}" class="side-menu__item">
                            <i class="bi bi-file-earmark-plus  side-menu__icon"></i>
                            <span class="side-menu__label">News Comment List</span>
                        </a>
                    </li>

                <li class="slide__category"><span class="category-name">Blog</span></li>               
                <li class="slide">
                    <a href="{{route('admin.bloglistshow')}}" class="side-menu__item">
                        <i class="fa-solid fa-blog  side-menu__icon"></i>
                        <span class="side-menu__label">Blog List</span>
                    </a>
                </li>
                    <li class="slide">
                        <a href="{{route('admin.blogscreate')}}" class="side-menu__item">
                            <i class="fa-solid fa-file-circle-plus  side-menu__icon"></i>
                            <span class="side-menu__label">Blog Create</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="{{route('admin.blogcommentlist')}}" class="side-menu__item">
                            <i class="bi bi-file-earmark-plus  side-menu__icon"></i>
                            <span class="side-menu__label">Blog Comment List</span>
                        </a>
                    </li>

               

                

               
        

                @php
               
               if (session('admintype')== 'superadmin') {
                @endphp

                <li class="slide__category"><span class="category-name">Storepick</span></li>   
                    <li class="slide">
                        <a href="{{route('admin.storepickpage')}}" class="side-menu__item">
                            <i class="fa-solid fa-store side-menu__icon"></i> 
                            <span class="side-menu__label">StorePick List</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="{{route('admin.storepickadd')}}" class="side-menu__item">
                            <i class="fa-solid fa-puzzle-piece side-menu__icon"></i>
                            <span class="side-menu__label">StorePick Add</span>
                        </a>
                    </li>

                <li class="slide__category"><span class="category-name">Customers</span></li>               
                <li class="slide">
                    <a href="{{route('customer.show')}}" class="side-menu__item">
                        <i class="bi bi-people side-menu__icon"></i>
                        <span class="side-menu__label">Customers List</span>
                    </a>
                </li>
                   

                <li class="slide__category"><span class="category-name">User</span></li>               
                <li class="slide">
                    <a href="{{route('admin.useradminpage')}}" class="side-menu__item">
                        <i class="fa-solid fa-blog  side-menu__icon"></i>
                        <span class="side-menu__label">User List</span>
                    </a>
                </li>
                    <li class="slide">
                        <a href="{{route('admin.useradmincreate')}}" class="side-menu__item">
                            <i class="fa-solid fa-file-circle-plus  side-menu__icon"></i>
                            <span class="side-menu__label">User Create</span>
                        </a>
                    </li>

                    <li class="slide__category"><span class="category-name">Key</span></li>

                        <li class="slide">
                            <a href="{{route('key.show')}}" class="side-menu__item">
                                <i class="bi bi-key-fill side-menu__icon"></i>
                                <span class="side-menu__label">Key List</span>
                            </a>
                        </li>
                        <li class="slide">
                            <a href="{{route('key.add')}}" class="side-menu__item">
                                <i class="bi bi-filetype-key side-menu__icon"></i>
                                <span class="side-menu__label">Key Add</span>
                            </a>
                        </li>

                <li class="slide__category"><span class="category-name">Plan</span></li>

                    <li class="slide">
                        <a href="{{route('plan.listshow')}}" class="side-menu__item">
                            <i class="bi bi-view-list side-menu__icon"></i>
                            <span class="side-menu__label">Plan List</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="{{route('plan.plancreate')}}" class="side-menu__item">
                            <i class="bi bi-bag-plus-fill side-menu__icon"></i>
                            <span class="side-menu__label">Plan Create</span>
                        </a>
                    </li>

                    <li class="slide__category"><span class="category-name">Plan Details</span></li>

                    <li class="slide">
                        <a href="{{route('plan.detailsshow')}}" class="side-menu__item">
                            <i class="bi bi-list-stars side-menu__icon"></i>
                            <span class="side-menu__label">Plan Details</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="{{route('plan.plandetailscreate')}}" class="side-menu__item">
                            <i class="bi bi-node-plus-fill side-menu__icon"></i>
                            <span class="side-menu__label">Plan Details Create</span>
                        </a>
                    </li>
                    <li class="slide__category"><span class="category-name">All Payment Details</span></li>
                    <li class="slide">
                        <a href="{{route('pay.allpaymentshow')}}" class="side-menu__item">
                            <i class="fa-solid fa-location-dot side-menu__icon"></i>
                            <span class="side-menu__label">All Payment</span>
                        </a>
                    </li>

                    <li class="slide__category"><span class="category-name">Payment Details</span></li>

                    <li class="slide">
                        <a href="{{route('pay.vpnpayshow')}}" class="side-menu__item">
                            <i class="fa-solid fa-location-dot side-menu__icon"></i>
                            <span class="side-menu__label">Vpn shield Payment</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="{{route('pay.antiviruspayshow')}}" class="side-menu__item">
                            <i class="fa-solid fa-file-shield  side-menu__icon"></i>
                            <span class="side-menu__label">Antivirus Payment</span>
                        </a>
                    </li>

                    <li class="slide__category"><span class="category-name">Visitor Details</span></li>

                    <li class="slide">
                        <a href="{{route('user.visitor_traffic')}}" class="side-menu__item">
                            <i class="fa-solid fa-location-dot side-menu__icon"></i>
                            <span class="side-menu__label">Visitor Traffic</span>
                        </a>
                    </li>

                    <li class="slide__category"><span class="category-name">Event</span></li>

                    <li class="slide">
                        <a href="{{route('user.eventlist')}}" class="side-menu__item">
                            <i class="fa-solid fa-location-dot side-menu__icon"></i>
                            <span class="side-menu__label">Event List</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="{{route('user.addevent')}}" class="side-menu__item">
                            <i class="fa-solid fa-location-dot side-menu__icon"></i>
                            <span class="side-menu__label">Add Event</span>
                        </a>
                    </li>
                   
                @php
                }
                @endphp
            
               


            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
            </div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>