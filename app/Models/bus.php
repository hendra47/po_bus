<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class bus
 * @package App\Models
 * @version July 15, 2018, 9:40 am UTC
 *
 * @method static bus find($id=null, $columns = array())
 * @method static bus|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property integer no_bus
 * @property string kapasitas
 * @property string fasilitas
 * @property string keterangan
 */
class bus extends Model
{

    public $table = 'bus';
    


    public $fillable = [
        'no_bus',
        'kapasitas',
        'fasilitas',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'no_bus' => 'string',
        'kapasitas' => 'string',
        'fasilitas' => 'string',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_bus' => 'required',
        'kapasitas' => 'required',
        'fasilitas' => 'required'
    ];

    
}
