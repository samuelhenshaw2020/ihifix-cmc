<?php
    include('includes/header.php');
?>
</head>
<body class="has-background-light" >


    <?php 
        include('includes/top-nav.php');
        include('includes/navbar.php');
    ?>

    <main class="container">
        <?php include('includes/index-category-sort.php');?>
    </main>



    <!-- TOP HEADER WITH IMAGES AND CAROUSEL -->
    <section class="container  ">
        <main class="row ">

            <div class="col-md ">
                <?php include('includes/index-slide-image.php'); ?>
            </div>

            <div class="col-md-3 ">
                <figure class="figure">
                    <img src="img/cmc/top-right-box/BSB-stay-safe.gif" class="figure-img  m-0 img-fluid rounded" alt="...">
                </figure>

                <figure class="figure ">
                    <img src="img/cmc/top-right-box/FS-bsb-2.jpg" class="figure-img m-0 img-fluid rounded" alt="...">
                </figure>
                
            </div>
        
        </main>
    </section>
    

    <section>
        
    </section>

    
    


    <!-- BEST SElLERS PRODUCTS -->
    <section class="has-background-white container">
        <div class="p-2">
            <p class="x-font-500">Best seller Product</p>
            <div class=" side-container d-flex my-auto text-center  ">
                   
                    <div class="card border-0 cont" >
                        <span class="tag is-danger is-light x-font-700 px-1 ">-30%</span> <!-- % off -->
                        <a href="#" class="text-center mr-2 " style="line-height: 15px; min-width: 65px">
                                <figure class="image is-128x128">
                                    <img src="img/cmc/2.png" alt="" class="d-block mx-auto">
                                </figure>
                                <span style="font-size: 12px; font-weight: 500" class=" text-dark">Dell 350 with man</span>
                        </a>
                    </div>

                    <div class="card border-0 cont" >
                        <span class="tag is-danger is-light x-font-700 px-1 ">-30%</span> <!-- % off -->
                        <a href="#" class="text-center mr-2 " style="line-height: 15px; min-width: 65px">
                                <figure class="image is-128x128">
                                    <img src="img/cmc/3.jpg" alt="" class="d-block mx-auto">
                                </figure>
                                <span style="font-size: 12px; font-weight: 500" class=" text-dark">Dell 350 with man</span>
                        </a>
                    </div>

                    <div class="card border-0 cont" >
                        <span class="tag is-danger is-light x-font-700 px-1 ">-30%</span> <!-- % off -->
                        <a href="#" class="text-center mr-2 " style="line-height: 15px; min-width: 65px">
                            <figure class="image is-128x128">
                                <img src="img/cmc/1.jpg" alt=""  class="d-block mx-auto">
                            </figure>
                                <span style="font-size: 12px; font-weight: 500" class=" text-dark">Dell 350 with man</span>
                        </a>
                    </div>

                    <div class="card border-0 cont" >
                        <span class="tag is-danger is-light x-font-700 px-1 ">-30%</span> <!-- % off -->
                        <a href="#" class="text-center mr-2 " style="line-height: 15px; min-width: 65px">
                            <figure class="image is-128x128">
                                <img src="img/cmc/6.png" alt=""  class="d-block mx-auto">
                            </figure>
                                <span style="font-size: 12px; font-weight: 500" class=" text-dark">Dell 350 with man</span>
                        </a>
                    </div>

                   
            </div>
        </div>
    </section>




    <!-- FOOTER -->
    <?php include('includes/footer.php'); ?>