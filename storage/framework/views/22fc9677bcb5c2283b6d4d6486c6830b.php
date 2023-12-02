<script>
    let columnsArr = <?php echo json_encode($columns); ?>,
        lang = '<?php echo e(config('app.locale')); ?>',
        pageLength = <?php echo e(isset($pageLength) ? json_encode($pageLength) : 10); ?>,
        columns = columnsArr.map(item => {
            return {
                data: item,
                name: item,
            };
        });

    lang === 'az'
        ? langUrl='<?php echo e(asset('/backend/js/datatables/langs/az_az.json')); ?>'
        : langUrl='';


    let   table = $('#datatable').DataTable(
        {
            oLanguage:
                {
                    url: langUrl
                },
            ajax:
                {
                    url:  '<?php echo e($route); ?>',
                    type: 'GET',
                    data: function (d) {
                        d.name = $('input[name=name]').val();
                        d.status = $('select[name=status]').val();
                    },
                },
            serverSide: true,
            processing: true,
            searching: false,
            scrollCollapse: true,
            aaSorting : [[0, false]],
            order: [[0, "desc"]],
            buttons: [
                'colvis',
                {
                    extend: 'csv',
                    charset: 'UTF-8',
                    fieldSeparator: ';',
                    bom: true,

                },
                {
                    extend: 'excel',
                    charset: 'UTF-8',
                    bom: true,
                    exportOptions: {
                        columns: [ 0, 2, 3,]
                    }
                },
                {
                    extend: 'pdf',
                    charset: 'UTF-8',
                    bom: true,
                    exportOptions: {
                        columns: [ 0, 2, 3,]
                    }
                },
                {
                    extend: 'print',
                    charset: 'UTF-8',
                    bom: true,
                    exportOptions: {
                        stripHtml: false,
                        columns: [ 0, 2, 3,]
                    }
                },

            ],
            "pageLength":pageLength,
            "lengthMenu": [10, 20, 50, 100, 150, 200],
            dom: "lfrttipB",
            columns,
            columnDefs:
                [
                    {
                        'orderable': false
                    }
                ],
            language:
                {
                    'emptyTable': '<?php echo e(trans("backend.datatables.empty")); ?>'
                }
        });


    $('.filter-input').keypress(function () {
        table.search($(this).val())
            .draw();
    });


    $('.filter-select').on('change',function(){
        table.search($(this).val())
            .draw();
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
<?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/backend/includes/plugins/datatable.blade.php ENDPATH**/ ?>