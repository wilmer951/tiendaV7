@extends('templetes.templete')

@section('content')

<div class="container">


<!-- SLIDER PAGE HOME START -->
      @include('layouts.sliderfirst')
<!-- SLIDER PAGE HOME START -->


<hr><!--SEPARATE-->






<!-- CONTENT HOME START-->

<div class="row mt-5">

      <div class="col col-lg-2 col-sm-12">

                <!-- IMPORT LEFTPANEL-->
                  @include('layouts.leftpanel')
                <!-- IMPORT LEFTPANEL-->
      </div>


      <div class="ol col-lg-10 col-sm-12">
        
                <!-- IMPORT FEACTURES PRODUCTS-->
                  @include('layouts.featuresItems')
                <!-- IMPORT FEACTURES PRODUCTS-->
      </div>


  
</div>
<!-- CONTENT HOME END-->






</div>

    
@endsection