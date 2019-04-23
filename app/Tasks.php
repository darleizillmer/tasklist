<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $primaryKey = 'tare_sequ';
    protected $fillable = ['tare_user', 'tare_titu', 'tare_desc', 'tare_venc', 'created_by', 'tare_stat', 'updated_by', 'deleted_by', 'deleted_at' ];
}
