<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  //specifico quali colonne della tabella possono essere riempite in modo massivo (campi specificati per motivi di sicurezza)
  protected $fillable=['user_id','title','image_name','image','description','city','address','location','date','participations_count'];

  //dichiaro la relazione molti a molti tra event e user
  public function users()
    {
        return $this->belongsToMany(User::class, 'participants');
    }

        public function participants()
        {
            return $this->belongsTo(Participant::class);
        }


}
