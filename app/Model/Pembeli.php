<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table = 'pembeli';
    protected $primaryKey = 'id_pembeli';
    protected $fillable = ['nama_pembeli','telepon','alamat'];
}
