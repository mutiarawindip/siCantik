@extends('layouts.main')

@section('products')

    <div class="hero-wrap js-fullheight" style="background-image: url('pretty-gh-pages/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          	<div class="icon">
          		<a href="/" class="logo">
          			<span class="flaticon-flower"></span>
          			<h1>SiCantik</h1>
          		</a>
          	</div>
            <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Products</h1>
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>Products</span></p>
          </div>
        </div>
      </div>
    </div>

   <!--  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="/">SiCantik</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
            <li class="nav-item active"><a href="/products" class="nav-link">Product</a></li>
            <li class="nav-item"><a href="" class="nav-link">Articles</a></li>
            <li class="nav-item"><a href="" class="nav-link">Contact Us</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav> -->
    <!-- END nav -->
		
		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Work</h2>
            <p class="work-category">
            	<span class="px-2"><a href="#" class="active">All</a></span> 
            	<span class="px-2"><a href="#">Dry</a></span> 
            	<span class="px-2"><a href="#">Normal</a></span> 
            	<span class="px-2"><a href="#">Oily</a></span>
            	<span class="px-2"><a href="#">Sensitive</a></span>
            	<span class="px-2"><a href="#">T-Combination</a></span>
            	<!-- <span class="px-2"><a href="#">Serum</a></span> -->
            </p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="pretty-gh-pages/images/normal/wardah-2.jpg" class="img-fluid" alt="Facial Wash">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Facial Wash</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="pretty-gh-pages/images/normal/emina-5.jpg" class="img-fluid" alt="Cleanser">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Cleanser</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="pretty-gh-pages/images/normal/emina-2.jpg" class="img-fluid" alt="Toner">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Toner</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="pretty-gh-pages/images/work-4.jpg" class="img-fluid" alt="">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Serum</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="pretty-gh-pages/images/work-5.jpg" class="img-fluid" alt="">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Sunscreen</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="pretty-gh-pages/images/work-6.jpg" class="img-fluid" alt="">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Lip Scrub</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="pretty-gh-pages/images/work-7.jpg" class="img-fluid" alt="">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Lip Balm</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="pretty-gh-pages/images/dry/emina-3.jpg" class="img-fluid" alt="">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Mask</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="pretty-gh-pages/images/work-9.jpg" class="img-fluid" alt="">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Moisturizer</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>


  @endsection