<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('/internal/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href={{url('/internal/logo-ukp.jpg')}}>
    <title>Ecommerce Product Details | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="../src/assets/img/favicon.ico"/>
    <link href="{{ url('layouts/vertical-light-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('layouts/vertical-light-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ url('layouts/vertical-light-menu/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ url('src/bootstrap/css/bootstrap.min.css') }}"" rel="stylesheet" type="text/css" />
    <link href="{{ url('layouts/vertical-light-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('layouts/vertical-light-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ url('src/assets/css/light/components/accordions.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('src/assets/css/dark/components/accordions.css') }}" rel="stylesheet" type="text/css">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/src/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/src/glightbox/glightbox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/src/splide/splide.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('src/assets/css/light/components/tabs.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/assets/css/light/apps/ecommerce-details.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('src/assets/css/dark/components/tabs.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/assets/css/dark/apps/ecommerce-details.css') }}">
    <!--  END CUSTOM STYLE FILE  -->
</head>
<body class="">

    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('public.topbar')
    <!--  END NAVBAR  -->
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">

                <div class="navbar-nav theme-brand flex-row  text-center">
                    <div class="nav-logo">
                        <div class="nav-item theme-logo">
                            <a href="./index.html">
                                <img src="../src/assets/img/logo.svg" class="navbar-logo" alt="logo">
                            </a>
                        </div>
                        <div class="nav-item theme-text">
                            <a href="./index.html" class="nav-link"> CORK </a>
                        </div>
                    </div>
                    <div class="nav-item sidebar-toggle">
                        <div class="btn-toggle sidebarCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                        </div>
                    </div>
                </div>
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./index.html"> Analytics </a>
                            </li>
                            <li>
                                <a href="./index2.html"> Sales </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>APPLICATIONS</span></div>
                    </li>

                    <li class="menu">
                        <a href="./app-calendar.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span>Calendar</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="./app-chat.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                <span>Chat</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="./app-mailbox.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                <span>Mailbox</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="./app-todoList.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                <span>Todo List</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="./app-notes.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                <span>Notes</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="./app-scrumboard.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
                                <span>Scrumboard</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="./app-contacts.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                <span>Contacts</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#invoice" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                <span>Invoice</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="invoice" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./app-invoice-list.html"> List </a>
                            </li>
                            <li>
                                <a href="./app-invoice-preview.html"> Preview </a>
                            </li>
                            <li>
                                <a href="./app-invoice-add.html"> Add </a>
                            </li>
                            <li>
                                <a href="./app-invoice-edit.html"> Edit </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu active">
                        <a href="#ecommerce" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                <span>Ecommerce</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled show" id="ecommerce" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./app-ecommerce-product-shop.html"> Shop </a>
                            </li>
                            <li class="active">
                                <a href="./app-ecommerce-product.html"> Product </a>
                            </li>
                            <li>
                                <a href="./app-ecommerce-product-list.html"> List </a>
                            </li>
                            <li>
                                <a href="./app-ecommerce-product-add.html"> Create </a>
                            </li>
                            <li>
                                <a href="./app-ecommerce-product-edit.html"> Edit </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#blog" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                                <span>Blog</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="blog" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./app-blog-grid.html"> Grid </a>
                            </li>
                            <li>
                                <a href="./app-blog-list.html"> List </a>
                            </li>
                            <li>
                                <a href="./app-blog-post.html"> Post </a>
                            </li>
                            <li>
                                <a href="./app-blog-create.html"> Create </a>
                            </li>
                            <li>
                                <a href="./app-blog-edit.html"> Edit </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>USER INTERFACE</span></div>
                    </li>

                    <li class="menu">
                        <a href="#components" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                <span>Components</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./component-tabs.html"> Tabs </a>
                            </li>
                            <li>
                                <a href="./component-accordion.html"> Accordions  </a>
                            </li>
                            <li>
                                <a href="./component-modal.html"> Modals </a>
                            </li>
                            <li>
                                <a href="./component-cards.html"> Cards </a>
                            </li>
                            <li>
                                <a href="./component-bootstrap-carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="./component-splide.html">Splide</a>
                            </li>
                            <li>
                                <a href="./component-sweetalert.html"> Sweet Alerts </a>
                            </li>
                            <li>
                                <a href="./component-timeline.html"> Timeline </a>
                            </li>
                            <li>
                                <a href="./component-notifications.html"> Notifications </a>
                            </li>
                            <li>
                                <a href="./component-media-object.html"> Media Object </a>
                            </li>
                            <li>
                                <a href="./component-list-group.html"> List Group </a>
                            </li>
                            <li>
                                <a href="./component-pricing-table.html"> Pricing Tables </a>
                            </li>
                            <li>
                                <a href="./component-lightbox.html"> Lightbox </a>
                            </li>
                            <li>
                                <a href="./component-drag-drop.html"> Drag and Drop </a>
                            </li>
                            <li>
                                <a href="./component-fonticons.html"> Font Icons </a>
                            </li>
                            <li>
                                <a href="./component-flags.html"> Flag Icons </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#elements" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                <span>Elements</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="elements" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./element-alerts.html"> Alerts </a>
                            </li>
                            <li>
                                <a href="./element-avatar.html"> Avatar </a>
                            </li>
                            <li>
                                <a href="./element-badges.html"> Badges </a>
                            </li>
                            <li>
                                <a href="./element-breadcrumbs.html"> Breadcrumbs </a>
                            </li>
                            <li>
                                <a href="./element-buttons.html"> Buttons </a>
                            </li>
                            <li>
                                <a href="./element-buttons-group.html"> Button Groups </a>
                            </li>
                            <li>
                                <a href="./element-color-library.html"> Color Library </a>
                            </li>
                            <li>
                                <a href="./element-dropdown.html"> Dropdown </a>
                            </li>
                            <li>
                                <a href="./element-infobox.html"> Infobox </a>
                            </li>
                            <li>
                                <a href="./element-loader.html"> Loader </a>
                            </li>
                            <li>
                                <a href="./element-pagination.html"> Pagination </a>
                            </li>
                            <li>
                                <a href="./element-popovers.html"> Popovers </a>
                            </li>
                            <li>
                                <a href="./element-progressbar.html"> Progress Bar </a>
                            </li>
                            <li>
                                <a href="./element-search.html"> Search </a>
                            </li>
                            <li>
                                <a href="./element-tooltips.html"> Tooltips </a>
                            </li>
                            <li>
                                <a href="./element-treeview.html"> Treeview </a>
                            </li>
                            <li>
                                <a href="./element-typography.html"> Typography </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="./map-leaflet.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                                <span>Maps</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="./charts-apex.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                                <span>Charts</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="./widgets.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                                <span>Widgets</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#layouts" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                                <span>Layouts</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="layouts" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./layout-blank-page.html"> Blank Page </a>
                            </li>
                            <li>
                                <a href="./layout-empty.html"> Empty Page </a>
                            </li>
                            <li>
                                <a href="./layout-full-width.html"> Full Width </a>
                            </li>
                            <li>
                                <a href="./layout-collapsible-menu.html"> Collapsed Menu </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>TABLES AND FORMS</span></div>
                    </li>

                    <li class="menu">
                        <a href="./table-basic.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                                <span>Tables</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#datatables" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                <span>DataTables</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="datatables" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./table-datatable-basic.html"> Basic </a>
                            </li>
                            <li>
                                <a href="./table-datatable-striped-table.html"> Striped </a>
                            </li>
                            <li>
                                <a href="./table-datatable-custom.html"> Custom </a>
                            </li>
                            <li>
                                <a href="./table-datatable-miscellaneous.html"> Miscellaneous </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#forms" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                <span>Forms</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="forms" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./form-bootstrap-basic.html"> Basic </a>
                            </li>
                            <li>
                                <a href="./form-input-group-basic.html"> Input Group </a>
                            </li>
                            <li>
                                <a href="./form-layouts.html"> Layouts </a>
                            </li>
                            <li>
                                <a href="./form-validation.html"> Validation </a>
                            </li>
                            <li>
                                <a href="./form-input-mask.html"> Input Mask </a>
                            </li>
                            <li>
                                <a href="./form-tom-select.html"> Tom Select </a>
                            </li>
                            <li>
                                <a href="./form-tagify.html"> Tagify </a>
                            </li>
                            <li>
                                <a href="./form-bootstrap-touchspin.html"> TouchSpin </a>
                            </li>
                            <li>
                                <a href="./form-maxlength.html"> Maxlength </a>
                            </li>
                            <li>
                                <a href="./form-checkbox.html"> Checkbox </a>
                            </li>
                            <li>
                                <a href="./form-radio.html"> Radio </a>
                            </li>
                            <li>
                                <a href="./form-switches.html"> Switches </a>
                            </li>
                            <li>
                                <a href="./form-wizard.html"> Wizards </a>
                            </li>
                            <li>
                                <a href="./form-fileupload.html"> File Upload </a>
                            </li>
                            <li>
                                <a href="./form-quill.html"> Quill Editor </a>
                            </li>
                            <li>
                                <a href="./form-markdown.html"> Markdown Editor </a>
                            </li>
                            <li>
                                <a href="./form-date-time-picker.html"> Date Time Picker </a>
                            </li>
                            <li>
                                <a href="./form-slider.html"> Slider </a>
                            </li>
                            <li>
                                <a href="./form-clipboard.html"> Clipboard </a>
                            </li>
                            <li>
                                <a href="./form-autoComplete.html"> Auto Complete </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>USER AND PAGES</span></div>
                    </li>

                    <li class="menu">
                        <a href="#users" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>Users</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="users" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./user-profile.html"> Profile </a>
                            </li>
                            <li>
                                <a href="./user-account-settings.html"> Account Settings </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#pages" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span>Pages</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="pages" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./pages-knowledge-base.html"> Knowledge Base </a>
                            </li>
                            <li>
                                <a href="./pages-faq.html"> FAQ </a>
                            </li>
                            <li>
                                <a href="./pages-contact-us.html"> Contact Form </a>
                            </li>
                            <li>
                                <a href="./pages-error404.html" target="_blank"> Error </a>
                            </li>
                            <li>
                                <a href="./pages-maintenence.html" target="_blank"> Maintanence </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#authentication" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <span>Authentication</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="authentication" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./auth-boxed-signin.html" target="_blank"> Sign In </a>
                            </li>
                            <li>
                                <a href="./auth-boxed-signup.html" target="_blank"> Sign Up </a>
                            </li>
                            <li>
                                <a href="./auth-boxed-lockscreen.html" target="_blank"> Unlock </a>
                            </li>
                            <li>
                                <a href="./auth-boxed-password-reset.html" target="_blank"> Reset </a>
                            </li>
                            <li>
                                <a href="./auth-boxed-2-step-verification.html" target="_blank"> 2 Step </a>
                            </li>
                            <li>
                                <a href="./auth-cover-signin.html" target="_blank"> Sign In Cover </a>
                            </li>
                            <li>
                                <a href="./auth-cover-signup.html" target="_blank"> Sign Up Cover </a>
                            </li>
                            <li>
                                <a href="./auth-cover-lockscreen.html" target="_blank"> Unlock Cover </a>
                            </li>
                            <li>
                                <a href="./auth-cover-password-reset.html" target="_blank"> Reset Cover </a>
                            </li>
                            <li>
                                <a href="./auth-cover-2-step-verification.html" target="_blank"> 2 Step Cover </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>MISCELLANEOUS</span></div>
                    </li>

                    <li class="menu">
                        <a href="#menuLevel1" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                                <span>Item Level</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="menuLevel1" data-bs-parent="#accordionExample">
                            <li>
                                <a href="javascript:void(0);"> Item Level 1a </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> Item Level 1b </a>
                            </li>

                            <li>
                                <a href="#level-three" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed"> Item Level 1c <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="level-three" data-bs-parent="#pages">
                                    <li>
                                        <a href="javascript:void(0);"> Item Level 2a </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"> Item Level 2b </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"> Item Level 2c </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="javascript:void(0);" aria-expanded="false" class="dropdown-toggle disabled">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                                <span>Item Disabled</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="javascript:void(0);" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                                <span>Item Label</span>
                                <span class="badge badge-primary sidebar-label"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle badge-icon"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg> New</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a target="_blank" href="../../documentation/index.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                <span>Documentation</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a target="_blank" href="../../documentation/changelog.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hash"><line x1="4" y1="9" x2="20" y2="9"></line><line x1="4" y1="15" x2="20" y2="15"></line><line x1="10" y1="3" x2="8" y2="21"></line><line x1="16" y1="3" x2="14" y2="21"></line></svg>
                                <span>Changelog</span>
                            </div>
                        </a>
                    </li>

                </ul>

            </nav>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">

            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">App</a></li>
                                <li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Details</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->

                    <div class="row layout-top-spacing">

                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">

                            <div class="widget-content widget-content-area br-8">

                                <div class="row justify-content-center">
                                    <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-7 col-sm-9 col-12 pe-3">
                                        <!-- Swiper -->
                                        <div id="main-slider" class="splide">
                                            <div class="splide__track">
                                                    <ul class="splide__list">
                                                        <li class="splide__slide">
                                                            <a href="../src/assets/img/ecommerce-1.jpg" class="glightbox">
                                                                <img alt="ecommerce" src="../src/assets/img/ecommerce-1.jpg">
                                                            </a>
                                                        </li>
                                                        <li class="splide__slide">
                                                            <a href="../src/assets/img/ecommerce-2.jpg" class="glightbox">
                                                                <img alt="ecommerce" src="../src/assets/img/ecommerce-2.jpg">
                                                            </a>
                                                        </li>
                                                        <li class="splide__slide">
                                                            <a href="../src/assets/img/ecommerce-4.jpg" class="glightbox">
                                                                <img alt="ecommerce" src="../src/assets/img/ecommerce-4.jpg">
                                                            </a>
                                                        </li>
                                                        <li class="splide__slide">
                                                            <a href="../src/assets/img/ecommerce-5.jpg" class="glightbox">
                                                                <img alt="ecommerce" src="../src/assets/img/ecommerce-5.jpg">
                                                            </a>
                                                        </li>
                                                        <li class="splide__slide">
                                                            <a href="../src/assets/img/ecommerce-6.jpg" class="glightbox">
                                                                <img alt="ecommerce" src="../src/assets/img/ecommerce-6.jpg">
                                                            </a>
                                                        </li>
                                                    </ul>
                                            </div>
                                            </div>

                                            <div id="thumbnail-slider" class="splide">
                                            <div class="splide__track">
                                                    <ul class="splide__list">
                                                        <li class="splide__slide"><img alt="ecommerce" src="../src/assets/img/ecommerce-1.jpg"></li>
                                                        <li class="splide__slide"><img alt="ecommerce" src="../src/assets/img/ecommerce-2.jpg"></li>
                                                        <li class="splide__slide"><img alt="ecommerce" src="../src/assets/img/ecommerce-4.jpg"></li>
                                                        <li class="splide__slide"><img alt="ecommerce" src="../src/assets/img/ecommerce-5.jpg"></li>
                                                        <li class="splide__slide"><img alt="ecommerce" src="../src/assets/img/ecommerce-6.jpg"></li>
                                                    </ul>
                                            </div>
                                            </div>

                                    </div>

                                    <div class="col-xxl-4 col-xl-5 col-lg-12 col-md-12 col-12 mt-xl-0 mt-5 align-self-center">

                                        <div class="product-details-content">

                                            <span class="badge badge-light-danger mb-3">40% Sale off</span>

                                            <h3 class="product-title mb-0">Cotton T-Shit</h3>

                                            <div class="review mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <span class="rating-score">4.88 <span class="rating-count">(200 Reviews)</span></span>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-9 col-sm-9 col-9">

                                                    <div class="pricing">

                                                        <span class="discounted-price">$20</span>
                                                        <span class="regular-price">$30</span>

                                                    </div>

                                                </div>
                                                <div class="col-md-3 col-sm-3 col-3 text-end">
                                                    <div class="product-share">
                                                        <button class="btn btn-light-success btn-icon btn-rounded">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>

                                            <hr class="mb-4">

                                            <div class="row color-swatch mb-4">
                                                <div class="col-xl-3 col-lg-6 col-sm-6 align-self-center">Color</div>
                                                <div class="col-xl-9 col-lg-6 col-sm-6">
                                                    <div class="color-options text-xl-end">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row size-selector mb-4">
                                                <div class="col-xl-9 col-lg-6 col-sm-6 align-self-center">Size</div>
                                                <div class="col-xl-3 col-lg-6 col-sm-6 align-self-center">
                                                    <select class="form-select form-control-sm" aria-label="Default select example">
                                                        <option value="S">S</option>
                                                        <option value="M">M</option>
                                                        <option value="L" selected>L</option>
                                                        <option value="XL">XL</option>
                                                        <option value="2XL">2XL</option>
                                                    </select>
                                                    <a href="javascript:void(0);" class="product-helpers text-end d-block mt-2">Size Chart</a>
                                                </div>
                                            </div>

                                            <div class="row quantity-selector mb-4">
                                                <div class="col-xl-6 col-lg-6 col-sm-6 mt-sm-3">Quantity</div>
                                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                                    <input id="demo1" type="text" value="1" name="demo1">
                                                    <p class="text-danger product-helpers text-end mt-2">Low Stock</p>
                                                </div>
                                            </div>

                                            <hr class="mb-5 mt-4">

                                            <div class="action-button text-center">

                                                <div class="row">

                                                    <div class="col-xxl-7 col-xl-7 col-sm-6 mb-sm-0 mb-3">
                                                        <button class="btn btn-primary w-100 btn-lg"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg> <span class="btn-text-inner">Add To Cart</span></button>
                                                    </div>

                                                    <div class="col-xxl-5 col-xl-5 col-sm-6">
                                                        <button class="btn btn-success w-100 btn-lg">Buy Now</button>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="secure-info mt-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                                <p>Safe and Secure Payments. Easy returns. 100% Authentic products.</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">

                            <div class="widget-content widget-content-area br-8">

                                <div class="production-descriptions simple-pills">

                                    <div class="pro-des-content">

                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-8 col-lg-9 col-md-9 col-sm-12 mx-auto">
                                                <div class="product-reviews mb-5">

                                                    <div class="row">
                                                        <div class="col-sm-6 align-self-center">
                                                            <div class="reviews">
                                                                <h1 class="mb-0">4.88</h1>
                                                                <span>(200 reviews)</span>
                                                                <div class="stars mt-3 mb-sm-0 mb-4">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star empty-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="row review-progress mb-sm-1 mb-3">
                                                                <div class="col-sm-4">
                                                                    <p>5 Star</p>
                                                                </div>
                                                                <div class="col-sm-8 align-self-center">
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row review-progress mb-sm-1 mb-3">
                                                                <div class="col-sm-4">
                                                                    <p>4 Star</p>
                                                                </div>
                                                                <div class="col-sm-8 align-self-center">
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row review-progress mb-sm-1 mb-3">
                                                                <div class="col-sm-4">
                                                                    <p>3 Star</p>
                                                                </div>
                                                                <div class="col-sm-8 align-self-center">
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row review-progress mb-sm-1 mb-3">
                                                                <div class="col-sm-4">
                                                                    <p>2 Star</p>
                                                                </div>
                                                                <div class="col-sm-8 align-self-center">
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row review-progress mb-sm-1 mb-3">
                                                                <div class="col-sm-4">
                                                                    <p>1 Star</p>
                                                                </div>
                                                                <div class="col-sm-8 align-self-center">
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>


                                        <div id="iconsAccordion" class="accordion-icons accordion">

                                            <div class="card">
                                                <div class="card-header" id="headingTwo3">
                                                    <section class="mb-0 mt-0">
                                                        <div role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#iconAccordionTwo" aria-expanded="false" aria-controls="iconAccordionTwo">
                                                            <div class="accordion-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg></div>
                                                            Reviews  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                        </div>
                                                    </section>
                                                </div>
                                                <div id="iconAccordionTwo" class="collapse" aria-labelledby="headingTwo3" data-bs-parent="#iconsAccordion">
                                                    <div class="card-body">

                                                        <div class="row">

                                                            <div class="col-md-12 mx-auto">

                                                                <div class="media mb-4">
                                                                    <div class="avatar me-sm-4 mb-sm-0 me-0 mb-3">
                                                                        <img alt="avatar" src="../src/assets/img/profile-2.jpeg" class="rounded-circle">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading mb-1">Kelly Young</h4>
                                                                        <div class="stars">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                        </div>
                                                                        <div class="meta-tags">a min ago</div>
                                                                        <p class="media-text mt-2">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                                                    </div>
                                                                </div>

                                                                <div class="media mb-4">
                                                                    <div class="avatar me-sm-4 mb-sm-0 me-0 mb-3">
                                                                        <img alt="avatar" src="../src/assets/img/profile-4.jpeg" class="rounded-circle">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading mb-1">Mary McDonald</h4>
                                                                        <div class="stars">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                        </div>
                                                                        <div class="meta-tags">40 mins ago</div>
                                                                        <p class="media-text mt-2">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                                                    </div>
                                                                </div>

                                                                <div class="media mb-4">
                                                                    <div class="avatar me-sm-4 mb-sm-0 me-0 mb-3">
                                                                        <img alt="avatar" src="../src/assets/img/profile-21.jpeg" class="rounded-circle">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading mb-1">Oscar Garner</h4>
                                                                        <div class="stars">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star empty-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                        </div>
                                                                        <div class="meta-tags">1 hr ago</div>
                                                                        <p class="media-text mt-2">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                                                    </div>
                                                                </div>

                                                                <div class="media mb-4">
                                                                    <div class="avatar me-sm-4 mb-sm-0 me-0 mb-3">
                                                                        <img alt="avatar" src="../src/assets/img/profile-24.jpeg" class="rounded-circle">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading mb-1">Daisy Anderson</h4>
                                                                        <div class="stars">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                        </div>
                                                                        <div class="meta-tags">15 hrs ago</div>
                                                                        <p class="media-text mt-2">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                                                    </div>
                                                                </div>

                                                                <div class="media mb-4">
                                                                    <div class="avatar me-sm-4 mb-sm-0 me-0 mb-3">
                                                                        <img alt="avatar" src="../src/assets/img/profile-5.jpeg" class="rounded-circle">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading mb-1">Andy King</h4>
                                                                        <div class="stars">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                        </div>
                                                                        <div class="meta-tags">1 day ago</div>
                                                                        <p class="media-text mt-2">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                                                    </div>
                                                                </div>

                                                                <div class="media mb-4">
                                                                    <div class="avatar me-sm-4 mb-sm-0 me-0 mb-3">
                                                                        <img alt="avatar" src="../src/assets/img/profile-30.png" class="rounded-circle">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading mb-1">Andy King</h4>
                                                                        <div class="stars">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                        </div>
                                                                        <div class="meta-tags">2 days ago</div>
                                                                        <p class="media-text mt-2">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                                                    </div>
                                                                </div>

                                                                <div class="media mb-4">
                                                                    <div class="avatar me-sm-4 mb-sm-0 me-0 mb-3">
                                                                        <img alt="avatar" src="../src/assets/img/profile-34.jpeg" class="rounded-circle">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading mb-1">Shaun Park</h4>
                                                                        <div class="stars">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                        </div>
                                                                        <div class="meta-tags">a week ago</div>
                                                                        <p class="media-text mt-2">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                                                    </div>
                                                                </div>

                                                                <div class="media">
                                                                    <div class="avatar me-sm-4 mb-sm-0 me-0 mb-3">
                                                                        <img alt="avatar" src="../src/assets/img/profile-32.jpeg" class="rounded-circle">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading mb-1">Xavier</h4>
                                                                        <div class="stars">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star empty-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                        </div>
                                                                        <div class="meta-tags">2 weeks ago</div>
                                                                        <p class="media-text mt-2">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingOne3">
                                                    <section class="mb-0 mt-0">
                                                        <div role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#iconAccordionOne" aria-expanded="false" aria-controls="iconAccordionOne">
                                                            <div class="accordion-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></div>
                                                            Product Details  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                        </div>
                                                    </section>
                                                </div>

                                                <div id="iconAccordionOne" class="collapse" aria-labelledby="headingOne3" data-bs-parent="#iconsAccordion">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p class="mb-4">Flattering pleats silhouette sartorial cuffs luxurious pearl buttons fitted around the waist silver. Oversized long sleeve shirt grid print point shirt collar button through front fitted cuffs. Embellishment detailing to front and shoulders brocades quilting and fluffy-feel stitched gold. Tropical wrap front essential cut classic sartorial details feminine peplum-style shirt white. Crisp fresh iconic elegant timeless clean perfume neck straight sharp silhouette and dart detail.</p>
                                                                <p class="mb-5">Stripe shirts plain button-down collar short-sleeved three-color button navy top-fused collar. Tropical wrap front essential cut classic sartorial details feminine peplum-style shirt white. Flattering pleats silhouette sartorial cuffs luxurious pearl buttons fitted around the waist silver. Sophisticated kymono-style neckline satin finish manly cloth check black and red precious. Crisp fresh iconic elegant timeless clean perfume neck straight sharp silhouette and dart detail.</p>

                                                                <h5><strong>Packaging & Delivery</strong></h5>
                                                                <hr/>
                                                                <p class="mb-4">Sophisticated kymono-style neckline satin finish manly cloth check black and red precious. Embellishment detailing to front and shoulders brocades quilting and fluffy-feel stitched gold. Embroidered logo chest pocket locker loop button-flap breast pockets fastening jetted. Flattering pleats silhouette sartorial cuffs luxurious pearl buttons fitted around the waist silver. Cotton canvas chacket silk mixing classic quirky work wear primary colour cropped.</p>
                                                                <p class="mb-5">Duis vehicula lectus condimentum, tincidunt odio a, posuere magna. Aliquam vitae orci a metus volutpat sagittis. Quisque volutpat, nulla non efficitur aliquet, turpis felis fringilla sem, quis pellentesque erat diam sit amet mi.</p>

                                                                <h5><strong>Specifications</strong></h5>
                                                                <hr/>
                                                                <p class="mb-3">Etiam imperdiet nulla.</p>
                                                                <p class="mb-3">Maecenas fringilla posuere fringilla.</p>
                                                                <p class="mb-5">Crisp fresh iconic elegant timeless clean perfume neck straight sharp silhouette and dart detail. Sophisticated kymono-style neckline satin finish manly cloth check black and red precious. Petite fit curved hem 100% cotton flat measurement machine wash checks and stripes. Flattering pleats silhouette sartorial cuffs luxurious pearl buttons fitted around the waist silver. Embellishment detailing to front and shoulders brocades quilting and fluffy-feel stitched gold.</p>

                                                                <h5><strong>Material And Washing Instructions</strong></h5>
                                                                <hr/>
                                                                <p class="mb-3">Petite fit curved hem 100% cotton flat measurement machine wash checks and stripes. Embroidered logo chest pocket locker loop button-flap breast pockets fastening jetted. Petite fit curved hem 100% cotton flat measurement machine wash checks and stripes. Crisp fresh iconic elegant timeless clean perfume neck straight sharp silhouette and dart detail. Stripe shirts plain button-down collar short-sleeved three-color button navy top-fused collar.</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card">
                                                <div class="card-header" id="headingOne4">
                                                    <section class="mb-0 mt-0">
                                                        <div role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#iconAccordionFour" aria-expanded="false" aria-controls="iconAccordionFour">
                                                            <div class="accordion-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg></div>
                                                            Shipping Information  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                        </div>
                                                    </section>
                                                </div>

                                                <div id="iconAccordionFour" class="collapse" aria-labelledby="headingOne4" data-bs-parent="#iconsAccordion">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">

                                                                <h5><strong>Shipping methods</strong></h5>
                                                                <hr/>
                                                                <p class="mb-2">We ship with these shipping options:</p>
                                                                <p class="mb-5">Duis vehicula lectus condimentum, tincidunt odio a, posuere magna. Aliquam vitae orci a metus volutpat sagittis. Quisque volutpat, nulla non efficitur aliquet, turpis felis fringilla sem, quis pellentesque erat diam sit amet mi.</p>

                                                                <h5><strong>DHL Express</strong></h5>
                                                                <hr/>
                                                                <p class="mb-3"> Worldwide shipping with DHL Express and you'll get a tracking number for your order. All orders usually arrive within 1 business day in North American countries.</p>
                                                                <p class="mb-5">Please see estimated delivery information at checkout.</p>

                                                                <h5><strong>Local pickup in Washington</strong></h5>
                                                                <hr/>
                                                                <p class="mb-3">You can pickup your order from our office here in Washington. We will send you an E-mail when your order is ready for pickup. Please note: In the case of pickup orders, which need to be sent by US Post at the request of the customer, a processing fee of USD 10.00 will be charged in addition to the shipping costs.</p>

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

                </div>

            </div>

            <!--  BEGIN FOOTER  -->
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank" href="https://designreset.com/cork-admin/">Qubick</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
            <!--  END FOOTER  -->

        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="{{ url('src/plugins/src/global/vendors.min.js') }}"></script>
    <script src="{{ url('src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/waves/waves.min.js') }}"></script>
    <script src="{{ url('layouts/vertical-light-menu/app.js') }}"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ url('src/plugins/src/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/glightbox/glightbox.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/splide/splide.min.js') }}"></script>
    <script src="{{ url('src/assets/js/apps/ecommerce-details.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>
