
<section class="p-4">
    <div class="card" style="margin-bottom: 7%">
        <?php //var_dump($bookings_list); ?>
        <div class="card-header d-flex justify-content-between align-items-center">

            <div class="card-title d-flex justify-content-between align-items-center">
                <span style="border-radius: 2px;" class="text-left bg-danger p-2 fw-bolder text-light">AVAILABLE BOOKINGS</span>

                    <!-- <a style="border-radius: 2px;" href="" class="text-white text-decoration-none text-right bg-success fw-bolder p-2"><i class="bi bi-plus-circle-fill fw-bold me-2"></i>ADD</a> -->

            </div>
        </div>
        <div class="card-body">
            <table class="table tabledata table-responsive" id="datatable1">
                <thead>
                    <tr>
                        <th classs="text-center">First_Name</th>
                        <th classs="text-center">Last_Name</th>
                        <th classs="text-center">Email</th>
                        <th classs="text-center">Phone_No</th>
                        <th classs="text-center">Room_type</th>
                        <th classs="text-center">Charge</th>
                        <th classs="text-center">Checkin</th>
                        <th classs="text-center">checkout</th>
                        <th classs="text-center">Today</th>
                        <th classs="text-center">status</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($bookings_list as $booking): ?>
                        <tr>
                            <td class="text-secondary"><?= $booking['first_name']; ?> </td>
                            <td class="text-secondary"><?= $booking['last_name']; ?> </td>
                            <td class="text-secondary"><?= $booking['email']; ?> </td>
                            <td class="text-secondary"><?= $booking['phone_number']; ?> </td>
                            <td class="text-secondary"><?= $booking['room_type']; ?> </td>
                            <td class="text-secondary">$<?= $booking['charge']; ?> </td>
                            <td class="text-secondary"><?= date('d M, Y', strtotime($booking['check_in'])); ?> </td>
                            <td class="text-secondary"><?= date('d M, Y', strtotime($booking['check_out'])); ?> </td>

                            <td class="text-secondary"><?= date('d-m-Y'); ?> </td>
                            <td class="text-secondary">
                                <?php 
                                    // check if today's the checkout date is less than today
                                    echo (strtotime($booking['check_out']) >= strtotime(date('Y-m-d')) )? 'Active' : 'Closed' ;
                                    ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</section>