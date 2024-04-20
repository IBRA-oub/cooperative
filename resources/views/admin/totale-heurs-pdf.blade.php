<!DOCTYPE html>
<html>
<head>
    <title>Tout les haurs travailler</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-center text-4xl font-bold">{{ $data['title'] }}</h1>
    <p class="text-center my-6">{{ $data['date'] }}</p>
    <p class=" text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</p>
  
    <table class="table table-bordered ">
        <tr>
            <th>ID</th>
            <th>fullName</th>
            <th>heure</th>
            <th>date</th>
        </tr>
        @foreach($data['allData'] as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->financiere->user->fullName }}</td>
            <td class="bg-yellow-400 ">{{ $data->heurs }} heurs</td>
            <td>{{ $data->created_at }}</td>
        </tr>
        @endforeach
    </table>
  
</body>
</html>