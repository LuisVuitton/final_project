<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Places</title>

 <link rel="stylesheet" href="/css/places.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">


</head>
<body>




        <div class="container">
            <div class="row">
                    <img class="logo "src="/img/logo.png" alt="">
                <div class="col-8 header">

                </div>
            </div>
        </div>

<!--button for changing map and cards -->
        <div class="wrap">
          		<a  href="/places/map" class="button">Map</a>
                    <a  href="/places" class="button2">Cards</a>
        	</div>



        <section class="tabs">

        <form id="tabs" action="" method="post">


       


            <a href="{{ route('places') }}">All places</a>

          
            <a href="{{ route('places', ['id' => 1]) }}">Best Views</a>

            <a href="{{ route('places', ['id' => 2]) }}">Outdoors &amp; Summer hangouts</a>

            <a href="{{ route('places', ['id' => 3]) }}">Hotels &amp; Hostels</a>

            <a href="{{ route('places', ['id' => 4]) }}">Art galeries</a>

            <a href="{{ route('places', ['id' => 5]) }}">Cultural centres</a>

            <a href="{{ route('places', ['id' => 6]) }}">Cinemas</a>

            <a href="{{ route('places', ['id' => 7]) }}">??</a>
            
        </form>
        </section>

<!--
    position:absolute


    display: flex;
    flex-wrap: wrap;
    align-items: flex-start
-->


    <div class="wrapper d-flex flex-row flex-wrap">

        @foreach($places as $place)

            <div class=" card [ is-collapsed ] ">
               <img class="imaj" src="" alt="">
                <div class="card__inner [ js-expander ]">

                    <span> {{$place['name']}}</span>
                    <i class="fa fa-folder-o"></i>

                </div>
                <div class="card__expander">
                    <i class="fa fa-close js-collapser"></i>
                    <div class="box">
                        <div class="left">
                                <div class="tab">{{$place['type']}}</div>
                                <span>{{$place['opening_hours']}}</span>
                                <span>{{$place['address']}}</span>

                            <div class="side">
                                <span><a href="">Show in map</a> </span>
                                <span><a href="">Show more<</a></span> 
                                                              
                                
                                <button onclick="likeHandler({{$place['id']}},this);" class="like" data-id="{{$place['id']}}">LIKE</button>  
                                <button onclick="dislikeHandler({{$place['id']}},this);" class="dislike" data-id="{{$place['id']}}">DISLIKE</button> 

                                <span id="like-count"></span>
                            
                              
                                <span><a href="/places/detail/{{ $place -> id }}">Show detail</a></span>
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


<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<script src="/js/places.js"></script>

<script>
    
/*-----------
LIKE FUNCTION
------------*/

function likeHandler(id, button){
    var likeButton = $(button);/*'.like[data-id='+id+']'); */
    if (likeButton.html() === 'LIKE'){
        likeButton.html("UNDO");
    } else if(likeButton.html() === 'UNDO'){
        likeButton.html('LIKE');
    } 
            
    $.ajax({
        "url" : "/like",
        "type" : "get",
        "data" : {
            "id": id
        }
    }).done(function(data) {
        alert("success");
    });
}

/*------------
UNDO LIKE
------------- 

function undoLikeHandler(id, button){
    var undoLikeButton = $(button); // ('.dislike[data-id='+id+']');
        if (undoLikeButton.html() == "UNDO"){
            undoLikeButton.html('LIKE');
        }
        $.ajax({
        "url" : "/undoLike",
        "type" : "get",
        "data" : {
            "id": id
        }
    }).done(function(data) {
        alert("success");
    });
}
*/ 
/*------------
DISLIKE FUNCTION
-------------*/        

function dislikeHandler(id, button){
    var dislikeButton = $(button); // ('.dislike[data-id='+id+']');
        if (dislikeButton.html() == 'DISLIKE'){
        dislikeButton.html("UNDO");
    }   else if(dislikeButton.html() == 'UNDO'){
        dislikeButton.html("DISLIKE");
    } 
            
    $.ajax({
        "url" : "/dislike",
        "type" : "get",
        "data" : {
            "id": id        
        }
    }).done(function(data) {
        alert("success");
    });
}

/*------------
UNDO DISLIKE
-------------   

function undoDislikeHandler(id, button){
    var dislikeButton = $(button); // ('.dislike[data-id='+id+']');
        if(dislikeButton.html() == 'UNDO'){
        dislikeButton.html("DISLIKE");
    }
            
    $.ajax({
        "url" : "/undoDislike",
        "type" : "get",
        "data" : {
            "id": id        
        }
    }).done(function(data) {
        alert("success");
    });
}
*/                                
                                    
</script>

</body>
</html>
