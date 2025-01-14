<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trash extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'trash_uuid',
        'trash_image',
        'trash_name',
        'trash_type',
        'description',
        'dampak',
        'cara_pengolahan',
        'faq_1',
        'faq_2',
        'faq_3',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
