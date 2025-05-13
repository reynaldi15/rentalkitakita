@extends('fragment.admin')

@section('content')
<h2>Dashboard</h2>

<div class="row mb-4">
    <div class="col-md-3">
        <div class="card text-bg-primary">
            <div class="card-body">
                <h5 class="card-title">Total Pengunjung</h5>
                <p class="card-text fs-4">{{ $totalVisitors }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-bg-success">
            <div class="card-body">
                <h5 class="card-title">Hari Ini</h5>
                <p class="card-text fs-4">{{ $todayVisitors }}</p>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">Grafik Pengunjung 7 Hari Terakhir</div>
    <div class="card-body">
        <canvas id="visitorChart" height="100" style="width:100%"></canvas>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('visitorChart');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode($visitorDates) !!},
            datasets: [{
                label: 'Pengunjung',
                data: {!! json_encode($visitorCounts) !!},
                borderColor: 'rgba(75, 192, 192, 1)',
                fill: false,
                tension: 0.3
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    precision: 0
                }
            }
        }
    });
});
</script>
@endpush
@endsection
