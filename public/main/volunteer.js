$(function () {

    $('#contact-form').submit(function (e) {
        e.preventDefault();

        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var country = $('#country').val();
        var city = $('#city').val();
        var role = $('#role').val();
        var message = $('#message').val();

        if (name == "" || email == "" || phone == "" || message == "" || country == "" ||city == "" ||role == "") {
            toastr.error('Tüm alanlar doldurulmalıdır');
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
