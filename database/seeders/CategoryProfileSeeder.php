<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_profiles')->insert([
            'profile_name' => 'Sr Software Developer',
            'profile_description' => 'A Sr Software developer is an experimented software engineer that has more than 5 year experience in IT.',
            'how_it_helps' => 'Develops software solutions by studying information needs, conferring with users, studying systems flow, data usage, and work processes; investigating problem areas; and following the software development lifecycle.',
            'project_category' => 1,
            'search_term' => 'Software Development',
        ]);

        DB::table('category_profiles')->insert([
            'profile_name' => 'QA Engineer',
            'profile_description' => 'A QA Engineer handles all testings and quality assurance of a software development project',
            'how_it_helps' => 'Quality Assurance Engineers are responsible for assessing the quality of specifications and technical design documents in order to ensure timely, relevant and meaningful feedback. They are involved in planning and implementing strategies for quality management and testing.',
            'project_category' => 1,
            'search_term' => 'QA',
        ]);

        DB::table('category_profiles')->insert([
            'profile_name' => 'Marketing expert',
            'profile_description' => 'A marketing advisor that will help in designing marketing campaigns for your products',
            'how_it_helps' => 'Will be responsible for the products/services marketing and communications strategies, as well as overall branding and image. They prepare marketing plans, create a calendar of campaigns and events, set the marketing budget and analyse the market and competitors.',
            'project_category' => 1,
            'search_term' => 'Marketing',
        ]);

        DB::table('category_profiles')->insert([
            'profile_name' => 'Sr Software Developer',
            'profile_description' => 'A Sr Software developer is an experimented software engineer that has more than 5 year experience in IT.',
            'how_it_helps' => 'Develops software solutions by studying information needs, conferring with users, studying systems flow, data usage, and work processes; investigating problem areas; and following the software development lifecycle.',
            'project_category' => 2,
            'search_term' => 'Software Development',
        ]);

        DB::table('category_profiles')->insert([
            'profile_name' => 'QA Engineer',
            'profile_description' => 'A QA Engineer handles all testings and quality assurance of a software development project',
            'how_it_helps' => 'Quality Assurance Engineers are responsible for assessing the quality of specifications and technical design documents in order to ensure timely, relevant and meaningful feedback. They are involved in planning and implementing strategies for quality management and testing.',
            'project_category' => 2,
            'search_term' => 'QA',
        ]);
    }
}
