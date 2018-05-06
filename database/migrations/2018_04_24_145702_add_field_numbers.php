<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldNumbers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Shema::table('numbers',function(Blueprint $table)){
        //    // $table->string('country')->after('number_quantity');
        //     $table->renameColumn('number_name','name');
        // });

        DB::statement('
            CREATE TABLE test(
                id int(255) auto_increment not null,
                publication int(255),
                PRIMARY KEY(id)
            );
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
