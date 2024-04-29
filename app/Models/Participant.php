<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Participant extends Model
{


    //specifico i campi della tabella che possono essere riempiti in modo massivo
    protected $fillable = [
        'user_id',
        'event_id',
        'registration_date'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function events()
    {
        return $this->belongsTo(Event::class);
    }


}

