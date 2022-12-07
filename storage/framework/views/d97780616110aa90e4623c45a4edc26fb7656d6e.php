<?php
    $current_page = '| Student'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(url('/internal/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href=<?php echo e(url('/internal/logo-ukp.jpg')); ?>>
    <title>Techno | List Category Team</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(url('src/assets/img/favicon.ico')); ?>"/>
    <link href="<?php echo e(url('layouts/vertical-light-menu/css/light/loader.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('layouts/vertical-light-menu/css/dark/loader.css')); ?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo e(url('layouts/vertical-light-menu/loader.js')); ?>"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?php echo e(url('src/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('layouts/vertical-light-menu/css/light/plugins.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('layouts/vertical-light-menu/css/dark/plugins.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?php echo e(url('src/assets/css/light/components/modal.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('src/assets/css/dark/components/modal.css')); ?>" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="../src/plugins/src/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="<?php echo e(url('src/plugins/src/table/datatable/datatables.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(url('src/plugins/css/light/table/datatable/dt-global_style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('src/plugins/css/dark/table/datatable/dt-global_style.css')); ?>">
    <!-- END PAGE LEVEL STYLES -->
</head>
<body class="layout-boxed">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <?php echo $__env->make('public.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
            <?php echo $__env->make('public.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                                <li class="breadcrumb-item"><a href="/student/profile">Profile</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Category</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->
                    <div class="row layout-top-spacing">
                        <?php echo $__env->make('public.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="form-group">
                                <input id="id" type="hidden" name='id' class="form-control" value='<?php echo e($collections['id']); ?>'>
                                <label for="categories">Categories</label>
                                <div class="input-group mb-3">
                                    <select class="categories form-select pb-4" id="categories" name="states[]" multiple="multiple" aria-label="select categories">
                                        <?php $__currentLoopData = $collections['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($collection->id); ?>"><?php echo e($collection->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <button class="btn-submit btn btn-primary">Add</button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row layout-top-spacing">
                        <div class="col-12">
                        </div>

                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <table id="zero-config" class="table table-striped dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th class="w-25 text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $collections['collections']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($collection->name); ?></td>
                                                <td class="w-25 text-right">
                                                    <button class="btn btn-danger" onclick="deleteCategory(<?php echo e($collection->id); ?>)">Delete</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th class="w-25 text-right">Action</th>
                                    </tfoot>
                                </table>
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
    <script src="<?php echo e(url('src/plugins/src/global/vendors.min.js')); ?>"></script>
    <script src="<?php echo e(url('src/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(url('src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(url('src/plugins/src/mousetrap/mousetrap.min.js')); ?>"></script>
    <script src="<?php echo e(url('src/plugins/src/waves/waves.min.js')); ?>"></script>
    <script src="<?php echo e(url('layouts/vertical-light-menu/app.js')); ?>"></script>
    <script src="<?php echo e(url('src/assets/js/custom.js')); ?>"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo e(url('src/plugins/src/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="<?php echo e(url('src/plugins/src/table/datatable/datatables.js')); ?>"></script>

    <script src="<?php echo e(url('src/plugins/src/autocomplete/autoComplete.min.js')); ?>"></script>
    <script src="<?php echo e(url('src/plugins/src/autocomplete/custom-autoComplete.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('.categories').select2();
        });

        $('#zero-config').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 10
        });
    </script>
    <script>
        function deleteCategory(id){
            swal({
                title: "Warning!",
                text: "Are you sure remove the category?",
                type: "warning",
                showCancelButton: true,
                cancelButtonClass: "btn-secondary",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Delete",
                closeOnConfirm: false
                },
                function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type:'POST',
                        url:"<?php echo e(route('ajaxDeleteTeamCategory.post')); ?>",
                        data:{
                            "_token": "<?php echo e(csrf_token()); ?>",
                            "data_post": {
                                id: id
                            },
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
                }
            });
        }

    </script>
    <script type="text/javascript">
        $(".btn-submit").click(function(e){

            e.preventDefault();
            let temp = $('#categories').select2('data');
            let categories = [];
            for (var key in temp) {
                categories.push(temp[key]["id"]);
            }
            let data = [
                $("input[name=id]").val(),
                JSON.stringify(categories),
            ];
            $.ajax({
                type:'POST',
                url:"<?php echo e(route('ajaxAddTeamCategory.post')); ?>",
                data:{
                    "_token": "<?php echo e(csrf_token()); ?>",
                    "data_post": {
                        id:data[0],
                        categories:data[1],
                    },
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
    <?php echo $__env->make('public.login-check', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>
<?php /**PATH D:\lama\Project\techno\resources\views/student/setting-category-list.blade.php ENDPATH**/ ?>