<?php

namespace App\Repositories;

use App\Models\bus;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class busRepository
 * @package App\Repositories
 * @version July 15, 2018, 9:40 am UTC
 *
 * @method bus findWithoutFail($id, $columns = ['*'])
 * @method bus find($id, $columns = ['*'])
 * @method bus first($columns = ['*'])
*/
class busRepository extends BaseRepository
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
        return bus::class;
    }
}
