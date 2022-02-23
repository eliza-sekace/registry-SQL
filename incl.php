<?php
require_once "vendor/autoload.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $personId = $_POST['person_id'];

    include "Connection.php";
    include "Registry.php";
    include "Person-class.php";


    $person=new Person($name, $surname, $personId);
    $person->registerPerson();

}
