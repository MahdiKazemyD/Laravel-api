<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script type="text/javascript" src="js/ajax.js"></script>

    <title>product list</title>
</head>
<body>
<a class="delete fa fa-close btn btn-danger" href="/store" id="create">Create</a>

<hr>
<div class="p-5">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Status</th>
            <th>Category_id</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->name }}</td>
                <td>{{$product->description }}</td>
                <td>{{$product->price }}</td>
                <td><input type="checkbox" class="checkbox p-3" id="S{{$product->id}}" {{$product->status == 1 ? 'checked' : ' ' }} ></td>
                <td>{{$product->category_id }}</td>
                <td>
                    <a class="edit fa fa-user btn btn-primary" href="/update/{{$product->id}}" id="{{$product->id}}">Edit</a>
                    <a class="delete fa fa-close btn btn-danger" id="{{$product->id}}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{-- delete method --}}

    <script>
        document.querySelectorAll('.delete').forEach((e) => {
            e.onclick = () => {
                let url = `api/products/${e.id}` ;
                Store(url , 'DELETE');
            }
        })
    </script>


</div>

</body>
</html>
