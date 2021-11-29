<?php

namespace App\Repositories;

use App\Models\MasterList;
use App\Repositories\BaseRepository;

/**
 * Class MasterListRepository
 * @package App\Repositories
 * @version November 29, 2021, 10:06 am UTC
*/

class MasterListRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'firstname',
        'lastname',
        'age',
        'address',
        'contact_number',
        'email'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MasterList::class;
    }
}
