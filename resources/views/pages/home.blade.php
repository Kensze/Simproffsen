@extends('app')

@section('content')

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="img-responsive center-block slide_img" src="img/tjej.gif" alt="...">
      <div class="carousel-caption">
        Orca våtdräkter
      </div>
    </div>
    <div class="item">
      <img class="img-responsive center-block slide_img" src="img/kille.gif" alt="...">
      <div class="carousel-caption">
        Orca våtdräkter
      </div>
    </div>
    <div class="item">
      <img class="img-responsive center-block slide_img" src="img/cykel.gif" alt="...">
      <div class="carousel-caption">
        Orca triathlon
      </div>
    </div>
  
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<a href=".home_text"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
<p id="home_text">

  Hett just nu:
För första gången någonsin: våtdräkter utvecklade enbart för kvinnor! Kan tyckas märkligt att det här händer först 2015, men nu är det i alla fall verklighet. Självklart är Orca först ut. 
Modellerna 3.8 Enduro och Sonar finns nu speciellt framtagna för kvinnor. Vid skapandet av dräkterna valde Orca att börja om, lade herrmodellerna åt sidan och byggde flera, nya prototyper varpå man filmade,
 intervjuade och utvärderade. Nästan som vanligt tänker ni, men nej! Den här gången lär Orca kvinnor simma i prototyperna istället för män. Resultatet blev våtdräkter som har en perfekt passform och flytkraft som dessutom på riktigt är anpassad för kvinnokroppen. Du hittar dem i butiken. 
</p>



@stop
