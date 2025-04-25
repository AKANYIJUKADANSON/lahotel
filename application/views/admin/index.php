<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotelerian | <?= $page_title ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- Data tables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />

        <!-- bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">

        <style>
            body{
                background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(assets/images/auth-bg.jpg);
                background-repeat: no-repeat;
                background-size: cover;

            }
        </style>
    </head>
    <body >

        <!-- ----------------- CONTENT STARTS ----------------------------- -->
        
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-1">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <!-- Notification alert -->
                    <?php if($this->session->flashdata('status')){ ?>
                        <div class="alert alert-<?= $this->session->flashdata('color')?> alert-dismissible fade show d-flex align-items-center mt-1" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-4"></i>
                        <div>
                            <!-- Text coming from the flashed data -->
                            <strong> <?= $this->session->flashdata('status')?>. </strong>
                        </div>
                        <button onclick="window.location.href='/pharma' " type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            
                        </button>
                        </div>

                    <?php } unset($_SESSION['status'], $_SESSION['color'], $_SESSION['icon']); ?>


                    <div class="d-flex justify-content-center pb-1">
                        <!-- <a href="#" class="d-flex align-items-center w-auto">
                        <img style="height: 60px" src="/assets/img/logo.png" alt="">
                        </a> -->
                    </div><!-- End Logo -->

                    <div class="card ">

                        <div class="card-body">

                        <div class=" pb-2">
                            <h5 class="card-title text-center pb-0 fs-4 fw-bold">ADMIN</h5>
                            <!-- <p class="text-center small">Enter your username & password to login</p> -->
                        </div>

                        <form class="row g-3" action="<?= base_url('admin/auth') ?>" method="post">

                            <div class="col-12">
                                <label for="yourUsername" class="form-label fw-lighter">Email</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" name="useremail" class="form-control" value="<?= set_value('useremail') ?> ">
                                </div>
                                <small class="text-danger fw-lighter"><?php echo form_error('useremail'); ?></small>
                            </div>

                            <div class="col-12">
                                <label for="yourPassword" class="form-label fw-lighter">Password</label>
                                <input type="password" name="password" class="form-control" value="<?= set_value('password') ?> ">
                                <small class="text-danger fw-lighter"><?php echo form_error('password'); ?></small>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100 fw-lighter fs-5" type="submit">Login</button>
                            </div>

                            <div class="col-12">
                                <a class="btn btn-info w-100 text-white fw-lighter fs-5" href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
                            </div>

                            <div class="col-12">
                                <p class="small mb-0 fw-lighter fs-6">Don't have account? <a href="<?= base_url('admin/create') ?> ">Create an account</a></p>
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