<?php

include("../app/MyController.php");
include("../app/file2.php");
use Company\MyProject;
use Company\MyProject\Person;
use Company\MyProject\MyController;

echo "hola from test.php";
echo "<br>";

$cont = new MyController();
$cont->display();

$per = new Person();
echo "<br>";
echo $per->getName();

echo sayHello();

?>