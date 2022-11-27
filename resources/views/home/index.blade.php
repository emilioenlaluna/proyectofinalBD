@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

<section class="pt-7">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-md-start text-center py-6">
        <h1 class="mb-4 fs-9 fw-bold">Proyecto Final: Base de Datos</h1>
        
      </div>
      <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="{{ asset('/img/UAA-LOGO.png') }}" alt="" /></div>
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
            <div class="row">
              <div class="col-lg-4 col-sm-6 mb-2"> 
                <h4 class="mb-3">BASE DE DATOS</h4>
                <p class="mb-0 fw-medium text-secondary">Centro de Ciencias Básicas</p>
              </div>
              <div class="col-lg-4 col-sm-6 mb-2"> 
                <h4 class="mb-3">Departamento: SISTEMAS DE INFORMACIÓN</h4>
                <p class="mb-0 fw-medium text-secondary">INGENIERO EN COMPUTACIÓN INTELIGENTE
                </p>
              </div>
            </div>
            
          
          </div><!-- end of .container-->
  
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->
  

  
  
  
       
@endsection
