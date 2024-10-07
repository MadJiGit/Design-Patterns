<?php

class Address
{
    private string $country = 'n/a';
    private string $city = 'n/a';

    public function withCountry(string $country): Address
    {
        $this->country = $country;
        return $this;
    }

    public function withCity(string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    public function getAddress()
    {
        return $this;
    }
}