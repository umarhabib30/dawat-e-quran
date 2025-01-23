@extends('user.layouts.app')
@section('content')
<!-- Carousel wrapper -->
<div id="carouselDarkVariant" class="carousel slide carousel-fade carousel-dark" data-mdb-ride="carousel">
    <!-- Inner -->
    <div class="carousel-inner">
        <!-- Dawat Training Service -->
        <div class="carousel-item active">
            <img src="{{ asset('assets/images/1.png') }}" class="w-100" alt="Dawat Training" />
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center text-center" style="color: white; height: 100%;">
                <h5 class="display-4" style="font-size: 2rem; color: white;">Dawat Training Programs</h5>
                <p class="lead" style="font-size: 1rem;">Our specialized training programs equip individuals with the necessary skills for effective Dawah, fostering understanding and spreading knowledge to diverse communities and societies.</p>
            </div>
        </div> 
    
        <!-- Counseling Services -->
        <div class="carousel-item">
            <img src="{{ asset('assets/images/4.png') }}" class="w-100" alt="Counseling Services" />
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center text-center" style="color: white; height: 100%;">
                <h5 class="display-4" style="font-size: 2rem; color: white;">Counseling Services</h5>
                <p class="lead" style="font-size: 1rem;">We offer both individual and group counseling services aimed at providing emotional support, mental wellness, and guidance to help individuals overcome life challenges and improve well-being.</p>
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
    // Initialize MDB carousel functionality
    const carousel = new mdb.Carousel(document.getElementById('carouselDarkVariant'));
</script>

<style>
    /* Center the text vertically and horizontally */
    .carousel-caption {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    /* Responsive font sizes and adjustments for carousel captions */
    @media (max-width: 768px) {
        .carousel-caption {
            width: 98%; /* Increase width */
            height: auto; /* Adjust height */
            
        }
        .carousel-caption h5 {
            font-size: 0.512rem; /* Further reduce font size */
            
            white-space: nowrap; /* Ensure single-line text */
        }
        .carousel-caption p {
            font-size: 0.875rem; /* Slightly smaller font size for paragraph */
            margin: 0.5rem 0;
        }
    }

    @media (min-width: 769px) and (max-width: 1200px) {
        .carousel-caption h5 {
            font-size: 1.75rem;
        }
        .carousel-caption p {
            font-size: 1.125rem;
        }
    }

    @media (min-width: 1201px) {
        .carousel-caption h5 {
            font-size: 2rem;
        }
        .carousel-caption p {
            font-size: 1.25rem;
        }
    }

    /* Ensure text remains clear and legible */
    .carousel-caption h5,
    .carousel-caption p {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
</style>
@endsection
