@extends('main')

@section('title', '| Homepage')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                              <!-- Slide Show -->
                  <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                          <li data-target="#myCarousel" data-slide-to="3"></li>
                          <li data-target="#myCarousel" data-slide-to="4"></li>
                          <li data-target="#myCarousel" data-slide-to="5"></li>
                          <li data-target="#myCarousel" data-slide-to="6"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox" style="border-radius: 5px; margin-bottom: 10px;">
                          <div class="item active">
                            <img src="{{ asset('images/Bran.jpg') }}" alt="Bran">
                          </div>

                          <div class="item">
                            <img src="{{ asset('images/Brasov.jpg') }}" alt="Brasov">
                          </div>

                          <div class="item">
                            <img src="{{ asset('images/Sibiu.jpg') }}" alt="Sibiu">
                          </div>

                          <div class="item">
                            <img src="{{ asset('images/Fagaras.jpg') }}" alt="Fagaras">
                          </div>

                          <div class="item">
                            <img src="{{ asset('images/CastelulCorvin.jpg') }}" alt="Brasov">
                          </div>

                          <div class="item">
                            <img src="{{ asset('images/Primavara.jpg') }}" alt="Sibiu">
                          </div>

                          <div class="item">
                            <img src="{{ asset('images/Magura.jpg') }}" alt="Fagaras">
                          </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>                 
                    </div> 
                      <h2 style="margin-top:10px">Go Visit Transylvania</h2>
                      <p class="lead">Veti gasi aici multe articole, fotografii si filmulete care va vor convinge sa vizitati Transilvania. </p> 
                </div>
            </div>
        </div> <!-- end of header .row -->

        <div class="row">
            <div class="col-md-8">

               @foreach($posts as $post)

                   <div class="post">
                       <h3>{{ $post->title }}</h3>
                       <img src="{{ asset('images/' . $post->image) }}" class="img-responsive" alt="Responsive image" height="50%" width="50%" style="float: left; border-radius: 5px; margin-right: 10px;">
                       <p>{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
                       <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                   </div>

                   <hr>   

               @endforeach  

            </div>

            <div class="col-md-3 col-md-offset-1">
                <h3>Vremea</h3>
                <div>
                  <a href="http://www.accuweather.com/en/ro/cluj-napoca/287713/weather-forecast/287713" class="aw-widget-legal">
                  <!--
                  By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
                  -->
                  </a><div id="awcc1475230579786" class="aw-widget-current"  data-locationkey="287713" data-unit="c" data-language="ro" data-useip="true" data-uid="awcc1475230579786"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
                </div>
                  <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v2.7&appId=451977038345065";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <br/>
                 <h3>Pagina de facebook</h3>
                <div class="fb-page" data-href="https://www.facebook.com/GoVisitTransylvania/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/GoVisitTransylvania/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/GoVisitTransylvania/">Go Visit Transylvania</a></blockquote>
                </div>  
            </div>
        </div>
@stop