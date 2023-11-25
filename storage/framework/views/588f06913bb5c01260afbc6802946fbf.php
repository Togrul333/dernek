<?php if(session()->has('success')): ?>
    <script>
        <?php echo notify('success', session('success')); ?>

    </script>
<?php endif; ?>

<?php if(session()->has('error')): ?>
    <script>
        <?php echo notify('error', session('error')); ?>

    </script>
<?php endif; ?>

<?php if(session()->has('warning')): ?>
    <script>
        <?php echo notify('warning', session('warning')); ?>

    </script>
<?php endif; ?>
<?php /**PATH C:\kurs\Dernek\resources\views/backend/includes/notification.blade.php ENDPATH**/ ?>