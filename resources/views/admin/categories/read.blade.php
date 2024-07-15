<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>List Category</title>
</head>
<body>
    <div class="container" >
        <h1 class="text-center">List Category</h1>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary float-end">Add</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $cate )
                    <tr>
                        <td>{{ $cate->id }}</td>
                        <td>{{ $cate->name }}</td>
                        <td>
                            <a href="{{ route('admin.categories.edit', $cate->id) }}" class="btn btn-warning">Edit</a>
                            <a onclick="return confirm('Do you want to Delete')" href="{{ route('admin.categories.delete', $cate->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
</body>
</html>