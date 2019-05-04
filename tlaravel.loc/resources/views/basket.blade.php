<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
    
<body>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Product code</th>
      <th scope="col">Product name</th>
      <th scope="col">Product composition</th>
      <th scope="col">Product price</th>
      <th scope="col">Product quantity</th>


    <th scope="col">Delete</th>

    </tr>
  </thead>
    @foreach( $items as $k=>$product) 

 
  <tbody>
    <tr>
   
      <td>{{$product["product_code"]}}</td>
      <td>{{$product["name"]}}</td>
      <td>{{$product["composition"]}}</td>
      <td>{{$product["price"]}}</td>
      <td><input type="text" class="product-quantity" name="quantity" value="{{$product['qty']}}" size="4" /></td>
      
      <td>  
      
    <a href ='remove/{{$product["name"]}}'><button type="submit" class="btn btn-outline-secondary "  style="width: 100px;margin-left:20px;">Remove</button></a> 
     
     </td>

           
    
    
    </tr>
  </tbody>
    @endforeach
    </table>

    <a href ='/about'><button type="submit" class="btn btn-outline-secondary "  style="width: 100px;margin-left:1%;">
    Back 
     </button></a>
     
     <a href ='session/remove'><button type="submit" class="btn btn-outline-secondary "  style="width: 100px;margin-left:1%;">
    Clear 
     </button></a>

    <a href ='/signIn'><button type="submit" class="btn btn-outline-secondary "  style="width: 100px;margin-left:50%;">
    Save
     </button></a> 


     
    

</body>
</html>

