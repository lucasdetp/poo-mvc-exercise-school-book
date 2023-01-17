<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>
    <tbody>
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
                <td>{{ $student->phone }}</td>
            </tr>
            @endforeach
        </table>
    </tbody>
</body>

</html>