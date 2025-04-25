<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hoteleriana | <?= $page_title ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- Data tables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />

        <!-- bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">

        <style>
            body{
                background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(/assets/img/auth-bg1.jpg);
                background-repeat: no-repeat;
                background-size: cover;

            }
        </style>
    </head>
    <body >

        <!-- ----------------- CONTENT STARTS ----------------------------- -->

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-2">
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
                        <button onclick="window.location.href='<?= base_url('admin/signup') ?>' " type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            
                        </button>
                        </div>

                    <?php } unset($_SESSION['status'], $_SESSION['color'], $_SESSION['icon']); ?>

                <div class="d-flex justify-content-center py-1">
                    <a href="#" class="d-flex align-items-center w-auto">
                    <img style="height: 60px" src="/assets/img/logo.png" alt="">
                    </a>
                </div><!-- End Logo -->

                <div class="card ">

                    <div class="card-body">

                    <div class=" pb-2">
                        <h5 class="card-title text-center pb-0 fs-4 fw-lighter">CREATE ACCOUNT</h5>
                    </div>


                    <form class="row g-3" action="<?= base_url('admin/signup') ?>" method="post">
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

                        <div class="col-md-4">
                            <label for="inputCity" class="form-label fw-lighter">Role</label>
                            <select name="role" class="form-select">
                                <option selected disabled>choose.....</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Nurse">Nurse</option>
                                <option value="Optician">Optician</option>
                                <option value="Pharmacist">Pharmacist</option>
                            </select>
                            <small class="text-danger fw-lighter"><?php echo form_error('role') ?></small>
                        </div>

                        <div class="col-6">
                            <label class="form-label fw-lighter">Email</label>
                            <input type="email" class="form-control" name="useremail" value="<?= set_value('useremail'); ?>">
                            <small class="text-danger fw-lighter"><?php echo form_error('useremail') ?></small>
                        </div>

                        <div class="col-6">
                            <label for="inputAddress2" class="form-label fw-lighter">Mobile No.</label>
                            <input type="tel" class="form-control" name="mob_number" value="<?= set_value('mob_number'); ?>">
                            <small class="text-danger fw-lighter"><?php echo form_error('mob_number') ?></small>
                        </div>

                        <div class="col-6">
                            <label class="form-label fw-lighter">Password</label>
                            <input type="password" class="form-control" name="password" value="<?= set_value('password'); ?>">
                            <small class="text-danger fw-lighter"><?php echo form_error('password') ?></small>
                        </div>

                        <div class="col-6">
                            <label for="inputAddress2" class="form-label fw-lighter">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" value="<?= set_value('confirm_password'); ?>">
                            <small class="text-danger fw-lighter"><?php echo form_error('confirm_password') ?></small>
                        </div>

                        <div class="col-12">
                            

                            <p class="float-start fw-lighter">Already have account? <a href="<?= base_url('admin') ?>" class="fw-bolder text-decoration-none">Login</a> </p>


                            <button type="submit" class="btn btn-outline-primary fw-lighter float-end px-4">Create</button>
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
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

        <!-- Popper JS for dropdowns and tooltips -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>