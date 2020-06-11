<?php
    include('includes/header.php');
?>


<!-- BODY -->

<main  class=" container search-container  p-sm-2 my-2">
    <section class="p-2 has-background-white my-2">
        <div class="py-1 d-flex  ">

            <div class="control  has-icons-left  d-sm-none">
                <span class="icon ">
                    <i class="fa fa-search  x-text-dark"></i>
                </span>
                <input class="input  is-normal is-rounded  " type="search"  placeholder="Search courses, programs...">
            </div>
            <span class="small  my-auto lead x-text-dark d-none d-sm-inline x-font-500" >336 Results for “Tablet and Phone”</span>


           
            <div class="dropdown is-right ml-auto mr-3">
            <button class="button is-light "  data-toggle="dropdown" aria-haspopup="true" >
                <img src="img/services/filter.svg" alt="" width="20px" class="d-block mx-auto" style="opacity: 0.5" >
                 <span class="d-none d-sm-inline">
                    <span class="x-font-500">Sort: </span>
                    <span>&nbsp;All Result</span>
                 </span>
            </button>
            <div class="dropdown-menu" >
                <a class="dropdown-item" href="#">All Result</a>
                <a class="dropdown-item" href="#">Popular</a>
                <a class="dropdown-item" href="#">Recent Products</a>
                <a class="dropdown-item" href="#">Low to High price</a>
                <a class="dropdown-item" href="#">High to Low price</a>
            </div>
        </div>
            
        </div>
    </section>


   
</main>



<main class=" my-2 container">
        <div class="row ">
            <div class="col-md-3 d-none d-sm-inline"> 
                <?php include('includes/search-filter.php') ?>
             </div>
            <div class="col-md  p-0">
                <div class="search-show ">
                    <?php 
                        include('includes/search-product-list.php');
                        include('includes/search-product-list.php') ;
                        include('includes/search-product-list.php') ;
                        include('includes/search-product-list.php') ;
                        include('includes/search-product-list.php') ;
                        include('includes/search-product-list.php') ;
                    ?>
                </div>
            </div>
        </div>
</main>







  <!-- FOOTER -->
  <br>
  <?php include('includes/footer.php'); ?>
