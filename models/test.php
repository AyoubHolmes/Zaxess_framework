<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
</head>
<body>
		<div align="center"  class=" container ">
		<form action="test_modifie_table.php" method="POST" class="form" enctype="multipart/form-data">
	<table id="dataTable">
		<thead>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Email</th>
			<th>Role</th>
			<th>Date de Creation</th>
			<th>Editer</th>
		</thead>
		<tbody>
			<?php if(!empty($result)){ 

				foreach ($result as $result){?>
					<tr>
						<td align="center"><?php echo $result['NOM']?></td>
						<td align="center"><?php echo $result['PRENOM']?></td>
						<td align="center"><?php echo $result['EMAIL']?></td>
						<td align="center"><?php echo $result['ROLE']?></td>
						<td align="center"><?php echo $result['DATE_CREATION']?></td>
						<?php
						if($result['ETAT']==1){
							?>
							<td align="center"><a href="../Controllers/test_modifie_table.php?id=<?php echo $result['ID']?>"><input type="submit" name="bloquer"class="btn btn-dark"value="Bloquer" /></a></td>
							<?php 
						}?>
						<?php
						if($result['ETAT']==0){
							?>
							<td align="center"><a href="../Controllers/test_modifie_table.php?id=<?php echo $result['ID']?>"><input type="submit" name="debloquer <?php echo $result['ID']?>"class="btn btn-dark" value="Debloquer"/></a></td>
							<?php 
						}?>
						<?php
						if($result['ETAT']==2){
							?>
							<td align="center"><a href="../Controllers/test_modifie_table.php?id=<?php echo $result['ID']?>"><input  type="submit" name ="supprimer"class="btn btn-dark" value="SUPPRIMER"/></a></td>
							<?php 
						}?>
						
						<?PHP
					}}	?>
				</tr>
				</tbody>
			</table>
		</from>
		</div>
			<script type="text/javascript" src="http://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
			<script type="text/javascript">
				$(document).ready( function () {
					$('#dataTable').DataTable();
				} );
				var myTable = $('#dataTable').DataTable();

				$('#dataTable').on( 'click', 'tbody tr', function () {
					myTable.row( this ).delete( {
						buttons: [
						{ label: 'Cancel', fn: function () { this.close(); } },
						'Delete'
						]
					} );
				} );
			</script>
		</body>
		</html>