<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookKaro : Contact Us</title>
    <?php  require "components/links.php"; ?>
   
</head>
<style>

</style>
<body>
    <?php  require "components/header.php"; ?>

    <div class="my-5 px-4">
        <h2 class="fa-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="mt-3 text-center">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Sed doloribus nam totam. <br> Quia, consectetur debitis.
            Lorem ipsum dolor sit amet.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 px-4 mb-5 ">
               

                    <div class="bg-white rounded shadow p-4 ">
                    <iframe class="w-100 mb-4 rounded"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116921.23495665131!2d86.99427560000001!3d23.6835171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f71f0ea1022529%3A0xf888f7e7fd11cefe!2sAsansol%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1659590009192!5m2!1sen!2sin" height="320" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                       <a href="https://goo.gl/maps/Kn9vKpm4zYh8mwhg7" target=_blank class="d-line-block text-decoration-none text-dark mb-2"> <i class="bi bi-geo-alt-fill"></i> Asansol,West Bengal</a> 
                       <h5 class="mt-4">Call Us</h5>
                    <a href="tel:+919800166299" class="d-line-block mb-2 text-decoration-none text-dark"> <i
                            class="bi bi-telephone-fill"></i> +91 9800166299</a>
                    <br>
                    <a href="tel:+919800166299" class="d-line-block  text-decoration-none text-dark"> <i
                            class="bi bi-telephone-fill"></i> +91 8768565019</a>
                            <h5 class="mt-4">Email</h5>
                            <a  class="d-line-block mb-2 text-decoration-none text-dark" href="mailto:soumensmaji1990@gmail.com"> <i
                            class="bi bi-envelope-fill"></i> soumensmaji1990@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4 ">
               

                    <div class="bg-white rounded shadow p-4 ">
                    <form action="">
                        <h5>Send a Message</h5>
                        <div class="mt-3">
                            <label class="form-label " style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none" required>
                        </div>
                        <div class="mt-3">
                            <label class="form-label " style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none" required>
                        </div>
                        <div class="mt-3">
                            <label class="form-label " style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none" required>
                        </div>
                        <div class="mt-3">
                            <label class="form-label " style="font-weight: 500;">Message</label>
                            <textarea style="resize:none;" rows="5" class="form-control shadow-none" required></textarea>
                        </div>
                        <button type="submit"class="btn text-white custom-bg mt-3 col-lg-2 col-12">SEND</button>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>








    <?php include "components/footer.php"?>




</body>

</html>