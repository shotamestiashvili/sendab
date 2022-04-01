<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-3">Sendab</h2>
<!--    <div class="d-flex justify-content-end mb-4">-->
<!--        <a class="btn btn-primary" href="{{ URL::to('#') }}">www.sendab.com</a>-->
<!--    </div>-->
    <table class="table table-bordered mb-5">
        @foreach($employee ?? '' as $data)
        <thead>
        <tr class="table-info">
            <th scope="col">#</th>
            <td>{{ $data['id'] }}</td>
        </tr>
        <tr class="table-info">
            <th scope="col">Name</th>
            <td>{{ $data['firstname'] }}</td>
        </tr>
        <tr class="table-info">
            <th scope="col">Birthdate</th>
            <td>{{ $data['birthdate'] }}</td>
        </tr>
        <tr class="table-info">
            <th scope="col">Phone</th>
            <td>{{ $data['phone'] }}</td>
        </tr>
        <tr class="table-info">
            <th scope="col">Country</th>
<!--            <td> {{ QrCode::size(100)->generate('my data') }}</td>-->
        </tr>

        </thead>
        <tbody>
        @endforeach
        </tbody>
    </table>
</div>

<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
