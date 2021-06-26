<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo',
        'marca',
        'modelo',
        'versao',
        'descricao'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
