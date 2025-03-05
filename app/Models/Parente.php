<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parente extends Model
{
    use HasFactory;
    protected $fillable = [
        "firstname" , 
        "lastname" , 
        'dateofbirth' , 
        'gender' , 
        'blood_type' ,
        'address' , 
        "phone" ,
        "email" , 
        "last_Login_date"
    ] ;
}
