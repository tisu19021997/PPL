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
    // var password = document.getElementById("password_val" + id).innerHTML;
    var address = document.getElementById("address_val" + id).innerHTML;
    var lang = document.getElementById("lang_val" + id).innerHTML;

    document.getElementById("id_val" + id).innerHTML = "<input type='text' id='id_text" + id + "' value='" + id + "'>";
    document.getElementById("lname_val" + id).innerHTML = "<input type='text' id='lname_text" + id + "' value='" + lname + "'>";
    document.getElementById("fname_val" + id).innerHTML = "<input type='text' id='fname_text" + id + "' value='" + fname + "'>";
    document.getElementById("gender_val" + id).innerHTML = "<input type='text' id='gender_text" + id + "' value='" + gender + "'>";
    document.getElementById("email_val" + id).innerHTML = "<input type='text' id='email_text" + id + "' value='" + email + "'>";
    // document.getElementById("password_val" + id).innerHTML = "<input type='text' id='password_text" + id + "' value='" + password + "'>";
    document.getElementById("address_val" + id).innerHTML = "<input type='text' id='address_text" + id + "' value='" + address + "'>";
    document.getElementById("lang_val" + id).innerHTML = "<input type='text' id='lang_text" + id + "' value='" + lang + "'>";

    document.getElementById("edit_button" + id).style.display = "none";
    document.getElementById("save_button" + id).style.display = "inline-block";
}

function save_row(id) {
    var id = document.getElementById("id_text" + id).value;
    var lname = document.getElementById("lname_text" + id).value;
    var fname = document.getElementById("fname_text" + id).value;
    var gender = document.getElementById("gender_text" + id).value;
    var email = document.getElementById("email_text" + id).value;
    // var password = document.getElementById("password_text" + id).value;
    var address = document.getElementById("address_text" + id).value;
    var lang = document.getElementById("lang_text" + id).value;
    if (id === "") {
        console.log('fail');
    }

    $.ajax
    ({
        type: 'POST',
        url: 'modify_records.php',
        data: {
            edit_row: 'edit_row',
            row_id: id,
            id_val: id,
            lname_val: lname,
            fname_val: fname,
            gender_val: gender,
            email_val: email,
            // password_val: password,
            address_val: address,
            lang_val: lang,
        },
        success: function (response) {
            console.log(response);
            document.getElementById("id_val" + id).innerHTML = id;
            document.getElementById("lname_val" + id).innerHTML = lname;
            document.getElementById("fname_val" + id).innerHTML = fname;
            document.getElementById("gender_val" + id).innerHTML = gender;
            document.getElementById("email_val" + id).innerHTML = email;
            // document.getElementById("password_val" + id).innerHTML = password;
            document.getElementById("address_val" + id).innerHTML = address;
            document.getElementById("lang_val" + id).innerHTML = lang;
            document.getElementById("edit_button" + id).style.display = "inline-block";
            document.getElementById("save_button" + id).style.display = "none";
            console.log("Success");

        },
        error: function (request, status, error) {
            alert(request.responseText);
        },
    });
}

function delete_row(id) {
    var id = document.getElementById("id_val" + id).innerHTML;
    var row = document.getElementById("row" + id);
    console.log(row);
    $.ajax
    ({
            type: 'POST',
            url: 'modify_records.php',
            data: {
                delete_row: 'delete_row',
                row_id: id,
            },
            success: function (response) {

                $('tr#row' + id).css('background', '#e5604b');
                $('tr#row' + id).fadeOut(800, function () {
                    $(this).remove();
                });
                // row.parentNode.removeChild(row);

                // console.log(id);

            }
        }
    );
}

function active_row(id) {
    var id = document.getElementById("id_val" + id).innerHTML;
    var status = document.getElementById("status_val" + id).innerHTML;
    var row = document.getElementById("row" + id);
    $.ajax
    ({
        type: 'POST',
        url: 'modify_records.php',
        data: {
            active_row: 'active_row',
            row_id: id,
            status_val: status,

        },
        success: function (response) {
            $('#row' + id).css({"background-color": "#5cb85c", "color": "white"});
            $("#status_val" + id).html("Active");
            $("#active_button" + id).attr("onclick", "deactive_row('" + id + "')");
            $("#active_button" + id).attr("id", "deactive_button" + id);
            $("#deactive_button" + id + " .fa-check").addClass("fa-ban").removeClass("fa-check");
        }
    });
    // row.parentNode.removeChild(row);

    // console.log(id);

};

