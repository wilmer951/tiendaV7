@extends('templetes.templete')

@section('content')

<!-- CONTENT HOME START-->



<div class="container">

  <!-- SLIDER PAGE HOME START -->
@include('layouts.sliderfirst')
<!-- SLIDER PAGE HOME START -->
<hr>
<div class="row mt-5">

    <div class="col col-lg-7 col-sm-12">

              <!-- FOR CONTACT-->

              <h3 class="text-center">GET IN TOUCH</h3>
            

              <form action="" class="formone mb-5">

               <div class="row mb-3">

                      <div class="col col-lg-6 col-sm-12">

                          <input type="text" class="form-control" placeholder="name">
                      </div>

                      <div class="col col-lg-6 col-sm-12">

                        <input type="email"  class="form-control" placeholder="email">
                    </div>

               </div>

               <div class="row mb-3">
                 <div class="col-12">
                  <input type="text" class="form-control" placeholder="subjet">
                 </div>
               </div>



               <div class="row mb-3">
                <div class="col-12">
                 <textarea class="form-control" placeholder="mensage"></textarea>
                </div>
              </div>


                <div class="row">

                  <div class="col-12">
                    <input type="submit" class="btn btnone" value="send">
                  </div>
                </div>

              </form>




              <!-- FOR CONTACT-->
    </div>


    <div class="ol col-lg-5 col-sm-12">
      
              <!-- VIEW PAGE Contact-->
               

                <h3 class="text-center">CONTACT INFO</h3>

                <hr>

                <div class="card mb-2">
                  <div class="card-body">
                      
            
                      <div class="">
                              <ul>
                              <li>Name</li>    
                              <li>Addres example</li>    
                              <li>Country</li>    
                              <li>City</li>    
                              <li>Mobile</li>    
                              <li>Fax</li>    
                              <li>Email</li>    
                              </ul> 
                          </div>    
              
                            

                          <h4 class="text-center">SOCIAL NETWORKING</h4>
                          <hr>

                          <div class="contenedor-redes-sociales">
                            <a class="facebook" href="https://www.facebook.com/FormandoLaWeb"><span class="cuadrado"><i class="fa fa-facebook"></i></span><span class="titulo">Facebook</span></a>
                        
                            <a class="twitter" href="https://www.twitter.com/FormandoLaWeb"><span class="cuadrado"><i class="fa fa-twitter"></i></span><span class="titulo">Twitter</span></a>
                        
                            <a class="gplus" href="https://plus.google.com/114090693030000856714"><span class="cuadrado"><i class="fa fa-google-plus"></i></span><span class="titulo">Google+</span></a>
                            </div>






                  </div>
              </div>



              <!-- VIEW PAGE Contact-->
    </div>


</div>

<!-- CONTENT HOME END-->






</div>
@endsection