            
                  
                  
                  
                  
                  
                                 <!-- This is our header page of our E-commerce website. -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Store</title>

    <!-- Bootsrap CDN-->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
    crossorigin="anonymous"
    />

    <!-- Font Awesome CDN-->

    <script src="https://kit.fontawesome.com/b91c718bf2.js" crossorigin="anonymous"></script>

    <!-- Slick Slider -->

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- Custom Stylesheet-->

    <link rel="stylesheet" href="./../css/style.css"/>




</head>
<body>
    
  

    <!-- header-->

    <header>
        <div class="container"></div>
             <div class="row">
                        <div class="col-md-4 col-sm-12 col-12">
                            <div class="btn-group">
                                <button class="btn border dropdown-toggle my-md-4 my-2 text-white" 
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                >
                                GBP
                            </button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">ERU - Euro</a>                            
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 text-center">
                            <h2 class="my-md-3 site text-white">T-Zone Online Store </h2>
                        </div>
                        <div class="col-md-4 col-12 text-right">
                            <p class="my-md-4 header-links">
                                <a href="customer-login.php" class="px-2">Log In</a>
                                <a href="customer_register.php" class="px-1">Register</a>
                            </p>
                        </div>

             </div>

             <!-- This is our Navigation bar for our website.
                 nav bar code used from Bootstrap (Bootstrap.com)--> 

             <div class="container-fluid p-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white">
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item active">
                          <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                        </li>
                       
                        <li class="nav-item">
                          <a class="nav-link" href="collection.php">COLLECTION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">SHOP</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">ABOUT US</a>
                          </li>
                      </ul>
                    </div>

                    <div id="navbar-nav">
                        
                        </li>
                        <li class="nav-item" href="client_basket.php">
                            <a class="nav-link" href="client_basket.php"><img src="./../images/basketicon.png" alt="Basket icon" width= "auto"  height= "50px"></a>
                        </li>
                        <li>
                         
                        <!-------------------- Product search and recommemder ---->

                        <h2>Search for Products</h2>
        <div>
            <input type="text" id="SearchInput">
            <button id="SearchButton">Search</button>
        </div>
        
        <h4>Recommendations</h4>
        <div id="RecomendationDiv"></div>
        <script  type='module'>
            "use strict";

            //Import recommender class
            import {Recommender} from './../images/recommender.js';

            //Create recommender object - it loads its state from local storage
            let recommender = new Recommender();
            
            /* Set up button to call search function. We have to do it here 
                because search() is not visible outside the module. */
            document.getElementById("SearchButton").onclick = search;
            
            //Display recommendation
            window.onload = showRecommendation;
            
            //Searches for products in database
            function search(){
                //Extract the search text
                let searchText = document.getElementById("SearchInput").value;
                
                //Add the search keyword to the recommender
                recommender.addKeyword(searchText);
                showRecommendation();
                
                //#FIXME# PERFORM SEARCH FOR PRODUCTS
            }
            
            //Display the recommendation in the document
            function showRecommendation(){
                document.getElementById("RecomendationDiv").innerHTML = recommender.getTopKeyword();
            }
        </script>
                        </li>
                    </div>
                  </nav>
             </div>
             <!--- end of product and recommdation------>

    </header>

    <!-- /header-->