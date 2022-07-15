<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FornecedoresNovaColunaSiteComAfter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Incluindo nova coluna com after
        Schema::table('fornecedores', function (Blueprint $table) {
           $table->string('site', 150)->after('nome')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Removendo o que foi feito no up
        Schema::table('fornecedores', function (Blueprint $table) {
           $table->dropColumn('site');
        });

    }
}
