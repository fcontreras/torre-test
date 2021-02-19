<?php

namespace App\Http\Controllers;

use App\Models\CategoryProfile;
use App\Models\Project;
use Illuminate\Support\Facades\Http;

class HiringController extends Controller
{


    public function home($id)
    {
        $project = Project::find($id);
        $profiles = CategoryProfile::where('project_category', $project->project_category_id)->get();

        return view('hiring.home', [
            'project' => $project,
            'profiles' => $profiles
        ]);
    }

    public function search($projectId, $profileId)
    {
        $project = Project::find($projectId);
        $profile = CategoryProfile::find($profileId);

        $response = Http::withBody(
            '{"skill":{"term":"Software Development", "experience":"1-plus-year"}}',
            'application/json'
        )->post('https://search.torre.co/people/_search/');

        $responseAsJson = json_decode($response->body());

        return view('hiring.search', [
            'results' => $responseAsJson->results,
            'profile' => $profile,
            'project' => $project,
        ]);
    }
}
