<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;

class Available extends Model
{
    use HasFactory;

    public function rooms()
    {
       return $this->belongsTo('Room');
    }
}
