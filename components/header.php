<nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">BookKaro</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="room.php">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="facilities.php">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="about.php">About</a>
                    </li>
                </ul>

                <form class="d-flex">

                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal"
                        data-bs-target="#LoginModal">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal"
                        data-bs-target="#SignupModal">
                        SignUp
                    </button>
                </form>
            </div>
        </div>
    </nav>

  <!-- modal login starts-->
  <div class="modal fade" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="LoginModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header ">
                        <h5 class="modal-title d-flex align-items-center"><i
                                class="bi bi-person-circle me-2 fs-3"></i>User Login</h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-envelope-fill"></i> Email address</label>
                            <input type="email" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label"><i class="bi bi-lock-fill"></i> Password</label>
                            <input type="password" class="form-control shadow-none" required>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="Submit" class="btn btn-dark shadow-none">Login <i
                                    class="bi bi-box-arrow-up-right"></i></button>
                            <a href="javascript:void(0)" class="text-secondary text-decoration-none">Forgot
                                Password?</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- Modal Ends login -->



    <!-- Modal starts signup -->
    <div class="modal fade" id="SignupModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="SignupModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header ">
                        <h5 class="modal-title d-flex align-items-center"><i
                                class="bi bi-person-plus-fill me-2 fs-3"></i>User SignUp</h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge rounded-pill mb-3 text-wrap lh-base bg-light text-dark"> <span
                                class="fw-bolder">Note:</span> <span class="text-danger">Your Details
                                Must Match with your ID(Aadhar Card, Passport,Driving Licence or other valid Govt Id)
                                that
                                will be required during Check-in</span> </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-person-fill"></i> Name</label>
                                        <input type="text" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="col-md-6 p-0">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-envelope-fill"></i> Email</label>
                                        <input type="email" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-telephone-fill"></i> Phone
                                            Number</label>
                                        <input type="number" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="col-md-6 p-0">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-image"></i> Picture</label>
                                        <input type="file" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="col-md-12 p-0">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-geo-alt-fill"></i> Address</label>
                                        <textarea type="file" class="form-control shadow-none" rows="1"
                                            required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-geo-alt-fill"></i> Pincode</label>
                                        <input type="number" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="col-md-6 p-0">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-calendar3"></i> Date of Birth</label>
                                        <input type="date" class="form-control shadow-none" required>
                                    </div>
                                </div>

                                <div class="col-md-6 ps-0 mb-3">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-lock-fill"></i> Password</label>
                                        <input type="password" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="col-md-6 p-0">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-lock-fill"></i> Confirm
                                            Password</label>
                                        <input type="password" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <button type="Submit" class="btn btn-dark shadow-none">Sign Up <i
                                            class="bi bi-cursor"></i></button>

                                </div>
                            </div>
                        </div>
                        <!-- 
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none" required>  
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="Submit" class="btn btn-dark shadow-none">Login</button>
                            <a href="javascript:void(0)"class="text-secondary text-decoration-none">Forgot Password?</a>
                        </div> -->
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- modal ends-->
