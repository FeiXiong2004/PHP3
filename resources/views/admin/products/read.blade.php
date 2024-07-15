<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container" >
        <h1 class="text-center">List Books</h1>
        <a href="{{ route('admin.books.create') }}" class="btn btn-primary float-end">Add</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Title</th>
                    <th>ThumbNail</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Pulication</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Category_id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book )
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>
                            <img src="{{ $book->thumbnail }}" alt="" width="100">
                        </td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->publisher }}</td>
                        <td>{{ $book->publication }}</td>
                        <td class="red">{{ $book->price }}$</td>
                        <td>{{ $book->quantity }}</td>
                        <td>{{ $book->category_id }}</td>
                        <td>
                            <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                            <a onclick="return confirm('Do you want to Delete')" href="{{ route('admin.books.delete', $book->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
</body>
</html>