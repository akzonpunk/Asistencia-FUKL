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
<?php include_once("dao/GrupoDAO.php")?>
<?php
  $result = Grupo_find_all();
?>

<table border="1" style="border-collapse:collapse;">
 <tr>
  <th>idGrupo</th>
  <th>horario</th>
  <th>salon</th>
  <th>idAsignatura</th>
  <th>idProfesor</th>
  <th>idFacultad</th>
  <th>Options</th>
 </tr>
 <?php
    $len = count($result);
   for($i=0;$i<$len;$i++){ ?>
      <tr>         
       <td><?php echo $result[$i]->get_idGrupo(); ?></td>
       <td><?php echo $result[$i]->get_horario(); ?></td>
       <td><?php echo $result[$i]->get_salon(); ?></td>
       <td><?php echo $result[$i]->get_idAsignatura(); ?></td>
       <td><?php echo $result[$i]->get_idProfesor(); ?></td>
       <td><?php echo $result[$i]->get_idFacultad(); ?></td>
       <td>
        <a href="Grupo_edit.php?id=<?=$result[$i]->_get_id()?>">Edit</a>
        <a href="Grupo_do_delete.php?id=<?=$result[$i]->_get_id()?>">Delete</a>
        <a href="Grupo_details.php?id=<?=$result[$i]->_get_id()?>">Details</a>  
       </td>    
      </tr>
<?php }
 ?>
</table>
<br/>
<a href="Grupo_insert.php">New</a>