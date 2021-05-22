<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;
use App\Models\User;

class Available extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id  '  ,
        'room_id  '    ,
        'regoin_id'       ,
        's_date  ' ,
        'e_date  ',
        'booking_name' ,
        'status  '   ,
        'created_at',
        'updated_at',
];

    public function rooms()
    {
       return $this->belongsTo('Room');
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

      public function getActive()
    {
        return $this->active == 1 ? 'مفعل' : 'غير مفعل';

    }

    public function user()
    {
       return $this->hasMany(User::class);

    }

}
