$(function () {

    $('#contact-form').submit(function (e) {
        e.preventDefault();

        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var subject = $('#subject').val();
        var message = $('#message').val();

        if (name == "" || email == "" || phone == "" || subject == "" || message == "") {
            toastr.error('All fields must be filled in');
        } else {

            var data = new FormData(this);
            const contactPostUrl = $(this).data('url')
            $.ajax({
                url: contactPostUrl,
                data: data,
                method: 'post',
                dataType: 'JSON',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    toastr.success(`${response.message}`);
                    $('#contact-form').find("input, textarea").val("");
                },
                error: function (response) {
                    toastr.error(`${response.message}`);
                }
            })
        }
    })
});
