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
function edit_row_hos(id) {
    var id = document.getElementById("id_val" + id).innerHTML;
    var name = document.getElementById("name_val" + id).innerHTML;
    var password = document.getElementById("password_val" + id).innerHTML;
    var address = document.getElementById("address_val" + id).innerHTML;
    var hosadmin = document.getElementById("hosadmin_val" + id).innerHTML;
    var hosadminemail = document.getElementById("hosadminemail_val" + id).innerHTML;

    document.getElementById("id_val" + id).innerHTML = "<input type='text' id='id_text" + id + "' value='" + id + "'>";
    document.getElementById("name_val" + id).innerHTML = "<input type='text' id='name_text" + id + "' value='" + name + "'>";
    document.getElementById("password_val" + id).innerHTML = "<input type='text' id='password_text" + id + "' value='" + password + "'>";
    document.getElementById("hosadmin_val" + id).innerHTML = "<input type='text' id='hosadmin_text" + id + "' value='" + hosadmin + "'>";
    document.getElementById("hosadminemail_val" + id).innerHTML = "<input type='text' id='hosadminemail_text" + id + "' value='" + hosadminemail + "'>";
    document.getElementById("address_val" + id).innerHTML = "<input type='text' id='address_text" + id + "' value='" + address + "'>";

    document.getElementById("edit_button" + id).style.display = "none";
    document.getElementById("save_button" + id).style.display = "inline-block";
}

function save_row_hos(id) {
    var id = document.getElementById("id_text" + id).value;
    var name = document.getElementById("name_text" + id).value;
    var password = document.getElementById("password_text" + id).value;
    var hosadminemail = document.getElementById("hosadminemail_text" + id).value;
    var hosadmin = document.getElementById("hosadmin_text" + id).value;
    var address = document.getElementById("address_text" + id).value;
    if (id === "") {
        alert('ID can not be null');
        event.preventDefault();
    }

    $.ajax
    ({
        type: 'POST',
        url: 'modify_records.php',
        data: {
            edit_row_hos: 'edit_row_hos',
            row_id: id,
            id_val: id,
            password_val: password,
            name_val: name,
            hosadminemail_val: hosadminemail,
            hosadmin_val: hosadmin,
            address_val: address,

        },
        success: function (response) {
            console.log(response);
            document.getElementById("id_val" + id).innerHTML = id;
            document.getElementById("name_val" + id).innerHTML = name;
            document.getElementById("password_val" + id).innerHTML = password;
            document.getElementById("hosadmin_val" + id).innerHTML = hosadmin;
            document.getElementById("hosadminemail_val" + id).innerHTML = hosadminemail;
            document.getElementById("address_val" + id).innerHTML = address;

            document.getElementById("edit_button" + id).style.display = "inline-block";
            document.getElementById("save_button" + id).style.display = "none";
            console.log("Success");

        },
        error: function (request, status, error) {
            alert(request.responseText);
        },
    });
}

function delete_row_hos(id) {
    var id = document.getElementById("id_val" + id).innerHTML;
    var row = document.getElementById("row" + id);
    console.log(row);
    $.ajax
    ({
            type: 'POST',
            url: 'modify_records.php',
            data: {
                delete_row_hos: 'delete_row_hos',
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

function active_row_hos(id) {
    var id = document.getElementById("id_val" + id).innerHTML;
    var status = document.getElementById("status_val" + id).innerHTML;
    var row = document.getElementById("row" + id);
    $.ajax
    ({
        type: 'POST',
        url: 'modify_records.php',
        data: {
            active_row_hos: 'active_row_hos',
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

function deactive_row_hos(id) {
    var id = document.getElementById("id_val" + id).innerHTML;
    var status = document.getElementById("status_val" + id).innerHTML;
    console.log(status);
    var row = document.getElementById("row" + id);
    $.ajax
    ({
        type: 'POST',
        url: 'modify_records.php',
        data: {
            deactive_row_hos: 'deactive_row_hos',
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

function insert_row_hos() {
    var id = document.getElementById("new_id").value;
    var name = document.getElementById("new_name").value;
    var password = document.getElementById("new_password").value;
    var address = document.getElementById("new_address").value;
    var hosadmin = document.getElementById("new_hosadmin").value;
    var hosadminemail = document.getElementById("new_hosadminemail").value;
    var status = document.getElementById("new_status").innerHTML;

    $.ajax
    ({
        type: 'post',
        url: 'modify_records.php',
        data: {
            insert_row_hos: 'insert_row_hos',
            id_val: id,
            name_val: name,
            password_val: password,
            address_val: address,
            hosadmin_val: hosadmin,
            hosadminemail_val: hosadminemail,
            status_val: status,
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
                    "<td id='name_val" + id + "'>" + name + "</td>" +
                    "<td id='password_val" + id + "'>" + password + "</td>" +
                    "<td id='address_val" + id + "'>" + address + "</td>" +
                    "<td id='hosadmin_val" + id + "'>" + hosadmin + "</td>" +
                    "<td id='hosadminemail_val" + id + "'>" + hosadminemail + "</td>" +
                    "<td id='status_val" + id + "'>Active</td>" +
                    "<td class='center'>" +
                    "<div class='btn-group-xs'>" +
                    "<button title='Edit' type='button' class='btn btn-xs btn-primary' id='edit_button" + id + "' " +
                    "onclick=edit_row_hos('" + id + "'); >" +
                    "<i class='fa fa-edit'></i> " +
                    "</button>" +
                    "<button title='Save' type='button' style='display:none;' class='btn btn-xs btn-primary' id='save_button" + id + "' " +
                    "onclick=save_row_hos('" + id + "');>" +
                    "<i class='fa fa-save'></i> " +
                    "</button>" +
                    "<button title='Delete' type='button' class='btn btn-xs btn-danger' id='delete_button" + id + "' " +
                    "onclick=delete_row_hos('" + id + "'); >" +
                    "<i class='fa fa-trash'></i> " +
                    "</button>" +
                    "<button title='Active' style='display:none;' type='button' class='btn btn-xs btn-warning' id='active_button" + id + "'" +
                    "onclick=active_row_hos('" + id + "'); >" +
                    "<i class='fa fa-check'></i>" +
                    "</button>" +
                    "<button title='Deactive' type='button' class='btn btn-xs btn-warning' id='deactive_button" + id + "'" +
                    "onclick=deactive_row_hos('" + id + "'); >" +
                    "<i class='fa fa-ban'></i>" +
                    "</button>" +
                    "</div> " +
                    "</td>" +
                    "</tr>";


                document.getElementById("new_id").value = '';
                document.getElementById("new_name").value = '';
                document.getElementById("new_address").value = '';
                document.getElementById("new_hosadmin").value = '';
                document.getElementById("new_hosadminemail").value = '';
            }
        }
    });
}


