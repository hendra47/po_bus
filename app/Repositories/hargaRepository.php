<?php

namespace App\Repositories;

use App\Models\harga;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class hargaRepository
 * @package App\Repositories
 * @version August 12, 2018, 10:21 am UTC
 *
 * @method harga findWithoutFail($id, $columns = ['*'])
 * @method harga find($id, $columns = ['*'])
 * @method harga first($columns = ['*'])
*/
class hargaRepository extends BaseRepository
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
        return harga::class;
    }
}
