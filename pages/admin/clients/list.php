<?php 
$clients= App::getInstance()->getTable('Client')->all();
?>
<center> <h1> Liste de tous les clients </h1> </center>

<table class="table table-bordered">
	<thead>
		<tr>
			<th> Nom / Prenom </th>
			<th> Age </th>
			<th> Adresse </th>
			<th> Code Postal</th>
			<th> Numero De Téléphone </th>
			<th> Status Marital </th>
			<th> Option </th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($clients as $client): ?>
			<tr>
				<td> <?= $client->identite; ?> </td>
				<td> <?= $client->age; ?> </td>
				<td> <?= $client->adresse_complete; ?> </td>
				<td> <?= $client->code_postal; ?> </td>
				<td> <?= $client->numero_de_telephone; ?> </td>
				<td> <?= $client->statut; ?> </td>
				<td> <a class="btn btn-info btn-xs" href="admin.php?p=clients.info&id=<?= $client->id ?>"> Détails </a> </td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>