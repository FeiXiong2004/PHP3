<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Add New Category    </h1>
        <form action="{{ route('admin.categories.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="EnterName">
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-success">Create</button>  
            </div>  
        </form>
    </div>

</body>
</html>