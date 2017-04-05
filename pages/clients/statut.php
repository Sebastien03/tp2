<?php
if (!isset($_POST["id"])) {
	header('location: index.php?p=statut.index');
}
	$clients = App::getInstance()->getTable('client')->all();
?>
<h2> liste de tout les utilisateurs par services </h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th> Nom, Prenom </th>
			<th> Age </th>
			<th> Adresse complète </th>
			<th> Numero de téléphone  </th>
			<th> Service </th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($clients as  $client): ?>
			<tr>
				<td> <?= $client->nom; ?>  </td>
				<td> <?= $client->prenom; ?> </td>
				<td> <?= $client->date_de_naissance; ?> </td>
				<td> <?= $client->adresse; ?>  </td>
				<td> <?= $client->code_postal; ?> </td>
				<td> <?= $client->numero_de_telephone; ?> </td>
				<td> <?= $client->statut; ?> </td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
