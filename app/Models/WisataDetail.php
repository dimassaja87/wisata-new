<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WisataDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $date = ['created_at'];

    public function kota_details()
    {
        return $this->belongsTo(KotaDetail::class, 'id_kota', 'id');
    }
}
