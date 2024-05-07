<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container-lg bg-body-secondary">
    <div class="text-center">Best Student IBI Kesatuan Prodi TI 2024</div>
    <?php
        // Sort the $data array by IPK in descending order before the loop
        usort($data, function($a, $b) {
          return $b['ipk'] <=> $a['ipk'];
        });
        $rank = 1;
        $totalStudents = count($data);
        $dataRemain = count($data);
        $colDeterminer = floor(count($data)/3);
      ?>
    @foreach($data as $student)
        <?php
          $colSize = (($dataRemain) / 3 >= 1 || $colDeterminer > 0) ? 'col-lg-3' : (($totalStudents % 3 == 2) ? 'col-lg-5' : 'col-lg-11');
        ?>
    @if($rank % 3 == 1)
    <div class="row">
    @endif
        <div class="d-flex {{ $colSize }} flex-lg-column justify-center align-items-center m-3 mx-auto {{ $rank == 1 ? 'bg-warning' : 'bg-white' }} rounded p-3">
          <div class="image bg-info rounded" style="height:100px; width:100px; border:1px solid black"></div>
          <div class="d-flex flex-column justify-content-between align-center text-center w-100 pb-4 mx-4 mx-lg-auto">
            <div class="d-flex flex-column align-items-start align-items-md-end align-items-lg-center ">
              <div class="fs-3 fw">{{$student['nama']}}</div>
              <div class="fs-6 fw">{{$student['npm']}}</div>
            </div>
            <div class="bg-danger-subtle d-flex flex-row justify-content-between text-center">
              <div>
                <div>{{$student['ipk']}}</div>
                <div>IPK</div>
              </div>
              <div>
                <div>{{$rank}}</div>
                <div>Rank</div>
              </div>
              <div>
                <div>{{$student['semester']}}</div>
                <div>Semester</div>
              </div>
            </div>
          </div>
        </div>
        @php
        if($rank % 3 == 0) $colDeterminer--;
        $rank++;
        $dataRemain--;
        @endphp
    @if ($rank % 3 == 1 || $loop->last)
    </div>
    @endif
    @endforeach
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
