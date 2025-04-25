<?php echo validation_errors() ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="container mt-2">

        <!-- Notification alert -->
        <?php if($this->session->flashdata('status')){ ?>
            <div class="alert alert-<?= $this->session->flashdata('color')?> alert-dismissible fade show d-flex align-items-center mt-1" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-4"></i>
                <div>
                    <!-- Text coming from the flashed data -->
                    <strong> <?= $this->session->flashdata('status')?> </strong>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    
                </button>
            </div>

        <?php } unset($_SESSION['status'], $_SESSION['color'], $_SESSION['icon']); ?>



    <form class="row g-3 mt-5 pb-5 shadow-lg" style="" action="<?= base_url('sendmail') ?>" method="post">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="text" class="form-control" id="inputEmail4" name="useremail" value="<?= set_value('useremail'); ?>">
            <small class="text-danger fw-lighter"><?php echo form_error('useremail') ?></small>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Subject</label>
            <input type="text" class="form-control" id="inputPassword4" name="subject" alue="<?= set_value('subject'); ?>" >
            <small class="text-danger fw-lighter"><?php echo form_error('subject') ?></small>
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Message</label>
            <textarea class="form-control" name="message" rows="3"></textarea>
            <small class="text-danger fw-lighter"><?php echo form_error('message') ?></small>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Subscribe</button>
        </div>
    </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>


  </body>
</html>