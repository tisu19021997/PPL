// $(document).ready(function () {
//     $("#edit_button" + id).click(function (id) {
//         id = $("#id_val" + id).html();
//         var fname = $("#fname_val" + id).html();
//         var lname = $("#lname_val" + id).html();
//         var gender = $("#gender_val" + id).html();
//         var email = $("#email_val" + id).html();
//         var password = $("#password_val" + id).html();
//         var address = $("#address_val" + id).html();
//         var lang = $("#lang_val" + id).html();
//
//         $("#id_val" + id).html("<input type='text' id='id_text" + id + "' value='" + id + "'>");
//         $("#fname_val" + id).html("<input type='text' id='fname_text" + id + "' value='" + fname + "'>");
//         $("#lname_val" + id).html("<input type='text' id='lname_text" + id + "' value='" + lname + "'>");
//         $("#gender_val" + id).html("<input type='text' id='gender_text" + id + "' value='" + gender + "'>");
//         $("#email_val" + id).html("<input type='text' id='email_text" + id + "' value='" + email + "'>");
//         $("#password_val" + id).html("<input type='text' id='password_text" + id + "' value='" + password + "'>");
//         $("#address_val" + id).html("<input type='text' id='address_text" + id + "' value='" + address + "'>");
//         $("#lang_val" + id).html("<input type='text' id='address_text" + id + "' value='" + lang + "'>");
//
//
//     });
// });
function edit_row(id) {
    var id = document.getElementById("id_val" + id).innerHTML;
    var lname = document.getElementById("lname_val" + id).innerHTML;
    var fname = document.getElementById("fname_val" + id).innerHTML;
    var gender = document.getElementById("gender_val" + id).innerHTML;
    var email = document.getElementById("email_val" + id).innerHTML;
    var password = document.getElementById("password_val" + id).innerHTML;
    var address = document.getElementById("address_val" + id).innerHTML;
    var lang = document.getElementById("lang_val" + id).innerHTML;

    document.getElementById("id_val" + id).innerHTML = "<input type='text' id='id_text" + id + "' value='" + id + "'>";
    document.getElementById("lname_val" + id).innerHTML = "<input type='text' id='lname_text" + id + "' value='" + lname + "'>";
    document.getElementById("fname_val" + id).innerHTML = "<input type='text' id='fname_text" + id + "' value='" + fname + "'>";
    document.getElementById("gender_val" + id).innerHTML = "<input type='text' id='gender_text" + id + "' value='" + gender + "'>";
    document.getElementById("email_val" + id).innerHTML = "<input type='text' id='email_text" + id + "' value='" + email + "'>";
    document.getElementById("password_val" + id).innerHTML = "<input type='text' id='password_text" + id + "' value='" + password + "'>";
    document.getElementById("address_val" + id).innerHTML = "<input type='text' id='address_text" + id + "' value='" + address + "'>";
    document.getElementById("lang_val" + id).innerHTML = "<input type='text' id='lang_text" + id + "' value='" + lang + "'>";

    document.getElementById("edit_button" + id).style.opacity = "0";
    document.getElementById("save_button" + id).style.opacity = "1";
}

function save_row(id) {
    var id = document.getElementById("id_text" + id).value;
    var lname = document.getElementById("lname_text" + id).value;
    var fname = document.getElementById("fname_text" + id).value;
    var gender = document.getElementById("gender_text" + id).value;
    var email = document.getElementById("email_text" + id).value;
    var password = document.getElementById("password_text" + id).value;
    var address = document.getElementById("address_text" + id).value;
    var lang = document.getElementById("lang_text" + id).value;
    if(id === "") {
        console.log('fail');
    }

    $.ajax
    ({
        type: 'post',
        url: 'modify_records.php',
        data: {
            edit_row: 'edit_row',
            row_id: id,
            id_val: id,
            lname_val: lname,
            fname_val: fname,
            gender_val: gender,
            email_val: email,
            password_val: password,
            address_val: address,
            lang_val: lang,
        },
        success: function (response) {
            if (response == "success") {
                document.getElementById("id_val" + id).innerHTML = id;
                document.getElementById("lname_val" + id).innerHTML = lname;
                document.getElementById("fname_val" + id).innerHTML = fname;
                document.getElementById("gender_val" + id).innerHTML = gender;
                document.getElementById("email_val" + id).innerHTML = email;
                document.getElementById("password_val" + id).innerHTML = password;
                document.getElementById("address_val" + id).innerHTML = address;
                document.getElementById("lang_val" + id).innerHTML = lang;

                document.getElementById("edit_button" + id).style.opacity = "1";
                document.getElementById("save_button" + id).style.opacity = "0";
            }
            else {
                console.log('Error');
            }
        }

    });
}

