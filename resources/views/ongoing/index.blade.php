<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film List</title>
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
        <h1 class="mb-4">Film List</h1>
        <div class="row">

            @foreach ($data as $film)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ isset($film['thumb']) ? $film['thumb'] : '' }}" class="card-img-top" alt="Film Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ isset($film['title']) ? $film['title'] : 'No Title Available' }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
            
    </div>
</body>
</html>
