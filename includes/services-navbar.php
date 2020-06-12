
<nav class="navbar navbar-expand-sm  bg-white x-shadow sticky-top">
    <main class="container">
        <div >
            <?php include('sm-side-nav.php') ?>
            <a href="index.php" class="navbar-brand d-none d-sm-inline">
                <img src="img/logo.png" alt="ihifix logo" width="90px">
            </a>
        </div>

     

        <div class=" mx-auto">

            <div class="control  has-icons-left ">
                <span class="icon ">
                    <i class="fa fa-search  x-text-dark"></i>
                </span>
                <input class="input  is-normal"  type="search"  placeholder="Search courses, programs...">
            </div>

        </div>

        <div>
                <ul class="navbar-nav">
                    <li class="nav-item d-none">
                        <a class="button is-white is-rounded  " href="shop.php">
                            <span class="x-font-500"> Shops</span>
                        </a>
                    </li>
                   
                    
                </ul>
        </div>

        


    </main>
</nav>



<!-- FIXED BOTTOM NAVBAR -->
<nav class="fixed-bottom  bg-white py-2  d-sm-none x-shadow" style="z-index: 1000">

    <div class="d-flex justify-content-around my-auto lead">

            <a href="services-index.php" class="text-center" style="line-height: 7px">
                    <img src="img/navbar/home-run.svg" alt="" width="20px" class="d-block mx-auto">
                    <span style="font-size: 12px; font-weight: 500" class=" text-dark">Home</span>
            </a>

            <a href="services.php" class="text-center" style="line-height: 7px">
                    <img src="img/navbar/store.svg" alt="" width="20px" class="d-block mx-auto">
                    <span style="font-size: 12px; font-weight: 500" class=" text-dark">Services</span>
            </a>

            <a href="services-add.php" class="text-center" style="line-height: 7px">
                    <img src="img/topnav/plus-services.svg" alt="" width="20px" class="d-block mx-auto">
                    <span style="font-size: 12px; font-weight: 500" class=" text-dark">Add</span>
            </a>

            <a href="services-search.php" class="text" style="line-height: 7px">
                    <img src="img/navbar/search.svg" alt="" width="20px" class="d-block mx-auto">
                    <span style="font-size: 12px; font-weight: 500" class=" text-dark">Search</span>
            </a>

    </div>

</nav>
