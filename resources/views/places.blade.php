<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Places</title>
    <link rel="stylesheet" href="css/places.css">
    <link rel="stylesheet" href="js/places.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">
</head>
<body>
        <div class="container">
            <div class="row">
                    <img class="logo "src="img/logo.png" alt="">
                <div class="col-8 header">
                
                </div>
            </div>
        </div>

        <section class="tabs">

            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1">BEST VIEWS</label>

            <input id="tab2" type="radio" name="tabs">
            <label for="tab2">OUTDOOR & SUMMER HANGOUTS</label>

            <input id="tab3" type="radio" name="tabs">
            <label for="tab3">HOTELS & HOSTELS</label>

            <input id="tab4" type="radio" name="tabs">
            <label for="tab4">ART GALERIES</label>

            <input id="tab5" type="radio" name="tabs">
            <label for="tab5">CULTURAL CENTRES</label>

            <input id="tab6" type="radio" name="tabs">
            <label for="tab6">CINEMAS</label>

        </section>
        
    <div class="wrapper">
   

        @foreach($places as $place)

            <div class=" card [ is-collapsed ] ">
               <img class="imaj" src="" alt="">  
                <div class="card__inner [ js-expander ]">
                    
                    <span> {{$place['name']}}</span>
                    <i class="fa fa-folder-o"></i>
                    
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    <div class="box">
                        <div class="left">
                                <div class="tab">{{$place['type']}}</div>
                                <span>{{$place['opening_hours']}}</span>
                                <span>{{$place['address']}}</span>
                                
                            <div class="side">
                                <span><a href="">Show in map</a> </span>
                                <span><a href="">Show more<</a></span>    
                            </div>
                        </div>
                            <div class="desc">
                                <h2>{{$place['name']}}</h2>
                                <p>{{$place['description']}} </p>
                            </div>
                    </div>
                    
                </div>
            </div>
            @endforeach
    </div>
</body>
</html>