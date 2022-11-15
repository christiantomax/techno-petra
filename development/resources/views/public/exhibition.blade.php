@php
    $current_page = '| Exhibition'
@endphp

@include('public.header')


<!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="../src/assets/css/light/elements/custom-pagination.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../src/assets/css/light/apps/blog-post.css">

    <link href="../src/assets/css/dark/elements/custom-pagination.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../src/assets/css/dark/apps/blog-post.css">
<!--  END CUSTOM STYLE FILE  -->

<!-- BEGIN CSS -->
<style>
.card-exhibition, .card-exhibition .card-title{
    transition: .4s;
}
.card-exhibition:hover{
    box-shadow: 0 11px 20px -5px rgba(0, 0, 0, 0.30);
    transition: .7s;
}

.card-exhibition:hover .card-title{
    color: #4361ee;
    transition: .7s;
}

</style>
<!-- END CSS -->


<!-- CONTENT -->
<div class="row layout-top-spacing">
    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
        <div class="featured-image" style="height: 300px">
            <div class="featured-image-overlay" style="background-color:rgba(22, 28, 36, 0.2)">
            </div>

            <div class="post-header">
                <div class="post-title" style="bottom: 0; top: unset">
                    <h1 class="mb-0" style="color: white;">EXHIBITION</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row layout-top-spacing">
    <div class="col-lg-3 col-md-3 col-sm-3 mb-4">
        <input id="t-text" type="text" name="txt" placeholder="Search" class="form-control" required="">
    </div>

    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 mb-4 ms-auto">
        <select class="select form-select" aria-label="Default select example">
            <option selected="">All Category</option>
            <option value="3">Apperal</option>
            <option value="1">Electronics</option>
            <option value="2">Clothing</option>
            <option value="3">Accessories</option>
            <option value="3">Organic</option>
        </select>
    </div>

    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 mb-4">
        <select class="select form-select" aria-label="Default select example">
            <option selected="">Sort By</option>
            <option value="1">Low to High Price</option>
            <option value="2">Most Viewed</option>
            <option value="3">Hight to Low Price</option>
            <option value="3">On Sale</option>
            <option value="3">Newest</option>
        </select>
    </div>
</div>

    <div class="row">
        @for ($i = 20; $i >= 0; $i--)
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-4">
            <a class="card style-6 card-exhibition" href="./app-ecommerce-product.html">
                <img src="../src/assets/img/product-3.jpg" class="card-img-top" alt="...">
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-5">
                            <b class="fs-2 lh-sm card-title">Li Europan lingues es membres</b>
                        </div>

                        <div class="col-12 mb-5">
                            <small class="breadcrumb breadcrumb-item fs-6 lh-sm">Category / Category / Category</small>
                        </div>

                        <div class="d-grid col-12 mx-auto">
                            <button class="btn btn-outline-primary mb-2 _effect--ripple waves-effect waves-light">VOTE !</button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endfor
    </div>







<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ url('src/plugins/src/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ url('src/plugins/src/glightbox/glightbox.min.js') }}"></script>
<!-- END PAGE LEVEL SCRIPTS -->


@include('public.footer')
