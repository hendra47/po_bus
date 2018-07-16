<?php

namespace App\Repositories;

use App\Models\kategori;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class kategoriRepository
 * @package App\Repositories
 * @version July 15, 2018, 2:31 pm UTC
 *
 * @method kategori findWithoutFail($id, $columns = ['*'])
 * @method kategori find($id, $columns = ['*'])
 * @method kategori first($columns = ['*'])
*/
class kategoriRepository extends BaseRepository
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
        return kategori::class;
    }
}
