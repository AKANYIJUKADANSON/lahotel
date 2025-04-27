
<!-- DASHBOARD SECTION -->
<section class="px-4 pb-4">
    

    <div class="row justify-content-between mt-4 mx-1">
        <div class="col-lg-3 col-md-6 col-sm-12 mt-3 bg-light shadow-lg my-auto rounded-1">
            <div class="row">
                <div>
                    <a href="" class="d-flex text-decoration-none text-light p-4">
                        <div class="col-3 ">
                            <i class="ri-hotel-line fs-2 text-primary"></i>
                        </div>
                        <div class="col-9">
                            <h6 class="fw-bolder text-secondary">Bookings</h6>
                            <p class="fw-bold text-primary">50</p>
                        </div>
                    </a> 
                    
                    <div class="bg-primary mb-4 mx-4" style="height: 2px; margin-top: -3%;"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 mt-3 bg-light shadow-lg my-auto rounded-1">
            <div class="row">
                <div>
                    <a href="" class="d-flex text-decoration-none text-light p-4">
                        <div class="col-3 ">
                            <i class="ri-hotel-bed-line fs-1 text-warning"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="fw-bolder text-secondary">Rooms</h6>
                            <p class="fw-bold text-success">70</p>
                        </div>
                    </a> 
                    
                    <div class="bg-success mb-4 mx-4" style="height: 2px; margin-top: -3%;"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 mt-3 bg-light shadow-lg my-auto rounded-1">
            <div class="row">
                <div>
                    <a href="" class="d-flex text-decoration-none text-light p-4">
                        <div class="col-3 ">
                            <i class="ri-file-list-3-fill fs-2 text-danger"></i>
                        </div>
                        <div class="col-9">
                            <h6 class="fw-bolder text-secondary">Posts</h6>
                            <p class="fw-bold text-danger">100</p>
                        </div>
                    </a> 
                    
                    <div class="bg-danger mb-4 mx-4" style="height: 2px; margin-top: -3%;"></div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 10%">
        <div class="row mt-3 px-1" style="border: 2px solid blu">
            <div class="col-lg-6 col-sm-12 mb-4" style="border: 2px solid pin" >
                <div class="shadow-lg rounded" id="columngraph"></div>
            </div>
            <div class="col-lg-6 col-sm-12 row-cols-sm-1" style="border: 2px solid re" >
                <div class="shadow-lg rounded" id="piechart"></div>
            </div>
        </div>

        <div class="card mx-1 p-3">
            <div class="card-title">
                <p class="fw-bolder text-secondary">BOOKINGS</p>
            </div>
            <div class="col-lg-12">
                <table id="datatable1" class="table datatable">
                    <thead>
                        <tr>
                            <th>Fname</th>
                            <th>Lname</th>
                            <th>RM_Num</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>RM02</td>
                        </tr>

                        <tr>
                            <td>Lilly</td>
                            <td>Namulondo</td>
                            <td>RM09</td>
                        </tr>

                        <tr>
                            <td>Pamella</td>
                            <td>Akamumpa</td>
                            <td>RM01</td>
                        </tr>

                        <tr>
                            <td>Remmy</td>
                            <td>Manige</td>
                            <td>RM06</td>
                        </tr>

                        <tr>
                            <td>Christine</td>
                            <td>Lamera</td>
                            <td>RM04</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</section>


<script>
    Highcharts.chart('columngraph', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Available vs Booked'
        },
        xAxis: {
            categories: ['Gold', 'Silver', 'Luxury', 'Diamond'],
            crosshair: true,
            accessibility: {
                description: 'Countries'
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rooms'
            }
        },
        tooltip: {
            valueSuffix: ' (Rooms)'
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [
            {
                name: 'Available',
                data: [20, 10, 7, 14],
                color: 'green'
            },
            {
                name: 'Booked',
                data: [5, 21, 12, 8],
                color: 'orangered'
            }
        ]
    });
           
    Highcharts.chart('piechart', {
                chart: {
                    type: 'pie',
                },
                title: {
                    text: '2025 Bookings'
                },
                legend: {
                    enabled: true
                },
                
                plotOptions: {
                    series: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        borderRadius: 8,
                        dataLabels: [{
                            enabled: true,
                            distance: 20,
                            format: '{point.name}'
                        }, {
                            enabled: true,
                            distance: -13,
                            format: '{point.percentage:.0f}%',
                            style: {
                                fontSize: '0.9em'
                            }
                        }],
                        showInLegend: true
                    }
                },

                series: [{
                    name: 'Bookings',
                    colorByPoint: true,
                    innerSize: '75%',
                    data: [
                        {
                            name: 'Jan',
                            color: 'black',
                            y: 23.9
                        }, {
                            name: 'Feb',
                            y: 12.6
                        }, {
                            name: 'March',
                            y: 37.0
                        }, {
                            name: 'April',
                            y: 26.4
                        }, {
                            name: 'May',
                            y: 24.4
                        }
                    ]
                }]
            
            });


</script>

