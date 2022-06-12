@extends('layouts.store_app', ['title' => 'home page', 'current' => 1])
@section('content')
    <div class="container row">
      <div class="row">
        <div class="oneInfo mx-auto">
          <div class="dash-figure">
            {{ $order_count }}
          </div>
          <div class="dash-title">
            Total Orders
          </div>
        </div>
        <div class="oneInfo  mx-auto">
          <div class="dash-figure">
            {{ $delivered_count }}
          </div>
          <div class="dash-title">
            Orders Delivered
          </div>
        </div>
        <div class="oneInfo  mx-auto">
          <div class="dash-figure">
            {{ $product_count }}
          </div>
          <div class="dash-title">
            Products
          </div>
        </div>
        <div class="oneInfo mx-auto">
          <div class="dash-figure">
            {{ $cat_count }}
          </div>
          <div class="dash-title">
            Categories
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 mx-auto mt-3">
            <canvas id="myChart"></canvas>
        </div>
      </div>
        
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/chartjs/chart.js') }}"></script>

    <script>
       const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'Sales per month',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 5, 2, 20, 30, 45],
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };

  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );

    </script>
@endsection