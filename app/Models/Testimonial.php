<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'type',
        'designation',
        'facebook',
        'linkedin',
        'instagram',
        'testimonial'
    ];

    public function typeOptions()
    {
        return [
            'general' => 'General',
            'executive' => 'Executive'
        ];
    }
}
