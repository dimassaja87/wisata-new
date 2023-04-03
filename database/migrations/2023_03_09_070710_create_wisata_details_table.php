89% penyimpanan digunakan … Anda dapat mengosongkan ruang penyimpanan atau mendapatkan penyimpanan ekstra untuk Drive, Gmail, dan Google Foto.
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wisata_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kota');
            $table->foreignId('id_user');
            $table->string('nama');///////////////////////////////////////////////////////
            $table->string('wisata');
            $table->string('foto')->nullable();
            $table->longText('detail_wisata')->nullable();
            $table->longText('files')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisata_details');
    }
};
