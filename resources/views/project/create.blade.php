<x-layout>
    @if(session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <h1>Crating a new Project</h1>
    <p>Thank you for choosing Torre Projects to help you making your ideas come true. We will now guide you through the process of creating a new project.</p>
    <p>A Torre project is a setup of customized features gathered to help you fulfill your hiring requirements and connect you to the right people according to the category of the project you are working on. So as a first step we need you to choose from one of the categories below</p>

    <div class="row my-md-4">
        <div class="col">
            <form class="form-create-project needs-validation" method="post" action="/projects/store" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="input-project-name" class="form-label">Project Name:</label>
                    <input type="text" class="form-control" id="input-project-name" name="input-project-name" required value="{{ old('input-project-name') }}"/>
                    <div class="invalid-feedback">Please choose a name for your project</div>
                </div>
                <div class="mb-3">
                    <label for="input-project-description" class="form-label">Description:</label>
                    <textarea type="text" class="form-control" name="input-project-description" id="input-project-description"
                              aria-describedby="help-project-description">{{ old('input-project-description') }}</textarea>
                    <div class="form-text" id="help-project-description">Use this for a quick summary of what this project is about</div>
                </div>
                <div class="mb-3">
                    <label for="input-project-category" class="form-label">Category</label>
                    <div class="row input-project-category">
                    @foreach($categories as $category)
                        <div class="col-sm-6">
                            <div class="card card-project-category" role="radio" data-category-id="{{ $category->id }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $category->name }}</h5>
                                    <p class="card-text">{{ $category->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    <input type="hidden" name="input-project-category" id="input-project-category" required>
                    <div class="invalid-feedback">Please select a category for your project</div>
                </div>
                <div class="d-flex justify-content-end mt-5">
                    <input type="submit" value="Create project" class="btn btn-primary" role="button"/>
                </div>
            </form>
        </div>
    </div>

</x-layout>
