<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class transaksi
 * @package App\Models
 * @version July 15, 2018, 3:06 pm UTC
 *
 * @method static transaksi find($id=null, $columns = array())
 * @method static transaksi|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property integer id_kategori
 * @property dateTime tgl_berangkat
 * @property integer id_member
 * @property integer jml_penumpang
 * @property integer total_harga
 * @property string bukti_transfer
 * @property string status
 */
class transaksi extends Model
{

    public $table = 'transaksi';
    


    public $fillable = [
        'id_kategori',
        'tgl_berangkat',
        'id_member',
        'jml_penumpang',
        'total_harga',
        'bukti_transfer',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_kategori' => 'integer',
        'tgl_berangkat' => 'datetime',
        'id_member' => 'integer',
        'jml_penumpang' => 'integer',
        'total_harga' => 'integer',
        'bukti_transfer' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_kategori' => 'required',
        'tgl_berangkat' => 'required',
        'id_member' => 'required'
    ];

    
}
