<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $connection = 'myFirebirdConnection';

    protected $table = 'TB_EST_PRODUTO';

    protected $primaryKey = 'ID_IDENTIFICADOR';
}
