<?php

namespace App\Enums;

/**
 * @method static StatusEnum PENDING()
 * @method static StatusEnum INPROGRESS()
 * @method static StatusEnum DONE()
 */
final class PublicationEnum
{
    const EVENT = 1;
    const REGISTER = 2;
    const VOUCHER = 3;
    const PAYMENT = 4;

    public static function getStringValue($status)
    {
        switch ($status) {
            case self::EVENT:
                return 'Evento';
            case self::REGISTER:
                return 'Registro';
            case self::VOUCHER:
                return 'Bono';
            case self::PAYMENT:
                return 'Pago';
            default:
                return '';

        }

    }


}
