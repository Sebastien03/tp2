<?php
    $app = App::getInstance();
    $id = $_GET['id'];

   $client = $app->getTable('client')->findClient($id);
    if ($client===false) {
        $app->notFound();
    }
    $credits = $app->getTable('credit')->all();
?>

<div class="row">
    <div class="col-md-12">
        <h2>Informations détaillés sur le client</h2>
        <table class="table table-bordered">
            <thead>
                <th> Identite </th>
                <th> Age </th>
                <th> Date de naissance </th>
                <th> Adresse</th>
                <th> Telephone </th>
                <th> Statut </th>
                <th> Organisme </th>
                <th> Montant </th>
            </thead>
            <tbody>
                <td>  <?= $client->identite ?> </td>
                <td>  <?= $client->age ?> </td>
                <td> <?= $client->date_de_naissance ?> </td>
                <td> <?= $client->adresse_complete ?> </td>
                <td> <?= $client->numero_de_telephone ?> </td>
                <td> <?= $client->statut ?> </td>
                <td>  <?php
                foreach($credits as $credit){
                    if($credit->clients_id == $client->id){
                        echo ' '.$credit->organisme.', ';
                    }
                }
            ?> </td>
            <td> 
            <?php
                foreach($credits as $credit){
                    if($credit->clients_id == $client->id){
                        echo ' '.$credit->montant.'€'.', ';
                    }
                }
            ?>
        </td>
    </div>
</div>