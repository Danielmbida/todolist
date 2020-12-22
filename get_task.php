<?php
$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);
$userRepo = $entityManager->getRepository(\todolist\Entity\User::class);
use todolist\Entity\Task;
use todolist\Entity\User;


$taskRepos = $entityManager->getRepository(Task::class);

$task = new Task();
$taskByname = $taskRepos->findBy(["tache" => $_GET['tache']]);
foreach ($taskByname as $task) {
    echo "<br>". $task;
}

//$queryBuilder = $entityManager->createQueryBuilder();
//$queryBuilder->select('tsk')
//    ->from(Task::class, 'tsk')
//    ->join(User::class, 'usr', 'tsk.id=usr.id')
//    ->where('tsk.tache = :task_name')
//    ->setParameter('task_name', $_GET['tache']);
//
//$query = $queryBuilder->getQuery();
//
////echo $query->getDQL(), "\n";
//foreach($query->getResult() as $task){
//    echo "<br>".$task;
//}

