<?php

// 1. uztaisit do-while ciklu ko lietotajs var apstadinat ievadot 'N'



do {
  $continue = readline("vai tu velies turpinat \n");
} while ($continue != "N");

readline("ievadiet savu vardu");

$name = readline("ievadi savu vārdu:\n");
echo "your name is $name";

$taskList = ["first task","second task"];

function showAllTask($inputTasks){
    foreach($inputTasks as $task){
        echo $task . "\n"
    }
};
    
function addTask($inputTasks){
    echo"to be implemented"
}

do{
    echo "To do ;ist \n";
    echo "Ievadiet jau => 1\n";
    echo "Apskatit uzd jau => 2\n";
    echo "Apskatit uzd jau => 3\n";
    $choice = readline("Izvelies darbibu:  ");

    switch ($choice) {
        case '1':
          showAllTask();
          break;
        case '2':
          addTask($taskList) ;
          break;
        case '3':
          echo "To be implemented\n";
          break;
        default:
          echo "Invalid option\n";
      }

    $continue = readline("vai tu velies turpinat \n");
} while ($continue != "N");



?>