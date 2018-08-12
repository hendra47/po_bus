<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class harga
 * @package App\Models
 * @version August 12, 2018, 10:21 am UTC
 *
 * @method static harga find($id=null, $columns = array())
 * @method static harga|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property string nominal
 * @property hidden harga_lama
 * @property string keterangan
 */
class harga extends Model
{

    public $table = 'hargas';
    


    public $fillable = [
        'nominal',
        'harga_lama',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nominal' => 'string',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nominal' => 'required',
        'keterangan' => 'required'
    ];

    
}
