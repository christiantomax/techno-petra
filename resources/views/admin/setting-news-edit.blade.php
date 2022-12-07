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
    <title>Techno | Edit News</title>
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

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ url('src/plugins/src/noUiSlider/nouislider.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ url('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/css/light/editors/quill/quill.snow.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/css/dark/editors/quill/quill.snow.css') }}">

    <link href="{{ url('src/plugins/src/flatpickr/flatpickr.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ url('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/plugins/css/light/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ url('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/plugins/css/dark/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ url('src/assets/css/light/components/modal.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/assets/css/dark/components/modal.css') }}" rel="stylesheet" type="text/css" />

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
                                <li class="breadcrumb-item"><a href="#">App</a></li>
                                <li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->

                    <div class="row mb-4 layout-spacing layout-top-spacing">
                        @include('public.modal')

                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="widget-content widget-content-area ecommerce-create-section">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="for" class="form-label">Message Notification For</label>
                                            <select id="for" class="form-select" name="for">
                                                <option value="2"
                                                    @if ($collections->news_for == 1)
                                                        selected
                                                    @endif
                                                    >Public</option>
                                                <option value="3"
                                                @if ($collections->news_for == 1)
                                                    selected
                                                @endif
                                                >Team Leader</option>
                                                <option value="1"
                                                @if ($collections->news_for == 1)
                                                    selected
                                                @endif
                                                >All</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-12 mt-4">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Product Name" value="{{$collections->title}}">
                                            <input type="hidden" class="form-control" id="id" name="id" placeholder="Product Name" value="{{$collections->id}}">
                                        </div>

                                        <div class="col-sm-12 mt-4">
                                            <label>Description</label>
                                            <div id="editor-container">
                                            </div>
                                        </div>

                                        <div class="col-6 mt-4">
                                            <label for="start-date-news" class="form-label">Start Date News</label>
                                            <input id="start-date-news" name="start-date-news" class="form-control flatpickr flatpickr-input active" type="text" value="{{ gmdate("Y-m-d | H:i:s", $collections->start_date); }}" placeholder="Select Date..">
                                        </div>

                                        <div class="col-6 mt-4">
                                            <label for="end-date-news" class="form-label">End Date News</label>
                                            <input id="end-date-news" name="end-date-news" class="form-control flatpickr flatpickr-input active" type="text" value="{{ gmdate("Y-m-d | H:i:s", $collections->end_date); }}" placeholder="Select Date..">
                                        </div>

                                        <div class="form-check form-switch form-check-inline form-switch-primary col-6 mt-4">
                                            <input class="form-check-input" type="checkbox" role="switch" id="is_active"
                                            @if ($collections->is_active == 1)
                                                    checked
                                            @endif>
                                            <label class="form-check-label" for="form-switch-primary">Active</label>
                                        </div>

                                        <div class="col-12 mt-4">
                                            <button type="submit" class="btn-submit btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </form>
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
    <script src="{{ url('src/plugins/src/perfect-scrollbarperfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/waves/waves.min.js') }}"></script>
    <script src="{{ url('layouts/vertical-light-menu/app.js') }}"></script>

    <script src="{{ url('src/plugins/src/highlight/highlight.pack.js') }}"></script>
    <script src="{{ url('src/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ url('src/plugins/src/editors/quill/quill.js') }}"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ url('src/plugins/src/flatpickr/flatpickr.js') }}"></script>

    <script src="{{ url('src/plugins/src/flatpickr/custom-flatpickr.js') }}"></script>

    <script src="{{ url('src/plugins/src/tagify/tagify.min.js') }}"></script>
    <script src="{{ url('src/assets/js/apps/ecommerce-create.js') }}"></script>


    <script src="{{ url('src/assets/js/scrollspyNav.js') }}"></script>
    <script>
        var f1 = flatpickr(document.getElementById('start-date-news'), {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
        var f1 = flatpickr(document.getElementById('end-date-news'), {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
    </script>

    <script>
        $(".btn-submit").click(function(e){

            e.preventDefault();

            let data = [
                $('select[name=for] option').filter(':selected').val(),
                $("input[name=title]").val(),
                JSON.stringify(quill.getContents()),
                Math.floor(new Date($("input[name=start-date-news]").val()).getTime() / 1000),
                Math.floor(new Date($("input[name=end-date-news]").val()).getTime() / 1000),
                $('#is_active').is(":checked") ? 1 : 0,
                $("input[name=id]").val()
            ];

            $.ajax({
                type:'POST',
                url:"{{ route('ajaxNewsEdit.post') }}",
                data:{
                    "_token": "{{ csrf_token() }}",
                    "data_post": {
                        for:data[0],
                        title:data[1],
                        content:data[2],
                        start_date_news:data[3],
                        end_date_news:data[4],
                        is_active:data[5]
                    },
                    "id": data[6]
                },
                success:function(data){
                    if(data.status == 200){
                        swal({
                            title: "Success",
                            text: "Data saved",
                            type: "success",
                            confirmButtonClass: "btn-success",
                            confirmButtonText: "OK",
                            closeOnConfirm: false
                            },
                            function(isConfirm) {
                            if (isConfirm) {
                                window.location.href = "{{ route('news.list') }}";
                            }
                        });
                    }else{
                        swal("Fail", data.message, "warning");
                    }
                },
                error: function(xhr, textStatus, error) {
                    swal(textStatus, error, "warning");
                }
            });
        });
    </script>

    <script>
        var quill;
        $( document ).ready(function() {
            quill = new Quill('#editor-container', {
                modules: {
                    toolbar: [
                    [{ header: [1, 2, false] }],
                    ['bold', 'italic', 'underline'],
                    ['image', 'code-block']
                    ]
                },
                placeholder: 'Write content...',
                theme: 'snow'  // or 'bubble'
            });
            quill.setContents(JSON.parse(<?php echo $collections->content;?>));
        });



    </script>
    @include('public.login-check')
    <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>
