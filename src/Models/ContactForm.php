<?php

namespace Vishal\Contactform\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactForm extends Model
{

    use HasFactory, SoftDeletes;

    protected $table = 'tasks';

    protected $guarded = [];
}
