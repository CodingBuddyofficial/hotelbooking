<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookKaro -Home</title>
    <?php  require "components/links.php"; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  
</head>

<body>
 <?php  require "components/header.php"; ?>
    <!-- Swiper -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper mySwiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/crouser/1.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/crouser/2.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/crouser/3.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/crouser/4.jpg" class="w-100 d-block" />
                </div>
            </div>

        </div>
    </div>

    <!-- swiper ends -->
    <!-- <br><br> -->


    <!-- avability form -->
    <div class="container avability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow-lg p-4 rounded">
                <h5 class="mb-4 text-center">Check Booking Avability</h5>
                <form action="">
                    <div class="row align-items-end">
                        <div class="col-lg-3  mb-3">
                            <label class="form-label" class="font-weight: 500;">Check-In</label>
                            <input type="date" class="form-control shadow-none" required>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" class="font-weight: 500;">Check-Out</label>
                            <input type="date" class="form-control shadow-none" required>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" class="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">

                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" class="font-weight: 500;">Children</label>
                            <select class="form-select shadow-none">

                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Check</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Our Rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="">Single Rooms</h5>
                        <h6 class="mb-4">₹1400/Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">1 Room</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">1 Bathroom</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">2 Sofas</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">1 Balcony</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">Wifi</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">Televison</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">A.C</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">Room Service</span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">5 Adults</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">4 childrens</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">

                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-evenly mb-2">

                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="">Delux Rooms</h5>
                        <h6 class="mb-4">₹1400/Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">1 Room</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">1 Bathroom</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">2 Sofas</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">1 Balcony</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">Wifi</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">Televison</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">A.C</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">Room Service</span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">5 Adults</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">4 childrens</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">

                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-evenly mb-2">

                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="">Single Rooms</h5>
                        <h6 class="mb-4">₹1400/Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">1 Room</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">1 Bathroom</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">2 Sofas</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">1 Balcony</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">Wifi</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">Televison</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">A.C</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">Room Service</span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">5 Adults</span>
                            <span class="badge rounded-pill  text-wrap  bg-light text-dark">4 childrens</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">

                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-evenly mb-2">

                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >></a>
            </div>
        </div>
    </div>

    <!-- Our Facilities -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px" alt="">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px" alt="">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px" alt="">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px" alt="">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px" alt="">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>
            </div>
        </div>
    </div>

    <!-- Testimonial -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/profile.svg" style="width:30px;height: 30px;">
                        <h6 class="m-0 ms-2">Random User 1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, error ea commodi porro nobis,
                        corrupti, blanditiis ullam voluptas perferendis</p>
                    <div class="rating">

                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>

                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/profile.svg" style="width:30px;height: 30px;">
                        <h6 class="m-0 ms-2">Random User 1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, error ea commodi porro nobis,
                        corrupti, blanditiis ullam voluptas perferendis</p>
                    <div class="rating">

                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>

                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/profile.svg" style="width:30px;height: 30px;">
                        <h6 class="m-0 ms-2">Random User 1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, error ea commodi porro nobis,
                        corrupti, blanditiis ullam voluptas perferendis</p>
                    <div class="rating">

                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>

                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More</a>
            </div>
    </div>
    <!-- Reaach US -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116921.23495665131!2d86.99427560000001!3d23.6835171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f71f0ea1022529%3A0xf888f7e7fd11cefe!2sAsansol%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1659590009192!5m2!1sen!2sin" height="320" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                    <a href="tel:+919800166299" class="d-line-block mb-2 text-decoration-none text-dark"> <i
                            class="bi bi-telephone-fill"></i> +91 9800166299</a>
                    <br>
                    <a href="tel:+919800166299" class="d-line-block  text-decoration-none text-dark"> <i
                            class="bi bi-telephone-fill"></i> +91 8768565019</a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="d-line-block mb-3 "> <span class="badge bg-light text-dark fs-6 p-2"> <i
                                class="bi bi-twitter"></i> Twitter
                        </span></a>
                    <br>
                    <a href="#" class="d-line-block mb-3 "> <span class="badge bg-light text-dark fs-6 p-2"> <i
                                class="bi bi-facebook"></i> Facebook
                        </span></a>
                    <br>
                    <a href="#" class="d-line-block  "> <span class="badge bg-light text-dark fs-6 p-2"> <i
                                class="bi bi-instagram"></i> Instagram
                        </span></a>
                    <br>

                </div>
            </div>
        </div>
    </div>



 <?php include "components/footer.php"?>

  

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

   
    <script>
    var swiper = new Swiper(".mySwiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    });
    </script>
    <script>
    var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });
    </script>
</body>

</html>