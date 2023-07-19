<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FedexAuth extends Model
{
    use HasFactory;

    protected $table = 'fedex_auths';
}
