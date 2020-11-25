@extends('layouts.admin')

@section('content')
<style>
    .v-middle {
        padding-left: 25px;
    }

    .error {
        color: red;
    }

    .table>thead>tr>th,
    .table>tbody>tr>th,
    .table>tfoot>tr>th,
    .table>thead>tr>td,
    .table>tbody>tr>td,
    .table>tfoot>tr>td {
        color: #0000009e;

    }
</style>
<div class="container-fuild">
    <div class="row">
        <div class="col-sm-12">
            @if (Session::has('mess'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{{Session::get('mess')}}</strong>
            </div>
            {{Session::put('mess',null)}}
            @endif
        </div>
    </div>
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thống kê giao dịch
            </div>
            <div class="row w3-res-tb">

                <canvas id="myChart"></canvas>


                <script>
                    var ctx = document.getElementById('myChart');
                    // And for a doughnut chart
                    var myBarChart  = new Chart(ctx, {
                        type: 'bar',
                        data:   {
                            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                            datasets: [{
                                label: 'Biểu đồ doanh thu',
                                // barPercentage: 0.5,
                                // barThickness: 6,
                                // maxBarThickness: 8,
                                // minBarLength: 2,
                                data: [10, 20, 30, 40, 50, 60],
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
                            }],

                            
                        },
                        options: {
                            
                        }
                    });
           
                </script>
            </div>






        </div>

    </div>
    @endsection