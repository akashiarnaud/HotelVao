<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<h2>Gerer les personnels</h2>
	<table class="table table-striped">
		<thead>
		<tr>
			<th>Nom</th>
			<th>Fonction</th>
			<th>Action</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach($personnel as $p){?>
		<tr>
			<td><?php echo $p['nom'] ?></td>
			<td><?php echo $p['description'] ?></td>
			<form action="<?php echo base_url()?>Login" method="post">
				<input type="hidden" name="id" value="<?php echo $p['id']?>">	
				<td><button type="button" class="btn btn-success">Modifier</button></td>
			</form>
			<form action="<?php echo base_url()?>DeleteP-<?php echo $p['id']?>" method="post">
				<input type="hidden" name="id" value="<?php echo $p['id']?>">	
				<td><button type="submit" class="btn btn-danger">Supprimer</button></td>
			</form>
			
		</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
<div class="container">
	<h2>Gerer les Activité</h2>
	<table class="table table-striped">
		<thead>
		<tr>
			<th>Nom</th>
			<th>Description</th>
			<th>Details</th>
			<th>Action</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach($details as $d){?>
		<tr>
			<td><?php echo $d['nomP'] ?></td>
			<td><?php echo $d['nom'] ?></td>
			<td><?php echo $d['description'] ?></td>
			<form action="" method="">
			
			<td><button type="button" class="btn btn-success">Modifier</button></td>
			</form>
			<form action="" method="">
			<td><button type="button" class="btn btn-danger">Supprimer</button></td>
			</form>
		</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
<div class="container">
	<h2>Gerer les Activités</h2>
	<table class="table table-striped">
		<thead>
		<tr>
			<th>Nom</th>
			<th>Action</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach($activities as $a){?>
		<tr>
			<td><?php echo $a['nom'] ?></td>
			<form action="" method="">
			
			<td><button type="button" class="btn btn-success">Modifier</button></td>
			</form>
			<form action="<?php echo base_url()?>DeleteA-<?php echo $a['id']?>" method="post">
				<input type="hidden" name="id" value="<?php echo $p['id']?>">	
				<td><button type="submit" class="btn btn-danger">Supprimer</button></td>
			</form>
		</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
</body>
</html>
