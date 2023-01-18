<!DOCTYPE html>
<html>

<head>
    <title>Informations</title>
    <style>
        h1,
        h2 {
            font-size: 2em;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
        }

        p,
        ul {
            font-size: 1.2em;
            margin-bottom: 10px;
            text-align: center;
        }

        .label {
            font-weight: bold;
            margin-right: 10px;
            text-align: center;
        }

        li {
            list-style-type: none;
        }
    </style>
</head>

<body>
    <h1>{{ $student->given_name }} {{ $student->family_name }}</h1>
    <p>Téléphone: {{ $student->phone }}</p>
    <p>Date de naissance: {{ $student->birthday }}</p>
    <p>Email: {{ $student->email }}</p>
    <p>Adresse: {{ $student->street_address }}</p>
    <p>Genre: {{$student->gender}}</p>
    <h2>Classes</h2>
    <ul>
        @foreach ($student->school_classes as $class)
        <li>{{ $class->year }} : {{ $class->class }} {{ $class->number }}</li>
        @endforeach
    </ul>

</body>

</html>