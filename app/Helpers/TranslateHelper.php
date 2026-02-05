<?php

namespace App\Helpers;

class TranslateHelper
{
    public static function translateCharacterStatus(string $status)
    {
        return match ($status) {
            'Alive' => 'Vivo',
            'Dead' => 'Morto',
            'unknown' => 'Desconhecido',
            default => $status
        };
    }
}
