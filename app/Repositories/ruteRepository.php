<?php

namespace App\Repositories;

use App\Models\rute;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ruteRepository
 * @package App\Repositories
 * @version July 15, 2018, 3:06 pm UTC
 *
 * @method rute findWithoutFail($id, $columns = ['*'])
 * @method rute find($id, $columns = ['*'])
 * @method rute first($columns = ['*'])
*/
class ruteRepository extends BaseRepository
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
        return rute::class;
    }
}
