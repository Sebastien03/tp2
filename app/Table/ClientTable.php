<?php
	namespace App\Table;

	use Core\Table\Table;

/**
* Classe de controle de l'affichage des clients
*/
class ClientTable extends Table
{
	public function all()
	{
		return $this->query("SELECT clients.id,
									clients.nom,
								    clients.prenom,
								    clients.date_de_naissance,
								    clients.adresse,
								    clients.code_postal,
								    clients.numero_de_telephone,
								    statutmaritals.statut as statut
									FROM clients
									LEFT JOIN statutmaritals
									ON statut_maritals_id = statutmaritals.id
									");
	}
	public function findClient($id)
    {
        return $this->query(" SELECT clients.id,
                                     clients.nom,
                                     clients.prenom,
                                     clients.date_de_naissance,
                                     clients.adresse,
                                     clients.code_postal,
                                     clients.numero_de_telephone,
                                     statutmaritals.statut as statut
                                FROM clients
                                LEFT JOIN statutmaritals
                                       ON clients.statut_maritals_id = statutmaritals.id
                                WHERE clients.id = ?
                            ", [$id], true);
    }
}

