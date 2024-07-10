<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class W2w_Event_type extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'code', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo(W2w_Event::class, 'parent_id');
    }
}
