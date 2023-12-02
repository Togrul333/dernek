<?php $__env->startSection('title', trans('backend.titles.contacts')); ?>
<?php $__env->startSection('content'); ?>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    <?php echo $__env->make('backend.includes.table.header', ['page' => 'contacts', 'id' => $contact->id], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('backend.contacts.tables.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="card-footer">
                        <div class="row">
                            <div class="mx-auto">
                                <a href="<?php echo e(url()->previous()); ?>" class="btn btn-danger">
                                    <?php echo app('translator')->get('backend.buttons.back'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/backend/contacts/show.blade.php ENDPATH**/ ?>