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
        Schema::create('camionetes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ano', 4);
            $table->unsignedBigInteger('marca_id');
            $table->string("nome", 30);
            $table->string('quilometragem', 7);
            $table->unsignedTinyInteger('lugares');
            $table->string("cor");
            $table->text("descricao");
            $table->unsignedBigInteger("empresa_id");
            $table->unsignedTinyInteger('portas');
            $table->boolean('tracao_integral');
            $table->boolean('airbags');
            $table->string('litragem_cacamba', 4);
            $table->boolean('reboque');
            $table->enum('origem', ['NACIONAL', 'INTERNACIONAL']);
            $table->foreign("empresa_id")->references('id')->on('empresas');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camionetes');
    }
};
