<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Favoritos extends Model
{
    use HasFactory;

    protected $table = 'favoritos';

    protected $fillable = [
        'id',
        'id_pessoa',
        'id_serie',
    ];

    public function Serie() {
        return $this->belongsTo(Serie::class, 'id_serie');
    }

    public function Pessoa() {
        return $this->belongsTo(Pessoa::class, 'id_pessoa');
    }
}
