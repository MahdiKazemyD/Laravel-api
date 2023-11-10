<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script type="text/javascript" src="../js/ajax.js"></script>
    <title>Update Product</title>
</head>
<body style="background-color: #f0faf9">
<div class="container">
    <div class="row p-3 mt-3">
        <form method="PUT" action="{{route('products.update' , $id )}}">

            <div class="form-group">
                <label  for="name">Name :</label> <input class="form-control" type="text" name="name" id="name">
            </div>

            <div class="form-group">
                <label for="description">Description :</label> <input type="text" class="form-control" name="description" id="description">
            </div>

            <div class="form-group">
                <label for="price">Price :</label> <input type="text" name="price" id="price" class="form-control">
            </div>

            <div class="form-group">
                <label for="status">Status :</label> <input type="text" name="status" id="status" class="form-control">
            </div>

            <div class="form-group">
                <label for="category">Category :</label> <input type="text" name="category" id="category" class="form-control">
            </div>

            <div class="form-group">
                <label for="file">Image </label><input type="file" multiple name="image" id="image" class="form-control">
            </div>

            <div class="form-group">
                <label for="title">image title :</label> <input type="text" name="title" id="title" class="form-control">
            </div>

            <br>
            <a class="fa fa-user btn btn-primary" id="send"> Send </a>
        </form>
    </div>
</div>

{{--update method--}}
<script>
    document.querySelector('#send').onclick = () => {
            let url = `/api/products/{{$id}}` ;

            let data = {
                'name' : document.getElementById('name').value ,
                'description' : document.getElementById('description').value ,
                'price' : document.getElementById('price').value ,
                'status' : document.getElementById('status').value ,
                'category_id' : document.getElementById('category').value ,
                'title' : document.getElementById('title').value ,
            }

            let files = {
                'image' : document.getElementById('image') ,
            }


            let form = newFormData(data , files);
            Store(url , 'PUT', form);

    }
</script>

</body>
</html>
