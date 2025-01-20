@extends('user.layouts.app')
@section('content')
<!-- Carousel wrapper -->
<div id="carouselDarkVariant" class="carousel slide carousel-fade carousel-dark" data-mdb-ride="carousel" data-mdb-carousel-init>
    <!-- Indicators -->
   
  
    <!-- Inner -->
    <div class="carousel-inner">
      <!-- Single item -->
      <div class="carousel-item active">
        <img src="{{asset('assets/images/masjid (3).jpg')}}" class="d-block w-100" alt="Motorbike Smoke"/>
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
  
      <!-- Single item -->
      <div class="carousel-item">
        <img src="{{asset('assets/images/masjid (2).jpg')}}" class="d-block w-100" alt="Mountaintop"/>
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
  
      <!-- Single item -->
      <div class="carousel-item">
        <img src="{{asset('assets/images/masjid1.jpg')}}" class="d-block w-100" alt="Woman Reading a Book"/>
        <div class="carousel-caption d-none d-md-block">
          <h5 style="color: white">Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <!-- Inner -->
  
    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselDarkVariant" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselDarkVariant" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Carousel wrapper -->
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
<script>
   
import { Carousel, initMDB } from "mdb-ui-kit";

initMDB({ Carousel });
</script>
@endsection
