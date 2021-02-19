<x-layout>
    <h1>Looking for {{ $profile->profile_name }}</h1>
    <h3>Project: {{ $project->name }}</h3>
    <div class="row">
    @foreach($results as $result)
        <div class="col-sm-3 my-md-2">
            <div class="card profile-card">
                <img src="{{ $result->picture }}" class="card-img-top" alt="photo of {{ $result->name }}" />
                <div class="card-body">
                    <h5 class="card-title">{{ $result->name }}</h5>
                    <p>{{ $result->professionalHeadline }}</p>

                    <a target="_blank" href="https://torre.co/{{ $result->username }}" class="card-link">View Genome</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</x-layout>
