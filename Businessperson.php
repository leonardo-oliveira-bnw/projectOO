<?php

declare(strict_types=1);

class Businessperson
{
    public float $payment;

    public function receivePaymentDiscotheque(): void
    {
        $discotheque = new Discotheque();
        $paymentOfEvent = $discotheque->paymentOfEvent();

        $this->paymentPerson($paymentOfEvent);
    }

    public function paymentPerson(float $payment): void
    {
        $this->paymentLeonardo($payment);
        $this->paymentLeandro($payment);
    }

    public function paymentLeonardo(float $payment): void
    {
        $paymentLeonardo = $payment - 500;
        $leonardo = new Leonardo('Leonardo', 27, 'leonardo@buenonetworks.com.br');
        $leonardo->receivedPayment($paymentLeonardo);
    }

    public function paymentLeandro(float $payment): void
    {
        $paymentLeandro = $payment - 500;
        $leandro = new Leandro('Leandro', 25, 'leandro@buenonetworks.com.br');
        $leandro->receivedPayment($paymentLeandro);
    }
}