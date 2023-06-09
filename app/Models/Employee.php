<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $casts = [
        'is_state_award' => 'boolean',
    ];

    // $table->string('name');
    // $table->string('faculty');
    // $table->string('award');
    // $table->string('state_award');
    // $table->integer('award_year');
    // $table->integer('state_award_year');
    protected $fillable = [
        'name',
        'faculty',
        'award',
        'state_award',
        'protocol',
        'award_year',
        'is_state_award',
    ];
    public static function getUnique($field) {
        $employees = Employee::all();
        $unique = [];
        foreach ($employees as $employee) {
            $unique[] = $employee->$field;
        }

        return array_unique($unique);
    }

    public static $filterFields = [
        'name',
        'faculty',
        'award',
        'state_award',
        'award_year',
        'is_state_award',
    ];

    public static function attributes() {
        return [
            'name' => "Призвіще, ім'я, по батькові співробітника",
            'faculty' => 'Факультет/ННІ',
            'award' => 'Нагорода (Почесне звання, відзнака та грамота)',
            'state_award'=> 'Державна нагорода',
            'award_year'=> 'Рік відзначення КПІ',
            'is_state_award'=> 'Державна нагорода',
        ];
    }
}
