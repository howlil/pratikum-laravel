
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_krs');
            $table->string('nim_mhs', 10);
            $table->timestamps();

            $table->foreign('id_krs')->references('id')->on('krs')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('nim_mhs')->references('nim')->on('mahasiswa')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
};

