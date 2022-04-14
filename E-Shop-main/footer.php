<footer class=" text-dark mt-5 bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2 class=" fw-bold">Shopping</h2>
                <p class="fw-light ">Shopping is currently one of the most trusted online and offline Mobile and Gadget store in our country.</p>
                <a href="" class="mx-2"> <i class="fa fa-facebook fa-lg text-white"></i></a>
                <a href="" class="mx-2"> <i class="fa fa-instagram fa-lg text-white"></i></a>
                <a href="" class="mx-2"> <i class="fa fa-linkedin fa-lg text-white"></i></a>
                <a href="" class="mx-2"> <i class="fa fa-youtube fa-lg text-white"></i></a>

            </div>

            <div class="col-md-3 mt-2">
                <h5 class=" text-uppercase">Usefull Links</h5>
                <ul class="list-group">

                    <a class='text-decoration-none  my-1 footer-item' href="<?php echo $hostname; ?>">Home</a>
                    <a class='text-decoration-none  my-1 footer-item' href="all_products.php">All Products</a>
                    <a class='text-decoration-none  my-1 footer-item' href="latest_products.php">Latest Products</a>
                    <a class='text-decoration-none  my-1 footer-item' href="popular_products.php">Popular Products</a>

                </ul>
            </div>

            <div class="col-md-3 mt-2">
                <h5 class=" text-uppercase">Contact Us</h5>

                <ul class="list-group ">
                    <i class="fa fa-location-arrow fa-sm text-light"> <span class="fs-6 fw-bold text-light">Address</span></i>
                    <p class="fs-6 lh-sm">Uttara, Dhaka</p>

                    <i class="fa fa-phone fa-sm text-light"> <span class="fs-6 fw-bold text-light">Phone</span></i>
                    <p class="fs-6">+8801638137520</p>

                    <i class="fa fa-envelope fa-sm text-light"> <span class="fs-6 fw-bold text-light">Email</span></i>
                    <p class="fs-6 lh-sm">shopping@gmail.com</p>
                </ul>
            </div>
            <div class="col-md-3 mt-2">
                <h5 class="text-uppercase">NewsLetter</h5>

                <p>Enter your email below and get informed of our offers, campaigns, new products time to time!</p>
                <input type="text" class="form-control" placeholder="shopping@gmail.com">
                <button class="btn btn-sm btn-danger mt-2 text-uppercase">Subscribe</button>
            </div>



        </div>


    </div>
    <hr>
    <div class=" py-3 d-flex  justify-content-center align-items-center   fs-5">
        <span>Copyright &copy; 2022 | Created by <a class="text-decoration-none text-light" href="https://www.facebook.com/salman.fci" target="_blank">Md. Abu Salman</a></span>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="js\jquery-1.10.2.min.js" type="text/javascript"></script>
<!-- <script src="js\bootstrap.min.js"></script> -->



<script src="js\actions.js"></script>

<!--okzoom Plugin-->
<script src="js/okzoom.min.js" type="text/javascript"></script>

<script>
    $(document).ready(function() {

        $('#product-img').okzoom({
            width: 200,
            height: 200,
            scaleWidth: 800
        });


    });
</script>

</body>

</html>