<?php $__env->startSection('title', trans('backend.titles.news')); ?>
<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend/css/sweetalert.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('backend/css/datatables.bundle.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    <?php echo $__env->make('backend.includes.card.header', ['page' => 'news'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('backend.news.tables.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('backend/js/sweetalert.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/js/datatables.bundle.js')); ?>"></script>
    <?php echo $__env->make('backend.includes.plugins.datatable',['columns'=>['id','title','content','actions'], 'route'=>route('backend.news.index')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/backend/news/index.blade.php ENDPATH**/ ?>