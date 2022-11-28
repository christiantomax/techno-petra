@php
    $current_page = '| Exhibition'
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('/internal/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href={{url('/internal/logo-ukp.jpg')}}>
    <title>Techno | {{$collections[0]->name}}</title>
    <link rel="icon" type="image/x-icon" href="{{ url('src/assets/img/favicon.ico') }}"/>
    <link href="{{ url('layouts/vertical-light-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('layouts/vertical-light-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ url('layouts/vertical-light-menu/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ url('src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('layouts/vertical-light-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('layouts/vertical-light-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ url('src/assets/css/light/components/modal.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/assets/css/dark/components/modal.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/css/light/editors/quill/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/css/dark/editors/quill/quill.snow.css') }}">

    <link rel="stylesheet" href="{{ url('src/plugins/src/filepond/filepond.min.css') }}">
    <link rel="stylesheet" href="{{ url('src/plugins/src/filepond/FilePondPluginImagePreview.min.css') }}">

    <link href="{{ url('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/plugins/css/light/filepond/custom-filepond.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ url('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/plugins/css/dark/filepond/custom-filepond.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ url('src/plugins/css/dark/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/plugins/css/light/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ url('src/plugins/src/sweetalerts2/sweetalerts2.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/src/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/src/glightbox/glightbox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/src/splide/splide.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('src/assets/css/light/components/tabs.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/assets/css/light/apps/ecommerce-details.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('src/assets/css/dark/components/tabs.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/assets/css/dark/apps/ecommerce-details.css') }}">

    <link
        href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet"
    />
    <!-- END PAGE LEVEL STYLES -->
</head>
<body class="layout-boxed">

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
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
            @include('public.sidebar')
        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="container">

                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Exhibition</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Team Name</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->

                    <div class="row layout-top-spacing">
                        @include('public.modal')

                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">

                            <div class="widget-content widget-content-area br-8">

                                <div class="row justify-content-center">
                                    <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-7 col-sm-9 col-12 pe-3">
                                        <!-- Swiper -->
                                        <div id="main-slider" class="splide">
                                            <div class="splide__track">
                                                    <ul class="splide__list">
                                                        @if (isset($collections[0]->thumbnail))
                                                        <li class="splide__slide">
                                                            <a href="{{$collections[0]->thumbnail}}" class="glightbox">
                                                                <img alt="project-preview" style="object-fit: contain;" class="img-thumbnail" src="{{$collections[0]->thumbnail}}">
                                                            </a>
                                                        </li>
                                                        @endif
                                                        <?php
                                                            $temp = rtrim($collections[0]->imageGallery, ", ");
                                                            $temp = explode(", ", $temp);
                                                            for ($i=0; $i < count($temp) ; $i++) {
                                                                echo '
                                                                    <li class="splide__slide">
                                                                        <a href="'.$temp[$i].'" class="glightbox">
                                                                            <img alt="project-preview" style="object-fit: contain;" class="img-thumbnail" src="'.$temp[$i].'">
                                                                        </a>
                                                                    </li>
                                                                ';
                                                            }
                                                        ?>
                                                    </ul>
                                            </div>
                                            </div>

                                            <div id="thumbnail-slider" class="splide">
                                            <div class="splide__track">
                                                    <ul class="splide__list">
                                                        @if (isset($collections[0]->thumbnail))
                                                        <li class="splide__slide"><img style="object-fit: contain;" class="img-thumbnail" alt="project-preview" src="{{$collections[0]->thumbnail}}"></li>
                                                        @endif
                                                        <?php
                                                            $temp = rtrim($collections[0]->imageGallery, ", ");
                                                            $temp = explode(", ", $temp);
                                                            for ($i=0; $i < count($temp) ; $i++) {
                                                                echo '<li class="splide__slide"><img style="object-fit: contain;" class="img-thumbnail" alt="project-preview" src="'.$temp[$i].'"></li>';
                                                            }
                                                        ?>
                                                    </ul>
                                            </div>
                                            </div>

                                    </div>

                                    <div class="col-xxl-4 col-xl-5 col-lg-12 col-md-12 col-12 mt-xl-0 mt-5 align-self-center">

                                        <div class="product-details-content">

                                            <span class="badge badge-light-primary mb-3">
                                                Technopreneurship {{$collections[0]->year}}
                                                @if ($collections[0]->semester == 1)
                                                    Ganjil
                                                @else
                                                    Genap
                                                @endif
                                            </span>

                                            <div class="d-flex justify-content-between">
                                                <h3 class="product-title mb-0">{{$collections[0]->name}}</h3>
                                                <button class="btn btn-light-success btn-icon btn-rounded" id="btn-share-project">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                                </button>
                                            </div>

                                            <div class="review mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                                                <span class="rating-score">200 Votes</span>
                                            </div>

                                            <hr class="mb-4">
                                            <h5><strong>Category</strong></h5>
                                            <?php
                                                $temp = rtrim($collections[0]->categories, ", ");
                                                $temp = explode(", ", $temp);
                                                for ($i=0; $i < count($temp) ; $i++) {
                                                    echo '<button type="button" class="btn btn-primary btn-sm me-1 text-white">'.$temp[$i].'</button>';
                                                }
                                            ?>

                                            <hr class="mb-4">
                                            <h5><strong>Description</strong></h5>
                                            <hr/>
                                            <div class="mb-5" id="quill-description"></div>


                                            <hr class="mb-5 mt-4">

                                            <div class="action-button text-center">

                                                <div class="row">

                                                    <div class="col-xxl-12 col-xl-12 col-sm-12 mb-sm-12 mb-3">
                                                        <button class="btn btn-primary w-100 btn-lg"><span class="btn-text-inner">Vote</span></button>
                                                    </div>

                                                </div>

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

                                        <div id="iconsAccordion" class="accordion-icons accordion">

                                            <div class="card" style="cursor: pointer;">
                                                <div class="card-header bg-transparent border-0" id="headingOne1">
                                                    <section class="mb-0 mt-0">
                                                        <div role="menu" class="collapsed d-flex justify-content-between" data-bs-toggle="collapse" data-bs-target="#accordion-team-member" aria-expanded="false" aria-controls="accordion-team-member">
                                                            <div class="accordion-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                                <span class="ms-3">Team Member</span>
                                                            </div>
                                                            <div class="icons">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>

                                                <div id="accordion-team-member" class="collapse" aria-labelledby="headingOne1" data-bs-parent="#iconsAccordion">
                                                    <div class="card-body">
                                                        <div class="row mx-2">
                                                            <div class="col-md-12">
                                                                <div id="quill-team-member">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @if (isset($collections[0]->livePreview) && $collections[0]->livePreview != null)
                                                <div class="card" style="cursor: pointer;">
                                                    <div class="card-header bg-transparent border-0">
                                                        <a href="{{$collections[0]->livePreview}}" target="_blank">
                                                            <section class="mb-0 mt-0">
                                                                <div role="menu" class="collapsed d-flex justify-content-between" data-bs-toggle="collapse" data-bs-target="#accordion-preview" aria-expanded="false" aria-controls="accordion-preview">
                                                                    <div class="accordion-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cast"><path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2.01" y2="20"></line></svg>
                                                                        <span class="ms-3">Live Project Preview</span>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif

                                            @if (isset($collections[0]->youtube) && $collections[0]->youtube != null)
                                                <div class="card" style="cursor: pointer;">
                                                    <div class="card-header bg-transparent border-0" id="headingOne2">
                                                        <section class="mb-0 mt-0">
                                                            <div role="menu" class="collapsed d-flex justify-content-between" data-bs-toggle="collapse" data-bs-target="#accordion-youtube" aria-expanded="false" aria-controls="accordion-youtube">
                                                                <div class="accordion-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
                                                                    <span class="ms-3">Youtube</span>
                                                                </div>
                                                                <div class="icons">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>

                                                    <div id="accordion-youtube" class="collapse" aria-labelledby="headingOne2" data-bs-parent="#iconsAccordion">
                                                        <div class="card-body">
                                                            <div class="row mx-2">
                                                                <div class="col-md-12">
                                                                    <?php
                                                                        $temp = explode("v=", $collections[0]->youtube);
                                                                    ?>
                                                                    <iframe style="width: 100%; height: 65vh;"
                                                                        src="https://www.youtube.com/embed/<?= $temp[count($temp)-1]?>">
                                                                    </iframe>
                                                                    <a href="{{$collections[0]->youtube}}" target="_blank">
                                                                        <button type="button" class="btn btn-primary btn-sm me-1 text-white d-sm-flex d-lg-none">Direct Video to Youtube</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                            @if (isset($collections[0]->proposal) && $collections[0]->proposal != null)
                                                <div class="card" style="cursor: pointer;">
                                                    <div class="card-header bg-transparent border-0" id="headingOne3">
                                                        <section class="mb-0 mt-0">
                                                            <div role="menu" class="collapsed d-flex justify-content-between" data-bs-toggle="collapse" data-bs-target="#accordion-proposal" aria-expanded="false" aria-controls="accordion-proposal">
                                                                <div class="accordion-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                                    <span class="ms-3">Proposal</span>
                                                                </div>
                                                                <div class="icons">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>

                                                    <div id="accordion-proposal" class="collapse" aria-labelledby="headingOne3" data-bs-parent="#iconsAccordion">
                                                        <div class="card-body">
                                                            <div class="row mx-2">
                                                                <div class="col-md-12">
                                                                        <embed type="application/pdf" class="d-md-flex d-none" src="{{$collections[0]->proposal}}" style="width: 100%; height: 85vh;"></embed>
                                                                        <a href="{{$collections[0]->proposal}}" target="_blank">
                                                                            <button type="button" class="btn btn-primary btn-sm me-1 text-white d-sm-flex d-lg-none">Download Proposal</button>
                                                                        </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

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

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ url('src/plugins/src/global/vendors.min.js') }}"></script>
    <script src="{{ url('src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/waves/waves.min.js') }}"></script>
    <script src="{{ url('layouts/vertical-light-menu/app.js') }}"></script>
    <script src="{{ url('src/plugins/src/highlight/highlight.pack.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src={{ url('src/assets/js/scrollspyNav.js') }}></script>
    <script src="{{ url('src/plugins/src/editors/quill/quill.js') }}"></script>


    <script src="{{ url('src/plugins/src/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/glightbox/glightbox.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/splide/splide.min.js') }}"></script>
    <script src="{{ url('src/assets/js/apps/ecommerce-details.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- END PAGE LEVEL PLUGINS -->
    <script>
        $('#btn-share-project').on('click', () => {
            if (navigator.share) {
                navigator.share({
                    text: <?php echo '"Take a look at this, Technopreneurship Petra Project '.$collections[0]->name.'"';?>,
                    url: '{{ url()->current() }}',
                })
                .then(() => console.log('Successful share'))
                .catch((error) => console.log('Error sharing', error));
            } else {
                console.log('Share not supported on this browser, do it the old way.');
            }
        });

        function quillGetHTML(inputDelta, divSelection) {
            var tempCont = document.createElement("div");
            (new Quill(tempCont)).setContents(inputDelta);
            // console.log(tempCont.getElementsByClassName("ql-editor")[0].innerHTML);
            $(divSelection).html(tempCont.getElementsByClassName("ql-editor")[0].innerHTML);
        }
        quillGetHTML(<?php echo $collections[0]->member;?>, "#quill-team-member");
        quillGetHTML(<?php echo $collections[0]->description;?>, "#quill-description");
    </script>

    @include('public.login-check')
</body>
</html>
