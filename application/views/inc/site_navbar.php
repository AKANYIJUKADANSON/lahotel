
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
  id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand " href="">Hotel<span>eriana</span></a>
        <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#ftco-nav"
        aria-controls="ftco-nav"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a href="/" class="nav-link ">Home</a>
                </li>
                <li class="nav-item">
                <a href="<?= base_url('rooms') ?>" class="nav-link ">Our Rooms</a>
                </li>
                <li class="nav-item">
                <a href="<?= base_url('menu') ?>" class="nav-link ">Restaurant</a>
                </li>
                <!-- <li class="nav-item">
                <a href="/about" class="nav-link ">About Us</a>
                </li> -->
                <li class="nav-item">
                <a href="<?= base_url('blog') ?>" class="nav-link ">Blog</a>
                </li>
                <li class="nav-item">
                <a href="<?= base_url('gallery') ?>" class="nav-link ">Gallery</a>
                </li>
                <li class="nav-item">
                <a href="<?= base_url('contacts') ?>" class="nav-link ">Contact</a>
                </li>
                <li class="nav-item">
                <a href="/admin" class="nav-link  text-danger fw-bolder">Admin</a>
                </li>

                <li class="nav-item">
                <a href="<?= site_url('yimail') ?>" class="nav-link  text-danger fw-bolder">SendYimail</a>
                </li>
            </ul>
        </div>
    </div>
</nav>