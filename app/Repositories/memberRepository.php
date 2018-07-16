<?php

namespace App\Repositories;

use App\Models\member;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class memberRepository
 * @package App\Repositories
 * @version July 15, 2018, 9:06 am UTC
 *
 * @method member findWithoutFail($id, $columns = ['*'])
 * @method member find($id, $columns = ['*'])
 * @method member first($columns = ['*'])
*/
class memberRepository extends BaseRepository
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
        return member::class;
    }
}
