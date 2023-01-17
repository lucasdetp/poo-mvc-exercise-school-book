<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
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

        .pagination {
            display: flex;
            justify-content: center;
            text-align: center;
        }

        .pagination .page-item {
            display: inline-block;
            font-size: smaller;
            padding: 0.5rem 0.75rem;
        }

        .w-5.h-5 {
            width: 35px;
            height: 35px;
        }
    </style>

</head>

<body>
    <tbody>
        <table>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone</th>
                <th>Date de naissance</th>
            </tr>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->family_name }}</td>
                <td>{{ $student->given_name }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->birthday }}</td>
            </tr>
            @endforeach
        </table>
    </tbody>
    <div class="pagination">
        {{ $students->render() }}
    </div>

</body>

</html>