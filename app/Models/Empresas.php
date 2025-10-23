<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;



class Empresas extends Model
{
    use HasFactory;
    protected $table = 'empresas';
    protected $fillable = ['razaoSocial', 'cnpj', 'email','password'];
}
