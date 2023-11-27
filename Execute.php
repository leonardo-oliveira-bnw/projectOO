<?php

use Leonardo;
use Leandro;


class Execute 
{
    public static function viewPerson(Person $person): void 
    {
        echo "Nome: " . $person->getName() . "<br>";
        echo "Idade: " . $person->getAge() . "<br>";
        echo "Email: " . $person->getEmail() . "<br>";
    }
    
}

$leonardo = new Leonardo('Leonardo', 27, 'leonardo@buenonetworks.com.br');
$leandro = new Leandro('Leandro', 25, 'leandro@buenonetworks.com.br');

echo "Dados de Leonardo:<br>";
Execute::viewPerson($leonardo);

echo "<br>Dados de Leandro:<br>";
Execute::viewPerson($leandro);

