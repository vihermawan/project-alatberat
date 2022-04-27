@extends('layout.master')
@section('title')
Rekapitulasi
@endsection
@section('content')

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Rekapitulasi Produktivitas</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Rekapitulasi Kebutuhan Alat</h4>
                <div>
                    <canvas id="bar-chart" height="150"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
      <div class="card">
          <div class="card-body">
              <h4 class="card-title">Rekapitulasi Biaya Operasional</h4>
          </div>
      </div>
  </div>
  <div class="col-lg-6">
      <div class="card">
          <div class="card-body">
              <h4 class="card-title">Rekapitulasi Biaya Sewa</h4>
              <div>
                  <canvas id="bar-chart" height="150"></canvas>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
@push('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
$(function () {
	new Chart(document.getElementById("bar-chart"), {
		type: 'bar',
		data: {
      labels: ,
		datasets: [
			{
			label: "Resep baru",
            backgroundColor: [ 'rgba(97, 116, 213)',
            'rgba(97, 116, 213)',
            'rgba(97, 116, 213)',
            'rgba(97, 116, 213)',
            'rgba(97, 116, 213)',
            'rgba(97, 116, 213)',
            'rgba(97, 116, 213)',],
            borderWidth: 1,
			  data: {

        }
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  title: {
			display: true, 
		  }
		}
	});
});
</script>
@endpush