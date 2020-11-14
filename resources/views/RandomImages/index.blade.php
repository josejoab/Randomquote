<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Images</title>
</head>
<body>
    <h1> Take a look of this image ........ </h1>
    <p>Image URL: {{ $data['storage']->url($data['image_name']) }}</p>
    <img src="{{ $data['storage']->url($data['image_name']) }}" alt="">
    <h5>Server IP:  {{ $data['ip'] }} </h5>
</body>
</html>
