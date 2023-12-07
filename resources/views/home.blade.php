<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <div class="container">
            <ul>
                <li><a href="info">{{ $item }}</a></li>
                <li><a href="">{{ $item_1 }}</a></li>
                <li><a href="">{{ $item_2 }}</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="container">
            <h1 class="title">{{ $title }}</h1>
            <p>{{ $user }}</p>
        </div>
    </main>

</body>

</html>
