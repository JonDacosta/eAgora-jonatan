<?php

namespace App\Enums;

/**
 * @method static StatusEnum PENDING()
 * @method static StatusEnum INPROGRESS()
 * @method static StatusEnum DONE()
 */
final class StatusEnum
{
    const PENDING = 1;
    const IN_PROGRESS = 2;
    const DONE = 3;

    public static function getStringValue($status)
    {
        switch ($status) {
            case self::PENDING:
                return 'Pendiente';
            case self::IN_PROGRESS:
                return 'En Proceso';
            case self::DONE:
                return 'Confirmada';
            default:
                return '';
        }
    }

}
