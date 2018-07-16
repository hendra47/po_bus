<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class jam
 * @package App\Models
 * @version July 15, 2018, 3:06 pm UTC
 *
 * @method static jam find($id=null, $columns = array())
 * @method static jam|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property integer id_kategori
 * @property dateTime tgl_berangkat
 * @property integer id_member
 * @property integer jml_penumpang
 * @property integer total_harga
 * @property string bukti_transfer
 * @property string status
 */
class jam extends Model
{

    public $table = 'jam';
    


    public $fillable = [
        'jam',
        'keterangan'
        ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'jam' => 'jama',
        'keterangan' => 'keterangan'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'jam' => 'required',
        'keterangan' => 'required'
    ];

    
}
