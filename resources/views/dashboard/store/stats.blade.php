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
      <div class="row mt-3">
        <div class="col-md-6 mx-auto mt-3">
            <canvas id="myChart"></canvas>
        </div>
        <div class="col-md-6 mx-auto mt-3">
          <canvas id="myChart2"></canvas>
      </div>
      </div>
        
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/chartjs/chart.js') }}"></script>


    <?php 
    $one = "<script>
      const dates = [
        ";
        foreach ($numOfProductsByDay as $row) {
          $one  = $one ."'". $row->date . "',";
        }
        $one = $one."
      ]
      </script>
      ";
      echo $one;
    ?>

    <?php 
    $one2 = "<script>
        const nums = [
          ";
          foreach ($numOfProductsByDay as $row) {
            $one2  = $one2 . $row->num.",";
          }
          $one2 = $one2 . "
        ]
        </script>
        ";
        echo $one2;
    ?>

    <script>

  const data = {
    labels: dates,
    datasets: [{
      label: 'Products per Day',
      backgroundColor: '#6f42c1',
      borderColor: '#6f42c1',
      data: nums,
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



        <?php 
        $one3 = "<script>
          const dates2 = [
            ";
            foreach ($numOfOrdersByDay as $row) {
              $one3  = $one3 . $row->date . ",";
            }
            $one3 = $one3."
          ]
          </script>
          ";
          echo $one3;
        ?>

        <?php 
        $one4 = "<script>
            const nums2 = [
              ";
              foreach ($numOfOrdersByDay as $row) {
                $one4  = $one4 . $row->num.",";
              }
              $one4 = $one4 . "
            ]
            </script>
            ";
            echo $one4;
        ?>

        <script>

        const data2 = {
        labels: dates2,
        datasets: [{
          label: 'Orders per Day',
          backgroundColor: '#6f42c1',
          borderColor: '#6f42c1',
          data: nums2,
        }]
        };

        const config2 = {
        type: 'line',
        data: data2,
        options: {}
        };

        const myChart2 = new Chart(
        document.getElementById('myChart2'),
        config2
        );

  </script>
@endsection
