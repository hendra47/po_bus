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
class kota extends Model
{

    public $table = 'kota';
    


    public $fillable = [
        'nama',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'keterangan' => 'required'
    ];

    
}
