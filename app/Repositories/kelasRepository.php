<?php

namespace App\Repositories;

use App\Models\kelas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class kelasRepository
 * @package App\Repositories
 * @version July 15, 2018, 2:31 pm UTC
 *
 * @method kelas findWithoutFail($id, $columns = ['*'])
 * @method class find($id, $columns = ['*'])
 * @method class first($columns = ['*'])
*/
class kelasRepository extends BaseRepository
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
        return kelas::class;
    }
}
