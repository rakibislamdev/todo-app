<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo aPP - welcome to our todo app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="d-flex justify-content-end">
        @if (Route::has('login'))
        <div class="hidden fixed top-4 right-4 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline pe-3">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline pe-3">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>

    <!-- table section-->
    <section class="m-5 p-4 shadow mb-5 bg-body rounded">
        <h1 class="text-center p-3">Our Todo List</h1>
        <div class="p-2 text-center">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Create
            </button>

            <!-- Edit Modal -->
            <div class="modal fade" id="exampleModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Todo List</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/store">
                                <div class="mb-3">
                                    <label for="date" class="form-label">Date:</label>
                                    <input type="date" name="date" class="form-control" id="date"
                                        placeholder="select date">
                                </div>
                                <div class="mb-3">
                                    <label for="work" class="form-label">Work name:-</label>
                                    <input type="text" name="name" class="form-control" id="work">
                                </div>
                                <div class="mb-3">
                                    <label for="work" class="form-label">Work details:-</label>
                                    <textarea class="form-control" name="details" id="work" rows="3"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="/status">
            <!-- Button trigger modal -->
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Work</th>
                        <th scope="col">Work Detealis</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todos as $todo)
                    <tr>
                        <th scope="row"><input class="form-check-input" type="checkbox" name="status[{{ $todo->id }}]"
                                {{ $todo->complete?'checked':'' }} value="1" id="flexCheckDefault"></th>
                        @if ($todo->complete)
                        <td><del>{{ $todo->date }}</del></td>
                        <td><del>{{ $todo->name }}</del></td>
                        <td><del>{{ $todo->details }}</del></td>
                        @else
                        <td>{{ $todo->date }}</td>
                        <td>{{ $todo->name }}</td>
                        <td>{{ $todo->details }}</td>
                        @endif

                        <td>
                            <a href="/edit/{{ $todo->id }}" type="submit" class="btn btn-primary">Edit</a>
                            <a href="/delete/{{ $todo->id }}" type="submit" class="btn btn-danger">Delete</a>
                            {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#delete">Delete</button>
                            <!-- Modal -->
                            <div class="modal" id="delete" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="delte">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            are you sure? you want to delete?
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <a href="/delete/{{ $todo->id }}" type="submit"
                                                    class="btn btn-primary">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">
                    Save
                </button>
            </div>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
