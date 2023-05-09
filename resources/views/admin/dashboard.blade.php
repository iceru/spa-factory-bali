<x-app-layout>
    <div class="font-bold text-2xl text-secondary">
        Dashboard
    </div>
    <div class="my-6 w-full border-b border-gray-200"></div>
    {{-- <div class="grid lg:grid-cols-4 gap-4">
        <div class="bg-primary text-white p-4">
            <div class="text-xl font-semibold mb-2">
                Total View Today
            </div>
            <div class="text-5xl font-bold">

            </div>
        </div>
        <div class="bg-secondary text-white p-4">
            <div class="text-xl font-semibold mb-2">
                Total Unique View Today
            </div>
            <div class="text-5xl font-bold">

            </div>
        </div>
        <div class="bg-primary text-white p-4">
            <div class="text-xl font-semibold mb-2">
                Total View in 7 Days
            </div>
            <div class="text-5xl font-bold">
                {{ $views7 }}
            </div>
        </div>
        <div class="bg-secondary text-white p-4">
            <div class="text-xl font-semibold mb-2">
                Total View in 30 Days
            </div>
            <div class="text-5xl font-bold">
                {{ $views7 }}
            </div>
        </div>
    </div> --}}
    <h2 class="font-serif text-xl text-primary font-bold mb-6">Analytics for the last 7 Days</h2>
    <div class="charts">
        <div class="row align-items-center">
            <div>
                <div class="chart">
                    <canvas id="total_views" height=200 aria-label="Total Views" style="height: 300px !important"
                        role="img"></canvas>
                </div>
            </div>
            <div class="grid lg:grid-cols-2 mt-20">
                <div>
                    <table class="table table-clicks" id="tableViews">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Page</th>
                                <th>Pageviews</th>
                                <th>Visitors</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mostVisited as $item)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $item['pageTitle'] }}</td>
                                    <td>{{ $item['screenPageViews'] }}</td>
                                    <td>{{ $item['activeUsers'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="chart">
                        <canvas id="top_referrers" height=200 aria-label="Top Referrers" role="img"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // function userDevicesChart(data) {

        //     var primary = '#3A5A40'
        //     var secondary = '#588157';
        //     var blue = '#4c57d3';
        //     var pink = '#f186b0';
        //     debugger;
        //     var userDevices = {!! json_encode($userDevice) !!}
        //     if (data) {
        //         userDevices = data;
        //     }
        //     var type = [];
        //     var pageViews = [];
        //     userDevices.rows.forEach(element => {
        //         type.push(element[0]);
        //         pageViews.push(element[1]);
        //     });
        //     var ctxTr7 = document.getElementById("user_devices").getContext("2d");
        //     window.myUserDevices = new Chart(ctxTr7, {
        //         type: 'doughnut',
        //         data: {
        //             labels: type,
        //             datasets: [{
        //                 label: 'User Devices',
        //                 backgroundColor: [primary, secondary, blue, 'lightgrey', pink],
        //                 data: pageViews
        //             }]
        //         },
        //         options: {
        //             responsive: true,
        //             title: {
        //                 display: true,
        //                 text: 'User Devices'
        //             }
        //         }
        //     });
        // }

        function userTopReferrers(data) {
            debugger;
            const secondary = '#3A5A40'
            const primary = '#588157';
            const blue = '#4c57d3';
            const pink = '#f186b0';

            let topReferrers = {!! json_encode($topReferrers) !!}
            if (data) {
                topReferrers = data;
            }
            const type = [];
            const pageViews = [];
            topReferrers.forEach(element => {
                type.push(element.pageReferrer);
                pageViews.push(element.screenPageViews);
            });
            const trs = document.getElementById("top_referrers").getContext("2d");
            window.myTopReferrers = new Chart(trs, {
                type: 'bar',
                data: {
                    labels: type,
                    datasets: [{
                        label: 'Top Referrers',
                        backgroundColor: [primary, secondary, blue, 'lightgrey', pink],
                        data: pageViews
                    }]
                },
                options: {
                    elements: {
                        rectangle: {
                            borderWidth: 2,
                            borderColor: '#c1c1c1',
                        }
                    },
                    indexAxis: 'y',
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Top Referrers'
                    }
                }
            });
        }

        function totalVisitorsChart(data) {
            const primary = '#588157';
            const secondary = '#3A5A40'

            let total_visitors = {!! json_encode($totalVisitors) !!}
            if (data) {
                total_visitors = data;
            }
            total_visitors = total_visitors.sort((a, b) => (a.date > b.date) ? 1 : ((b.date > a.date) ? -1 : 0))
            const date = [];
            const pageViews = [];
            const visitors = [];
            total_visitors.forEach(element => {
                date.push($.datepicker.formatDate('dd M', new Date(element.date)))
                pageViews.push(element.screenPageViews);
                visitors.push(element.activeUsers);
            });
            const ctxTv7 = document.getElementById("total_views").getContext("2d");

            window.myTotalVisitors = new Chart(ctxTv7, {
                type: 'line',
                data: {
                    labels: date,
                    datasets: [{
                            label: 'Page Views',
                            backgroundColor: [primary],
                            data: pageViews,
                            tension: 0.4,
                            borderColor: primary,
                        },
                        {
                            label: 'Visitors',
                            backgroundColor: [secondary],
                            data: visitors,
                            tension: 0.4,
                            borderColor: secondary,
                        }
                    ]
                },
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Fetch Users'
                    },
                    scales: {
                        y: {
                            ticks: {
                                stepSize: 50
                            }
                        }
                    }
                }
            });
        }

        $(document).ready(function() {
            // userDevicesChart();
            totalVisitorsChart();
            userTopReferrers();
        });

        $('#filterClick').click(function(e) {
            e.preventDefault();
            var startValue = $('#start_date').val();
            var endValue = $('#end_date').val();

            if (startValue && endValue) {
                var start_date =
                    `${$.datepicker.formatDate("yy-mm-dd", new Date(startValue))} 00:00:00`;
                var end_date =
                    `${$.datepicker.formatDate("yy-mm-dd", new Date(endValue))} 23:59:59`;
                $('.loading').fadeIn();
                $.ajax({
                    type: "GET",
                    url: "/admin",
                    data: {
                        start_date,
                        end_date
                    },
                    success: function(response) {
                        window.myTotalVisitors.destroy();
                        window.myUserDevices.destroy();
                        window.myTopReferrers.destroy();
                        $('#dashboard_click').html(response.body);

                        $('#timeText').text(
                            `for ${$.datepicker.formatDate("dd-mm-yy", new Date(start_date))} until ${$.datepicker.formatDate("dd-mm-yy", new Date(end_date))}`
                        );
                        userDevicesChart(response.userDevices);
                        totalVisitorsChart(response.totalVisitors);
                        userTopReferrers(response.topReferrers);
                        $('.table-clicks').DataTable({
                            responsive: true,
                            buttons: [
                                'excelHtml5',
                                'csvHtml5',
                            ]
                        })
                        $('.loading').fadeOut();
                    }
                });
            } else {
                alert('Tanggal belum diinput')
            }


        });
    </script>
</x-app-layout>
