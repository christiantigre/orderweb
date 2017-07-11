<!DOCTYPE html>
<!--
* A Design by GraphBerry
* Author: GraphBerry
* Author URL: http://graphberry.com
* License: http://graphberry.com/pages/license
-->
<html lang="en">


@section('htmlheader')
@include('pagina.partials.main-header')
@show


<body>

    @include('pagina.partials.nav')

    <!-- End main navigation -->

    <!-- Start home section -->
    <div id="home">
        <!-- Start cSlider -->
        @include('pagina.partials.slider')
    </div>
    <!-- End home section -->
    <!-- Service section start -->
    <div class="section primary-section" id="service">
        @include('pagina.partials.container')
    </div>
    <!-- Service section end -->
    <!-- Portfolio section start -->
    @include('pagina.partials.footer')
    <!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="{{ url ('pagina/js/app.js') }}"></script>
</body>
</html>