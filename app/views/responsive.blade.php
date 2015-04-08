<?php
    $BASE_URL = "http://www.regattanetwork.com/events/";
    $width_01 = 250;
    $width_02 = 1150;
?>


<!DOCTYPE html>
<html lang="en">

    {{--To ensure proper rendering and touch zooming, add the viewport meta tag: --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--For improved cross-browser rendering, we use Normaliz:--}}
    <link rel="stylesheet" href="css/normalize.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

<body>
    <div class="container">
        <div class="row clearfix">
            <div class="col-1">
                <img src="http://placehold.it/{{ $width_01 }}x150">
            </div>
            <div class="col-2">
                <img src="http://placehold.it/{{ $width_01 }}x150">
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-6">
                <img src="http://placehold.it/{{ $width_02 }}x150">
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-1"><p>col-1</p></div>
            <div class="col-1"><p>col-1</p></div>
            <div class="col-1"><p>col-1</p></div>
            <div class="col-1"><p>col-1</p></div>
            <div class="col-1"><p>col-1</p></div>
            <div class="col-1"><p>col-1</p></div>
        </div>
        <div class="row clearfix">
            <div class="col-2"><p>col-2</p></div>
            <div class="col-2"><p>col-2</p></div>
            <div class="col-2"><p>col-2</p></div>
        </div>
        <div class="row clearfix">
            <div class="col-3"><p>col-3</p></div>
            <div class="col-3"><p>col-3</p></div>
        </div>
        <div class="row clearfix">
            <div class="col-6"><p>col-6</p></div>
            <div class="col-6"><p>col-6</p></div>
        </div>

    </div>
</body>

</html>
