<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pegawai extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_role',
        'name',
        'email',
        'address',
        'no_telp',
    ];

    protected $dates = ['deleted_at'];

    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role', 'id');
    }
}
