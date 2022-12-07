<?php
    $current_page = '| Admin'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Techno | Period</title>
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

    <!-- BEGIN THEME GLOBAL STYLES -->

    <!-- END THEME GLOBAL STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?php echo e(url('src/assets/css/light/components/modal.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('src/assets/css/dark/components/modal.css')); ?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo e(url('src/assets/css/light/scrollspyNav.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('src/assets/css/dark/scrollspyNav.css')); ?>" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="<?php echo e(url('src/plugins/css/light/editors/quill/quill.snow.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(url('src/plugins/css/dark/editors/quill/quill.snow.css')); ?>">

    <link href="<?php echo e(url('src/plugins/src/flatpickr/flatpickr.css')); ?>" rel="stylesheet" type="text/css">

    <link href="<?php echo e(url('src/assets/css/light/scrollspyNav.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('src/plugins/css/light/flatpickr/custom-flatpickr.css')); ?>" rel="stylesheet" type="text/css">

    <link href="<?php echo e(url('src/assets/css/dark/scrollspyNav.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('src/plugins/css/dark/flatpickr/custom-flatpickr.css')); ?>" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" href="<?php echo e(url('src/assets/css/light/apps/ecommerce-create.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('src/assets/css/dark/apps/ecommerce-create.css')); ?>">
    <!--  END CUSTOM STYLE FILE  -->
</head>
<body class="">

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
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                <li class="breadcrumb-item"><a href="#">Setting</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Period</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->

                    <div class="row mb-4 layout-spacing layout-top-spacing">
                        <?php echo $__env->make('public.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                            <div class="widget-content widget-content-area ecommerce-create-section">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="year" class="form-label">Year</label>
                                            <input type="number" value="2022" name="year" class="form-control" id="year">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Semester" class="form-label">Semester</label>
                                            <select id="Semester" name="semester" class="form-select">
                                                <option value="1" selected>ganjil</option>
                                                <option value="0">genap</option>
                                            </select>
                                        </div>
                                        <div class="col-6 mt-4">
                                            <label for="start-date-vote" class="form-label">Start Date Vote</label>
                                            <input id="start-date-vote" name="start-date-vote" class="form-control flatpickr flatpickr-input active" type="text" value="2022-07-07 12:00" placeholder="Select Date..">
                                        </div>
                                        <div class="col-6  mt-4">
                                            <label for="end-date-vote" class="form-label">End Date Vote</label>
                                            <input id="end-date-vote" name="end-date-vote" class="form-control flatpickr flatpickr-input active" type="text" value="2022-07-07 12:00" placeholder="Select Date..">
                                        </div>
                                        <div class="col-6 mt-4">
                                            <label for="start-date-submission" class="form-label">Start Date Submission</label>
                                            <input id="start-date-submission" name="start-date-submission" class="form-control flatpickr flatpickr-input active" type="text" value="2022-07-07 12:00" placeholder="Select Date..">
                                        </div>
                                        <div class="col-6 mt-4">
                                            <label for="end-date-submission" class="form-label">End Date Submission</label>
                                            <input id="end-date-submission" name="end-date-submission" class="form-control flatpickr flatpickr-input active" type="text" value="2022-07-07 12:00" placeholder="Select Date..">
                                        </div>
                                        <div class="form-check form-switch form-check-inline form-switch-primary col-6 mt-4">
                                            <input class="form-check-input" name="is_active" type="checkbox" role="switch" id="is_active" checked>
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
    <script src="<?php echo e(url('src/plugins/src/global/vendors.min.js')); ?>"></script>
    <script src="<?php echo e(url('src/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(url('src/plugins/src/perfect-scrollbarperfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(url('src/plugins/src/mousetrap/mousetrap.min.js')); ?>"></script>
    <script src="<?php echo e(url('src/plugins/src/waves/waves.min.js')); ?>"></script>
    <script src="<?php echo e(url('layouts/vertical-light-menu/app.js')); ?>"></script>

    <script src="<?php echo e(url('src/plugins/src/highlight/highlight.pack.js')); ?>"></script>
    <script src="<?php echo e(url('src/assets/js/custom.js')); ?>"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo e(url('src/assets/js/apps/ecommerce-create.js')); ?>"></script>

    <script src="<?php echo e(url('src/plugins/src/flatpickr/flatpickr.js')); ?>"></script>

    <script src="<?php echo e(url('src/plugins/src/flatpickr/custom-flatpickr.js')); ?>"></script>


    <script src="<?php echo e(url('src/assets/js/scrollspyNav.js')); ?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        var f1 = flatpickr(document.getElementById('start-date-vote'), {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
        var f2 = flatpickr(document.getElementById('end-date-vote'), {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
        var f3 = flatpickr(document.getElementById('start-date-submission'), {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
        var f4 = flatpickr(document.getElementById('end-date-submission'), {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });

        ecommerce.addFiles('../src/assets/img/product-1.jpg', '../src/assets/img/product-3.jpg', '../src/assets/img/product-5.jpg');
    </script>
    <script type="text/javascript">

        $(".btn-submit").click(function(e){

            e.preventDefault();

            let data = [
                $("input[name=year]").val(),
                $('select[name=semester] option').filter(':selected').val(),
                Math.floor(new Date($("input[name=start-date-vote]").val()).getTime() / 1000),
                Math.floor(new Date($("input[name=end-date-vote]").val()).getTime() / 1000),
                Math.floor(new Date($("input[name=start-date-submission]").val()).getTime() / 1000),
                Math.floor(new Date($("input[name=end-date-submission]").val()).getTime() / 1000),
                $('#is_active').is(":checked") ? 1 : 0
            ];

            $.ajax({
                type:'POST',
                url:"<?php echo e(route('ajaxPeriodCreate.post')); ?>",
                data:{
                    "_token": "<?php echo e(csrf_token()); ?>",
                    "data_post": {
                        year:data[0],
                        semester:data[1],
                        start_date_vote:data[2],
                        end_date_vote:data[3],
                        start_date_submission:data[4],
                        end_date_submission:data[5],
                        is_active:data[6]
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
                                window.location.href = "<?php echo e(route('period.list')); ?>";
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
<?php /**PATH D:\lama\Project\techno\resources\views/admin/setting-period.blade.php ENDPATH**/ ?>