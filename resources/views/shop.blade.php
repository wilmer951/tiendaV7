@extends('templetes.templete')

@section('content')

<!-- CONTENT HOME START-->

<div class="container">

<!-- SLIDER PAGE HOME START -->
@include('layouts.sliderfirst')
<!-- SLIDER PAGE HOME START -->


<div class="row mt-5">

    <div class="col col-lg-2 col-sm-12">

              <!-- IMPORT LEFTPANEL-->
                @include('layouts.leftpanel')
              <!-- IMPORT LEFTPANEL-->
    </div>


    <div class="ol col-lg-10 col-sm-12">
      
              <!-- VIEW PAGE SHOP-->
               

                <!-- IMPORT FEACTURES PRODUCTS-->
                @include('layouts.featuresItems')
                <!-- IMPORT FEACTURES PRODUCTS-->




              <!-- VIEW PAGE SHOP-->
    </div>


</div>

<!-- CONTENT HOME END-->






</div>
@endsection