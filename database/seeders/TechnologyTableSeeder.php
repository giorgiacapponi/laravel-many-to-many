<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies=['html','java','python','javascript'];
        foreach($technologies as $technology){
            $new_technology=new Technology();
            $new_technology->name=$technology;
            $new_technology->slug=Str::slug($new_technology->name);
            $new_technology->save();
        } 
       
    }
}
