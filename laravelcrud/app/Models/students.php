<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
 protected $fillable =[
     'first_name','last_name','email','phone'

 ];
}
