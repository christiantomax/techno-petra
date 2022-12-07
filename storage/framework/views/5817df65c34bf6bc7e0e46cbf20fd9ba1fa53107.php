<?php
    $current_page = '| Student'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Techno | Upload Document</title>
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
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('src/plugins/css/light/editors/quill/quill.snow.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('src/plugins/css/dark/editors/quill/quill.snow.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(url('src/plugins/src/filepond/filepond.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('src/plugins/src/filepond/FilePondPluginImagePreview.min.css')); ?>">

    <link href="<?php echo e(url('src/assets/css/light/scrollspyNav.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('src/plugins/css/light/filepond/custom-filepond.css')); ?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo e(url('src/assets/css/dark/scrollspyNav.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('src/plugins/css/dark/filepond/custom-filepond.css')); ?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo e(url('src/assets/css/light/components/modal.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('src/assets/css/dark/components/modal.css')); ?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo e(url('src/plugins/css/dark/sweetalerts2/custom-sweetalert.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('src/plugins/css/light/sweetalerts2/custom-sweetalert.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(url('src/plugins/src/sweetalerts2/sweetalerts2.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
        href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet"
    />
    <!-- END PAGE LEVEL STYLES -->

    <style>
        .modal-backdrop{

        }
    </style>
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
            <div class="container">
                <div class="container">

                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Student</a></li>
                                <li class="breadcrumb-item"><a href="#">Team</a></li>
                                <li class="breadcrumb-item active" aria-current="page">File Upload</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->

                    <div class="row layout-top-spacing">

                        <?php echo $__env->make('public.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="widget-content widget-content-area ecommerce-create-section">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="youtube">
                                                Link Youtube
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                                </a>
                                            </label>
                                            <input type="url" class="form-control mb-3" id="youtube" name="youtube" placeholder="Type link youtube project ..."
                                                <?php if($data['youtube'] != ""): ?>
                                                    value="<?php echo e($data['youtube']->url_document); ?>"
                                                <?php endif; ?>>
                                        </div>

                                        <div class="col-md-12 form-group">
                                            <label for="live-preview">
                                                Link Live Preview
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                                </a>
                                            </label>
                                            <input type="url" class="form-control mb-3" id="live-preview" name="live-preview" placeholder="Type link Live Preview Project ..."
                                                <?php if($data['livePreview'] != ""): ?>
                                                    value="<?php echo e($data['livePreview']->url_document); ?>"
                                                <?php endif; ?>>
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="thumbnail">
                                                Project Thumbnail
                                                <button type="button" class="bg-transparent border-0 bs-tooltip" data-bs-placement="right" title="allowed file image : png, jpg, jpeg | max file size : 2MB">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                                </button>
                                            </label>
                                            <input type="file"
                                                id="thumbnail"
                                                name="thumbnail"
                                                data-max-file-size="3MB"
                                                data-max-files="1"
                                            />
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="name">
                                                Proposal Project
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                                </a>
                                            </label>
                                            <input type="file"
                                                id="proposal"
                                                name="proposal"
                                                data-max-file-size="3MB"
                                                data-max-files="1"
                                            />
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="name">Project Image Gallery</label>
                                            <input type="file"
                                                id="project-preview"
                                                name="project-preview"
                                                multiple
                                                data-allow-reorder="true"
                                                data-max-file-size="3MB"
                                                data-max-files="15"
                                            />
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <div class="form-group text-end">
                                                <button class="btn-submit btn btn-primary">Save</button>
                                            </div>
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

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo e(url('src/plugins/src/global/vendors.min.js')); ?>"></script>
    <script src="<?php echo e(url('src/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(url('src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(url('src/plugins/src/mousetrap/mousetrap.min.js')); ?>"></script>
    <script src="<?php echo e(url('src/plugins/src/waves/waves.min.js')); ?>"></script>
    <script src="<?php echo e(url('layouts/vertical-light-menu/app.js')); ?>"></script>
    <script src="<?php echo e(url('src/plugins/src/highlight/highlight.pack.js')); ?>"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="../src/assets/js/scrollspyNav.js"></script>
    <script src="../src/plugins/src/filepond/filepond.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="../src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>
    <script src="../src/plugins/src/filepond/custom-filepond.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- END PAGE LEVEL PLUGINS -->

    <script>
        FilePond.registerPlugin(FilePondPluginImagePreview);
        const imageGallery = document.querySelector('input[name="project-preview"]');
        const proposal = document.querySelector('input[name="proposal"]');
        const thumbnail = document.querySelector('input[name="thumbnail"]');

        const pondImageGallery = FilePond.create(imageGallery,{
            labelIdle: 'Drag & Drop your files or <span class="filepond--label-action"> Browse </span>',
            maxFiles: 15,
            required: true,
            acceptedFileTypes: ['image/jpeg','image/jpg','image/png']
        });
        const pondProposal = FilePond.create(proposal,{
            labelIdle: 'Drag & Drop your files or <span class="filepond--label-action"> Browse </span>',
            maxFiles: 1,
            acceptedFileTypes: ['application/pdf']
        });
        const pondThumbnail = FilePond.create(thumbnail,{
            labelIdle: 'Drag & Drop your files or <span class="filepond--label-action"> Browse </span>',
            maxFiles: 1,
            acceptedFileTypes: ['image/jpeg','image/jpg','image/png']
        });

    </script>
    <script>
        let arrayImageGallery = [];
        let tempData;
        $(".btn-submit").click(function(e){

            e.preventDefault();

            let data = new FormData();
            // Append data
            if(pondProposal.getFiles()[0]){
                data.append('proposal',pondProposal.getFiles()[0].file);
            }
            if(pondThumbnail.getFiles()[0]){
                data.append('thumbnail',pondThumbnail.getFiles()[0].file);
            }
            let fileName = [];
            if(pondImageGallery.getFiles()){
                tempData = pondImageGallery.getFiles();
                for (let i = 0; i < tempData.length; i++) {
                    data.append('imageGallery'+i,tempData[i].file);
                    fileName.push(tempData[i].file.name);
                }
            }
            console.log(pondImageGallery.getFiles());
            data.append('_token','<?php echo e(csrf_token()); ?>');
            data.append('count',tempData.length);
            data.append('youtube',$("input[name=youtube]").val());
            data.append('livePreview',$("input[name=live-preview]").val());
            data.append('listFileName',fileName);

            $.ajax({
                url:"<?php echo e(route('ajaxUploadDocumentProject.post')); ?>",
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                data: data,
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
        pondImageGallery.addFiles(
            <?php if(count($data['imageGallery']) > 0): ?>
                <?php $__currentLoopData = $data['imageGallery']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    '<?php echo e($image->url_document); ?>',
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        );
        <?php if($data['thumbnail'] != ""): ?>
        pondThumbnail.addFile('<?php echo e($data['thumbnail']->url_document); ?>');
        <?php endif; ?>
        <?php if($data['proposal'] != ""): ?>
            pondProposal.addFile('<?php echo e($data['proposal']->url_document); ?>');
        <?php endif; ?>
    </script>
    <?php echo $__env->make('public.login-check', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH D:\lama\Project\techno\resources\views/student/mahasiswa-upload-documents.blade.php ENDPATH**/ ?>