
<?php include('includes/index-header.php') ?>

        <section class="container-fluid  x-bg-blue bg-anime p-sm-5 pt-3" style="background-image: url('img/worldmap'); position: relative" >
            <img src="img/1.png" alt="" style="position: absolute; bottom: 0px; left: -30%;; opacity: 0.2">
            <div class="row" >

                 <div class="col-md-3 p-0">
                     <!-- <img src="img/jenifer.png" alt=""> -->
                 </div>

                 <main class="py-5 center-container mx-auto col-md">
                    <div class="text-center ">
                        <h1 class=" text-light x-font-700" style="">
                            Get <strong class="text-danger display-3 x-font-700">Online

                        </strong>and make the most of the <strong class="text-danger display-4 x-font-700">Digital</strong> Space
                        </h1>  
                    </div>
                    <br>
                    <p class=" x-text-dark-light x-font-50 ">
                                Search for Businesses, products, Stores and services around...
                            </p>
                        
                    <div class=" d-flex has-background-white shadw-sm  border  " style="border-radius: 10px">
                    
                            <input type="text" class="input py-4 border-0 is-rouned has-bakground-light" placeholder="Search.." style="border-radius: 10px"  onfocus="$('#loc').hide('slow')">
                            <div class="d-flex" >
                                <button class="button is-rounded has-background-ligh bg-ligt is-white my-auto px-2" onclick="$('#loc').toggle('fast')">
                                    <img src="img/services/location.svg"  width="35px"  style="opacity: 0.4" >
                                </button>
                                <select class="form-control px-1       my-auto has border-0  x-text-dark x-font-500 " onchange="$('#srch').html($('#loc').val())"  id="loc" style="font-size: 14px; display: none; width: 100px" >
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="abia">Abia</option>
                                    <option value="adamawa">Adamawa</option>
                                    <option value="akwa Ibom">Akwa Ibom</option>
                                    <option value="anambra">Anambra</option>
                                </select>
                            </div>
                            
                    </div>

                  
                                    
                    <p class="small text-right lead x-text-dark">
                    <img src="img/services/location.svg"  width="13px"   style="opacity: 0.5" ><span id="srch" style="text-transform: capitalize">Nigeria</span></p>
                </main>
            <div class="col-md-3"></div>
            </div>
         
        </section>


        <section class="container py-4">
                <main class=" center-containe mx-auto ">
                    
                    <div class="index-show  " >
                        <div class="card pt-1  ">
                            <img src="img/topnav/supermarket.svg"   class="m-auto " style="width: 50px; opacity: 0.1"  >
                            <div class="card-body text-center">
                                <span class="x-text-dark text-center small">Start</span>
                                <h4 class="mb-0 ">
                                    <a href="store.php" class="stretched-link text-dark card-link  font-weight-bold ">Shopping</a>
                                </h4>
                                <span class="x-text-dark text-center small">with ease</span><br>
                                <button class="button is-danger   is-rounded   w-100 mt-2">Start</button>

                                
                            </div>
                        </div>

                        <div class="card pt-1">
                            <img src="img/navbar/search-run.svg"   class="m-auto " style="width: 50px; opacity: 0.1"  >
                            <div class="card-body text-center">
                                <span class="x-text-dark text-center small">Find</span>
                                <h4 class="mb-0"><a href="services.php" class="stretched-link text-dark card-link  font-weight-bold">Business</a></h4>
                                <span class="x-text-dark text-center small">Near you</span><br>
                                <button class="button is-danger  is-rounded   w-100 mt-2">Find</button>
                            </div>
                        </div>

                        <div class="card pt-1">
                            <img src="img/topnav/internet.svg"   class="m-auto " style="width: 50px; opacity: 0.1" >
                            <div class="card-body text-center">
                                <span class="x-text-dark text-center small">Create a</span>
                                <h4 class="mb-0"><a href="services.php" class="stretched-link text-dark card-link  font-weight-bold">Website</a></h4>
                                <span class="x-text-dark text-center small">Now</span><br>
                                <button class="button is-danger   is-rounded   w-100 mt-2">Create</button>

                            </div>
                        </div>

                        <div class="card pt-1">
                            <img src="img/topnav/plus-user.svg"   class="m-auto "  style="width: 50px; opacity: 0.1">
                            <div class="card-body text-center">
                                <span class="x-text-dark text-center small">Get</span>
                                <h4 class="mb-0"><a href="services.php" class="stretched-link text-dark card-link  font-weight-bold">Online</a></h4>
                                <span class="x-text-dark text-center small">Today</span><br>
                                <button class="button is-danger   is-rounded   w-100 mt-2">Learn </button>

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
                        <h1 class="x-font-400 text-center display-4 text-sm-left  ">Take your Business, Hobbies and Products to the Public </h1>
                        <p class=" lead x-text-dark d-none d-sm-inline">Discover the joy on harnessing the digital space with  Ihifix. Over billions of potential customers are waiting</p>
                        <button class="button btn-white  is-rouned x-font-500  shadow-sm mt-1  is-large ">
                            <span class="mr-2">Learn more</span>
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
  <style>
      
  </style>

  <script>
     document.body.onscroll = function(){
         
        if(window.scrollY > 300){
            $('.index-nav').addClass('x-bg-blue');
        }

        if(window.scrollY < 300){
            $('.index-nav').removeClass('x-bg-blue');
        }
     }
  </script>