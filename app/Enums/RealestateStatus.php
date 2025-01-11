<?php

namespace App\Enums;

enum RealestateStatus: int
{
    case AVAILABLE = 1;
    case RESERVED = 2;

    case SOLD = 3;

    public static function getLabel(int $status): string
    {
        return match ($status) {
            self::AVAILABLE->value => 'Müsait',
            self::RESERVED->value => 'Rezerve',
            self::SOLD->value => 'Satıldı',
            default => 'Bilinmeyen Durum',
        };
    }

    // Method to pluck all labels and values into an associative array
    public static function pluckLabelsAndValues(): array
    {
        return [
            self::getLabel(self::AVAILABLE->value) => self::AVAILABLE->value,
            self::getLabel(self::RESERVED->value) => self::RESERVED->value,
            self::getLabel(self::SOLD->value) => self::SOLD->value,
        ];
    }
}
