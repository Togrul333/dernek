<div class="card-header flex-wrap py-5">
    <div class="card-title">
        <?php if(isset($edit) && $edit == true): ?>
            <h3 class="card-label"><?php echo e($page); ?></h3>
        <?php else: ?>
            <h3 class="card-label"><?php echo app('translator')->get("backend.titles.$page"); ?></h3>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/backend/includes/form/header.blade.php ENDPATH**/ ?>