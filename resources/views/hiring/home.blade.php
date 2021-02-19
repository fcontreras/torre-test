<x-layout>
    <h1>Hiring for {{ $project->name }}</h1>
    <p>According to the type of project you are executing we recommend the following professional profiles to be included in your team in order to increase the success rate</p>

    <div class="row">
        @foreach($profiles as $profile)
            <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $profile->profile_name }}</h5>
                    <h6 class="card-subtitle">Profile description</h6>
                    <p class="card-text">{{ $profile->profile_description }}</p>
                    <h6 class="card-subtitle">How will it help the project</h6>
                    <p class="card-text">{{ $profile->how_it_helps }}</p>
                    <a href="/project/{{ $project->id }}/hiring/{{ $profile->id }}" class="card-link">Look for candidates</a>
                </div>
            </div>
            </div>
        @endforeach
    </div>

</x-layout>
