<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataHost extends Model
{
    use HasFactory;
    protected $table = 'data_host';
    protected $primaryKey = "no";
    public $incrementing = true;
    public $timestamps = false;
    protected $unique = ['hostname', 'slot','port'];

    protected $fillable = [
        'hostname',
        'slot',
        'port',
        'label-odc',
        'ea-rack',
        'ea-otb',
        'ea-slot',
        'ea-port',
        'oa-rack',
        'oa-otb',
        'oa-slot',
        'oa-port',
        'jumlah-pelanggan',
        'label-feeder',
    ];
}
