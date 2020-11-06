<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Course_outlines
 * @package App\Models
 * @version November 5, 2020, 9:26 am UTC
 *
 * @property integer user_id
 * @property integer course_id
 * @property integer course_title_no
 * @property string course_title
 * @property string duration
 */
class Course_outlines extends Model
{
    use SoftDeletes;

    public $table = 'course_outline';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'course_id',
        'course_title_no',
        'course_title',
        'duration'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'course_id' => 'integer',
        'course_title_no' => 'integer',
        'course_title' => 'string',
        'duration' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_id' => 'required',
        'course_title_no' => 'required',
        'course_title' => 'required',
        'duration' => 'required'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

}
