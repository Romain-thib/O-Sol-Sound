<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{isset($title) ? $title : "Page en cours"}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.typekit.net/idi8qqz.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">

@vite(["resources/css/normalize.css", 'resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<x-header/>

<main>
    {{ $slot }}
</main>

<x-footer/>
</body>
</html>
