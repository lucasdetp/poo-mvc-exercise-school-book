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
        <a href="/">Retour</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nom de la classe</th>
                <th>Année</th>
                <th>Nombre d'élève</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pageclass as $school)
            <tr>
                <td>{{ $school->class }} {{ $school->number }}</td>
                <td>{{ $school->year }}</td>
                <td>{{ $nombreEtudiant[$school->id-1]->students->count()}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination">
        {{ $pageclass->links() }}
    </div>



</body>

</html>