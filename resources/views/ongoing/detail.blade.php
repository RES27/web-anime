<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $film['anime_detail']['title'] ?? 'Anime Detail' }}</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-primary text-white text-center py-4">
        <h1>{{ $film['anime_detail']['title'] ?? 'Anime Detail' }}</h1>
    </header>

    <main class="container mt-5">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <!-- Anime Detail -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $film['anime_detail']['thumb'] ?? '' }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Detail Anime</h5>
                        <ul class="list-group list-group-flush">
                            @if(!empty($film['anime_detail']['detail']))
                                @foreach($film['anime_detail']['detail'] as $info)
                                    <li class="list-group-item">{{ $info }}</li>
                                @endforeach
                            @else
                                <li class="list-group-item">Detail tidak tersedia</li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Episode List -->
            <div class="col-md-8">
                <h2>Daftar Episode</h2>
                <ul class="list-group">
                    @if(!empty($film['episode_list']))
                        @foreach($film['episode_list'] as $episode)
                            <li class="list-group-item">
                                <a href="{{ route('episode', ['title' => urlencode(basename(parse_url($episode['episode_endpoint'], PHP_URL_PATH), '/'))]) }}" target="_blank">
                                    {{ $episode['episode_title'] ?? 'Episode tidak tersedia' }}
                                </a>
                                <span class="badge badge-secondary float-right">{{ $episode['episode_date'] ?? '' }}</span>
                            </li>
                        @endforeach
                    @else
                        <li class="list-group-item">Tidak ada episode yang tersedia</li>
                    @endif
                </ul>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 Anime Tracker</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
