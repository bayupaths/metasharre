<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    // use softDeletes;
    use Uuid;

    protected $table = 'categories';

    protected $fillable = ['uuid', 'name', 'slug', 'image'];
}