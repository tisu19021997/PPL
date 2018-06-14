function post(id) {

    // var date = document.getElementById('date_val'+id).innerHTML;
    var doctor = document.getElementById('id_val' + id).innerHTML;
    var comment = document.getElementById('comment_val' + id).value; //Comment
    var hos = document.getElementById("hos_" + id).innerHTML; //Name hospital
    var rate = document.getElementById("rating" + id).value;

    var index = $('.hidden').html();

    // var name = document.getElementById("username").value;

    if (comment) {
        $.ajax
        ({
            type: 'POST',
            url: 'post-comment.php',
            data:
                {
                    add_comment: 'add_comment',
                    comm: comment,
                    doctor: doctor,
                    hos: hos,
                    rate: rate,
                },
            success: function (response) {
                console.log(index);
                console.log(id);
                // var test = $('#modal_'+id+'.commentcontent1');
                // console.log(test);
                $('#comment_val' + id).val('');
                $('#rating' + id).val('1')
                $('#modal_' + id + ' .commentcontent1').fadeIn(300,function() {
                    $(this).before(
                        "<div id='all_comments" + id + "'>" +
                        "<div class='row' id='row" + id + "'>" +
                        "<div class='col-sm-1'>" +
                        "<div class='thumbnail'> " +
                        "<img class=\"img-responsive user-photo\" src=\"https://ssl.gstatic.com/accounts/ui/avatar_2x.png\">\n " +
                        "</div>" +
                        "</div>" +

                        " <div class=\"col-sm-11\" style=\"margin-top: 1em;\">\n" +
                        "<div class=\"panel panel-default\">\n" +
                        "<div class=\"panel-heading\" >" +
                        "<strong id='hos_val" + id + "'>" + hos + "</strong>" +
                        "<span class='text-muted'> commented in <span id='date_val" + id + "'>Just Now with </span></span>"+rate+ " stars " +
                        "</div>" +

                        "<div class='panel-body' id='content_val'" + id + " >" + comment + "</div>" +
                        "</div>" +

                        "</div>" +
                        "</div>" +
                        "</div>"

                    );
                })

                for(var i=0;i<=rate - 1;i++) {
                    $('#content_val'+id).append(
                        "<span class='star'><i class='fa fa-star' style='color:#ffe541;'>" +
                        "</i></span>  "
                    );
                    console.log(i);
                }

                // document.getElementById("all_comments"+id).innerHTML = response + document.getElementById("all_comments"+id).innerHTML;
                // document.getElementById("comment_val"+id).value = "";
                // document.getElementById("hos_val"+id).value="";
                // document.getElementById("username"+id).value = "";

            },

        });
    }

}

