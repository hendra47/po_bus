<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class harga
 * @package App\Models
 * @version July 15, 2018, 2:19 pm UTC
 *
 * @method static harga find($id=null, $columns = array())
 * @method static harga|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property string nominal
 * @property hidden harga_lama
 * @property string keterangan
 */
class harga extends Model
{

    public $table = 'harga';
    


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
