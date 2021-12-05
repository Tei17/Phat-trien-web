<?php

require_once 'Controller/employees/employeeController.php';


/*if (isset($_GET['controller'])) {
        $controller = $_GET['controller'];
    } else {
        $controller = "";
    }

    switch ($controller) {
        case 'employees': {
                require_once 'Controller/employees/employeeController.php';
            }
    }*/

$index = new employeeController();
if (!isset($_GET["action"]))
    $index->run("index");
