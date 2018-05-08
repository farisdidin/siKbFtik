<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengajarTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'pengajar';

    /**
     * Run the migrations.
     * @table pengajar
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('NRP');
            $table->primary('NRP');
            $table->string('Username', 25);
            $table->string('Password');
            $table->string('Nama_Pengajar', 100);
            $table->string('TTL', 200);
            $table->string('Alamat', 200);
            $table->string('No_HP', 16);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
