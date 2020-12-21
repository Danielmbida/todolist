<?php
# get-user.php
$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);

use todolist\Entity\User;

$userRepo = $entityManager->getRepository(User::class);

//Tous les users
$allUsers = $userRepo->findAll();
echo "All users:\n";
foreach ($allUsers as $user) {
    echo $user;
}

