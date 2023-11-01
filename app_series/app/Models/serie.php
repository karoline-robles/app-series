<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Serie extends Model   {
    protected $table = 'series'; 
    protected $fillable = ['nome', 'sinopse', 'data_lancamento', 'id_categoria']; 

    public function Categoria(): BelongsTo{
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}
