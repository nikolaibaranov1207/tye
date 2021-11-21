<?php

namespace App\Entity;

class Order
{
    private User $user;

    public function __construct(User $user = new User('Anonymous')) {
        $this->user = $user;
    }

    ...
