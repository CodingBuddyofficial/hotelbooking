<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookKaro : Rooms</title>
    <?php  require "components/links.php"; ?>

</head>
<style>

</style>

<body>
    <?php  require "components/header.php"; ?>

    <div class="my-5 px-4">
        <h2 class="fa-bold h-font text-center">Our Rooms</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2" href="#">Filters</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size:18px;">CHECK AVAILBILITY</h5>
                                <label class="form-label">Check-In</label>
                                <input type="date" class="form-control shadow-none">
                                <label class="form-label">Check-Out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size:18px;">FACILITIES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Facility One</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Facility Two</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Facility Three</label>
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size:18px;">GUESTS</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Adults</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div class="">
                                        <label class="form-label">Children</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/2.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">1 Room</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">1 Bathroom</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">2 Sofas</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">1 Balcony</span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">Wifi</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">Televison</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">A.C</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">Room Service</span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">5 Adults</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">4 childrens</span>
                            </div>
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-3 text-center">
                        <h6 class="mb-4">₹1400/Night</h6>
                        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/2.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">1 Room</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">1 Bathroom</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">2 Sofas</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">1 Balcony</span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">Wifi</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">Televison</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">A.C</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">Room Service</span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">5 Adults</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">4 childrens</span>
                            </div>
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-3 text-center">
                        <h6 class="mb-4">₹1400/Night</h6>
                        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/2.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">1 Room</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">1 Bathroom</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">2 Sofas</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">1 Balcony</span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">Wifi</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">Televison</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">A.C</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">Room Service</span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">5 Adults</span>
                                <span class="badge rounded-pill  text-wrap  bg-light text-dark">4 childrens</span>
                            </div>
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-3 text-center">
                        <h6 class="mb-4">₹1400/Night</h6>
                        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <?php include "components/footer.php"?>




</body>

</html>