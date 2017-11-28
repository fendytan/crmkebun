<?php

use App\Destination;
use Illuminate\Database\Seeder;

class DestinationsTableSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        
        Destination::create([
            'company_id'            => 1,
            'name'                  => "PAA",
        ]);

        Destination::create([
            'company_id'            => 1,
            'name'                  => "ISA",
        ]);
        
        $this->enableForeignKeys();
    }
}