function delete_row(id) {
    var el = this;
    $.ajax
    ({
        type: 'post',
        url: 'modify_records.php',
        data: {
            delete_row: 'delete_row',
            row_id: id,
        },
        success: function (response) {
            if (response == "success") {
                // $('$row'+id).css('background', 'tomato');
                // $('$row'+id).fadeOut(800, function () {
                //     $(this).remove();
                // });
                var row=document.getElementById("row"+id);
                row.parentNode.removeChild(row);
                console.log(id);
            }
            else {
                console.log('error');
            }
        }
    });
}


function insert_row() {
    var id = document.getElementById("new_id").value;
    var lname = document.getElementById("new_lname").value;
    var fname = document.getElementById("new_fname").value;
    var gender = document.getElementById("new_gender").value;
    var email = document.getElementById("new_email").value;
    var password = document.getElementById("new_password").value;
    var address = document.getElementById("new_address").value;
    var lang = document.getElementById("new_lang").value;

    $.ajax
    ({
        type: 'post',
        url: 'modify_records.php',
        data: {
            insert_row: 'insert_row',
            id_val: id,
            lname_val: lname,
            fname_val: fname,
            gender_val: gender,
            email_val: email,
            password_val: password,
            address_val: address,
            lang_val: lang,
        },
        success: function (response) {
            if (response != "") {
                console.log("Success");
                var table = document.getElementById("user_table");
                var table_len = (table.rows.length) - 1;
                var row = table.insertRow(table_len).outerHTML = "<tr id='row" + id + "'><td id='id_val" + id + "'>" + id + "</td><td id='lname_val" + id + "'>" + lname + "</td>" +
                    "<td id='lname_val" + id + "'>" + lname + "</td><td id='gender_val" + id + "'>" + gender + "</td>" +
                    "<td id='email_val" + id + "'>" + email + "</td><td id='password_val" + id + "'>" + password + "</td>" +
                    "<td id='address_val" + id + "'>" + address + "</td><td id='lang_val" + id + "'>" + lang + "</td>" +
                    "<td class='center'>" +
                    "<button class='btn btn-xs btn-primary' id='edit_button" + id + "' onclick='edit_row(" + id + ");' >" +
                    "<i class='fa fa-edit'></i> " +
                    "</button>" +
                    "<button style='opacity:0;' class='btn btn-xs btn-primary' id='save_button" + id + "' onclick='save_row(" + id + ");' >" +
                    "<i class='fa fa-save'></i> " +
                    "</button>" +
                    "<button class='btn btn-xs btn-danger' id='delete_button" + id + "' onclick='delete_row(" + id + ");' >" +
                    "<i class='fa fa-trash'></i> " +
                    "</button>" +
                    "</td> ";

                document.getElementById("new_id" + id).value = '';
                document.getElementById("new_lname" + id).value = '';
                document.getElementById("new_fname" + id).value = '';
                document.getElementById("new_gender" + id).value = '';
                document.getElementById("new_email" + id).value = '';
                document.getElementById("new_password" + id).value = '';
                document.getElementById("new_address" + id).value = '';
                document.getElementById("new_lang" + id).value = '';
            }
        }
    });
}