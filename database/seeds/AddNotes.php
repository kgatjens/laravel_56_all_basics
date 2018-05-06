<?php

use Illuminate\Database\Seeder;

class AddNotes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<=40; $i++){
        	DB::table('notes')->insert(array(
        		'title'=> 'Note number: '.$i,
        		'description' => 'Description note: '.$i
        	));
        }

        $this->command->info('Data added to notes table');
    }
}
