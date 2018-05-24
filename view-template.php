<tr class="odd gradeX" id="row<?php echo $id; ?>">
    <td><input type="checkbox" id="check_val<?php echo $id; ?>"></td>
    <td id="id_val<?php echo $id; ?>"><?php echo $id; ?></td>
    <td id="lname_val<?php echo $id; ?>"><?php echo $lname; ?></td>
    <td id="fname_val<?php echo $id; ?>"><?php echo $fname; ?></td>
    <td id="gender_val<?php echo $id; ?>"><?php echo $gender; ?></td>
    <td id="email_val<?php echo $id; ?>"><?php echo $email; ?></td>
    <td id="password_val<?php echo $id; ?>"><?php echo $password; ?></td>
    <td id="address_val<?php echo $id; ?>"><?php echo $address; ?></td>
    <td id="lang_val<?php echo $id; ?>"><?php echo $lang; ?></td>
    <td id="status_val<?php echo $id; ?>"><?php echo $status; ?></td>
    <td class="center">
        <div class="btn-group-xs">

            <button title="Edit" type="button" class="btn btn-xs btn-primary" id="edit_button<?php echo $id; ?>"
                    onclick="edit_row('<?php echo $id; ?>');"><i
                        class="fa fa-edit"></i></button>

            <button title="Save" type="button" style="display:none;" class="btn btn-xs btn-primary"
                    id="save_button<?php echo $id; ?>"
                    onclick="save_row('<?php echo $id; ?>');"><i
                        class="fa fa-save"></i></button>

            <button title="Delete" type="button" class="btn btn-xs btn-danger" id="delete_button<?php echo $id; ?>"
                    onclick="delete_row('<?php echo $id; ?>');"><i
                        class="fa fa-trash"></i></button>

			<?php if ( $status === 'Deactive' ) {
				?>
                <button title="Active" style="display:inline-block;" type="button" class=" btn btn-xs btn-warning"
                        id="active_button<?php echo $id; ?>"
                        onclick="active_row('<?php echo $id; ?>');"><i
                            class="fa fa-check"></i></button>
				<?php
			} else {
				?>
                <button title="Deactive" type="button" class=" btn btn-xs btn-warning"
                        id="deactive_button<?php echo $id; ?>"
                        onclick="deactive_row('<?php echo $id; ?>');"><i
                            class="fa fa-ban"></i>
			<?php } ?>
        </div>
    </td>
</tr>