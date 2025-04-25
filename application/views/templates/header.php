<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hoteleriana | <?= $page_title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Data tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />


    <!-- -----------------SITE LINKS---------------- -->
    <!-- <link rel="stylesheet" href="/assets/css/open-iconic-bootstrap.min.css" />
		<link rel="stylesheet" href="/assets/css/animate.css" />

		<link rel="stylesheet" href="/assets/css/owl.carousel.min.css" />
		<link rel="stylesheet" href="/assets/css/owl.theme.default.min.css" />
		<link rel="stylesheet" href="/assets/css/magnific-popup.css" />

		<link rel="stylesheet" href="/assets/css/aos.css" />

		<link rel="stylesheet" href="/assets/css/ionicons.min.css" />

		<link rel="stylesheet" href="/assets/css/bootstrap-datepicker.css" />
		<link rel="stylesheet" href="/assets/css/jquery.timepicker.css" />

    <link rel="stylesheet" href="/assets/css/flaticon.css" />
		<link rel="stylesheet" href="/assets/css/icomoon.css" />
		<link rel="stylesheet" href="/assets/css/style.css" /> -->

    <!------------------------ICONS----------------->
    <!-- Bootsrap icons -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" />
    <link rel="stylesheet" href="/assets/vendor/bootstrap-icons/bootstrap-icons.min.css" />
    <!-- remixicon -->
    <link rel="stylesheet" href="/assets/vendor/remixicon/remixicon.css" />


    <style>
        .mHero {
            height: 78vh;
            left: 0;
            /* background-color: black; */
            margin-top: 11vh;
            /* padding-bottom: 18vh; */
            width: 100%;
            
        }

        .mHeader {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;
            left: 0;
            right: 0;
            height: 10vh;
            z-index: 1;
        }

        .mFooter{
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 10vh;
            background-color: black;
            color: white;
            text-align: center;
            left: 0;
            right: 0;
            z-index: 1;
        }

        .mFooter p{
          padding: 13px 0;
        }

        #displayShortText{
          --max-lines: 2;
          display: -webkit-box;
          overflow: hidden;
          -webkit-box-orient: vertical;
          -webkit-line-clamp: var(--max-lines);
          text-overflow: ellipsis;
          
        }


    </style>
  </head>
  <body style="background-color: #effae5;">

    <div class="mHero">
      <div class="mHeader">

          <div class="float-start d-flex justify-content-center align-items-center h-100">
            <h3 class="text-light fw-bolder ms-2 ">Hoteleriana</h3>

            <div class="canvastoggler mx-4" style="border: 2px solid gree">
              <span class="py-1 px-2 rounded border border-2 border-light"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <i class="bi bi-list fw-bolder  text-white"></i>
              </span>
            </div>
          </div>

        <div class="d-flex justify-content-center align-items-center h-100 float-end" style="border: 2px solid re; width: fit-content;">
            <div class="d-flex float-end" style="border: 2px solid ble">
              
              <div class="me-4" style="border: 2px solid blac">
                <i id="setFullScreenIcon" class="bi bi-arrows-fullscreen text-white fs-6  d-flex justify-content-center align-items-center h-100"></i>
              </div>

              <div class="dropdown float-end" style="z-index: 1">

                <div class="dropdown-toggle text-light me-4" data-bs-toggle="dropdown" aria-expanded="false" style="border: 1px solid whit;">
                  <span class="fs-5 fw-bolder me-2">Admin</span>
                  <i class="bi bi-person-circle fs-3"></i>
                </div>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile mt-1">
                <li class="dropdown-header text-center">
                  <h6 class="text-info">SKY 7</h6>
                  <span>Administrator</span>
                </li>

                <li>
                  <hr class="dropdown-divider">
                </li>

                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="/pharma/profile">
                      <i class="bi bi-person me-1"></i>
                      <span class="fw-lighter">My Profile</span>
                    </a>
                  </li>

                  <li>
                    <hr class="dropdown-divider">
                  </li>

                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="/pharma/settings">
                      <i class="bi bi-gear me-1"></i>
                      <span class="fw-lighter">Account Settings</span>
                    </a>
                  </li>

                  <li>
                    <hr class="dropdown-divider">
                  </li>


                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="<?= 'logout' ?>">
                      <i class="bi bi-box-arrow-right me-1"></i>
                      <span class="fw-lighter">Sign Out</span>
                    </a>
                  </li>

                </ul>

              </div>

            </div>
          </div>

      </div>

      <div class="content">
