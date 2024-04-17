<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $table = 'games';

    protected $fillable = ['name', 'category_id', 'price'];

    public function category()
    {
        return $this->belongsTo(GameCategory::class, 'category_id');
    }
    public $timestamps = false;
}
