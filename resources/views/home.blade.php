<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Styles -->
        <style>
            body {
                max-width: 1000px;
                margin: auto;
            }
            th {
                text-align: left;
            }
            th, td {
                padding-right: 1.5rem;
            }
        </style>
    </head>
    <body>
        <div>
            <h2>Students</h2>
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
