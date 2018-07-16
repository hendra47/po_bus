<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class member
 * @package App\Models
 * @version July 15, 2018, 9:06 am UTC
 *
 * @method static member find($id=null, $columns = array())
 * @method static member|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property string nama
 * @property string no_ktp
 * @property date tgl_lahir
 * @property string jk
 * @property string alamat
 */
class member extends Model
{

    public $table = 'member';
    


    public $fillable = [
        'nama',
        'no_ktp',
        'tgl_lahir',
        'jk',
        'alamat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string',
        'no_ktp' => 'string',
        'tgl_lahir' => 'date',
        'jk' => 'string',
        'alamat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'no_ktp' => 'required',
        'tgl_lahir' => 'required',
        'alamat' => 'required'
    ];

    
}
