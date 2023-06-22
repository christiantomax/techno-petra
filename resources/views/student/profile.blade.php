@php
    $current_page = '| Student'
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('/internal/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href={{url('/internal/logo-ukp.jpg')}}>
    <title>Techno | Profile</title>
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
    <link href="{{ url('src/assets/css/light/components/modal.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/assets/css/dark/components/modal.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ url('src/plugins/src/noUiSlider/nouislider.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ url('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/css/light/editors/quill/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/css/dark/editors/quill/quill.snow.css') }}">


    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/src/tagify/tagify.css') }}">
    <link href="{{ url('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/css/light/tagify/custom-tagify.css') }}">

    <link href="{{ url('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/css/dark/tagify/custom-tagify.css') }}">

    <link href="{{ url('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ url('src/plugins/css/light/editors/markdown/simplemde.min.css') }}">

    <link href="{{ url('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ url('src/plugins/css/dark/editors/markdown/simplemde.min.css') }}">

    <link href="{{ url('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/plugins/css/light/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ url('src/plugins/src/filepond/filepond.min.css') }}">
    <link rel="stylesheet" href="{{ url('src/plugins/src/filepond/FilePondPluginImagePreview.min.css') }}">
    <link href="{{ url('src/plugins/src/notification/snackbar/snackbar.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ url('src/plugins/src/sweetalerts2/sweetalerts2.css') }}">

    <link href="{{ url('src/plugins/css/light/filepond/custom-filepond.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/assets/css/light/components/tabs.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ url('src/assets/css/light/elements/alert.css') }}">

    <link href="{{ url('src/plugins/css/light/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/plugins/css/light/notification/snackbar/custom-snackbar.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ url('src/assets/css/light/forms/switches.css') }}">
    <link href="{{ url('src/assets/css/light/components/list-group.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ url('src/assets/css/light/users/account-setting.css') }}" rel="stylesheet" type="text/css" />



    <link href="{{ url('src/plugins/css/dark/filepond/custom-filepond.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/assets/css/dark/components/tabs.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ url('src/assets/css/dark/elements/alert.css') }}">

    <link href="{{ url('src/plugins/css/dark/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/plugins/css/dark/notification/snackbar/custom-snackbar.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ url('src/assets/css/dark/forms/switches.css') }}">
    <link href="{{ url('src/assets/css/dark/components/list-group.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ url('src/assets/css/dark/users/account-setting.css') }}" rel="stylesheet" type="text/css" />


    <link href="{{ url('src/plugins/src/flatpickr/flatpickr.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ url('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/plugins/css/light/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ url('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/plugins/css/dark/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css">
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
                                <li class="breadcrumb-item"><a href="#">Student</a></li>
                                <li class="breadcrumb-item"><a href="#">Team</a></li>
                                <li class="breadcrumb-item"><a href="#">{{$collection->name}}</a></li>
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
                                        <div class="form-group">
                                            <label for="name">Project Name</label>
                                            <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Type project name" value="{{$collection->name}}">
                                            <input type="hidden" class="form-control mb-3" id="id" name="id"  value="{{$collection->id}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nrp">Nrp Leader</label>
                                            <input type="text" class="form-control mb-3" id="nrp" placeholder="type nrp leader" value="{{$collection->nrp_leader}}" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="slug">Slug</label><br/>
                                            <span>Slug is a <span class="text-danger"><b>last path url</b></span> access to show your detail project</span><br/>
                                            <span>please double check your slug input by clicking the url beside</span><br/>
                                            <span>example : <s>https://techno.petra.ac.id/exhibition/</s><span class="text-danger"><b>healty-lifeApps</b></span></span>
                                            <input type="text" class="form-control mb-3" id="slug" name="slug" placeholder="type slug" value="{{$collection->slug}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <div class="form-group">
                                            <div class="d-flex pt-3">
                                                <a aria-expanded="false" class="dropdown-toggle" target="_blank"
                                                @if ($collection->slug != null)
                                                    href="/exhibition/{{$collection->slug}}"
                                                @else
                                                    href="/exhibition/{{$collection->id}}"
                                                @endif>
                                                    <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                                    @if ($collection->slug != null)
                                                        {{URL::to('/exhibition/'.$collection->slug);}}
                                                    @else
                                                        {{URL::to('/exhibition/'.$collection->id);}}
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                                <label for="slug">Techno</label>                <select class="techno-type form-select" id="techno-type" aria-label="Default select">
                                                        @if ($collection->technotype == 1)

                                              <option value="1" selected>Techno 1</option>
                                              <option value="2">Techno 2</option>
                                                        @else if($collection->technotype == 1)

                                              <option value="1">Techno 1</option>
                                              <option value="2" selected>Techno 2</option>
                                                        @endif
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-4 form-group">
                                        <label for="tag" class="form-label">Category</label>
                                        <a href="{{ route('studentListCategory') }}">
                                            <label>
                                                <button class="btn btn-secondary ms-3 px-3 py-1">Edit</button>
                                            </label>
                                        </a>
                                        <input id="tag" name='tag' class="border-0" value='{{rtrim($collection->categories, ", ")}}' readonly>
                                    </div>


                                    <div class="col-sm-12 mt-4 form-group">
                                        <label>Description</label>
                                        <div id="editor-container-description">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 mt-4">
                                        <label>Member</label>
                                        <div id="editor-container-member">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-4">
                                        <div class="form-group text-end">
                                            <button class="btn-submit btn btn-primary">Save</button>
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
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <script src="{{ url('src/plugins/src/filepond/filepond.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/filepond/FilePondPluginFileValidateType.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/filepond/FilePondPluginImagePreview.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/filepond/FilePondPluginImageCrop.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/filepond/FilePondPluginImageResize.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/filepond/FilePondPluginImageTransform.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/filepond/filepondPluginFileValidateSize.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/notification/snackbar/snackbar.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/sweetalerts2/sweetalerts2.min.js') }}"></script>
    <script src="{{ url('src/assets/js/users/account-settings.js') }}"></script>

    <script src="{{ url('src/assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ url('src/plugins/src/tagify/tagify.min.js') }}"></script>
    <script src="{{ url('src/plugins/src/tagify/custom-tagify.js') }}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ url('src/plugins/src/flatpickr/flatpickr.js') }}"></script>

    <script src="{{ url('src/plugins/src/flatpickr/custom-flatpickr.js') }}"></script>

    <script src="{{ url('src/assets/js/apps/ecommerce-create.js') }}"></script>


    <script src="{{ url('src/assets/js/scrollspyNav.js') }}"></script>
    <script>
        // The DOM element you wish to replace with Tagify
        var input = document.querySelector('input[name=tag]');

        // initialize Tagify on the above input node reference
        new Tagify(input);

    </script>

    <script>
        $(".btn-submit").click(function(e){

            e.preventDefault();

            let data = [
                $("input[name=name]").val(),
                $("input[name=slug]").val(),
                JSON.stringify(quill_description.getContents()),
                JSON.stringify(quill_member.getContents()),
                $("input[name=id]").val(),
                $("#techno-type").find(":selected").val(),
            ];
            $.ajax({
                type:'POST',
                url:"{{ route('ajaxTeamProfileEdit.post') }}",
                data:{
                    "_token": "{{ csrf_token() }}",
                    "data_post": {
                        name:data[0],
                        slug:data[1],
                        description:data[2],
                        member:data[3],
                        id:data[4],
                        technoType:data[5],
                    }
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
                                window.location.reload();
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
        var quill_description, quill_member;
        $( document ).ready(function() {
            quill_description = new Quill('#editor-container-description', {
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
            quill_member = new Quill('#editor-container-member', {
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

            quill_description.setContents(JSON.parse(<?php echo $collection->description;?>));
            quill_member.setContents(JSON.parse(<?php echo $collection->member;?>));
        });
    </script>
    @include('public.login-check')
    <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>
