@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

<section class="pt-7">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-md-start text-center py-6">
        <h1 class="mb-4 fs-9 fw-bold">En BBVA llevamos el metaverso <br class="d-none d-xl-block" />más cerca de ti...</h1>
        
      </div>
      <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="{{ asset('/img/m.jpg') }}" alt="" /></div>
    </div>
  </div>
</section>

   <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="pt-5 pt-md-9 mb-6" id="feature">

          <div class="bg-holder z-index--1 bottom-0 d-none d-lg-block" style="background-image:url();opacity:.5;">
          </div>
          <!--/.bg-holder-->
  
          <div class="container">
            <h1 class="fs-9 fw-bold mb-4 text-center"> Descubre las funciones de LoinMonde...</h1>
            <div class="row">
              <div class="col-lg-4 col-sm-6 mb-2"> 
                <h4 class="mb-3">Promociona tus productos</h4>
                <p class="mb-0 fw-medium text-secondary">Crea tu tienda en el metaverso</p>
              </div>
              <div class="col-lg-4 col-sm-6 mb-2"> 
                <h4 class="mb-3">LLega a más vendedores</h4>
                <p class="mb-0 fw-medium text-secondary">El marketing y publicidad son nuestro objetivo</p>
              </div>
              <div class="col-lg-4 col-sm-6 mb-2"> 
                <h4 class="mb-3">Aprende con el metaverso Educativo</h4>
                <p class="mb-0 fw-medium text-secondary">Diseñado para los pequeños.</p>
              </div>
            </div>
            <div class="text-center"><a class="btn btn-warning" href="#!" role="button">Ir a Metaverso</a></div><br>
            <div class="text-center"><a class="btn btn-warning" href="#!" role="button">Metaverso Educativo</a></div>
          
          
          </div><!-- end of .container-->
  
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->
  

  
  
  
       
@endsection
