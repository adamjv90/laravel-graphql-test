<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LookbookDesigner extends Model
{
    protected $table = 'lookbook_designers';
    protected $fillable = [
      'slug',
      'name',
      'email',
      'phone',
      'cover',
      'image',
      'url',
      'retail',
      'facebook',
      'pinterest',
      'twitter',
      'instagram',
      'description',
      'featured'
    ];
}
