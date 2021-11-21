<?php

namespace App\Entity;

class Order
{
    private User $user;

    public function __construct(User $user = null) {
        $this->user = $user !== null ? $user : new User('Anonymous');
    }

    ...
