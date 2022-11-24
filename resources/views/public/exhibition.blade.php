@php
    $current_page = '| Exhibition'
@endphp

@include('public.header')


<!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="../src/assets/css/light/elements/custom-pagination.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../src/assets/css/light/apps/blog-post.css">

    <link href="../src/assets/css/dark/elements/custom-pagination.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../src/assets/css/dark/apps/blog-post.css">

    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/css/light/editors/quill/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/css/dark/editors/quill/quill.snow.css') }}">
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

.image-card-exhibition{
    height: 25vh;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.image-card-exhibition img{
    width: 100%;
    height: 100%;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    object-fit: cover;
    object-position: center;
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
        @foreach ($collections as $collection)
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-4">
            <a class="card style-6 card-exhibition" href="./app-ecommerce-product.html">
                <div class="image-card-exhibition">
                    <img src="
                    @if ($collection->thumbnail)
                        {{$collection->thumbnail}}
                    @else
                        {{url('/files/logo-petra.webp')}}
                    @endif
                " alt="techno-petra-{{strtolower(str_replace(" ","-",$collection->name))}}">
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 mb-5">
                            <b class="fs-2 lh-sm card-title">{{$collection->name}}</b>
                        </div>

                        <div class="col-12 mb-5">
                            <p>
                                <?php
                                    $temp = rtrim($collection->categories, ", ");
                                    $temp = explode(", ", $temp);
                                    if(count($temp) > 0){
                                        echo "Category :";
                                    }
                                ?>
                            </p>
                            <small class="breadcrumb breadcrumb-item fs-6 lh-sm">
                                <?php
                                    for ($i=0; $i < count($temp) ; $i++) {
                                        echo '<button type="button" class="btn btn-primary btn-sm me-1 text-white">'.$temp[$i].'</button>';
                                    }
                                ?>
                            </small>
                        </div>

                        <div class="d-grid col-12 mx-auto">
                            <button class="btn btn-outline-primary mb-2 _effect--ripple waves-effect waves-light">VOTE !</button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>







<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ url('src/plugins/src/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ url('src/plugins/src/glightbox/glightbox.min.js') }}"></script>
<script src="{{ url('src/plugins/src/editors/quill/quill.js') }}"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script>
    function quillGetHTML(inputDelta) {
        var tempCont = document.createElement("div");
        (new Quill(tempCont)).setContents(inputDelta);
        return tempCont.getElementsByClassName("ql-editor")[0].innerHTML;
    }

    console.log(quillGetHTML(JSON.parse({"ops":[{"insert":"asdf\n"}]})));
</script>

@include('public.footer')
