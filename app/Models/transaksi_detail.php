<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class transaksi_detail
 * @package App\Models
 * @version August 12, 2018, 10:21 am UTC
 *
 * @method static transaksi_detail find($id=null, $columns = array())
 * @method static transaksi_detail|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property integer id_member
 * @property string no_perjalanan
 * @property string no_kursi
 * @property integer bayar
 * @property string bukti_transfer
 */
class transaksi_detail extends Model
{

    public $table = 'transaksi_detail';
    


    public $fillable = [
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_member' => 'integer',
        'no_perjalanan' => 'string',
        'no_kursi' => 'string',
        'bayar' => 'integer',
        'bukti_transfer' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'status' => 'required'
    ];

    
}
