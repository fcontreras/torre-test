<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_categories')->insert([
            'name' => 'E-commerce Platform',
            'description' => 'A full e-commerce platform may include the creation of a website, a mobile app, integration with third party payment gateways, implementation of cache management and deployment onto PaaS providers'
        ]);

        DB::table('project_categories')->insert([
            'name' => 'E-Learning Platform',
            'description' => 'A full e-learning platform involves the creation of a website, a mobile app, integration with third party file management systems and Single Sign On features'
        ]);

    }
}
