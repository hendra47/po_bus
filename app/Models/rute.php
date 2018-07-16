<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class rute
 * @package App\Models
 * @version July 15, 2018, 3:06 pm UTC
 *
 * @method static rute find($id=null, $columns = array())
 * @method static rute|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property integer id_kategori
 * @property dateTime tgl_berangkat
 * @property integer id_member
 * @property integer jml_penumpang
 * @property integer total_harga
 * @property string bukti_transfer
 * @property string status
 */
class rute extends Model
{

    public $table = 'rute';
    


    public $fillable = [
        'rute',
        'keterangan'
        ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'rute' => 'rute',
        'keterangan' => 'keterangan'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'rute' => 'required',
        'keterangan' => 'required'
    ];

    
}
