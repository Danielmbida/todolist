<?php

$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);

use todolist\Entity\User;
use todolist\Entity\Task;

$user = new User();
$user->setFirstname("FIRST");
$user->setLastname("LASTNAME");

$entityManager->persist($user);

$task = new Task();
$task->setDateFrom(new \Datetime("2020-12-24T08:00:00Z"));
$task->setDateTo(new \Datetime("2021-01-08T08:00:00Z"));
$task->setTache("Vacances");
$task->setUser($user);


$entityManager->persist($task);
$entityManager->flush();

echo $user;
echo $task;


