<?php

namespace Source\Traits;

trait AddressTrait
{
    private Address $address;

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

}