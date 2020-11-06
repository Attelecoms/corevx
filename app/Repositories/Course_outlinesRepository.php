<?php

namespace App\Repositories;

use App\Models\Course_outlines;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Course_outlinesRepository
 * @package App\Repositories
 * @version November 5, 2020, 9:26 am UTC
 *
 * @method Course_outlines findWithoutFail($id, $columns = ['*'])
 * @method Course_outlines find($id, $columns = ['*'])
 * @method Course_outlines first($columns = ['*'])
*/
class Course_outlinesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'course_id',
        'course_title_no',
        'course_title',
        'duration'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Course_outlines::class;
    }
}
