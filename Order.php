<?php

namespace App\Entity;

enum OrderStatus: string {
    case STATUS_PENDING = 'pending';
    case STATUS_SHIPPED = 'shipped';
    case STATUS_DELIVERED = 'delivered';
}

class Order
{
    private OrderStatus $status;
    ...
