<?php

declare(strict_types=1);

class Leonardo implements Person, Artist 
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

    public function receivedPayment(float $payment): void
    {
        $this->receivedPaymentLeonardo($payment);
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

    public function sing(Microphones $microphones): string
    {
        $microphones = new Microphones;
        $microphones->microphoneBlack();

        if ($microphones === true) {
            $this->instruments->connectMicrophone();

            return "Estou pronto!";
        }   
        
        throw new Exception("Não foi possível conectar o Microphone!");
    }

    public function receivedPaymentLeonardo(float $payment): void
    {
        if ($payment >= 500) {
            echo "O Pagamento está correto";
        } else {
            throw new Exception("O valor do pagamento está incorreto!");
        }
    }
}

