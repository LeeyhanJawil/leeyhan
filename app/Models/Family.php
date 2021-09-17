<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Family
 * @package App\Models
 * @version September 17, 2021, 5:36 pm UTC
 *
 * @property string $fathersName
 * @property string $mothersName
 * @property string $sistersName
 * @property string $brothersName
 * @property string $Address
 */
class Family extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'family';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fathersName',
        'mothersName',
        'sistersName',
        'brothersName',
        'Address'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fathersName' => 'string',
        'mothersName' => 'string',
        'sistersName' => 'string',
        'brothersName' => 'string',
        'Address' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fathersName' => 'required|string|max:100',
        'mothersName' => 'required|string|max:100',
        'sistersName' => 'required|string|max:100',
        'brothersName' => 'required|string|max:100',
        'Address' => 'required|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
