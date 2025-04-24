<?php 
namespace App\Enums;

enum GenderIdentification: int
{
    case MALE = 1;
    case FEMALE = 2;


    public function label(): string
    {
        return match($this) {
            self::Male => 'Male',
            self::Female => 'Female',
        };
    }
}


