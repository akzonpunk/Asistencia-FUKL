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
<?php include_once("dao/AsistenciaDAO.php")?>
<?php
  $result = Asistencia_find_all();
?>

<table border="1" style="border-collapse:collapse;">
 <tr>
  <th>idAsistencia</th>
  <th>fecha</th>
  <th>idGrupoEstudiante</th>
  <th>Options</th>
 </tr>
 <?php
    $len = count($result);
   for($i=0;$i<$len;$i++){ ?>
      <tr>         
       <td><?php echo $result[$i]->get_idAsistencia(); ?></td>
       <td><?php echo $result[$i]->get_fecha(); ?></td>
       <td><?php echo $result[$i]->get_idGrupoEstudiante(); ?></td>
       <td>
        <a href="Asistencia_edit.php?id=<?=$result[$i]->_get_id()?>">Edit</a>
        <a href="Asistencia_do_delete.php?id=<?=$result[$i]->_get_id()?>">Delete</a>
        <a href="Asistencia_details.php?id=<?=$result[$i]->_get_id()?>">Details</a>  
       </td>    
      </tr>
<?php }
 ?>
</table>
<br/>
<a href="Asistencia_insert.php">New</a>