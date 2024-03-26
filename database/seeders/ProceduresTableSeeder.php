<?php

namespace Database\Seeders;

use App\Enums\PublicationEnum;
use App\Models\Procedure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\StatusEnum;

class ProceduresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Procedure::create([
            'title' => 'Procedimiento 1',
            'publication_type' => PublicationEnum::EVENT,
            'status' => StatusEnum::PENDING,
            'reservations' => 10,
            'id_person' => '1234567890',
            'expiration' => now()->addDays(30),
        ]);

        Procedure::create([
            'title' => 'Procedimiento 2',
            'publication_type' => PublicationEnum::PAYMENT,
            'status' => StatusEnum::IN_PROGRESS,
            'reservations' => 5,
            'id_person' => '0987654321',
            'expiration' => now()->addDays(15),
        ]);

        Procedure::create([
            'title' => 'Procedimiento 3',
            'publication_type' => PublicationEnum::VOUCHER,
            'status' => StatusEnum::DONE,
            'reservations' => 2235,
            'id_person' => '769238723',
            'expiration' => now()->addDays(15),
        ]);
        Procedure::create([
            'title' => 'Procedimiento 4',
            'publication_type' => PublicationEnum::EVENT,
            'status' => StatusEnum::PENDING,
            'reservations' => 1066,
            'id_person' => '1234567891',
            'expiration' => now()->addDays(30),
        ]);

        Procedure::create([
            'title' => 'Procedimiento 5',
            'publication_type' => PublicationEnum::PAYMENT,
            'status' => StatusEnum::IN_PROGRESS,
            'reservations' => 50,
            'id_person' => '0987654322',
            'expiration' => now()->addDays(15),
        ]);

        Procedure::create([
            'title' => 'Procedimiento 6',
            'publication_type' => PublicationEnum::VOUCHER,
            'status' => StatusEnum::DONE,
            'reservations' => 876,
            'id_person' => '769238723',
            'expiration' => now()->addDays(15),
        ]);
        Procedure::create([
            'title' => 'Procedimiento 7',
            'publication_type' => PublicationEnum::EVENT,
            'status' => StatusEnum::PENDING,
            'reservations' => 1000,
            'id_person' => '1234567894',
            'expiration' => now()->addDays(30),
        ]);

        Procedure::create([
            'title' => 'Procedimiento 8',
            'publication_type' => PublicationEnum::PAYMENT,
            'status' => StatusEnum::IN_PROGRESS,
            'reservations' => 578,
            'id_person' => '0987654326',
            'expiration' => now()->addDays(15),
        ]);

        Procedure::create([
            'title' => 'Procedimiento 9',
            'publication_type' => PublicationEnum::VOUCHER,
            'status' => StatusEnum::DONE,
            'reservations' => 2235,
            'id_person' => '769238723',
            'expiration' => now()->addDays(15),
        ]);
        Procedure::create([
            'title' => 'Procedimiento 10',
            'publication_type' => PublicationEnum::EVENT,
            'status' => StatusEnum::PENDING,
            'reservations' => 10,
            'id_person' => '1234567890',
            'expiration' => now()->addDays(30),
        ]);

        Procedure::create([
            'title' => 'Procedimiento 11',
            'publication_type' => PublicationEnum::PAYMENT,
            'status' => StatusEnum::IN_PROGRESS,
            'reservations' => 5,
            'id_person' => '0987654321',
            'expiration' => now()->addDays(15),
        ]);

        Procedure::create([
            'title' => 'Procedimiento 12',
            'publication_type' => PublicationEnum::VOUCHER,
            'status' => StatusEnum::DONE,
            'reservations' => 2235,
            'id_person' => '7692387235',
            'expiration' => now()->addDays(15),
        ]);
        Procedure::create([
            'title' => 'Procedimiento 13',
            'publication_type' => PublicationEnum::EVENT,
            'status' => StatusEnum::PENDING,
            'reservations' => 10,
            'id_person' => '1234567894',
            'expiration' => now()->addDays(30),
        ]);

        Procedure::create([
            'title' => 'Procedimiento 14',
            'publication_type' => PublicationEnum::PAYMENT,
            'status' => StatusEnum::IN_PROGRESS,
            'reservations' => 5,
            'id_person' => '0987654345',
            'expiration' => now()->addDays(15),
        ]);

        Procedure::create([
            'title' => 'Procedimiento 15',
            'publication_type' => PublicationEnum::VOUCHER,
            'status' => StatusEnum::DONE,
            'reservations' => 2235,
            'id_person' => '7692387766',
            'expiration' => now()->addDays(15),
        ]);
        Procedure::create([
            'title' => 'Procedimiento 16',
            'publication_type' => PublicationEnum::EVENT,
            'status' => StatusEnum::PENDING,
            'reservations' => 10,
            'id_person' => '1234567889',
            'expiration' => now()->addDays(30),
        ]);

        Procedure::create([
            'title' => 'Procedimiento 17',
            'publication_type' => PublicationEnum::PAYMENT,
            'status' => StatusEnum::IN_PROGRESS,
            'reservations' => 5,
            'id_person' => '0987654788',
            'expiration' => now()->addDays(15),
        ]);

        Procedure::create([
            'title' => 'Procedimiento 18',
            'publication_type' => PublicationEnum::VOUCHER,
            'status' => StatusEnum::DONE,
            'reservations' => 2235,
            'id_person' => '7692387838',
            'expiration' => now()->addDays(15),
        ]);
        Procedure::create([
            'title' => 'Procedimiento 19',
            'publication_type' => PublicationEnum::EVENT,
            'status' => StatusEnum::PENDING,
            'reservations' => 10,
            'id_person' => '1234567887',
            'expiration' => now()->addDays(30),
        ]);

        Procedure::create([
            'title' => 'Procedimiento 20',
            'publication_type' => PublicationEnum::PAYMENT,
            'status' => StatusEnum::IN_PROGRESS,
            'reservations' => 5,
            'id_person' => '0987654367',
            'expiration' => now()->addDays(15),
        ]);

        Procedure::create([
            'title' => 'Procedimiento 21',
            'publication_type' => PublicationEnum::VOUCHER,
            'status' => StatusEnum::DONE,
            'reservations' => 2235,
            'id_person' => '769238734',
            'expiration' => now()->addDays(15),
        ]);

    }
}
