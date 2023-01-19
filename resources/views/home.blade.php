<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <style>
        body {
            max-width: 1000px;
            margin: auto;
        }

        th {
            text-align: left;
        }

        th,
        td {
            padding-right: 1.5rem;
        }

        .etudiants {
            margin-bottom: 20px;
            justify-content: center;
            text-align: center;
            margin-top: 50px;

        }

        .etudiants a {
            font-size: 1.2rem;
            position: relative;
            text-align: center;
            margin: 10px;
            color: black;
            border: 2px solid black;
            padding: 10px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div>
        <div class="etudiants">
            <a href="/students">Tous les étudiants</a>
            <a href="/students?order_by=birthday&order=asc">Les étudiants les plus anciens</a>
            <a href="/classes">Toutes les classes</a>
        </div>

        <h2>Étudiants</h2>
        <table>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Détails</th>
            </tr>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->family_name }}</td>
                <td>{{ $student->given_name }}</td>
                <td><a href="/students/{{ $student->id }}">Info</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>