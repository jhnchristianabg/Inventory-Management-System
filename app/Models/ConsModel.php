<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConsModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='consumables';

}

class ConsModel1 extends Model
{
    use SoftDeletes;

    protected $table='cons_purchase_details';

}
