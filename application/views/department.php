<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); echo $links; 
?><table style="width: 550px">
    
<?php echo form_open('departmentCI/department');
if($count>0){
foreach ($depa as $row) {
   
    ?>

    <tr><td><input type="checkbox" name="mycheck[]" value="<?php echo $row->id ?>" /><?php echo $row->dep_name ?></td><td><a href=""><?php echo $this->lang->line('edit')?></a></td><td><a href="<?php echo base_url() ?>index.php/departmentCI/department_delete/<?php echo $row->id?>"><?php echo $this->lang->line('delete')?></a></td><td ><a href=""><?php echo $this->lang->line('edit_permission')?></a></td></tr>
<?php }}?>
    <tr><td><?php echo form_submit('delete',$this->lang->line('delete')) ?></td><td><?php echo form_submit('add',$this->lang->line('add')) ?></td><td><?php echo form_submit('back',$this->lang->line('back_to_home')) ?></td></tr>
    <?php

echo form_open();
?>

</table>