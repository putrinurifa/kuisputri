<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post1;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Post1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        Post1::factory()->times(100)->create();
        
    }
}
