@extends('layouts.main')

@section('products-detail')

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <div class="collapse navbar-collapse" id="ftco-nav">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/products">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Emina Creamy Milk</li>
              </ol>
            </nav>
          </div>
        </div>
    </nav>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Emina Creamy Milk</h2>
          </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <a href="/products-detail" class="work-entry">
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
        	<div class="col-md-4 ftco-animate" style="margin-top: 100px;">
        		<p><strong>Cleansing Lotion</strong></p>
                <b>IDR 23,000</b> 
                <p>A soft texture cleansing milk combined with Glycolic Acid helps to remove makeup and dirt gently without leaving oil residue and stripping skin moisture.</p>
        	</div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                
            </div>
        </div>
    	</div>
    </section>


  @endsection