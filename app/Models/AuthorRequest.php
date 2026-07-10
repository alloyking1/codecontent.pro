<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorRequest extends Model
{
    use HasFactory;

    protected $table = 'author_requests';

    protected $fillable = [
        'name',
        'email',
        'job_role',
        'website_url',
        'message',
        'publications',
    ];
}
