<?php

declare(strict_types=1);

class Leandro implements Person, Artist 
{
    private string $name;
    private int $age;
    private string $email;
    private $instruments;
    private $artist;

    public function __construct($name, $age, $email)
    {
        $this->name = $name;

        if (filter_var($age) <= 4){
            throw new Exception("Você não é um artista!");
        }

        $this->age = $age;

        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new Exception("E-mail inválido!");
        }

        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int 
    {
        return $this->age;
    }

    public function getEmail(): string 
    {
        return $this->email;
    }

    public function getArtist(): bool
    {
        return $this->artist;
    }

    public function receivedPayment(float $payment): void
    {
        $this->receivedPaymentLeandro($payment);
    }

    public function sing(MusicalInstruments $guitar): string
    {
        $guitar = new MusicalInstruments;
        $guitar->guitarBlue();

        if ($guitar === true) {
            $this->instruments->connectGuitar();

            return "Estou pronto!";
        }   
        
        throw new Exception("Não foi possível conectar o violão");
    }

    public function receivedPaymentLeandro(float $payment): void
    {
        if ($payment >= 500) {
            echo "O Pagamento está correto";
        } else {
            throw new Exception("O valor do pagamento está incorreto!");
        }
    }
}

