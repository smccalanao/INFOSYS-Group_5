<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Climb extends Model
{
    use HasFactory;

    protected $table = 'climbs';   // matches your DB table name
    protected $primaryKey = 'id'; // because your PK is climb_id

    protected $fillable = [
        'user_id',
        'title',
        'difficulty',
        'address',
        'description',
        'image_url',
    ];

    // Each climb belongs to one user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
