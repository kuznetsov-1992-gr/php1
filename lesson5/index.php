<?php
//  списано

include 'Comment.php';
include 'User.php';
include 'Task.php';
include 'TaskService.php';

$user = new User('User1', 'user1@mail.ru' );
$task = new Task($user, 'Прыгнуть с парашутом ', 2);

TaskService::addComment($user, $task, 'и так сойдет '); 
TaskService::addComment($user, $task, 'Коментарий к задаче ');

// echo "Коментарии " . PHP_EOL;

foreach($task->getComment() as $comment)
{
    echo $comment->getText() . ', ';
    echo 'имя задачи ' . $comment->getTask()->getDescription() . PHP_EOL;
}

