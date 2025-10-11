<?php
// app/Models/Planner.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planner extends Model
{
    use HasFactory;

    protected $table = 'planner';

    protected $fillable = [
        'user_id',
        'destination',
        'start_date',
        'end_date',
        'companions',
        'gear',
        'notes',
    ];
}


