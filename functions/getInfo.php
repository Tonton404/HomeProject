<?php

    function getAllWorkers() {
        $db = new PDO ('mysql:host=localhost;dbname=users', 'root');
		
		$query = 'SELECT workers.matricule, nom, poste, horaires.horaires as horaires
            FROM workers, horaires, workers_horaires
            WHERE workers.matricule = workers_horaires.id_horaires
            WHERE workers.matricule = workers_horaires.id_workers AND horaires.id = workers_horaires.id_horaires';
		
		
		$query = '
			SELECT workers.matricule, nom, poste, horaires.horaires as horaires
            FROM workers 
				LEFT JOIN workers_horaires ON(workers.matricule = workers_horaires.workers_matricule) 
				LEFT JOIN horaires ON(workers_horaires.horaires_id = horaires.id)
        ';
		
			
        $workersQuery = $db->prepare($query);
        $workers = $workersQuery->execute();
            
		$result= [];
		// foreach ($workers->fetchAll() as $keyWorker => $valueWorker) {
		foreach ($workersQuery->fetchAll() as $keyWorker => $valueWorker) {
			// foreach ($workers->fetchAll() as $key => $value) {
				
				// var_dump($workers);
				// die;
				
				$result[] = [
					"matricule" => $valueWorker['matricule'],
					"nom" => $valueWorker['nom'],
					"poste" => $valueWorker['poste'],
					"horaires" => $valueWorker['horaires'],
				];
				
			// };
		}
		
		return $result;
			
    }