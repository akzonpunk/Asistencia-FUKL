<?php
/***************************************************************************
   -------------------
   This file has been generated by HyperDev in 2011-03-01 20:01:59.
   HyperDev is a GNU code generator developed by Ruben Dorado. 
 ***************************************************************************/

/***************************************************************************
 *                                                                         *
 *   This program is free software; you can redistribute it and/or modify  *
 *   it under the terms of the GNU Lesser General Public License           *
 *   version 2.1 as published by the Free Software Foundation;             *
 *                                                                         *
 ***************************************************************************/
*/
?>
<?php include_once("dao/FacultadDAO.php")?>
<?php
  $result = Facultad_find_all();
?>

<table border="1" style="border-collapse:collapse;">
 <tr>
  <th>idFacultad</th>
  <th>nombreFac</th>
  <th>Options</th>
 </tr>
 <?php
    $len = count($result);
   for($i=0;$i<$len;$i++){ ?>
      <tr>         
       <td><?php echo $result[$i]->get_idFacultad(); ?></td>
       <td><?php echo $result[$i]->get_nombreFac(); ?></td>
       <td>
        <a href="Facultad_edit.php?id=<?=$result[$i]->_get_id()?>">Edit</a>
        <a href="Facultad_do_delete.php?id=<?=$result[$i]->_get_id()?>">Delete</a>
        <a href="Facultad_details.php?id=<?=$result[$i]->_get_id()?>">Details</a>  
       </td>    
      </tr>
<?php }
 ?>
</table>
<br/>
<a href="Facultad_insert.php">New</a>