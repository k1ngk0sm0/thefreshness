$('document').ready(function() {
    // When registration submit button is clicked
    $('#registrationButton').on('click', function() {
        // Assign input fields to variables
        var username = $('#registrationUsername').val()
        var email = $('#registrationEmail').val()
        var password1 = $('#registrationPass1').val()
        var password2 = $('#registrationPass2').val()
        var address = $('#registrationAddress').val()
        var city = $('#registrationCity').val()
        var state = $('#registrationState').val()
        var zip = $('#registrationZip').val()
        // Send data for server-side validation
        $.ajax({
            url: 'registrationValidate.php',
            type: 'post',
            data: {
                "username" : username,
                "email" : email,
                'password1' : password1,
                'password2' : password2,
                'address' : address,
                'city' : city,
                'state' : state,
                'zip' : zip
            },
            dataType: 'json',
            cache: false,
            success: function(response) {
                for (status in response){
                    if (response[status] !== 'valid') {
                        $(status).removeClass()
                        $(status).addClass('form-control is-invalid')
                        $(status).siblings("div").addClass('invalid-feedback')
                        $(status).siblings("div").text(response[status])
                    }
                    else {
                        $(status).removeClass()
                        $(status).addClass('form-control is-valid')
                    }
                    
                }
            }
        })
    })
})