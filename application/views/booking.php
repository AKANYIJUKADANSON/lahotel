<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoteleriana | <?= $page_title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Data tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />

    <!------------------------ICONS----------------->
    <!-- Bootsrap icons -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" />
    <link rel="stylesheet" href="/assets/vendor/bootstrap-icons/bootstrap-icons.min.css" />
    <!-- remixicon -->
    <link rel="stylesheet" href="/assets/vendor/remixicon/remixicon.css" />
</head>
<body>
    


        <!-- ----------------- CONTENT STARTS ----------------------------- -->

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-2" style="background-color: #effae5;">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <!-- Notification alert -->
                    <?php if($this->session->flashdata('status')){ ?>
                        <div class="alert alert-<?= $this->session->flashdata('color')?> alert-dismissible fade show d-flex align-items-center mt-4" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-4"></i>
                        <div>
                            <!-- Text coming from the flashed data -->
                            <strong> <?= $this->session->flashdata('status')?>. </strong>
                        </div>
                        <button onclick="window.location.href='/pharma/signup' " type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            
                        </button>
                        </div>

                    <?php } unset($_SESSION['status'], $_SESSION['color'], $_SESSION['icon']); ?>

                <!-- <div class="d-flex justify-content-center py-1">
                    <a href="#" class="d-flex align-items-center w-auto">
                    <img style="height: 60px" src="/assets/img/logo.png" alt="">
                    </a>
                </div> -->

                <div class="card ">
                    <div class="card-header">
                        <div class=" pb-2">
                            <h5 class="card-title pb-0 fs-4 fw-normal">BOOKING FORM</h5>
                        </div>
                        <div class="row">
                            <div class="col-3" style="border: 2px solid re">
                                <center><img class="rounded" src="/assets/images/insta-3.jpg" alt="" width="100%" height="100%"></center>
                            </div>

                            <div class="col-9" style="border: 2px solid blu">
                                <div class="row">
                                    <div class="col-6 my-2" style="border: 1px solid re">
                                        <div class="form-control">
                                            <label class="me-4">Room Type:</label> <span class="text-dark fw-bolder"><?= $room_details['type']; ?></span>
                                        </div>
                                    </div>

                                    <div class="col-6 my-2" style="border: 1px solid blu">
                                        <div class="form-control">
                                            <label class="me-4">Number of persons: </label> <span class="text-dark fw-bolder"><?= $room_details['num_of_people']; ?></span>
                                        </div>
                                    </div>
                                </div>  


                                <div class="row">
                                    <div class="col-6 my-2" style="border: 1px solid blu">
                                        <div class="form-control">
                                            <label class="me-4">Charge: </label> <span class="text-dark fw-bolder">$<?= $room_details['price']; ?></span><span class="fw-lighter">(Per night)</span>
                                        </div>
                                    </div>

                                    <div class="col-6 my-2" style="border: 1px solid blu">
                                        <div class="form-control">
                                            <label class="me-4">Available Rooms: </label> <span class="text-dark fw-bolder"><?= $room_details['rooms_available']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-body">

                        <form class="row g-3" action="/book" method="post">
                            <!-- Hidden data about the room type -->

                            <input type="hidden" name="room_type" value="<?= $room_details['type']; ?>">
                            <input type="hidden" name="price" value="<?= $room_details['price']; ?>">
                            <input type="hidden" name="num_of_people" value="<?= $room_details['num_of_people']; ?>">

                            <!-- End of hiddendata -->
                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label fw-lighter">First Name</label>
                                <input type="text" name="fname" class="form-control" value="<?= set_value('fname'); ?>">
                                <small class="text-danger fw-lighter"><?php echo form_error('fname') ?></small>
                            </div>

                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label fw-lighter">Last Name</label>
                                <input type="text" name="lname" class="form-control" value="<?= set_value('lname'); ?>">
                                <small class="text-danger fw-lighter"><?php echo form_error('lname') ?></small>
                            </div>

                            <div class="col-4">
                                <label class="form-label fw-lighter">Email</label>
                                <input type="email" class="form-control" name="useremail" value="<?= set_value('useremail'); ?>">
                                <small class="text-danger fw-lighter"><?php echo form_error('useremail') ?></small>
                            </div>

                            <div class="col-3">
                                <label for="inputAddress2" class="form-label fw-lighter">Mobile No.</label>
                                <input type="tel" class="form-control" name="mob_number" value="<?= set_value('mob_number'); ?>">
                                <small class="text-danger fw-lighter"><?php echo form_error('mob_number') ?></small>
                            </div>

                            <div class="col-3">
                                <label for="inputCity" class="form-label fw-lighter">Country</label>
                                <select name="country" class="form-select">
                                    <option selected disabled>choose.....</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Rwanda">Rwanda</option>
                                </select>
                                <small class="text-danger fw-lighter"><?php echo form_error('country') ?></small>
                            </div>

                            <div class="col-2">
                                <label class="form-label fw-lighter">Number of Rooms</label>
                                <input type="number" class="form-control" name="num_of_rooms" value="<?= set_value('num_of_rooms'); ?>">
                                <small class="text-danger fw-lighter"><?php echo form_error('num_of_rooms') ?></small>
                            </div>

                            <div class="col-2">
                                <label class="form-label fw-lighter">Check In</label>
                                <input type="date" class="form-control text-success" name="checkin" value="<?= set_value('checkin'); ?>">
                                <small class="text-danger fw-lighter"><?php echo form_error('checkin') ?></small>
                            </div>

                            <div class="col-2">
                                <label for="inputAddress2" class="form-label fw-lighter">Checkout</label>
                                <input type="date" class="form-control text-danger" name="checkout" value="<?= set_value('checkout'); ?>">
                                <small class="text-danger fw-lighter"><?php echo form_error('checkout') ?></small>
                            </div>

                            <div class="col-12 mt-4 d-flex justify-content-end">
                                <button type="submit" class="btn btn-sm px-4 fs-5 btn-primary fw-lighter rounded me-4 float-end">BOOK</button>

                                <a href="/rooms" class="btn btn-danger btn-sm px-4 fs-5 fw-lighter rounded float-end ">CANCEL</a>
                            </div>

                        </form>

                    </div>
                </div>

                </div>
            </div>
            </div>

        </section>

        <!-- ----------------- CONTENT ENDS ----------------------------- -->




        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

        <!-- Popper JS for dropdowns and tooltips -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        
        <!-- Datatables.net -->
        <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>


</body>
</html>
