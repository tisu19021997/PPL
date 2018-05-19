$(document).ready(function() {

    $("#regist-form").validate({
        rules: {
            fname: "required",
            lname: "required",
            id: {
                required: true,
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
            },
            address: "required",
            optradio: "required",
        },
        messages: {
            fname: "Please enter your first name",
            lname: "Please enter your last name",
            id: {
                required: "Please enter your ID",
            },
            email: "Please enter a valid email",
            password: {
                required: "Please enter your password for the account",
            },
            address: "Please enter your address",
        }
    });
});

//Hospital Registration
$(document).ready(function() {

    $("#regist-form-hospital").validate({
        rules: {
            hosname: "required",
            hosid: {
                required: true,
            },
            hosemail: {
                required: true,
                email: true
            },
            hospwd: {
                required: true,
            },
            hosadd: "required",
            hosadmin: "required"
        },
        messages: {
            hosname: "Please enter your hospital name",
            hosid: "Please enter your hospital ID",
            hosemail: "Please enter your hospital admin email",
            hospwd: "Please enter your hospital password",
            hosadmin: "Please enter your hospital admin name",
            hosadd: "Please enter your hospital address"
        }
    });
});