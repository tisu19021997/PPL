function edit_row_gen(id) {
    var id = document.getElementById("id_val" + id).innerHTML;
    var name = document.getElementById("name_val" + id).innerHTML;
    var gen = document.getElementById("gen_val" + id).innerHTML;


    document.getElementById("id_val" + id).innerHTML = "<input type='text' id='id_text" + id + "' value='" + id + "'>";
    document.getElementById("name_val" + id).innerHTML = "<input type='text' id='name_text" + id + "' value='" + name + "'>";
    document.getElementById("gen_val" + id).innerHTML = "<input type='text' id='gen_text" + id + "' value='" + gen + "'>";


    document.getElementById("edit_button" + id).style.display = "none";
    document.getElementById("save_button" + id).style.display = "inline-block";
}

function save_row_gen(id) {
    var id = document.getElementById("id_text" + id).value;
    var name = document.getElementById("name_text" + id).value;
    var gen = document.getElementById("gen_text" + id).value;

    if (id === "") {
        console.log('fail');
    }

    $.ajax
    ({
        type: 'POST',
        url: 'modify_records.php',
        data: {
            edit_row_gen: 'edit_row_gen',
            row_id: id,
            id_val: id,
            name_val: name,
            gen_val: gen,
        },
        success: function (response) {
            document.getElementById("id_val" + id).innerHTML = id;
            document.getElementById("name_val" + id).innerHTML = name;
            document.getElementById("gen_val" + id).innerHTML = gen;
            console.log("Success");

        },
        error: function (request, status, error) {
            alert(request.responseText);
        },
    });
}

function delete_row_gen(id) {
    var id = document.getElementById("id_val" + id).innerHTML;
    var row = document.getElementById("row" + id);
    console.log(row);
    $.ajax
    ({
            type: 'POST',
            url: 'modify_records.php',
            data: {
                delete_row_gen: 'delete_row_gen',
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

function insert_row_gen() {
    var id = document.getElementById("new_id").value;
    var name = document.getElementById("new_name").value;
    var gen = document.getElementById("new_gen").value;


    $.ajax
    ({
        type: 'post',
        url: 'modify_records.php',
        data: {
            insert_row_gen: 'insert_row_gen',
            id_val: id,
            name_val: name,
            gen_val: gen,

        },
        success: function (response) {
            if (response != "") {
                console.log("Success");
                var table = document.getElementById("user_table");
                var table_len = (table.rows.length) - 1;
                var row = table.insertRow(table_len).outerHTML =
                    "<tr style='background-color:#abe0ab;' class='odd GradeX' id='row" + id + "'>" +
                    "<td><input type='checkbox' id='del_" + id + "'></td>" +
                    "<td id='id_val" + id + "'>" + id + "</td>" +
                    "<td id='name_val" + id + "' >" + name + "</td>" +
                    "<td id='gen_val"+id+"'>" + gen +"</td>"+
                    "<td class='center'>" +
                    "<div class='btn-group-xs'>" +
                    "<button type='button' class='btn btn-xs btn-primary' id='edit_button" + id + "' " +
                    "onclick=edit_row_gen('" + id + "'); >" +
                    "<i class='fa fa-edit'></i> " +
                    "</button>" +
                    "<button type='button' style='display:none;' class='btn btn-xs btn-primary' id='save_button" + id + "' " +
                    "onclick=save_row_gen('" + id + "');>" +
                    "<i class='fa fa-save'></i> " +
                    "</button>" +
                    "<button type='button' class='btn btn-xs btn-danger' id='delete_button" + id + "' " +
                    "onclick=delete_row_gen('" + id + "'); >" +
                    "<i class='fa fa-trash'></i> " +
                    "</button>" +
                    "</div> " +
                    "</td>" +
                    "</tr>";


                document.getElementById("new_id").value = '';
                document.getElementById("new_name").value = '';
                document.getElementById("new_gen").value = '';

            }
            else console.log('Error');
        }
    });
}

//Muliple Delete
$(document).ready(function(){

    $('#delete_multi').click(function(){

        var post_arr = [];
        $('#user_table input[type=checkbox]').each(function() {
            if (jQuery(this).is(":checked")) {
                var id = this.id;
                console.log(id);
                var splitid = id.split('_');
                console.log(splitid);
                var postid = splitid[1];

                post_arr.push(postid);

            }
        });

        if(post_arr.length > 0){

            // AJAX Request
            $.ajax({
                url: 'modify_records.php',
                type: 'POST',
                data: {
                    delete_multi_gen: 'delete_multi_gen',
                    post_id: post_arr
                },
                success: function(response){
                    $.each(post_arr, function( i,l ){
                        $('tr#row'+l).css('background','#e5604b').fadeOut(800,function(){
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
