<?php

namespace App\Repositories;

use App\Models\Family;
use App\Repositories\BaseRepository;

/**
 * Class FamilyRepository
 * @package App\Repositories
 * @version September 17, 2021, 5:36 pm UTC
*/

class FamilyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fathersName',
        'mothersName',
        'sistersName',
        'brothersName',
        'Address'
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
        return Family::class;
    }
}
