<section id="main-container" class="main-container">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">Travail d'excellence</h2>
                <h3 class="section-sub-title">Projets Recents</h3>
            </div>
        </div>
        <div class="col-12">
            <div class="shuffle-btn-group">
                <label class="active" for="all">
                    <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show
                    All
                </label>
                @foreach ($project as $item)
                    <label for="{{ $item->project_service }}">
                        <input type="radio" name="shuffle-filter" id="{{ $item->project_service }}"
                            value="{{ $item->project_service }}">{{ $item->project_service }}
                    </label>
                @endforeach
            </div>

            <div class="row shuffle-wrapper">
                <div class="col-1 shuffle-sizer"></div>
                @foreach ($project as $item)
                    <div class="col-lg-4 col-md-6 shuffle-item"
                        data-groups="[&quot;{{ $item->project_service }}&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ asset('front-end/images/projects/project1.jpg') }}">
                                <img class="img-fluid" src="{{ asset('front-end/images/projects/project1.jpg') }}"
                                    alt="project-image">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="projects-single.html">{{ $item->project_name }} </a>
                                    </h3>
                                    <p class="project-cat">{{ $item->project_description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div><!-- shuffle end -->
        </div>
    </div>
</section>
