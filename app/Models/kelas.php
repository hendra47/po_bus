<?php

namespace App\Models;

use Eloquent as Model;

/**
 * class kelas
 * @package App\Models
 * @version July 15, 2018, 2:31 pm UTC
 *
 * @method static kelas find($id=null, $columns = array())
 * @method static kelas|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property char nama
 * @property integer id_kota
 * @property integer id_jam
 * @property integer id_rute
 * @property integer id_harga
 * @property integer id_bus
 */
class kelas extends Model
{

    public $table = 'kelas';
    


    public $fillable = [
        'nama',
        'kota_asal',
        'id_jam',
        'kota_tujuan',
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
        'kota_asal' => 'integer',
        'id_jam' => 'integer',
        'kota_tujuan' => 'integer',
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
        'kota_asal' => 'required',
        'id_jam' => 'required',
        'kota_tujuan' => 'required'
    ];

    
}
