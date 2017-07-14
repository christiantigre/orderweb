<div id="single-project">


    <!-- Start details for portfolio project 9 -->
    @foreach($thumbails as $thumbail)

    <div id="{{ $thumbail->id }}" class="toggleDiv row-fluid single-project">
        <div class="span6">
            <img src="{{ asset($thumbail->img.'') }}" alt="project 9">
        </div>
        <div class="span6">
            <div class="project-description">
                <div class="project-title clearfix">
                    <h3>{{ $thumbail->tittle1 }}</h3>
                    <span class="show_hide close">
                        <i class="icon-cancel"></i>
                    </span>
                </div>
                <div class="project-info">
                    <div>
                        <span>Cliente</span>{{ $thumbail->client }}</div>
                        <div>
                            <span>Fecha</span>{{ $thumbail->date }}</div>
                            <div>
                                <span>Etiqueta</span>{{ $thumbail->categorie->name }}</div>
                                <div>
                                    <span>Link</span>{{ $thumbail->link }}</div>
                                </div>
                                <p>{{ $thumbail->paragraph }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach                                                     
                    <!-- End details for portfolio project 9 -->
                    <ul id="portfolio-grid" class="thumbnails row">

                        @foreach($thumbails as $thumbail)

                        <li class="span4 mix {{ $thumbail->id_categorie }}">
                            <div class="thumbnail">
                                <img src="{{ asset($thumbail->img.'') }}" alt="project 1">
                                <a href="#single-project" class="more show_hide" rel="#{{ $thumbail->id }}">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>{{ $thumbail->tittle2 }}</h3>
                                <p>{{ $thumbail->subtittle }}</p>
                                <div class="mask"></div>
                            </div>
                        </li>

                        @endforeach                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               

                    </ul>
                </div>
            </div>
        </div>