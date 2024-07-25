<!-- resources/views/video/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $film['title'] }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">{{ $film['title'] }}</h1>

        <div class="video-player my-4">
            <div class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" controls>
                    <source src="{{ $film['link_stream_response'] }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

        <div class="mt-4">
            <h5>Related Links</h5>
            <ul>
                @foreach ($film['relative'] as $item)
                    <li><a href="{{ $item['link_ref'] }}">{{ $item['title_ref'] }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="mt-4">
            <h5>Episode List</h5>
            <ul>
                @foreach ($film['list_episode'] as $episode)
                    <li><a href="{{ $episode['list_episode_endpoint'] }}">{{ $episode['list_episode_title'] }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
