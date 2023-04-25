<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certificate extends Model
{
    use HasFactory;
    protected $fillable = [
      'event_name',
      'event_date',
      'user_name',
      'user_id',
      'certificate',
      'certificate_id',
      'certificate_validate',
      'certificate_hash'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
