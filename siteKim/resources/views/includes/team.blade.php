<section id="ts-team" class="ts-team">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">Quality Service</h2>
                <h3 class="section-sub-title">Professional Team</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div id="team-slide" class="team-slide">
                    @foreach ($team as $item)
                        <div class="item">
                            <div class="ts-team-wrapper">
                                <div class="team-img-wrapper">
                                    <img loading="lazy" class="w-100"
                                        src="{{ asset('front-end/images/team/team1.jpg') }}" alt="team-img">
                                </div>
                                <div class="ts-team-content">
                                    <h3 class="ts-name">{{ $item->names }}</h3>
                                    <p class="ts-designation">{{ $item->poste }}</p>
                                    <p class="ts-description">{{ $item->description }}</p>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
