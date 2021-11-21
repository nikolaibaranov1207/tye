<?php

namespace App\Entity;

class Order
{
    public const STATUS_PENDING = 'pending';
    public const STATUS_SHIPPED = 'shipped';
    public const STATUS_DELIVERED = 'delivered';

    private strning $status;
    ...
