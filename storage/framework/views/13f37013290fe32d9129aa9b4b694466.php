<?php if(count($model->getDocuments($media_collection_name)) > 0): ?>
    <?php $__env->startPush('extrahead'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('/backend/css/lightcase.min.css')); ?>">
        <style>
            .media_custom {
                display: block;
                text-align: center;
                position: relative;
                padding: 20px;
                background: #fff;
                border: 1px solid #e7e5ea;
                box-sizing: border-box;
                border-radius: 12px;
                margin-bottom: 30px;
            }

            .media_custom:hover {
                border-color: #3e4095;
                background-color: #e7e5ea;
                cursor: pointer;
            }

            .media_text {
                font-style: normal;
                color: #262626;
                height: 40px;
                overflow: hidden;
                font-size: 12px;
            }

            .date {
                font-style: normal;
                font-weight: 400;
                font-size: 12px;
                line-height: 28px;
                color: #808191;
                letter-spacing: -.36px;
                display: block;
            }
        </style>
    <?php $__env->stopPush(); ?>
    <div class="row">
        <h2 class="text-center w-100 mb-10">
            <?php if(strpos($media_collection_name, 'video_image') !== false): ?>
                Video şəkili
            <?php elseif(strpos($media_collection_name, 'file') !== false): ?>
                Fayl
            <?php elseif(strpos($media_collection_name, 'logo') !== false): ?>
                Logo
            <?php elseif(strpos($media_collection_name, 'video') !== false): ?>
                Video
            <?php elseif(strpos($media_collection_name, 'icons') !== false): ?>
                İkon
            <?php else: ?>
                <?php echo app('translator')->get('backend.labels.images'); ?>
            <?php endif; ?>
        </h2>
        <?php $__currentLoopData = $model->getDocuments($media_collection_name); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="mr-3">
                <div class="media media_custom">
                    <?php if(strpos($media_collection_name, 'video_image') !== false): ?>
                        <a class="gal-item showcase" data-rel="lightcase:myCollection:slideshow"
                           title="" href="<?php echo e($image->document); ?>">
                            <figure>
                                <img style="width:100px; height:50px" class="img-fluid" alt=""
                                     src="<?php echo e($image->document); ?>">
                            </figure>
                        </a>
                    <?php elseif(strpos($media_collection_name, 'file') !== false): ?>
                        <iframe class="border border-primary"
                                src="<?php echo e($image->document); ?>"
                                width="500"
                                height="500">
                        </iframe>
                    <?php elseif(strpos($media_collection_name, 'video') !== false): ?>
                        <video width="400" controls>
                            <source src="<?php echo e($image->document); ?>">
                            Brouzeriniz video tipini dəstəkləmir.
                        </video>
                    <?php else: ?>
                        <a class="gal-item showcase" data-rel="lightcase:myCollection:slideshow"
                           title="" href="<?php echo e($image->document); ?>">
                            <figure>
                                <img style="width:100px; height:50px" class="img-fluid" alt=""
                                     src="<?php echo e($image->document); ?>">
                            </figure>
                        </a>
                    <?php endif; ?>

                    <div class="media-body mt-2">
                        <?php if(isset($isDeleted) && $isDeleted): ?>
                            <button type="button" data-id="<?php echo e($image->id); ?>"
                                    class="btn btn-primary btn-block mb-1 dodelete">
                                Sil
                            </button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php $__env->startPush('extrascripts'); ?>
        <script src="<?php echo e(asset('/backend/js/lightcase.min.js')); ?>"></script>
        <script>
            $(document).ready(function () {
                let showcase = $('a.showcase'),
                    dodelete = $('.dodelete'),
                    docover = $('.docover');

                showcase.lightcase({
                    transition: 'scrollHorizontal',
                    showSequenceInfo: false,
                    showTitle: false
                });

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
                    }
                });

                docover.click(function (e) {
                    e.preventDefault();
                    Swal.fire(
                        {
                            title: 'Şəkili örtük şəkili etmək istədiyinizə əminsiniz?',
                            text: 'Bu şəkili örtük şəkili etmək istədiyinizə əminsiniz?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Bəli',
                            cancelButtonText: '<?php echo e(trans('backend.buttons.cancel')); ?>'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            let id = $(this).data('id');
                            $.ajax({
                                type: 'patch',
                                url: '/admin/<?php echo e($name); ?>/' + id + '/coverimg',
                                data: {'id': id},
                                dataType: 'json',
                                success: function (result) {
                                    if (result.status != 1) {
                                        <?php echo notify('error', trans('backend.messages.error.cover')); ?>

                                    } else {
                                        <?php echo notify('success', trans('backend.messages.success.cover')); ?>

                                    }
                                    location.reload();

                                },
                            });
                        }
                    });


                });

                dodelete.click(function (e) {
                    e.preventDefault();

                    <?php echo confirm(); ?>.then((result) => {
                        if (result.isConfirmed) {
                            let id = $(this).data('id');
                            $.ajax({
                                type: 'post',
                                url: '/admin/documents/' + id + '/delete',
                                data: {'id': id},
                                dataType: 'json',
                                success: function (result) {
                                    if (result.status != 1) {
                                        <?php echo notify('error', trans('backend.messages.error.delete')); ?>

                                    } else {
                                        <?php echo notify('success', trans('backend.messages.success.delete')); ?>

                                        $('#' + id).remove();
                                    }

                                    location.reload();

                                }
                            });
                        }
                    });
                });

            });
        </script>
    <?php $__env->stopPush(); ?>
<?php endif; ?>
<?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/backend/includes/media.blade.php ENDPATH**/ ?>