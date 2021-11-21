<?php

namespace App\Entity;

class User {
    public readonly string $username;

    public function __construct(string $username) {
        $this->username = $username;
    }
    
    ...
