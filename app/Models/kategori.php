<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class kategori
 * @package App\Models
 * @version July 15, 2018, 2:31 pm UTC
 *
 * @method static kategori find($id=null, $columns = array())
 * @method static kategori|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property char nama
 * @property integer id_kota
 * @property integer id_jam
 * @property integer id_rute
 * @property integer id_harga
 * @property integer id_bus
 */
class kategori extends Model
{

    public $table = 'kategori';
    


    public $fillable = [
        'nama',
        'id_kota',
        'id_jam',
        'id_rute',
        'id_harga',
        'id_bus'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string',
        'id_kota' => 'integer',
        'id_jam' => 'integer',
        'id_rute' => 'integer',
        'id_harga' => 'integer',
        'id_bus' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'id_kota' => 'required',
        'id_jam' => 'required'
    ];

    
}
