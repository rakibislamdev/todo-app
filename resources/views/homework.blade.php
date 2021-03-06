<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo aPP - home work</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <!-- table section-->
    <section class="m-5 p-4 shadow mb-5 bg-body rounded">
        <h1 class="text-center p-3">Our Home work</h1>
        <h4 class="text-center text-capitalize">
            <a href="/" class="btn btn-primary">Back</a>
        </h4>

        <h4 class="text-center text-capitalize">
            <a href="/work" class="btn btn-primary">Create-work</a>
        </h4>

        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Website</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($works as $work)
                <tr>
                    <th scope="row">{{ $work->id }}</th>
                    <td>{{ $work->email }}</td>
                    <td>{{ $work->password }}</td>
                    <td>{{ $work->website }}</td>
                    <td>
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
