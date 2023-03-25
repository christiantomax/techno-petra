@php
    $current_page = '| Admin'
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('/internal/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href={{url('/internal/logo-ukp.jpg')}}>
    <title>Techno | News</title>
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

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ url('src/plugins/src/flatpickr/flatpickr.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('src/plugins/src/noUiSlider/nouislider.min.css') }}" rel="stylesheet" type="text/css">
    <!-- END THEME GLOBAL STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ url('src/assets/css/light/components/modal.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/assets/css/dark/components/modal.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ url('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ url('src/plugins/css/light/editors/markdown/simplemde.min.css') }}">

    <link href="{{ url('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ url('src/plugins/css/dark/editors/markdown/simplemde.min.css') }}">

    <link href="{{ url('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/plugins/css/light/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css">


    <link href="{{ url('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/plugins/css/dark/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ url('src/plugins/src/filepond/filepond.min.css') }}">
    <link rel="stylesheet" href="{{ url('src/plugins/src/filepond/FilePondPluginImagePreview.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/src/tagify/tagify.css">') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('src/assets/css/light/forms/switches.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/css/light/editors/quill/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/css/light/tagify/custom-tagify.css') }}">
    <link href="{{ url('src/plugins/css/light/filepond/custom-filepond.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ url('src/assets/css/dark/forms/switches.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/css/dark/editors/quill/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/css/dark/tagify/custom-tagify.css') }}">
    <link href="{{ url('src/plugins/css/dark/filepond/custom-filepond.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" href="{{ url('src/assets/css/light/apps/ecommerce-create.css') }}">
    <link rel="stylesheet" href="{{ url('src/assets/css/dark/apps/ecommerce-create.css') }}">
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
            @include('public.sidebar')
        </div>

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">

            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                <li class="breadcrumb-item"><a href="#">Setting</a></li>
                                <li class="breadcrumb-item active" aria-current="page">News</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->

                    <div class="row mb-4 layout-spacing layout-top-spacing">
                        @include('public.modal')

                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                            <div class="widget-content widget-content-area ecommerce-create-section">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="year" class="form-label">Year</label>
                                        <input type="number" class="form-control" id="year">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Semester" class="form-label">Semester</label>
                                        <select id="Semester" class="form-select">
                                            <option selected>ganjil</option>
                                            <option>genap</option>
                                        </select>
                                    </div>
                                    <div class="col-6 mt-4">
                                        <label for="start-date-news" class="form-label">Start Date News</label>
                                        <input id="start-date-news" value="2022-09-19 12:00" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                                    </div>
                                    <div class="col-6  mt-4">
                                        <label for="end-date-news" class="form-label">End Date News</label>
                                        <input id="end-date-news" value="2022-09-19 12:00" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                                    </div>
                                    <div class="col-12 mt-4">
                                        <label for="content2" class="form-label">Message</label>
                                        <textarea id="content2"></textarea>
                                    </div>
                                    <div class="form-check form-switch form-check-inline form-switch-primary col-6 mt-4">
                                        <input class="form-check-input" type="checkbox" role="switch" id="form-switch-primary">
                                        <label class="form-check-label" for="form-switch-primary">Active</label>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
                    <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank" href="https://qubick.id">Qubick</a>, All rights reserved.</p>
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
    <script src="{{ url('src/plugins/src/perfect-scrollbarperfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/waves/waves.min.js') }}"></script>
    <script src="{{ url('layouts/vertical-light-menu/app.js') }}"></script>

    <script src="{{ url('src/plugins/src/highlight/highlight.pack.js') }}"></script>
    <script src="{{ url('src/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ url('src/plugins/src/editors/quill/quill.js') }}"></script>
    <script src="{{ url('src/plugins/src/filepond/filepond.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/filepond/FilePondPluginFileValidateType.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/filepond/FilePondPluginImagePreview.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/filepond/FilePondPluginImageCrop.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/filepond/FilePondPluginImageResize.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/filepond/FilePondPluginImageTransform.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/filepond/filepondPluginFileValidateSize.min.js') }}"></script>

    <script src="{{ url('src/plugins/src/tagify/tagify.min.js') }}"></script>
    <script src="{{ url('src/assets/js/apps/ecommerce-create.js') }}"></script>


    <script src="{{ url('src/assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ url('src/plugins/src/flatpickr/flatpickr.js') }}"></script>

    <script src="{{ url('src/plugins/src/editors/markdown/simplemde.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/editors/markdown/custom-markdown.js') }}"></script>

    <script src="{{ url('src/plugins/src/flatpickr/custom-flatpickr.js') }}"></script>

    <script>
        var f1 = flatpickr(document.getElementById('start-date-news'), {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
        var f1 = flatpickr(document.getElementById('end-date-news'), {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
        // Autosaving
        new SimpleMDE({
            element: document.getElementById("content2"),
            spellChecker: false,
            autosave: {
                enabled: true,
                unique_id: "content2",
            },
        });

        ecommerce.addFiles('../src/assets/img/product-1.jpg', '../src/assets/img/product-3.jpg', '../src/assets/img/product-5.jpg');
    </script>

    @include('public.login-check')
    <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>
