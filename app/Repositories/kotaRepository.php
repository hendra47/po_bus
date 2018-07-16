<?php

namespace App\Repositories;

use App\Models\kota;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class transaksiRepository
 * @package App\Repositories
 * @version July 15, 2018, 3:06 pm UTC
 *
 * @method transaksi findWithoutFail($id, $columns = ['*'])
 * @method transaksi find($id, $columns = ['*'])
 * @method transaksi first($columns = ['*'])
*/
class kotaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return kota::class;
    }
}
