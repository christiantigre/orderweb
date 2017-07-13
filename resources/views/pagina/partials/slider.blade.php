<div id="da-slider" class="da-slider">
    <div class="triangle"></div>
    <!-- mask elemet use for masking background image -->
    <div class="mask"></div>
    <!-- All slides centred in container element -->
    <div class="container">
        <!-- Start first slide -->
        @foreach($slider as $slide)
        <div class="da-slide">
            <!--tittle-->
            <h2 class="fittext2">{{ $slide->tittle }}</h2>
            <!--sub-tittle-->
            <h4>{{ $slide->subtittle }}</h4>
            <!--Paragraph-->
            <p>{{ $slide->paragraph }}</p>
            <!--link-->
            <a href="{{ $slide->link }}" class="da-link button">{{ $slide->tittle_link }}</a>
            <div class="da-img">
                <!--img-->
                <img src="{{ asset($slide->img.'') }}" alt="image01" width="320">
            </div>
        </div>
        @endforeach
        <!-- End first slide -->
        <!-- Start second slide -->
        <!--<div class="da-slide">
            <h2>Easy management</h2>
            <h4>Easy to use</h4>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <a href="#" class="da-link button">Read more</a>
            <div class="da-img">
                <img src="{{ url('pagina/images/Slider02.png') }}" width="320" alt="image02">
            </div>
        </div>-->
        <!-- End second slide -->
        <!-- Start third slide -->
        <!--<div class="da-slide">
            <h2>Revolution</h2>
            <h4>Customizable</h4>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <a href="#" class="da-link button">Read more</a>
            <div class="da-img">
                <img src="{{ url('pagina/images/Slider03.png') }}" width="320" alt="image03">
            </div>
        </div>-->
        <!-- Start third slide -->
        <!-- Start cSlide navigation arrows -->
        <div class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </div>
        <!-- End cSlide navigation arrows -->
    </div>
</div>