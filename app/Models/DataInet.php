<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DataInet extends Model
{
    protected $table = 'data_inet';
    protected $primaryKey = "no";
    public $incrementing = true;
    public $timestamps = false;
    protected $unique = ['hostname', 'slot','port','onu-id'];
    
    protected $fillable = [
        'hostname',
        'slot',
        'port',
        'onu-id',
        'last-online',
        'inet',
    ];
}
