<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center text-primary">Posts List</h1>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="card shadow-sm mt-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post['title'] }}</h5>
                            <p class="card-text">{{ Str::limit($post['body'], 100) }}</p>
                            <a href="/posts/{{ $post['id'] }}" class="btn btn-outline-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="/" class="btn btn-secondary">Back to Home</a>
        </div>
    </div>
</body>
</html>
