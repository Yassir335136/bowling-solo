<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Overzicht Leverancier</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom Styles -->
        <style>
            body {
                background-color: #f8f9fa;
            }
            .container {
                margin-top: 50px;
            }
        </style>
</head>
<body>
<div class="container">
            <div class="text-center mb-4">
                <h1 class="display-4">Scores Overzicht</h1>
    <div class="container">
        <table id="scoresTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>ReservationId</th>
                    <th>Name</th>
                    <th>Scores</th>
                    <th>Toevoegen</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($scores as $score)
                <tr>
                        <td>{{ $scores->id }}</td>
                        <td>{{ $reservations->reservation_id }}</td>
                        <td>{{ $scores->name }}</td>
                        <td>{{ $scores->scores }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
