@extends('layouts.app')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
@section('content')

<!--carousel start -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/Capture1.PNG" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/lab2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/lab3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--carousel end-->

             <!-- footer start-->
             <footer  style="background-color:rgb(2, 2, 49)">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4 text-center text-md-left ">
                        
                        <div class="py-0">
                            <h3 class="my-4 text-white">About<span class="mx-2 font-italic text-warning ">Inquiry MS</span></h3>

                            <p class="footer-links font-weight-bold">
                                <a class="text-white" href="#">Home</a>
                                |
                                <a class="text-white" href="#">Contact</a>
                            </p>
                            <p class="text-light py-4 mb-4">&copy;Inquiry MS SUSL</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4 text-white text-center text-md-left ">
                        <div class="py-2 my-4">
                            <div>
                                <p class="text-white"> <i class="fa fa-map-marker mx-2 "></i>
                                        Sabaragamuwa University,
                                    Belihuloya,
                                    Sri Lanka</p>
                            </div>

                            <div> 
                                <p><i class="fa fa-phone  mx-2 "></i> 041-5467654</p>
                            </div>
                            <div>
                                <p><i class="fa fa-envelope  mx-2"></i><a href="mailto:inquiry@gmail.com">Inqyiry@gmail.com</a></p>
                            </div>  
                        </div>  
                    </div>
                    
                    <div class="col-md-4 text-white my-4 text-center text-md-left ">
                        <span class=" font-weight-bold ">About .... </span>
                        <p class="text-warning my-2" >We are trying to solve all kind of issues related to our laborateries and we are going to make labs more proper place.</p>
                        <div class="py-2">
                            <a href="#"><i class="fab fa-facebook fa-2x text-primary mx-3"></i></a>
                            <a href="#"><i class="fab fa-google-plus fa-2x mx-3"></i></a>
                            <a href="#"><i class="fab fa-twitter fa-2x text-info mx-3"></i></a>
                              
                        </div>
                    </div>
                </div>  
            </div>
            </footer>
    



@endsection


