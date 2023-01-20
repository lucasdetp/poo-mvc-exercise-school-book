<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .back {
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .back a {
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
    <div class="back">
        <a href="/classes">Retour</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Genre</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Date de naissance</th>
                <th>Adresse</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->given_name }} {{ $student->family_name }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->birthday }}</td>
                <td>{{ $student->street_address }}, {{ $student->city }}, {{ $student->zipcode }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>