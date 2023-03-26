@php
    $current_page = '| Exhibition'
@endphp

@include('public.header')


<!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="../src/assets/css/light/elements/custom-pagination.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../src/assets/css/light/apps/blog-post.css">

    <link href="../src/assets/css/dark/elements/custom-pagination.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../src/assets/css/dark/apps/blog-post.css">

    <link href="{{ url('src/assets/css/light/components/modal.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('src/assets/css/dark/components/modal.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/css/light/editors/quill/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugins/css/dark/editors/quill/quill.snow.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

/* skeleton loading */
// Codepen presentation
.container {
  margin-top: 4em;
  margin-bottom: 4em;
}

// Bootstrap Loading Skeleton
%loading-skeleton {
    color: transparent;
    appearance: none;
    -webkit-appearance: none;
    background-color: #eee;
    border-color: #eee;

    &::placeholder {
        color: transparent;
    }
}
@keyframes loading-skeleton {
    from {
        opacity: .4;
    }
    to {
        opacity: 1;
    }
}
.loading-skeleton {
    pointer-events: none;
    animation: loading-skeleton 1s infinite alternate;

    img {
        filter: grayscale(100) contrast(0%) brightness(1.8);
    }
    h1, h2, h3, h4, h5, h6,
    p, li,
    .btn,
    label,
    .form-control {
        @extend %loading-skeleton;
    }
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
    @include('public.modal')
    <div class="col-lg-5 col-md-3 col-sm-3 mb-4">
        <input id="search" type="text" name="txt" placeholder="Search" class="form-control" required="" onkeyup="changeFilter('search')">
    </div>

    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 mb-4 ms-auto">
        <select class="select form-select" onchange="changeFilter('categories')" id="categories" aria-label="Default select example">
            <option selected value="">All Category</option>
            @foreach ($data['categories'] as $collection)
                <option value="{{$collection->id}}">{{$collection->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 mb-4">
        <select class="select form-select" id="period" onchange="changeFilter('period')" aria-label="Default select example">
            <option selected value="">All Period</option>
            @foreach ($data['period'] as $collection)
                <option value="{{$collection->id}}">{{$collection->year}} {{($collection->semester % 2 == 0) ? "Genap" : "Ganjil"}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 mb-4">
        <select class="select form-select" id="orderby" onchange="changeFilter('orderby')" aria-label="Default select example">
            <option selected value="">Sort By</option>
            <option value="created">Newest</option>
            <option value="-created">Oldest</option>
            <option value="most_voted">Most Voted</option>
        </select>
    </div>
</div>

    <div class="row" id="data-show"></div>
    <div class="row" id="skeleton-view">
        <?php
            for ($i=0; $i < 3; $i++) {
                echo '
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-4 loading-skeleton">
                        <div class="card style-6 card-exhibition h-100">
                            <div class="image-card-exhibition">
                                <img src="
                                /internal/logo-ukp.jpg" alt="musicwarehouse.com">
                            </div>
                            <div class="card-footer h-100">
                                <div class="row d-flex flex-column position-relative h-100">
                                    <div class="col-12 mb-3 bg-light rounded">
                                        <div class="fs-2 lh-sm card-title" style="width: 100%; height: 2rem;"></div>
                                    </div>
                                    <div class="col-12 mb-3 bg-light rounded">
                                        <div class="fs-2 lh-sm card-title" style="width: 100%; height: 6rem;"></div>
                                    </div>
                                    <div class="col-12 mb-3 bg-light rounded">
                                        <div class="fs-2 lh-sm card-title" style="width: 100%; height: 2rem;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
            }
        ?>
    </div>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ url('src/plugins/src/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ url('src/plugins/src/glightbox/glightbox.min.js') }}"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script>
    //kalau di scroll bawah dia hit endpoint terus"an butuh pengecekan
    let checkData = []
    let isEmpty = false
    let offset = 0
    let orderby = ""
    let period = ""
    let category = ""
    function changeFilter (type) {
        if(type != "scroll"){
            isEmpty = false
            $('#data-show').html("");
            offset = 0;
            $("#skeleton-view").css("display", "flex");
            checkData = []
        }

        let tempPayload = {
            "orderby" : $('#orderby').val(),
            "period" : $('#period').val(),
            "category" : $('#categories').val(),
            "limit" : 3,
            "offset" : offset,
            "search" : search,
        }

        const temp = $('#search').val()
        if(temp.length % 3 == 0){
            tempPayload.search = $('#search').val();
        }
        fetchData(tempPayload)
    }

    function debounce(func, wait) {
        let timeout;
        return function() {
            const context = this,
                args = arguments;
            clearTimeout(timeout);
            timeout = setTimeout(function() {
            func.apply(context, args);
            }, wait);
        };
    }

    $(window).scroll(debounce(function() {
        const scrollHeight = $(document).height();
        const scrollPosition = $(window).height() + $(window).scrollTop();
        if (scrollHeight - scrollPosition < 1) {
            // fetch new data
            changeFilter("scroll");
        }
    }, 800));
    function fetchData (payload) {
        if ( ! isEmpty ) {
            $.ajax({
                type : "GET",
                url : "{{ route('exhibition.get') }}",
                data : payload,
                success:function(data){
                    if (data?.collections) {
                        let htmlString = $('#data-show').html();
                        let temp = data.collections;
                        if (temp.length != 3) {
                            isEmpty = true;
                            $("#skeleton-view").css("display", "none");
                        }
                        let countCheck = 0;
                        let countCheckPositive = 0;
                        for (let i = 0; i < temp.length; i++) {
                            let checkExist = false;
                            checkData.forEach(function(obj) {
                                if (obj.id == temp[i].id) {
                                    countCheckPositive++
                                    checkExist = true;
                                }
                            });
                            if (! checkExist) {
                                countCheck++
                                checkData.push(temp[i]);
                                let categoriesButton = "";
                                if (temp[i].categories){
                                    if (temp[i].categories.includes(",")){
                                        const categoriesArray = temp[i].categories.split(", ");
                                        for (let j = 0; j < categoriesArray.length; j++) {
                                            categoriesButton += `
                                                <button type="button" class="btn btn-primary btn-sm me-1 mt-1 text-white _effect--ripple waves-effect waves-light">${categoriesArray[j]}</button>
                                            `;
                                        }
                                    } else if (temp[i].categories.length >= 1) {
                                        categoriesButton += `
                                                <button type="button" class="btn btn-primary btn-sm me-1 mt-1 text-white _effect--ripple waves-effect waves-light">${temp[i].categories}</button>
                                            `;
                                    }
                                }
                                let tempHtmlString = `
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-4">
                                        <a class="card style-6 card-exhibition h-100" href="${temp[i].slug == null ? "/exhibition/"+temp[i].id : "/exhibition/"+temp[i].slug}">
                                            <div class="image-card-exhibition">
                                                <img src="
                                                ${temp[i].thumbnail == null || temp[i].thumbnail == "undefined" ? '/internal/logo-ukp.jpg' : temp[i].thumbnail }"
                                                alt="${temp[i].name.toLowerCase().replace(/ /g, "-")}">
                                            </div>
                                            <div class="card-footer h-100">
                                                <div class="row d-flex flex-column position-relative h-100">
                                                    <div class="col-12 mb-3">
                                                        <b class="fs-2 lh-sm card-title">${temp[i].name}</b>
                                                    </div>

                                                    <div class="col-12 mb-5 pb-4">
                                                        <p>
                                                            ${categoriesButton != "" ? "Category :  " : ""}
                                                        </p>
                                                        <small class="breadcrumb breadcrumb-item fs-6 lh-sm">
                                                            ${categoriesButton != "" ? categoriesButton : ""}
                                                        </small>
                                                    </div>

                                                    <div class="d-grid col-12 mx-auto position-absolute" style="bottom: 0px;">
                                                        <button class="btn btn-outline-primary mb-2 _effect--ripple waves-effect waves-light">View</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                `;
                                htmlString += tempHtmlString;
                            }
                        }
                        var currentScrollPos = $(window).scrollTop();
                        var newScrollPos = currentScrollPos - ($(window).height() * 0.04);
                        $(window).scrollTop(newScrollPos);
                        $('#data-show').html(htmlString);
                        if (countCheck == 3 || countCheckPositive == 3) {
                            offset += 3
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.log("error", error);
                }
            });
        }
    }
    fetchData({
        "orderby" : "-created",
        "limit" : 3,
        "offset" : offset,
    })
</script>
@include('public.login-check')

@include('public.footer')
