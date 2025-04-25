<section class="p-4">
    <div class="card" style="margin-bottom: 7%">
        <?php //var_dump($bookings_list); ?>
        <div class="card-header">

            <div class="card-title d-flex justify-content-between align-items-center">
                <span style="border-radius: 2px;" class="text-left bg-danger p-2 fw-bolder text-light">AVAILABLE ROOMS</span>

                    <a style="border-radius: 5px;" href="" class="text-white text-decoration-none text-right bg-success fw-bolder p-2"><i class="bi bi-plus-circle-fill fw-bold me-2"></i>ADD ROOM</a>

            </div>
        </div>
        <div class="card-body">
            <table class="table tabledata table-responsive" id="datatable1">
                <thead>
                    <tr>
                        <th classs="text-center">Room_Num</th>
                        <th classs="text-center">Type</th>
                        <th classs="text-center">Description</th>
                        <th classs="text-center">Num_of_people</th>
                        <th classs="text-center">Price($)</th>
                        <th classs="text-center">Image</th>
                        <th classs="text-center">Available</th>
                        <th classs="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($rooms_list as $room): ?>
                        <tr>
                            <td class="text-secondary "><?= $room['room_number']; ?> </td>
                            <td class="text-secondary"><?= $room['type']; ?> </td>
                            <td class="text-secondary" id="displayShortText"><?= $room['description']; ?> </td>
                            <td class="text-secondary text-center"><?= $room['num_of_people']; ?> </td>
                            <td class="text-secondary text-center">$<?= $room['price']; ?> </td>
                            <td class="text-secondary text-center"><?= $room['image'];  ?> </td>
                            <td class="text-secondary text-center"><?= $room['rooms_available'];  ?> </td>
                            <td class="text-secondary text-center">

                              <!-- <i class="bi bi-three-dots-vertical text-secondary"></i> -->
                              <div class="dropdown d-flex justify-content-center align-content-center">
                                
                                <i class="bi bi-three-dots-vertical text-secondary"  style="font-size: x-large;" data-bs-toggle="dropdown"></i>

                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" style="z-index: 1">

                                  <li class="dropdown-header text-center" style="background-color: gree">
                                    <a href="" class="dropdown-item d-flex align-items-center" data-bs-toggle="tooltip" data-bs-title="Edit Room">
                                      <i class="bi bi-pencil-fill me-2 text-secondary fw-bold"></i>
                                      <span class="text-secondary fw-bold">Edit</span>
                                    </a>

                                    <a href="" class="dropdown-item d-flex align-items-center" data-bs-toggle="tooltip" data-bs-title="View Room">
                                      <i class="bi bi-eye-fill me-2 text-secondary"></i>
                                      <span class="text-secondary fw-bold">View</span>
                                    </a>

                                    <a href="" class="dropdown-item d-flex  align-items-center" data-bs-toggle="tooltip" data-bs-title="Delete Room">
                                      <i class="bi bi-trash-fill me-2 text-secondary"></i>
                                      <span class="text-secondary fw-bold text-center">Delete</span>
                                    </a>
                                  </li>

                                </ul>
                              </div>



                              <!-- <a href="" class="text-decoration-none text-secondary me-2"><i class="bi bi-eye-fill"></i></a>

                              <a href="" class="text-decoration-none text-success me-2"><i class="bi bi-pencil-square"></i></a>

                              <a href="" class="text-decoration-none text-danger me-2"><i class="bi bi-trash-fill"></i></a> -->
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
