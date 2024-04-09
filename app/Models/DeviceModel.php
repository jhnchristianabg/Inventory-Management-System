<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class DeviceModel extends Model
{
    use SoftDeletes;

    protected $table='devices';

}

class DeviceModel1 extends Model
{
    use SoftDeletes;

    protected $table='device_specs';

}

class DeviceModel2 extends Model
{
    use SoftDeletes;

    protected $table='device_purchase_details';

}

class DeviceModel3 extends Model
{
    use SoftDeletes;

    protected $table='locations';

}
