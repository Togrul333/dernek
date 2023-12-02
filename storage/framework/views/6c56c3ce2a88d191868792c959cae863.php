<div class="card-body">
    <div class="table-responsive">
        <table class="table table-light table-light-success">
            <tbody>
                <tr class="bg-gray-100">
                    <td class="table-row-title w-25"><?php echo app('translator')->get('backend.labels.id'); ?></td>
                    <td class="table-center"><?php echo e($contact->id); ?></td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">name</td>
                    <td class="table-center"><?php echo e($contact->name); ?></td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">email</td>
                    <td class="table-center"><?php echo e($contact->email); ?></td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">phone</td>
                    <td class="table-center"><?php echo e($contact->phone); ?></td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">subject</td>
                    <td class="table-center"><?php echo e($contact->subject); ?></td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">message</td>
                    <td class="table-center"><?php echo e($contact->message); ?></td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">
                        <?php echo app('translator')->get('backend.labels.created_at'); ?>
                    </td>
                    <td class="table-center"><?php echo e($contact->created_at->format('d-m-Y H:i:s')); ?></td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">
                        <?php echo app('translator')->get('backend.labels.updated_at'); ?>
                    </td>
                    <td class="table-center"><?php echo e($contact->updated_at->format('d-m-Y H:i:s')); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/backend/contacts/tables/show.blade.php ENDPATH**/ ?>