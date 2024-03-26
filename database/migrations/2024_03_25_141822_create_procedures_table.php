<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\StatusEnum;
use App\Enums\PublicationEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('procedures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 40);
            $table->unsignedInteger('publication_type')->default(PublicationEnum::EVENT);
            $table->unsignedInteger('status')->default(StatusEnum::PENDING);
            $table->integer('reservations')->nullable();
            $table->string('id_person', 30);
            $table->timestamp('expiration')->nullable();
            $table->timestamps();



            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procedures');
    }
};
