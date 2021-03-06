<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cReAte pAgE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <!-- form section-->
    <section class="m-5 d-flex justify-content-center">
        <form action="/store" style="width: 500px" class="bg-light p-4 shadow mb-5 bg-body rounded">
            <div class="text-center">
                <h3>Todo List</h3>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date:</label>
                <input type="date" name="date" class="form-control" id="date" placeholder="select date">
            </div>
            <div class="mb-3">
                <label for="work" class="form-label">Work name:-</label>
                <input type="text" name="name" class="form-control" id="work">
            </div>
            <div class="mb-3">
                <label for="work" class="form-label">Work details:-</label>
                <textarea class="form-control" name="details" id="work" rows="3"></textarea>
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
