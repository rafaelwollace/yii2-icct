<?php
      $today = date("H:i:s");  
      $nome_arquivo = 'relatorio-'.$today;
      header('Content-Type: text/html; charset=UTF-8');
      header("Content-type: application/vnd.ms-excel");
      header("Content-type: application/force-download");
      header("Content-Disposition: attachment; filename=$nome_arquivo.xls");
      header("Pragma: no-cache");
?>

<table id="dataTable" class="table table-striped">
	<thead>
		<tr>
			<th>MODEL</th>
			<th>FAT_PART_NO</th>
			<th>TOTAL_LOCATION</th>
			<th>PARTS_NO</th>						
			<th>UNT_USG</th>
			<th>DESCRIPTION</th>
			<th>REF_DESIGNATOR</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		    foreach ($relatorio as $rlt): 
		?>
		   <tr>
			<td><?php echo $rlt['MODEL'] ?></td>
			<td><?php echo $rlt['FAT_PART_NO'] ?></td>
			<td><?php echo $rlt['TOTAL_LOCATION'] ?></td>
			<td><?php echo $rlt['PARTS_NO'] ?></td>   				   
			<td><?php echo $rlt['UNT_USG'] ?></td>
			<td><?php echo $rlt['DESCRIPTION'] ?></td>  
			<td><?php echo $rlt['REF_DESIGNATOR'] ?></td>    
		   </tr>
		<?php endforeach; ?>
	</tbody>
</table>
