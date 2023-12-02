<script>
    var table = $('#datatable').DataTable(
    {
        oLanguage:
        {
            sProcessing: '<?php echo e(trans("backend.datatables.loading")); ?>',
            sSearch:     '<?php echo e(trans("backend.datatables.search")); ?>'
        },
        ajax:
        {
            url:  '<?php echo e(route("backend.settings.index")); ?>',
            type: 'GET'
        },
        serverSide: true,
        processing: true,
        columns:
        [
            {data: 'id',      name: 'id'},
            {data: 'name',    name: 'name'},
            {data: 'slug',    name: 'slug'},
            {data: 'content', name: 'content'},
            {data: 'actions', name: 'actions'}
        ],
        columnDefs:
        [
            {
                'targets':   [3],
                'orderable': false
            }
        ],
        language:
        {
            'emptyTable': '<?php echo e(trans("backend.datatables.empty")); ?>'
        }
    });

    $(document).on('click', '.btn-delete', function(e)
    {
        e.preventDefault();

        <?php echo confirm(); ?>.then((result) =>
        {
            if (result.isConfirmed)
            {
                var url  = $(this).prop('href');
                var type = 'POST';
                var data = {_method: 'DELETE', _token: '<?php echo e(csrf_token()); ?>'};

                $.ajax(
                {
                    url:  url,
                    type: type,
                    data: data,
                    success: function (result)
                    {
                        if (result.status == 1)
                        {
                            <?php echo notify('success', trans('backend.messages.success.delete')); ?>

                            table.row($(this).parents('tr')).remove().draw();
                        }

                        else
                        {
                            <?php echo notify('error', trans('backend.messages.error.delete')); ?>

                        }
                    }
                });
            }
        });
    });
</script>
<?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/backend/settings/scripts/index.blade.php ENDPATH**/ ?>