@foreach($tittlesslides1 as $tittle1)
<div class="container">
    <!-- Start title section -->
    <div class="title">
        <h1>{{ $tittle1->tittle }}</h1>
        <!-- Section's title goes here -->
        <p>{{ $tittle1->paragraph }}</p>
        <!--Simple description for section goes here. -->
    </div>
    <div class="row-fluid">
        @foreach($demos as $demo)
        <div class="span4">
            <div class="centered service">
                <div class="circle-border zoom-in">
                    <img class="img-circle" src="{{ asset($demo->img.'') }}" alt="service 1">
                </div>
                <h3><a href="{{ $demo->link }}">{{ $demo->tittle }}</a></h3>
                <p>{{ $demo->paragraph }}</p>
            </div>
        </div>
        @endforeach        
    </div>
</div>
@endforeach