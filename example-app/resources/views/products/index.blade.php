<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($products as $product)
  <tr>
            <div class="" style="background-color:bisque">
            <th>{{$product->id}}</th>
            <th>{{$product->name}}</th>
            </div>

  </tr>

@endforeach
</body>
</html>