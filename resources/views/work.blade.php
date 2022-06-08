<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HomE wOrK pAgE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <!-- form section-->
    <section class="m-5 d-flex justify-content-center">
        <form action="/save" style="width: 500px" class="bg-light p-4 shadow mb-5 bg-body rounded">
            <div class="text-center">
                <h3>Input Form</h3>
            </div>
            <div class="mb-3">
                <label for="work" class="form-label">Eamil:-</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="work" class="form-label">Password:-</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Website:</label>
                <input type="url" name="site" class="form-control" id="site" placeholder="Type your website name">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
