<div class="container px-4 py-5" id="custom-cards">
    <h1 class="pb-2 border-bottom">Project</h1>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        @foreach ($projects as $project)
            <div class="col fs-5">
                <div class="card text-bg-dark">
                    <img src="img/project.jpg" class="card-img" alt="{{ $project->title }}">
                    <div class="card-img-overlay">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="card-text">{!! $project->description !!}</p>
                        <p class="card-text"><small><a href="{{ $project->url }}" class="text-white">Link to this
                                    Project
                                    -></a></small></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</div>
