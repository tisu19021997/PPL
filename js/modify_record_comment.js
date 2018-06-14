
function active_row_comment(id) {
    var id = document.getElementById("id_val" + id).innerHTML;
    var status = document.getElementById("status_val" + id).innerHTML;
    var row = document.getElementById("row" + id);

    $.ajax
    ({
        type: 'POST',
        url: 'modify_records.php',
        data: {
            active_row_comment: 'active_row_comment',
            row_id: id,
            status_val: status,

        },
        success: function (response) {
            $('#row' + id).css({"background-color": "#5cb85c", "color": "white"});
            $("#status_val" + id).html("Active");
            $("#active_button" + id).attr("onclick", "deactive_row_comment('" + id + "')");
            $("#active_button" + id).attr("id", "deactive_button" + id);
            $("#deactive_button" + id + " .fa-check").addClass("fa-ban").removeClass("fa-check");
        }
    });
    // row.parentNode.removeChild(row);

    // console.log(id);

};

function deactive_row_comment(id) {
    var id = document.getElementById("id_val" + id).innerHTML;
    var status = document.getElementById("status_val" + id).innerHTML;
    console.log(status);
    var row = document.getElementById("row" + id);
    $.ajax
    ({
        type: 'POST',
        url: 'modify_records.php',
        data: {
            deactive_row_comment: 'deactive_row_comment',
            row_id: id,
            status_val: status,

        },
        success: function (response) {
            $('#row' + id).css({"background-color": "#ef7070", "color": "white"});
            $("#status_val" + id).html("Deactive");
            $("#deactive_button" + id).attr("onclick", "active_row_comment('" + id + "')");
            $("#deactive_button" + id).attr("id", "active_button" + id);
            $("#active_button" + id + " .fa-ban").addClass("fa-check").removeClass("fa-ban");
        }
    });
    // row.parentNode.removeChild(row);

    // console.log(id);

};



