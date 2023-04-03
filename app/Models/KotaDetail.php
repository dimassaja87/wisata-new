<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KotaDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function WisataDetail()
    {
        return $this->hasMany(WisataDetail::class, 'judul_wisata'.'id');
    }
}
