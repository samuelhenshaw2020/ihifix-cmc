
<nav class="navbar navbar-expand-sm  bg-white x-shadow sticky-top">
    <main class="container">
        <div >
            <?php include('sm-side-nav.php') ?>
            <a href="index.php" class="navbar-brand ">
                <img src="img/logo.png" alt="ihifix logo" width="90px">
            </a>
        </div>

        <div class="navbar-collapse collapse ml-2">
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="button is-white is-rounded  " href="shop.php">
                            <span class="x-font-500"> Shops</span>
                        </a>
                    </li>
                    <!-- <li class="nav-item pl-1">
                        <a class="button is-white is-rounded" href="services.php">
                            <span class="icon is-small d-sm-none">
                                <i class="fa fa-list-ul"></i>
                            </span>
                            <span class="x-font-500">Services</span>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>


        <div class="d-flex">

            <div class="control  has-icons-left d-none d-sm-inline">
                <span class="icon ">
                    <i class="fa fa-search  x-text-dark"></i>
                </span>
                <input class="input  is-normal is-rounded  " type="search"  placeholder="Search courses, programs...">
            </div>

            <button class="button is-white is-rounded">
                <span class="x-notification icon">
                    <img src="img/topnav/supermarket.svg" alt="cart" width="22px">
                    <span class="x-badge">3</span>
                </span>
                <span class="x-font-500 d-none d-sm-inline">Cart</span>
            </button>

            <div class="dropdown  is-right">
                <button class="button is-white is-rounded " data-toggle="dropdown">
                    <span class="icon ">
                        <img src="img/topnav/user.svg" alt="cart" width="22px">
                    </span>
                    <span class="x-font-500 d-none d-sm-inline">Account &nbsp;</span>
                    <i class="fa fa-angle-down font-weight-bold  x-text-dark "></i>
                </button>
                <div class="dropdown-menu text-center ">
                    <button class="btn btn-danger w-75 my-1 x-font-600 x-shadow">Login </button>
                    <a class="dropdown-item x-font-500  ">Create Account</a>
                    <a class="dropdown-item x-font-500 " href="#">My Orders</a>
                    <a class="dropdown-item x-font-500 " href="#">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item x-font-500 " href="#">Logout</a>
                </div>
            </div>

        </div>

    </main>
</nav>



<!-- FIXED BOTTOM NAVBAR -->
<nav class="fixed-bottom  bg-white py-2  d-sm-none x-shadow" style="z-index: 1000">

    <div class="d-flex justify-content-around my-auto lead">

            <a href="index.php" class="text-center" style="line-height: 7px">
                    <img src="img/navbar/home-run.svg" alt="" width="20px" class="d-block mx-auto">
                    <span style="font-size: 12px; font-weight: 500" class=" text-dark">Home</span>
            </a>

            <a href="shop.php" class="text-center" style="line-height: 7px">
                    <img src="img/navbar/store.svg" alt="" width="20px" class="d-block mx-auto">
                    <span style="font-size: 12px; font-weight: 500" class=" text-dark">Shops</span>
            </a>

            <a href="#" class="text-center" style="line-height: 7px">
                    <img src="img/navbar/product.svg" alt="" width="20px" class="d-block mx-auto">
                    <span style="font-size: 12px; font-weight: 500" class=" text-dark">Products</span>
            </a>


            <a href="services.php" class="text-center" style="line-height: 7px">
                    <img src="img/navbar/order.svg" alt="" width="20px" class="d-block mx-auto">
                    <span style="font-size: 12px; font-weight: 500" class=" text-dark">Services</span>
            </a>

            <a href="#" class="text" style="line-height: 7px">

                    <img src="img/navbar/search.svg" alt="" width="20px" class="d-block mx-auto">

                    <span style="font-size: 12px; font-weight: 500" class=" text-dark">Search</span>

            </a>

    </div>

</nav>
