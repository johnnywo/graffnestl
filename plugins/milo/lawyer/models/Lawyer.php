<?php namespace Milo\Lawyer\Models;

use Model;

/**
 * Lawyer Model
 */
class Lawyer extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'milo_lawyer_lawyers';

    /**
     * Softly implement the TranslatableModel behavior.
     */
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    /**
     * @var array Attributes that support translation, if available.
     */
    public $translatable = ['title', 'jobtitle', 'address', 'relation', 'focus', 'experience', 'education', 'languages'];



    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'name',
        'title', 
        'jobtitle', 
        'address',
        'phone',
        'mobil',
        'fax',
        'email', 
        'relation', 
        'focus', 
        'experience', 
        'education', 
        'languages'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'photo' => 'System\Models\File'
    ];
    public $attachMany = [];
}
