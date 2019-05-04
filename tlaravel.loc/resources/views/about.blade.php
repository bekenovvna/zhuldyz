<!DOCTYPE html>
<html>
<head>
	<title>{{$title}}</title>
</head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}


p.oblique {
  font-family: "Comic Sans MS", cursive, sans-serif;  letter-spacing: 5px;
  text-shadow: 3px 2px red;
  font-size: 50px;
}
</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-large" style="max-width:1200px;margin:auto ;max-height:90px;">

   
    <div class="w3-right w3-padding-16 ">
	<a href ="session" ><button type="button" class="btn btn-secondary"> 
  <span class="glyphicon glyphicon-shopping-cart"></span>
  Basket
	<span class="badge badge-light">{{count(session()->all())-3}}
</span> 
	<span class="sr-only">unread messages</span>
</button></a> 



</div>







<div class="w3-center w3-padding-16">

<p class="oblique">Tasty Food</p></div>
  </div>
</div>


  
<!-- !PAGE CONTENT!-->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
 
  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
  @foreach( $products as $k=>$product)

  <div class="w3-quarter">
  <hr>

      <img src = "{{asset('assets/img/'.$product->img)}}" style = "width: 150px;height:150px">
      <h3>{{$product->name}} </h3><h4>$ {{$product->price}}	 </h4>
      <p>{!!$product->composition!!}</p>
	  <h4>

    {!!Form::open(['url'=>route('set',['id'=>$product->id]),'class'=>'form-horizontal','method'=>'POST'])!!}
                            

    {!!Form::button('AddToCart',['class'=>'btn btn-danger','type'=>'submit'])!!}

    <input type="text" class="product-quantity" name="quantity" value="1" size="4" />


     {!!Form::close()!!}
     <hr>







     </h4>



    </div>
	@endforeach

  </div>
  

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">pizza</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">sushi</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">cakes</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">drinks</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <hr id="about">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <h3>HISTORY of PIZZA</h3><br>
    <img src="http://ottavio.ca/wp-content/uploads/2018/03/history-of-pizza.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
    <div class="w3-padding-32">
      <h4><b>In a nutshell</b></h4>
      <h6><i>Source: Wikipedia</i></h6>
      <p>The modern pizza was originally invented in Naples, Italy but the word pizza is Greek in origin, 
		derived from the Greek word pēktos meaning solid or clotted. The ancient Greeks covered their bread with oils, herbs and cheese. 
		The first major innovation that led to flat bread pizza was the use of tomato as a topping. 
		It was common for the poor of the area around Naples to add tomato to their yeast-based flat bread, and so the pizza began.While it is difficult to say for sure who invented the pizza, it is however believed that modern pizza was first made by baker Raffaele Esposito of Naples. In fact, a popular urban legend holds that the archetypal pizza, Pizza Margherita, was invented in 1889, when the Royal Palace of Capodimonte commissioned the Neapolitan pizzaiolo Raffaele Esposito to create a pizza in honor of the visiting Queen Margherita. Of the three different pizzas he created, the Queen strongly preferred a pie swathed in the colors of the Italian flag: red (tomato), green (basil), and white (mozzarella). Supposedly, this kind of pizza was then named after the Queen as Pizza Margherita.
		Later, the dish has become popular in many parts of the world:
		The first pizzeria, Antica Pizzeria Port'Alba, was opened in 1830 in Naples.
		In North America, The first pizzeria was opened in 1905 by Gennaro Lombardi at 53 1/3 Spring Street in New York City.
		The first Pizza Hut, the chain of pizza restaurants appeared in the United States during the 1930s.
		Nowadays, many varieties of pizza exist worldwide, along with several dish variants based upon pizza.
		</p>
    
	</div>
  </div>


  <hr>

 

  
  <!-- Footer -->
  

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>