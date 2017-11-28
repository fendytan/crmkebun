<?php

use App\Source;
use Illuminate\Database\Seeder;

class SourcesTableSeeder extends Seeder
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

        Source::create([
            'company_id'            => 1,
            'name'                  => "Kebun A",
        ]);

        Source::create([
            'company_id'            => 1,
            'name'                  => "Kebun B",
        ]);
        
        $this->enableForeignKeys();
    }
}
