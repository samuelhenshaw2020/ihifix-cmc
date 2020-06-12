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




    <section class="has-background-white  container px-0 p-sm-2">
        <div class="p-2">
            

        </div>
    </section>




    <!-- FOOTER -->
    <br>
    <?php include('includes/footer.php'); ?>