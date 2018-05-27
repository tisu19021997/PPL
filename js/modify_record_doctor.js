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
function edit_row_doc(id) {
    var id = document.getElementById("id_val" + id).innerHTML;
    var lname = document.getElementById("lname_val" + id).innerHTML;
    var fname = document.getElementById("fname_val" + id).innerHTML;
    var gender = document.getElementById("gender_val" + id).innerHTML;
    var degree = document.getElementById("degree_val" + id).innerHTML;
    // var password = document.getElementById("password_val" + id).innerHTML;
    var accept_ins = document.getElementById("accept_ins_val" + id).innerHTML;
    var specific_spe = document.getElementById("specific_specialty_val" + id).innerHTML;
    var office_hours = document.getElementById("office_hours_val" + id).innerHTML;
    var lang = document.getElementById("lang_val" + id).innerHTML;
    var hosname = document.getElementById("hosname_val" + id).innerHTML;

    document.getElementById("id_val" + id).innerHTML = "<input type='text' id='id_text" + id + "' value='" + id + "'>";
    document.getElementById("lname_val" + id).innerHTML = "<input type='text' id='lname_text" + id + "' value='" + lname + "'>";
    document.getElementById("fname_val" + id).innerHTML = "<input type='text' id='fname_text" + id + "' value='" + fname + "'>";
    document.getElementById("gender_val" + id).innerHTML = "<input type='text' id='gender_text" + id + "' value='" + gender + "'>";
    document.getElementById("degree_val" + id).innerHTML = "<input type='text' id='degree_text" + id + "' value='" + degree + "'>";
    // document.getElementById("password_val" + id).innerHTML = "<input type='text' id='password_text" + id + "' value='" + password + "'>";
    document.getElementById("accept_ins_val" + id).innerHTML = "<input type='text' id='accept_ins_text" + id + "' value='" + accept_ins + "'>";
    document.getElementById("lang_val" + id).innerHTML = "<input type='text' id='lang_text" + id + "' value='" + lang + "'>";
    document.getElementById("specific_specialty_val" + id).innerHTML = "<input type='text' id='specific_specialty_text" + id + "' value='" + specific_spe + "'>";
    document.getElementById("office_hours_val" + id).innerHTML = "<input type='text' id='office_hours_text" + id + "' value='" + office_hours + "'>";
    document.getElementById("lang_val" + id).innerHTML = "<input type='text' id='lang_text" + id + "' value='" + lang + "'>";
    document.getElementById("hosname_val" + id).innerHTML = "<input type='text' id='hosname_text" + id + "' value='" + hosname + "'>";

    document.getElementById("edit_button" + id).style.display = "none";
    document.getElementById("save_button" + id).style.display = "inline-block";
}

function save_row_doc(id) {
    var id = document.getElementById("id_text" + id).value;
    var lname = document.getElementById("lname_text" + id).value;
    var fname = document.getElementById("fname_text" + id).value;
    var gender = document.getElementById("gender_text" + id).value;
    var degree = document.getElementById("degree_text" + id).value;
    // var password = document.getElementById("password_text" + id).value;
    var accept_ins = document.getElementById("accept_ins_text" + id).value;
    var lang = document.getElementById("lang_text" + id).value;
    var specific_spe = document.getElementById("specific_specialty_text" + id).value;
    var office_hours = document.getElementById("office_hours_text" + id).value;
    var hosname = document.getElementById("hosname_text" + id).value;
    if (id === "") {
        console.log('fail');
    }

    $.ajax
    ({
        type: 'POST',
        url: 'modify_records.php',
        data: {
            edit_row_doc: 'edit_row_doc',
            row_id: id,
            id_val: id,
            lname_val: lname,
            fname_val: fname,
            gender_val: gender,
            degree_val: degree,
            // password_val: password,
            accept_ins_val: accept_ins,
            specific_spe_val: specific_spe,
            office_hours_val: office_hours,
            lang_val: lang,
            hosname_val: hosname,
        },
        success: function (response) {
            console.log(response);
            document.getElementById("id_val" + id).innerHTML = id;
            document.getElementById("lname_val" + id).innerHTML = lname;
            document.getElementById("fname_val" + id).innerHTML = fname;
            document.getElementById("gender_val" + id).innerHTML = gender;
            document.getElementById("degree_val" + id).innerHTML = degree;
            // document.getElementById("password_val" + id).innerHTML = password;
            document.getElementById("accept_ins_val" + id).innerHTML = accept_ins;
            document.getElementById("lang_val" + id).innerHTML = lang;
            document.getElementById("specific_specialty_val" + id).innerHTML = specific_spe;
            document.getElementById("office_hours_val" + id).innerHTML = office_hours;
            document.getElementById("hosname_val" + id).innerHTML = hosname;

            document.getElementById("edit_button" + id).style.display = "inline-block";
            document.getElementById("save_button" + id).style.display = "none";
            console.log("Success");

        },
        error: function (request, status, error) {
            alert(request.responseText);
        },
    });
}

