<?php
include_once 'database-config.php';

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
  OR accepted_ins LIKE '%" . $search . "%'
  OR specific_specialty LIKE '%" . $search . "%'
  OR office_hours LIKE '%" . $search . "%'
  OR lang LIKE '%" . $search . "%'  
  OR hosname LIKE '%" . $search . "%'
 ";
} else {
	$query = "
  SELECT * FROM doctor ORDER BY id
 ";
}
$result = mysqli_query( $conn, $query );
//$row = mysqli_fetch_array( $result );
//$id = $row['id'];
if ( mysqli_num_rows( $result ) > 0 ) {






	$output .= '
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
 ';
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
		$output .= '
   <tr>
    <td>' . $row["id"] . '</td>
    <td>' . $row["fname"] . '</td>
    <td>' . $row["lname"] . '</td>
    <td>' . $row["gender"] . '</td>
    <td>' . $row["degree"] . '</td>
    <td>' . $row["accepted_ins"] . '</td>
    <td>' . $row["specific_specialty"] . '</td>
    <td>' . $row["office_hours"] . '</td>
    <td>' . $row["lang"] . '</td>
    <td>' . $row["hosname"] . '</td>
    <td class="center">
<button type="button" class="btn btn-info " data-toggle="modal" data-target="#modal_' . $row["id"] . '">Details</button>
    </td>
   </tr>
</div>
    <div class="modal fade" id="modal_' . $row["id"] . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
            
                <div class="modal-header">
                
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">Doctor ' . $row["fname"] . " " . $row["lname"] . '</h4>
                
                </div>
                
                
                <div class="modal-body">
                
                    <div class="text-center">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                        <h3 class="media-heading">' . $row["fname"] . " " . $row["lname"] . "" . '</h3>
                    </div>  
   
  					<div id="all_comments"> 
  					</div>   

                </div>
                <div class="modal-footer">
                <div class="text-left">
                       
                    <form method=\'post\' action="" onsubmit="return post();">
                    <div class="form-group">
                      <label for="comment">Write your comment:</label>
					  <textarea id="comment" class="form-control" rows="3" ></textarea>
					</div>
					<div class="form-group">
					  <label for="username">Your ID:</label>
					  <input class="form-control" type="text" id="username" placeholder="Your Name">
					</div>
					  <input class="btn btn-success" type="submit" value="Post Comment">
					</form>
				</div>
                    <button type="button" class="btn btn-danger m-btn--hover-warning" data-dismiss="modal">Close</button>
                    
                </div>
            </div>
        </div>
    </div>
    
    
  ';
//		 <div class="modal-footer">
//          <button type="submit" class="btn btn-secondary m-btn m-btn--air m-btn--custom">
//           Cancel</button>
//        </div>
	}
	echo $output;
} else {
	echo 'No results.   ';
}
