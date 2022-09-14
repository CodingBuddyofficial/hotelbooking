<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookKaro :About Us</title>
    <?php  require "components/links.php"; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

</head>
<style>
.box {
    border-top-color: var(--teal) !important;
}
</style>

<body>
    <?php  require "components/header.php"; ?>

    <div class="my-5 px-4">
        <h2 class="fa-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="mt-3 text-center">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Sed doloribus nam totam. <br> Quia, consectetur debitis.
            Lorem ipsum dolor sit amet.
        </p>
    </div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, incidunt corrupti non voluptatum
                    accusantium facere accusamus.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, voluptates magnam aperiam
                    perspiciatis reiciendis laboriosam nulla?
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/about.png" alt="" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">

                    <img src="images/about/hotel.png" width="140px" alt="">
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">

                    <img src="images/about/customers.png" width="140px" alt="">
                    <h4 class="mt-3">200+ CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">

                    <img src="images/about/rating.png" width="140px" alt="">
                    <h4 class="mt-3">150+ Reviews</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">

                    <img src="images/about/staff.png" width="140px" alt="">
                    <h4 class="mt-3">60+ Staffs</h4>
                </div>
            </div>

        </div>
    </div>
    <h3 class="my-5 fa-bold h-font text-center">MANAGEMENT TEAM</h3>
    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team.jpeg" class="w-100" alt="">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team.jpeg" class="w-100" alt="">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team.jpeg" class="w-100" alt="">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team.jpeg" class="w-100" alt="">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team.jpeg" class="w-100" alt="">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team.jpeg" class="w-100" alt="">
                    <h5 class="mt-2">Random Name</h5>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <?php include "components/footer.php"?>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });
    </script>


</body>

</html>