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
                "password1" : password1,
                'password2' : password2,
                'address' : address,
                'city' : city,
                'state' : state,
                'zip' : zip
            },
            // Response will be a JSON encoded associative array
            dataType: 'json',
            cache: false,
            success: function(response) {
                // Check whether data sent was validated
                for (status in response){
                    // Add is-valid class to validated inputs
                    if (response[status] == 'valid') {
                        $(status).removeClass()
                        $(status).addClass('form-control is-valid')
                        // If all user input is validated and is successfully added to db
                    } else if (response[status] == 'saved') {
                        // Redirect to success page
                        window.location.href = "registrationSuccess.php"
                        // If any fields are invalid, highlight and display error message
                    } else if (response[status] !== 'valid' && response[status] !== 'saved' && response[status] != 'failed') {
                        $(status).removeClass()
                        $(status).addClass('form-control is-invalid')
                        $(status).siblings("div").addClass('invalid-feedback')
                        $(status).siblings("div").text(response[status])
                        // If all fields are validated, but there was an error adding to database
                    } else if (response[status] == 'failed') {
                        alert('Oops! Something went wrong.')
                    }
                }
            }
        })
    })
})