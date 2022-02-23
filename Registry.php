<?php

use Doctrine\DBAL\DriverManager;

class Registry extends Connection
{
    protected function register($name, $surname, $personId)
    {
        $this->connect()->createQueryBuilder()
            ->insert('registry')
            ->setValue('name', '?')
            ->setValue('surname', '?')
            ->setValue('person_id', '?')
            ->setParameter(0, $name)
            ->setParameter(1, $surname)
            ->setParameter(2, $personId)
            ->executeQuery();

    }

    protected function checkPerson($personId)
    {
        $stmt = $this->connect()->prepare('SELECT users_uid FROM registry WHERE  person_id =?;');
        if (!$stmt->execute(array($personId))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $resultCheck=false;
        if ($stmt->rowCount()>0){
            $resultCheck = false;
        } else{
            $resultCheck = true;
        }
        return $resultCheck;
    }

}

