
<tr class="odd gradeX" id="row <?php echo $id; ?>">
    <td id="id_val<?php echo $id; ?>"><?php echo $id; ?></td>
    <td id="lname_val<?php echo $id; ?>"><?php echo $lname; ?></td>
    <td id="fname_val<?php echo $id; ?>"><?php echo $fname; ?></td>
    <td id="gender_val<?php echo $id; ?>"><?php echo $gender; ?></td>
    <td id="email_val<?php echo $id; ?>"><?php echo $email; ?></td>
    <td id="password_val<?php echo $id; ?>"><?php echo $password; ?></td>
    <td id="address_val<?php echo $id; ?>"><?php echo $address; ?></td>
    <td id="lang_val<?php echo $id; ?>"><?php echo $lang; ?></td>
    <td class="center">
        <button class="btn btn-xs btn-primary" id="edit_button<?php echo $id; ?>"
           onclick="edit_row('<?php echo $id; ?>');"><i
                    class="fa fa-edit"></i></button>

        <button type="button" style="opacity:0;" class="btn btn-xs btn-primary" id="save_button<?php echo $id; ?>"
           onclick="save_row('<?php echo $id; ?>');"><i
                    class="fa fa-save"></i></button>

        <button type="button" class="btn btn-xs btn-danger" id="delete_button<?php echo $id; ?>"
           onclick="delete_row('<?php echo $id; ?>');"><i
                    class="fa fa-trash"></i></button>
    </td>
    <td>Active</td>
</tr>