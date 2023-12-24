<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $table = 'Member';
    protected $primaryKey = 'id';

    // 主键是否自增
    public $incrementing = true;

    protected $fillable = ['UserName', 'Gender', 'Email', 'Password', 'Mobile', 'Address', 'Birthdate'];
    protected $guarded = [];
    // 模型的主键

}
