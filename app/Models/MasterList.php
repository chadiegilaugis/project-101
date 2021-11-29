<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class MasterList
 * @package App\Models
 * @version November 29, 2021, 10:06 am UTC
 *
 * @property string $firstname
 * @property string $lastname
 * @property string $age
 * @property string $address
 * @property string $contact_number
 * @property string $email
 */
class MasterList extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'master_lists';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'firstname',
        'lastname',
        'age',
        'address',
        'contact_number',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstname' => 'string',
        'lastname' => 'string',
        'age' => 'string',
        'address' => 'string',
        'contact_number' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'age' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'contact_number' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
