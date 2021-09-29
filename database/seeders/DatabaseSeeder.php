<?php

namespace Database\Seeders;

use App\Models\Cafe;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'name' => 'رضا',
            'lastname' => 'سیاه چشم',
            'username' => 'matx2010',
            'email' => 'reza.siahcheshm@gmail.com',
            'email_verified_at' => now(),
            'mobile' => '09378818958',
            'is_superuser' => '1',
            'identifyNumber' => '0021092117',
            'remember_token' => Str::random(10),
            'birthday' => '1377-02-21',
            'lastSeen' => 'آنلاین',
            'status' => 'A',
            'gender' => 'M',
            'accessLevel' => 'MC',
            'image' => 'images/profile-1.jpeg',

        ]);
        User::factory(10)->create();
        Cafe::query()->create([
            'name' => 'شاهکار',
            'status' =>  'در حال کار',
            'code' =>   Str::random(10),
            'tel' =>  '',
            'location' =>  '35.6997793747305,51.337409038769465',
            'instagram' =>  'shahkar.bagh.restaurant',
            'address' => 'تهران ،لواسان ،کیلومتر۳ جاده فشم ،سمت راست',
        ]);
//        DB::table('admin_category')->insert([[
//            'name' => 'menu',
//            'title' => 'منو',
//            'headName' => null,
//            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>',
//        ],
//            [
//            'name' => 'table',
//            'title' => 'میز',
//            'headName' => null,
//            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>',
//        ]
//        ]);
    }
}
