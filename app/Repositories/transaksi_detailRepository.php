<?php

namespace App\Repositories;

use App\Models\transaksi_detail;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class transaksi_detailRepository
 * @package App\Repositories
 * @version August 12, 2018, 10:21 am UTC
 *
 * @method transaksi_detail findWithoutFail($id, $columns = ['*'])
 * @method transaksi_detail find($id, $columns = ['*'])
 * @method transaksi_detail first($columns = ['*'])
*/
class transaksi_detailRepository extends BaseRepository
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
        return transaksi_detail::class;
    }
}
