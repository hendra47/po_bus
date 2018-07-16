<?php

namespace App\Repositories;

use App\Models\jam;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class jamRepository
 * @package App\Repositories
 * @version July 15, 2018, 3:06 pm UTC
 *
 * @method jam findWithoutFail($id, $columns = ['*'])
 * @method jam find($id, $columns = ['*'])
 * @method jam first($columns = ['*'])
*/
class jamRepository extends BaseRepository
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
        return jam::class;
    }
}
