@extends('admin.layouts.main')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/cdb.min.css" />
<script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/cdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/9d1d9a82d2.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
@section('content')


<main>
    <section>
{{--        <div class="card chart-container">--}}
{{--            <canvas id="chart1"></canvas>--}}
{{--        </div>--}}
        <div class="card chart-container">
            <canvas id="chart2"></canvas>
        </div>
    </section>
</main>
@endsection
@push('js')
    <script>
        const ctx2 = document.getElementById("chart2").getContext('2d');
        const myChart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar",
                    "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: 'Last week',
                    backgroundColor: 'rgba(161, 198, 247, 1)',
                    borderColor: 'rgb(47, 128, 237)',
                    // data: [300, 400, 200, 500, 800, 900, 200],
                    data: [
                        @foreach($monthly_sale as $item)
                            {{$item}},
                        @endforeach
                    ]
                }]

            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                        }
                    }]
                },
                plugins: {
                    legend: {
                        labels: {
                            usePointStyle: true,
                        },
                    }
                }
            },
        });
    </script>
@endpush
