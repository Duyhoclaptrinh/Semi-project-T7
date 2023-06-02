<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audio Extends Model{
    use HasFactory;

    protected $stable = 'audios';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'description', 'audio_url'
    ];
}

