<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.02);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Film</h1>
        <div class="row">
            @forelse ($datas['ongoing'] as $film)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ $film['thumb'] }}" class="card-img-top" alt="{{ $film['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $film['title'] }}</h5>
                            <p class="card-text">Total Episode: {{ $film['total_episode'] }}</p>
                            <p class="card-text">Update Terakhir: {{ $film['updated_on'] }}</p>
                            <a href="{{ route('detail', ['title' => urlencode(basename(parse_url($film['endpoint'], PHP_URL_PATH), '/'))]) }}" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @empty
                <p>Tidak ada film yang tersedia.</p>
            @endforelse
        </div>
    </div>
</body>
</html>
