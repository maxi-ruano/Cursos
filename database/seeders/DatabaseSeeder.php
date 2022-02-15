<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        
        User::create([
            'name'=>'Maxi Ruano',
            'email'=>'ruanomaxi@gmail.com',
            'password'=>bcrypt('34905183')
            ])->assignRole('Admin');


           

        
        User::factory(10)->create();
    //    $this-> call( CursoSeeder::class);
         Curso::factory(50)->create();
         
    

    }
}
