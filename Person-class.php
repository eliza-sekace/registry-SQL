<?php

class Person extends Registry
{
    private string $name;
    private string $surname;
    private string $personId;

    public function __construct( $name, $surname, $personId)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->personId = $personId;
    }

    public function registerPerson(): void
    {
        if ($this->emptyInput() == false) {
            //echo "Empty input";
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $this->register($this->name, $this->surname, $this->personId);

    }

    private function emptyInput(): bool
    {
        $result = false;
        if (empty($this->name) || empty($this->surname)
            || empty($this->personId)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck(): bool
    {
        $result = false;
        if (!$this->checkPerson($this->personId)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}