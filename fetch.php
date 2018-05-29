<?php
include_once 'database-config.php';
include_once 'session.php';
?>
<?php
//fetch
$output = '';
if ( isset( $_POST["query"] ) ) {
	$search = mysqli_real_escape_string( $conn, $_POST["query"] );
	$query  = "
  SELECT * FROM doctor 
  WHERE id LIKE '%" . $search . "%'
  OR fname LIKE '%" . $search . "%' 
  OR lname LIKE '%" . $search . "%' 
  OR gender LIKE '%" . $search . "%' 
  OR degree  LIKE '%" . $search . "%' 
  OR accepted_ins LIKE '%" . $search . "%'
  OR specific_specialty LIKE '%" . $search . "%'
  OR office_hours LIKE '%" . $search . "%'
  OR lang LIKE '%" . $search . "%'  
  OR hosname LIKE '%" . $search . "%'
 ";
} else {
	$query = "
  SELECT * FROM doctor ORDER BY doctor.id
 ";
}
$result = mysqli_query( $conn, $query );

//$row = mysqli_fetch_array( $result );
//$id = $row['id'];
if ( mysqli_num_rows( $result ) > 0 ) {
	?>
  <div class="table-responsive">	
   <table class="table table bordered">
    <tr>
     <th>ID</th>
     <th>First Name</th>
     <th>Last Name</th>
     <th>Gender</th>
     <th>Degree</th>
     <th>Accepted Insurances</th>
     <th>Specific Specialty</th>
     <th>Office Hours</th>
     <th>Language</th>
     <th>Hospital</th>
    </tr>

	   <?php
	while ( $row = mysqli_fetch_array( $result ) ) {
//		$id = $row['id'];
//		//comment
//		$comm = mysqli_query($conn, "SELECT content, date, owner FROM comment WHERE doctor='$id'");
//		while($comms=mysqli_fetch_array($comm))
//		{
//			$name = $comms['owner'];
//			$comment = $comms['content'];
//			$date = $comms['date'];
//			echo $name;
//		}
		?>
   <tr>
    <td id="id_val<?php echo $row["id"] ?>"><?php echo $row["id"] ?></td>
    <td><?php echo $row["fname"] ?></td>
    <td><?php echo $row["lname"] ?></td>
    <td><?php echo $row["gender"] ?></td>
    <td><?php echo $row["degree"] ?></td>
    <td><?php echo $row["accepted_ins"] ?></td>
    <td><?php echo $row["specific_specialty"] ?></td>
    <td><?php echo $row["office_hours"] ?></td>
    <td><?php echo $row["lang"] ?></td>
    <td><?php echo $row["hosname"] ?></td>
    <td class="center">
<button id="<?php echo $row['id']; ?>" type="button" class="btn btn-info " data-toggle="modal" data-target="#modal_<?php echo $row["id"]?>" >Details</button>
    </td>
   </tr>
</div>
    <div class="modal fade" id="modal_<?php echo $row["id"]?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            
            
                <div class="modal-header">
                
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">Doctor <?php echo $row["fname"]." " .$row["lname"] ?> </h4>
                
                </div>
                
                
                <div class="modal-body">
                
                    <div class="text-center">
                    <?php if ($row['gender'] === 'Male') {?>
                        <img src="images/doctor.png" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                        <?php }
                        else { ?>
                        <img src="images/doctress.png" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>

                        <?php
                        }
                        ?>
                        <h3 class="media-heading"><?php echo $row["fname"] . " " . $row["lname"]  ?></h3>
                    </div>

                    <?php $sql = "SELECT * FROM comment WHERE doctor=" . $row['id']  ;
                    $resultset = mysqli_query($conn,$sql);
                    $count = 0;
                    if ( mysqli_num_rows( $resultset ) > 0 ) {
                        while($table = mysqli_fetch_array( $resultset )) {
                    ?>
                    <?php if ($table['status'] === 'Active') { $count++;?>
                    <div class="commentcontent<?php echo $count?>">
                    <div class="hidden"><?php echo $count?></div>;
                    <div id="all_comments<?php echo $count ?>">
  				    <div class="row" id="row<?php echo $count?>">
                        <div class="col-sm-1">
                        <div class="thumbnail">
                        <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                        </div><!-- /thumbnail -->
                        </div><!-- /col-sm-1 -->

                        <div class="col-sm-11" style="margin-top: 1em;">
                        <div class="panel panel-default">
                        <div class="panel-heading" >
                        <strong id="hos_val<?php echo $table['id'] ?>"><?php echo $table["owner"] ?></strong>
                        <span class="text-muted" >commented in <span id="date_val<?php echo $table['id']?>"> <?php echo $table["date"] ?></span></span>
                        <?php $i ?>
                        <?php for($i=0;$i<=$table['rating']-1;$i++) {
                            ?> <span class="star"><i class="fa fa-star" style="color:#ffe541;"></i></span>
                            <?php
                        } ?>
                        </div>

                        <div class="panel-body" id="content_val<?php echo $table['id'] ?>">
                        "<?php echo $table["content"] ?>"
                        </div><!-- /panel-body -->
                        </div><!-- /panel panel-default -->
                        </div><!-- /col-sm-11 -->
  					</div>
  					</div>
  					</div>
	                <?php  } } }?>

	                <?php if ( isset( $_SESSION['login_hos'] ) || isset($_SESSION['login_admin'])) {?>
	                <div class="text-left" style="margin-left:1em;">
<!--                        <form method=\'post\' action="" onsubmit="return post(id);">-->
                            <div class="form-group">
                              <label for="comment">Write a comment as "<mark id="hos_<?php echo $row['id']; ?>"><?php echo $login_session ?></mark>"</label>
                              <textarea value="" id="comment_val<?php echo $row["id"]; ?>" class="form-control" rows="3" ></textarea>
                            </div>
                            <div class="form-group">
                               <label for="rating">Rate the doctor:</label>
                               <select id="rating<?php echo $row['id'];?>">
                               <?php for($j=1;$j<=5;$j++){
                                   ?>
                                   <option value="<?php echo $j ?>"><?php echo $j ?></option>
                                   <?php
                               } ?>
                               </select>

                            </div>
                             <button class="btn btn-lg btn-primary" type="button" title="Post Comment"
                             id="comment_button<?php echo $row["id"]?>" onclick="post('<?php echo $row["id"]?>')" >
                             <i class="fa fa-send-o"></i>
                             </button>
<!--                        </form>-->
					</div>
                    <?php } ?>
                </div>
                <div class="modal-footer">
        				<button style="margin-left:1em;"  type="button" class="right btn btn-danger m-btn--hover-warning" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    

<!--//		 <div class="modal-footer">-->
<!--//          <button type="submit" class="btn btn-secondary m-btn m-btn--air m-btn--custom">-->
<!--//           Cancel</button>-->
<!--//        </div>-->
<?php	}

} else {
	echo 'No results.';
}
