<link rel="stylesheet" href="css/style.css">

<?php
    require_once("functions/getInfo.php");
    $worker = getAllWorkers();

    // var_dump(getAllWorkers());
?>

<meta charset="UTF-8">
    <a href="index.php">Retour à l'accueil</a>
    <h1>Liste des salariés ECorporation.</h1>
<table>
    <tr>
        <td>Matricule</td>
        <td>Nom</td>
        <td>Poste</td>
        <td>Horaires</td>
    </tr>
        <?php
		
		$keys = [
			'matricule',
			'nom',
			'poste',
			'horaires_id',
		];
		
		
		if(empty($worker)){
			echo 'pas de worker';
		}
		else{
			foreach($worker as $key => $value)  {
				
				foreach($keys as $key){
					if(!empty($value[$key])){
						
						echo($value[$key]);
					}
				}
				/*
				echo "<tr>";
				echo "<td>" . (empty($value['matricule']))? '': $value['matricule'] .
				echo "<td>" . (empty($value['nom']))? '': $value['nom'].
				echo "<td>" . (empty($value['poste']))? '': $value['poste'].
				echo "<td>" . (empty($value['horaires_id']))? '': $value['horaires_id'].
				echo "</tr>";
				*/
			}
        }
        ?>
</table>