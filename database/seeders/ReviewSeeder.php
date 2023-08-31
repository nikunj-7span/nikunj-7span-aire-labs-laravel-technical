<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [];
        $reviews = [
            [
                'user_id' => 6,
                'body' => '“You made it so simple."',
                'ratings' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'body' => '“You made it so simple. My new site is so much faster and easier
                to work with than my old site. I just choose the page, make the
                change & it is a good channel for us.”',
                'ratings' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 4,
                'body' => '“You made it so simple. My new site is so much faster and easier
                to work with than my old site. I just choose the page, make the
                change & it is a good channel for us.”',
                'ratings' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 5,
                'body' => '“You made it so simple. My new site is so much faster and easier
                to work with than my old site. I just choose the page, make the
                change & it is a good channel for us.”',
                'ratings' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'body' => '“You made it so simple. My new site is so much faster and easier
                to work with than my old site. I just choose the page, make the
                change & it is a good channel for us.”',
                'ratings' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 3,
                'body' => '“You made it so simple. My new site is so much faster and easier
                to work with than my old site. I just choose the page, make the
                change & it is a good channel for us.”',
                'ratings' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],


        ];

        DB::table('reviews')->insert($reviews);
    }
}
