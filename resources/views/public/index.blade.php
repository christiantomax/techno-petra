@php
    $current_page = ''
@endphp

@include('public.header')


<!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="../src/plugins/src/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/src/glightbox/glightbox.min.css">

    <link rel="stylesheet" type="text/css" href="../src/assets/css/light/components/tabs.css">
    <link rel="stylesheet" type="text/css" href="../src/assets/css/light/apps/ecommerce-details.css">

    <link rel="stylesheet" type="text/css" href="../src/assets/css/dark/components/tabs.css">


    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/css/light/editors/quill/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/css/dark/editors/quill/quill.snow.css') }}">
    <script src="{{ url('src/plugins/src/editors/quill/quill.js') }}"></script>

    <link href="../src/assets/css/light/components/accordions.css" rel="stylesheet" type="text/css">
    <link href="../src/assets/css/dark/components/accordions.css" rel="stylesheet" type="text/css">

    <link href="../src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/light/components/carousel.css" rel="stylesheet" type="text/css" />

    <link href="../src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/dark/components/carousel.css" rel="stylesheet" type="text/css" />

    <link href="{{ url('src/assets/css/light/components/modal.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/assets/css/dark/components/modal.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--  END CUSTOM STYLE FILE  -->

<!-- BEGIN CSS -->
<style>
    .accord_title_container, .news-collapsed{
        display: flex !important;
        flex-direction: row !important;
        justify-content: space-between !important;
    }
    .accord_date_text{
        margin-right: 2em;
    }
</style>
<!-- END CSS -->

<script>
    var quill = "";
    var the_html = "";
</script>
<!-- CONTENT -->
<div class="row layout-top-spacing">

    @include('public.modal')

    <div class="col-lg-12 col-md-12">
        <div class="widget-content widget-content-area ecommerce-create-section" style="background: none; border: none">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-3">News</h2>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div id="iconsAccordion" class="accordion-icons accordion">
                        @foreach ( $news as $berita)
                            <div class="card">
                                <div class="card-header" id="headingTwo3">
                                    <section class="mb-0 mt-0">
                                        <div role="menu" class="collapsed news-collapsed" data-bs-toggle="collapse" data-bs-target="#iconAccordion_{{$berita->id}}" aria-expanded="false" aria-controls="iconAccordion_{{$berita->id}}">
                                            <div class='accord_title_container'>
                                                <div class="accordion-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                                                        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h5>{{ucwords($berita->title)}}</h5>
                                                </div>
                                            </div>
                                            <div class='accord_title_container'>
                                                 <div class="accord_date_text">
                                                    <text>{{ gmdate("d F Y | H:i:s", $berita->start_date); }}</text>
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div id="iconAccordion_{{$berita->id}}" class="collapse" aria-labelledby="headingTwo3" data-bs-parent="#iconsAccordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 mx-auto" id="editor_{{$berita->id}}">
                                                <div id="editors_{{$berita->id}}"></div>

                                                <script>
                                                    quill = new Quill('#editors_{{$berita->id}}', {
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

                                                    quill.setContents(<?php echo $berita->content;?>);
                                                    quill.enable(false)

                                                    the_html = document.querySelector("#editors_{{$berita->id}}").innerHTML;
                                                    document.querySelector("#editor_{{$berita->id}}").innerHTML = the_html;

                                                    document.querySelector(".ql-clipboard").remove();
                                                    document.querySelector(".ql-tooltip ").remove();
                                                </script>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ url('src/plugins/src/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ url('src/plugins/src/glightbox/glightbox.min.js') }}"></script>


<script src="../src/assets/js/scrollspyNav.js"></script>

@include('public.login-check')
<!-- END PAGE LEVEL SCRIPTS -->


@include('public.footer')
