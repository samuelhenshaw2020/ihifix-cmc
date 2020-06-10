<?php
    include('includes/header.php');

?>

<main class="container">
        <?php include('includes/index-category-sort.php');?>
</main>



    <!-- TOP HEADER WITH IMAGES AND CAROUSEL -->
    <section class="container  ">
        <main class="row ">

            <div class="col-md px-0">
                <?php include('includes/index-slide-image.php'); ?>
            </div>

            <div class="col-md-3 d-none d-sm-inline pr-1 ">
                <!--Images must have the dimension: 355 x 300-->
                <figure class="figure">
                    <img src="img/cmc/top-right-box/FS-bsb-2.jpg" class="figure-img m-0 img-fluid rounded" alt="...">
                </figure>

                <figure class="figure ">
                    <img src="img/cmc/top-right-box/FS-bsb-2.jpg" class="figure-img m-0 img-fluid rounded" alt="...">
                </figure>
                
            </div>
        
        </main>
    </section>
    



    
    


    <!-- BEST SELLERS PRODUCTS -->
    <section class="has-background-white container px-0 p-sm-2">
        <?php include('includes/best-seller.php') ?>
    </section>
        <br>


    <!-- TOP SERVICES -->
    <section class="has-background-white container px-0 p-sm-2">
         <?php include('includes/top-service.php') ?>
    </section>
    <br>




    
    <!-- PRODUCTS -->
    <section class="has-background-white container px-0 p-sm-2" >
        <?php include('includes/index-show-product.php') ?>
    </section>


    <!-- HOW IHIFIX WORK -->
    <section class="has-background-light  container  ">
        <div class="py-4 px-2 ">
             <h3 class="text-center  x-font-500">How Ihifix Work?</h3>
             <div class="d-flex justify-content-center">
                 <hr class="w-25">
             </div>
             <div class="row">
             <div class="col-md">
                    <video width="100%" height="240" controls>
                        <source src="video/intro.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                 </div>
                 <div class="col-md-5 text-center text-sm-left">
                     <h1 class="x-font-500 text-center text-sm-left ">Take your Business, Hobbies and Products to the Public </h1>
                     <p class=" lead x-text-dark">Discover the joy on harnessing the digital space with  Ihifix. Over billions of potential customers are waiting</p>
                     <button class="button is-success is-large x-font-700">Get Started</button>
                    </div>
                
             </div>
        </div>
    </section>
    <br>

    <section class="has-background-white  container px-0 p-sm-2">
        <div class="p-2">
            

        </div>
    </section>




    <!-- FOOTER -->
    <br>
    <?php include('includes/footer.php'); ?>