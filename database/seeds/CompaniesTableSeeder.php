<?php

use App\Company;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
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

        Company::create([
            'name'          => 'TAN',
        ]);
        
        $this->enableForeignKeys();
    }
}