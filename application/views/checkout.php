

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


        <h2>Welcome to checkout page</h2>
        
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