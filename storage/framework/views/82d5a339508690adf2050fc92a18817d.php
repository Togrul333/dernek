<div class="card-header flex-wrap py-5">
    <div class="card-title">
        <h3 class="card-label"><?php echo app('translator')->get("backend.titles.$page"); ?></h3>
    </div>

        <div class="card-toolbar">
            <a href="<?php echo e(route("backend.$page.create")); ?>" class="btn btn-primary font-weight-bolder">
                <i class="la la-plus"></i> <?php echo app('translator')->get('backend.buttons.create'); ?>
            </a>
        </div>

</div>
<?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/backend/includes/card/header.blade.php ENDPATH**/ ?>