<div id="ReportDiv" class="text-center">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card shadow mb-2">
                <div class="card-body">
                    <canvas id="myChart1" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card shadow">
                <div class="card-body">
                    <div class="animated zoomIn">
                        <div> <img src="{{ asset('img/pdf.png') }}" width="50%" class="mb-3"></div>
                        <button class="btn btn-info btn-sm pap" style="font-size: 13px">Print All Products</button>
                        <h6>
                            <small class="text-muted ml-2">{{ date("m/d/y")}}</small>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card shadow">
                <div class="card-body">
                    <div class="animated zoomIn">
                        <div> <img src="{{ asset('img/doc.png') }}" width="50%" class="mb-3"></div>
                        <button class="btn btn-info btn-sm pap1" style="font-size: 13px">Print Out of Stock</button>
                        <h6>
                            <small class="text-muted ml-2">{{ date("m/d/y")}}</small>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var ctx = document.getElementById('myChart1').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Sales report by 2021',
                data: [12, 30, 3, 5, 12, 10],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>