<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CPModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='cables_and_peripherals';
}

class CPModel2 extends Model
{
    use SoftDeletes;

    protected $table='cp_purchase_details';

}
