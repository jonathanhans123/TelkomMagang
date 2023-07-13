<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DetailOdp extends Model
{
    protected $table = 'detail_odp';
    protected $primaryKey = "no";
    public $incrementing = true;
    public $timestamps = false;
    protected $unique = ['hostname', 'slot','port','onu-id'];
    
    protected $fillable = [
        'hostname',
        'ip-olt',
        'slot',
        'port',
        'onu-id',
        'onu-sn',
        'onu-status',
        'id-summary',
        'nama-odp',
        'port-odp',
    ];
}
