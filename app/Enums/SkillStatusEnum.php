<?php

    namespace App\Enums;

    enum SkillStatusEnum:string{
        case AVERAGE='Average';
        case BETTER='Better';
        case BEST='Best';
        case EXCELLENT='Excellent';
        case EXPERT='Expert';


        public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
    }