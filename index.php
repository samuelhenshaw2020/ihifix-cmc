
<?php include('includes/index-header.php') ?>

<div class="bg-light">
<section class="container-fluid   bg-anime px-sm-3 pt-4 " ng-controller="searchCtrl">
         <main class="container">
            <main class="pb-2 pt-5 px-sm-5  mx-auto col-md " >
                <div class="text-center ">  
                    <h1 class="  text-danger  font-monserrat">
                        Get Online
                        
                    </h1>

                    <p class=" x-text-dark-light x-font-50 ">
                            Search for Businesses, products, Stores and services around...
                </p>

                </div>

                
            </main>

            
         </main>
        
         <div class="center-contain mx-auto">
                <div class="autocomplete d-flex has-background-white shadow-sm  border  " style="  ">
                            <input type="text" class="form-control  px-4 border-0 has-bakground-light" placeholder="Search.." 
                            onfocus="$('#loc').hide('slow')" ng-keyup="searchQuery($event)" style="padding-top: 28px; padding-bottom: 28px;border-radius: 30px">
                                <div class="text-center p-3  " ng-show="searching">
                                    <span class="spinner-border text-secondary spinner-border-sm" ></span>
                                </div>
                                <!-- 
                                <div class="small p-2 my-1 search-item" >
                                    <a href="#" class="nav-item">{{item.title}}</a>
                                </div> -->
                                <ul class="autocomplete-items list-group-flush  text-dark bg-white dropdown d-block listgroup" style="z-index:1200">
                                    <li class="list-group-item list-group-item-action"  ng-repeat="item in searchResult">
                                        <i class="fa fa-search"></i>
                                        &nbsp;
                                        {{item.title}}
                                    </li>
                                </ul>
                                

                    
                        
                        <div class="d-flex" ng-show="!searching">
                            <button class="button is-rounded has-background-ligh bg-ligt is-white my-auto px-2" onclick="$('#loc').toggle('fast')">
                                <img src="img/services/filter.svg"  width="35px"  style="opacity: 0.4" >
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
                <p class="small text-right lead x-text-dark mb-0">
                <img src="img/services/location.svg"  width="13px"   style="opacity: 0.5" ><span id="srch" style="text-transform: capitalize">Nigeria</span></p>
            </div>
      
 
</section>
<main class="x-bg-blu">
<main class=" center-contain mx-auto  ">
            
            <div class="index-show  " >
                <div class="card p-2 pt-3  ">
                    <img src="img/topnav/grocery-cart.svg"   class="m-auto " style="width: 45px"  >
                    <div class="card-body text-center p-1">
                    <span class="x-text-dark text-center small">Start</span>
                        <h5 class="mb-0 ">
                            <a href="store.php" class="x-text-danger card-link stretched-link   ">Shopping</a>
                        </h5>
                    </div>
                </div>

                <div class="card p-2 pt-3  d-flex ">
                    <img src="img/topnav/store-col.svg"   class="m-auto " style="width: 45px"  >
                    <div class="card-body text-center p-1">
                    <span class="x-text-dark text-center small">Find</span>
                        <h5 class="mb-0 ">
                            <a href="services-index.php" class=" x-text-danger card-link stretched-link   ">Business</a>
                        </h5>
                    </div>
                </div>

                <div class="card p-2 pt-3   ">
                    <img src="img/topnav/internet.svg"   class="m-auto " style="width: 50px"  >
                    <div class="card-body text-center p-1">
                    <span class="x-text-dark text-center small">Create</span>
                        <h5 class="mb-0 ">
                            <a href="website.php" class=" x-text-danger card-link stretched-link   ">Website</a>
                        </h5>
                    </div>
                </div>

                <div class="card p-2 pt-3   ">
                    <img src="img/topnav/plus-user.svg"   class="m-auto " style="width: 50px"  >
                    <div class="card-body text-center p-1">
                    <span class="x-text-dark text-center small">List my</span>
                        <h5 class="mb-0 ">
                            <a href="store.php" class=" x-text-danger stretched-link card-link   ">Service</a>
                        </h5>
                    </div>
                </div>
                
                
            </div>
            <br>
        </main>

</main>         


</div>



 

<!-- HOW IHIFIX WORK -->






<!-- FOOTER -->



<?php include('includes/footer.php'); ?>
<style>


</style>

<script>
document.body.onscroll = function(){
 
if(window.scrollY > 100){
    $('.index-nav').addClass('bg-light');
}

if(window.scrollY < 100){
    $('.index-nav').removeClass('bg-light');
}
}
</script>
<script>
var app = angular.module('App', []);
app.controller('searchCtrl', function($scope, $http){
    
    $scope.searching = false;
    $scope.searchResult = []

    $scope.searchQuery = function(event){
        if(event.target.value == ''){
            $scope.searchResult = [];
        }

        if(event.keyCode == 13 || event.keyCode == 8){
            return; 
        }

        $scope.debounce($scope.initSearch, 500);
    }

    let inDebounce;
    $scope.debounce = function(func, delay){
        clearTimeout(inDebounce)
        inDebounce = setTimeout(() => func.apply(this, null), delay);
    }

    $scope.initSearch = function(){
        $scope.searching = true;
        $http({
            method : "GET",
            url : "https://jsonplaceholder.typicode.com/todos",
        }).then(
        function success(res){
            $scope.searchResult = res.data;
            $scope.searching = false;
        },

        function error(err){
            $scope.searching = false;

        });
    }
})
</script>