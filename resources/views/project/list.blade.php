<x-layout>
    <h1>Project list</h1>

    <div class="my-md-4 d-flex justify-content-end">
        <a type="button" class="btn btn-primary" role="button" href="/projects/create">
            Create Project
        </a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Project</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Category</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->status }}</td>
                <td>{{ $project->project_category_id }}</td>
                <td><a href="/project/{{ $project->id }}/hiring">Start hiring</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>
