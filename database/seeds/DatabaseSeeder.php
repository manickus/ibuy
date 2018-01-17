<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(LaratrustSeeder::class);

        DB::table('categories')->insert([
        'name' => 'Elektronika',
        'slug' => 'elektronika',
        'icon' => 'fa fa-plug',
    ]);
    DB::table('categories')->insert([
    'name' => 'Motoryzacja',
    'slug' => 'motoryzacja',
    'icon' => 'fa fa-car',
]);
DB::table('categories')->insert([
'name' => 'Praca',
'slug' => 'praca',
'icon' => 'fa fa-users',
]);
DB::table('categories')->insert([
'name' => 'Dom i ogród',
'slug' => 'dom-i-ogrod',
'icon' => 'fa fa-bath',
]);
DB::table('categories')->insert([
'name' => 'Zwierzęta',
'slug' => 'zwierzeta',
'icon' => 'fa fa-paw',
]);
DB::table('categories')->insert([
'name' => 'Rolnictwo',
'slug' => 'rolnictwo',
'icon' => 'fa fa-cogs',
]);
DB::table('categories')->insert([
'name' => 'Sport i Hobby',
'slug' => 'sport-i-hobby',
'icon' => 'fa fa-bicycle',
]);
DB::table('categories')->insert([
'name' => 'Muzyka',
'slug' => 'muzyka',
'icon' => 'fa fa-music',
]);
DB::table('categories')->insert([
'name' => 'Edukacja',
'slug' => 'edukacja',
'icon' => 'fa fa-graduation-cap',
]);

DB::table('categories')->insert([
'name' => 'Usługi',
'slug' => 'uslugi',
'icon' => 'fa fa-briefcase',
]);
DB::table('categories')->insert([
'name' => 'Moda',
'slug' => 'moda',
'icon' => 'fa fa-shopping-bag',
]);

DB::table('ad_types')->insert([
'name' => 'Sprzedam',

]);

DB::table('ad_types')->insert([
'name' => 'Kupie',
]);


DB::table('ad_types')->insert([
'name' => 'Oddam',

]);

    }
}
