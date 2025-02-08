<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-body">
                <h1 class="card-title text-primary">{{ $post['title'] }}</h1>
                <p class="card-text">{{ $post['body'] }}</p>
                <a href="/posts" class="btn btn-outline-primary">Back to all posts</a>
            </div>
        </div>
    </div>
</body>
</html>