function delete_row_doc(id) {
    var id = document.getElementById("id_val" + id).innerHTML;
    var row = document.getElementById("row" + id);
    console.log(row);
    $.ajax
    ({
            type: 'POST',
            url: 'modify_records.php',
            data: {
                delete_row_doc: 'delete_row_doc',
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


function insert_row_doc() {
    var id = document.getElementById("new_id").value;
    var lname = document.getElementById("new_lname").value;
    var fname = document.getElementById("new_fname").value;
    var gender = document.getElementById("new_gender").value;
    var degree = document.getElementById("new_degree").value;
    var ins = document.getElementById("new_ins").value;
    var speci = document.getElementById("new_specific").value;
    var office = document.getElementById("new_office").value;
    var lang = document.getElementById("new_lang").value;
    var hos = document.getElementById("new_hos").value
    ;

    $.ajax
    ({
        type: 'post',
        url: 'modify_records.php',
        data: {
            insert_row_doc: 'insert_row_doc',
            id_val: id,
            lname_val: lname,
            fname_val: fname,
            gender_val: gender,
            degree_val: degree,
            // password_val: password,
            accept_ins_val: ins,
            specific_spe_val: speci,
            office_hours_val: office,
            lang_val: lang,
            hosname_val: hos,
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
                    "<td id='degree_val" + id + "'>" + degree + "</td>" +
                    "<td id='accept_ins_val" + id + "'>" + ins + "</td>" +
                    "<td id='specific_specialty_val" + id + "'>" + speci + "</td>" +
                    "<td id='office_hours_val" + id + "'>" + office + "</td>" +
                    "<td id='lang_val" + id + "'>" + lang + "</td>" +
                    "<td id='hosname_val" + id + "'>" + hos + "</td>" +
                    "<td class='center'>" +
                    "<div class='btn-group-xs'>" +
                    "<button type='button' class='btn btn-xs btn-primary' id='edit_button" + id + "' " +
                    "onclick=edit_row_doc('" + id + "'); >" +
                    "<i class='fa fa-edit'></i> " +
                    "</button>" +
                    "<button type='button' style='display:none;' class='btn btn-xs btn-primary' id='save_button" + id + "' " +
                    "onclick=save_row_doc('" + id + "');>" +
                    "<i class='fa fa-save'></i> " +
                    "</button>" +
                    "<button type='button' class='btn btn-xs btn-danger' id='delete_button" + id + "' " +
                    "onclick=delete_row_doc('" + id + "'); >" +
                    "<i class='fa fa-trash'></i> " +
                    "</button>" +
                    "</div> " +
                    "</td>" +
                    "</tr>";


                document.getElementById("new_id").value = '';
                document.getElementById("new_lname").value = '';
                document.getElementById("new_fname").value = '';
                document.getElementById("new_gender").value = '';
                document.getElementById("new_degree").value = '';
                document.getElementById("new_ins").value = '';
                document.getElementById("new_specific").value = '';
                document.getElementById("new_office").value = '';
                document.getElementById("new_lang").value = '';
                document.getElementById("new_hos").value = '';
            }
        }
    });
}