function deactive_row(id) {
    var id = document.getElementById("id_val" + id).innerHTML;
    var status = document.getElementById("status_val" + id).innerHTML;
    console.log(status);
    var row = document.getElementById("row" + id);
    $.ajax
    ({
        type: 'POST',
        url: 'modify_records.php',
        data: {
            deactive_row: 'deactive_row',
            row_id: id,
            status_val: status,

        },
        success: function (response) {
            $('#row' + id).css({"background-color": "#ef7070", "color": "white"});
            $("#status_val" + id).html("Deactive");
            $("#deactive_button" + id).attr("onclick", "active_row('" + id + "')");
            $("#deactive_button" + id).attr("id", "active_button" + id);
            $("#active_button" + id + " .fa-ban").addClass("fa-check").removeClass("fa-ban");
        }
    });
    // row.parentNode.removeChild(row);

    // console.log(id);

};

function insert_row() {
    var id = document.getElementById("new_id").value;
    var lname = document.getElementById("new_lname").value;
    var fname = document.getElementById("new_fname").value;
    var gender = document.getElementById("new_gender").value;
    var email = document.getElementById("new_email").value;
    var password = document.getElementById("new_password").value;
    var address = document.getElementById("new_address").value;
    var lang = document.getElementById("new_lang").value;;

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
                var row = table.insertRow(table_len).outerHTML =
                    "<tr style='background-color:#abe0ab;' class='odd GradeX' id='row" + id + "'>" +
                    "<td><input type='checkbox' id='check_val" + id + "'></td>" +
                    "<td id='id_val" + id + "'>" + id + "</td>" +
                    "<td id='fname_val" + id + "'>" + fname + "</td>" +
                    "<td id='lname_val" + id + "'>" + lname + "</td>" +
                    "<td id='gender_val" + id + "'>" + gender + "</td>" +
                    "<td id='email_val" + id + "'>" + email + "</td>" +
                    "<td id='password_val" + id + "'>" + password + "</td>" +
                    "<td id='address_val" + id + "'>" + address + "</td>" +
                    "<td id='lang_val" + id + "'>" + lang + "</td>" +
                    "<td id='status_val" + id + "'>Active</td>" +
                    "<td class='center'>" +
                    "<div class='btn-group-xs'>" +
                    "<button type='button' class='btn btn-xs btn-primary' id='edit_button" + id + "' " +
                    "onclick=edit_row('" + id + "'); >" +
                    "<i class='fa fa-edit'></i> " +
                    "</button>" +
                    "<button type='button' style='display:none;' class='btn btn-xs btn-primary' id='save_button" + id + "' " +
                    "onclick=save_row('" + id + "');>" +
                    "<i class='fa fa-save'></i> " +
                    "</button>" +
                    "<button type='button' class='btn btn-xs btn-danger' id='delete_button" + id + "' " +
                    "onclick=delete_row('" + id + "'); >" +
                    "<i class='fa fa-trash'></i> " +
                    "</button>" +
                    "<button title='Active' style='display:none;' type='button' class='btn btn-xs btn-warning' id='active_button" + id + "'" +
                    "onclick=active_row('" + id + "'); >" +
                    "<i class='fa fa-check'></i>" +
                    "</button>" +
                    "<button title='Deactive' type='button' class='btn btn-xs btn-warning' id='deactive_button" + id + "'" +
                    "onclick=deactive_row('" + id + "'); >" +
                    "<i class='fa fa-ban'></i>" +
                    "</button>" +
                    "</div> "+
                    "</td>" +
                    "</tr>";


                document.getElementById("new_id").value = '';
                document.getElementById("new_lname").value = '';
                document.getElementById("new_fname").value = '';
                document.getElementById("new_gender").value = '';
                document.getElementById("new_email").value = '';
                document.getElementById("new_password").value = '';
                document.getElementById("new_address").value = '';
                document.getElementById("new_lang").value = '';
            }
        }
    });
}


//Muliple Delete
$(document).ready(function(){

    $('#delete_multi_pa').click(function(){

        var post_arr = [];
        $('#user_table input[type=checkbox]').each(function() {
            if (jQuery(this).is(":checked")) {
                var id = this.id;
                console.log(id);
                var splitid = id.split('_');
                console.log(splitid);
                var postid = splitid[1];
                console.log(postid);
                post_arr.push(postid);

            }
        });

        if(post_arr.length > 0){

            // AJAX Request
            $.ajax({
                url: 'modify_records.php',
                type: 'POST',
                data: {
                    delete_multi_pa: 'delete_multi_pa',
                    post_id: post_arr
                },
                success: function(response){
                    $.each(post_arr, function( i,l ){
                        $('tr#row'+ l).css('background','#e5604b').fadeOut(800,function(){
                            $(this).remove();
                        })
                    });
                    // $('tr#row' + id).css('background', '#e5604b');
                    // $('tr#row' + id).fadeOut(800, function () {
                    //     $(this).remove();
                }
            });
        }
    });

});
