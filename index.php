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


    <!-- body -->

    <section class="has-background-white">
        <div class="p-2">
            <div class=" side-container d-flex my-auto text-center  ">

                    <div class="card border-0">
                        <a href="#" class="text-center mr-2 " style="line-height: 15px; min-width: 65px">
                                <img src="img/cmc/1.jpg" alt="" width="120px" class="d-block mx-auto">
                                <span style="font-size: 11.5px; font-weight: 500" class=" text-dark">All Category</span>
                        </a>
                    </div>

                   
            </div>
        </div>
    </section>




    <?php include('includes/footer.php'); ?>