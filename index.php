
<?php include('includes/index-header.php') ?>

        <section class="container-fluid p-1 bg-white " >
       
            <main class="container py-5 center-container mx-auto">
                <div class="text-center">
                   <p>
                   <a href="index.php" class="navbar-brand ml-3 ">
                            <img src="img/logo.png" alt="ihifix logo" width="150px">
                    </a>
                   </p>
                    <p class=" lead x-text-dark ">
                        Search for Businesses, products, Stores and services around...
                    </p>

                    
                </div>
                
                <div class=" d-flex has-background-ligt shadw-sm  border  ">
                    <input type="text" class="input py-4 border-0 is-rouned has-bakground-light" placeholder="Search.."  onfocus="$('#loc').hide('slow')">
                    <div class="d-flex" >
                        <button class="button is-rounded has-background-ligh bg-ligt is-white my-auto px-2" onclick="$('#loc').toggle('fast')">
                            <img src="img/services/location.svg"  width="35px"  style="opacity: 0.5" >
                        </button>
                        <select class="form-control px-1       my-auto has border-0  x-text-dark x-font-500 " onchange="$('#srch').html($('#loc').val())"  id="loc" style="font-size: 14px; display: none; width: 100px" >
                            <option value="Nigeria">Nigeria</option>
                            <option value="Abia">Abia</option>
                            <option value="Nigeria">Adamawa</option>
                            <option value="Nigeria">Nigeria</option>
                        </select>
                    </div>
                </div>
                            
                <p class="small text-right lead x-text-dark"><img src="img/services/location.svg"  width="13px"   style="opacity: 0.5" ><span id="srch">Nigeria</span></p>
            </main>
         
        </section>


        <section class="container ">
                <main class=" center-container mx-auto">
                    
                    <div class="index-show" >
                        <div class="card pt-1">
                            <img src="img/topnav/shopping-cart.svg"   class="m-auto " style="width: 50px"  >
                            <div class="card-body text-center">
                                <span class="x-text-dark text-center small">Start</span>
                                <p class="lead x-font-500 "><a href="store.php" class="stretched-link card-link x-text-dark-bold">Shopping</a></p>
                                <span>with ease</span>
                                
                            </div>
                        </div>

                        <div class="card pt-1">
                            <img src="img/navbar/search-run.svg"   class="m-auto " style="width: 50px"  >
                            <div class="card-body text-center">
                                <span class="x-text-dark text-center small">Find</span>
                                <p class="lead x-font-500 x-text-dark-bold"><a href="services.php" class="stretched-link card-link x-text-dark-bold">Businesses</a></p>
                                <span>Near you</span>
                            </div>
                        </div>

                        <div class="card pt-1">
                            <img src="img/topnav/internet.svg"   class="m-auto " style="width: 50px" >
                            <div class="card-body text-center">
                                <span class="x-text-dark text-center small">Create a</span>
                                <p class="lead x-font-500 x-text-dark-bold">Websites</p>
                                <span>Now</span>
                            </div>
                        </div>

                        <div class="card pt-1">
                            <img src="img/topnav/plus-user.svg"   class="m-auto "  style="width: 50px">
                            <div class="card-body text-center">
                                <span class="x-text-dark text-center small">Get</span>
                                <p class="lead x-font-500 x-text-dark-bold">Online</p>
                                <span>Today</span>
                            </div>
                        </div>
                        
                    </div>
                </main>
        </section>
        <br>
         
        
        <!-- HOW IHIFIX WORK -->
        <section class=" has-background-light ">
            <div class=" container  py-sm-4">
                <div class="row">
                <div class="col-md px-0">
                        <video width="100%" height="240" controls>
                            <source src="video/intro.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="col-md p-3 text-center text-sm-left">
                        <h1 class="x-font-500 text-center display-4 text-sm-left ">Take your Business, Hobbies and Products to the Public </h1>
                        <p class=" lead x-text-dark d-none d-sm-inline">Discover the joy on harnessing the digital space with  Ihifix. Over billions of potential customers are waiting</p>
                        <button class="button btn-white  is-rouned x-font-500  shadow-sm mt-1  is-large ">
                            <span class="mr-2">Get Started</span>
                            <i class="fa fa-chevron-right has-text-danger  fa-lg "></i>
                        </button>
                        </div>
                </div>
            </div>
        </section>
        <br>




       <!-- FOOTER -->
       <br>
  
   
  
  <?php include('includes/footer.php'); ?>
    
   
    