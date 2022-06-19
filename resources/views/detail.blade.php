<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet"  href="{{url('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
   
<section id="one">

<div class="navbar-gp">
    <nav class="navbar navbar-expand-lg  navbar navbar-dark bg-dark   ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> Online-Store Testing</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('order')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('cart')}}">Cart</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/detail">Details</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </div>

    <!-- ----------------- -->

<div class="header"><h1>Western Food</h1></div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://www.simplyrecipes.com/thmb/8caxM88NgxZjz-T2aeRW3xjhzBg=/2000x1125/smart/filters:no_upscale()/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2019__09__easy-pepperoni-pizza-lead-3-8f256746d649404baa36a44d271329bc.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Pizza <br>
               <b> Price </b>: 10000MMK  <br> 
                       
            </div>
            
            <br>
           <div class="text-center">
           <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
        
        <div class="card-body">
            <img class="detail-img" src="https://www.wholesomeyum.com/wp-content/uploads/2017/03/wholesomeyum-Low-Carb-Keto-Pancakes-Recipe-21.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Pancake <br>
               <b> Price </b>: 3000MMK
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://www.womanscribbles.net/wp-content/uploads/2020/01/basic-fried-donuts-3-720x720.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Donuts<br>
               <b> Price </b>: 5000MMK
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
</div>
<br>
<div class="row">
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://www.seriouseats.com/thmb/DeOzmC_A8yHIiCLo2KCcUfedwv4=/1500x844/smart/filters:no_upscale()/__opt__aboutcom__coeus__resources__content_migration__serious_eats__seriouseats.com__2020__03__20200224-carretteira-pasta-vicky-wasik-21-ffe68515b25f4b348cbde845a59d6a62.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Pasta <br>
               <b> Price </b>: 8500MMK            
            </div>
            <br>
           <div class="text-center">
           <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
        
        <div class="card-body">
            <img class="detail-img" src="https://upload.wikimedia.org/wikipedia/commons/6/60/Burrito.JPG"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Burrito <br>
               <b> Price </b>: 3000MMK
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://cdn2.hubspot.net/hubfs/334586/Blog/BBQ%20chix%20on%20grill.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : BBQ Chicken<br>
               <b> Price </b>: 8000MMK
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
</div>
</div>
</section>
<hr>

<section id=two>
<div class="header"><h1>Chinese Cuisine</h1></div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://sethlui.com/wp-content/uploads/2020/08/Best-Dim-Sum-Peach-Garden-Singapore-ONLINE-1.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Dim Sums <br>
               <b> Price </b>: 10000MMK            
            </div>
            <br>
           <div class="text-center">
           <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
        
        <div class="card-body">
            <img class="detail-img" src="https://www.foxyfolksy.com/wp-content/uploads/2016/02/siopao.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Baozi <br>
               <b> Price </b>:2000MMK For 1 Box  
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://iamafoodblog.b-cdn.net/wp-content/uploads/2019/01/spicy-lo-mein-recipe_6034w.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Chinese Fried Noodle<br>
               <b> Price </b>: 5000MMK
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
</div>
<br>
<div class="row">
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://www.seriouseats.com/thmb/DL1wUAlNWP4tApfhmNcPzCKePxs=/610x458/filters:fill(auto,1)/__opt__aboutcom__coeus__resources__content_migration__serious_eats__seriouseats.com__recipes__images__20100910-duck-primary-43f6bb74c3b7490b9b6b99b643fd31f3.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Peking Duck <br>
               <b> Price </b>: 15000MMK            
            </div>
            <br>
           <div class="text-center">
           <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
        
        <div class="card-body">
            <img class="detail-img" src="https://www.maangchi.com/wp-content/uploads/2019/09/mapotofu.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Ma Po Tofu <br>
               <b> Price </b>: 3000MMK 
               
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://ohsnapletseat.com/wp-content/uploads/2021/05/Chicken-with-Broccoli-Chinese-Recipe-6-720x540.jpg.webp"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Chicken with Broccoli<br>
               <b> Price </b>: 5000MMK
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
</div>
</div>
</section>

<hr>

<section id=three>
<div class="header"><h1>Korean Cuisine</h1></div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://www.maangchi.com/wp-content/uploads/2019/11/vegetarian-kimchi.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Kimchi <br>
               <b> Price </b>: 3000MMK  for 1 package          
            </div>
            <br>
           <div class="text-center">
           <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
        
        <div class="card-body">
            <img class="detail-img" src="https://i2.wp.com/seonkyounglongest.com/wp-content/uploads/2019/09/Pork-Bulgogi-15.jpg?fit=1300%2C867&ssl=1"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Pork Bulgogi <br>
               <b> Price </b>:5000MMK 
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/EF9E3126-C3F4-4001-9FC0-3E97EB1BC191/Derivates/930242b2-9975-46d2-bf38-0ac37e073e47.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Bibimbap<br>
               <b> Price </b>: 3500MMK
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
</div>
<br>
<div class="row">
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://media-cdn.tripadvisor.com/media/photo-s/19/71/bf/3d/photo1jpg.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Gimbap <br>
               <b> Price </b>: 2000MMK            
            </div>
            <br>
           <div class="text-center">
           <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
        
        <div class="card-body">
            <img class="detail-img" src="https://media.istockphoto.com/photos/korean-local-food-fish-cake-picture-id1218967345?k=20&m=1218967345&s=612x612&w=0&h=nJY4IiNnS4NFNqadZEjKbxSk6eG4GkWQhY4SbYxKErw="  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Fish Cake <br>
               <b> Price </b>: 1500MMK for 1 stick
               
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://fullofplants.com/wp-content/uploads/2021/12/best-vegan-tteokbokki-with-cocktail-sausages-and-tofu-fish-korean-inspired-thumb-3.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Teokbokki<br>
               <b> Price </b>: 2000MMK
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
</div>
</div>
</section>
<hr>

<section id=four>
<div class="header"><h1>Burmese Cuisine</h1></div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://www.tastingtable.com/img/gallery/burmese-breakfast-stew-recipe/intro-1639583512.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Mohinga <br>
               <b> Price </b>: 1500MMK          
            </div>
            <br>
           <div class="text-center">
           <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
        
        <div class="card-body">
            <img class="detail-img" src="https://www.myanmaritv.com/sites/default/files/styles/recipe_detail/public/Kaung%20Nyin%20Paung%202.jpg?itok=2G7F9hGU"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Kyout Nyin Paung <br>
               <b> Price </b>:2000MMK 
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://static01.nyt.com/images/2014/05/23/dining/Coconut-Noodles/Coconut-Noodles-articleLarge.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Coconut Noodle<br>
               <b> Price </b>: 2000MMK
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
</div>
<br>
<div class="row">
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="http://saraniya.com/photos/htamane-food.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Htamane <br>
               <b> Price </b>: 2000MMK            
            </div>
            <br>
           <div class="text-center">
           <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
        
        <div class="card-body">
            <img class="detail-img" src="https://mlci6uqft0im.i.optimole.com/LqzsJqg-zSfFKeV8/w:333/h:255/q:auto/https://www.cheerskitchenbyhp.com/////////wp-content/uploads/2020/06/Burmese-Tempura.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Burmese Tempura (A kyaw Sone)<br>
               <b> Price </b>: 500MMK for 1 pack
               
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://ak.picdn.net/offset/photos/5660c19b2d1642c189625f0e/medium/photo.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Tea leaf salad<br>
               <b> Price </b>: 1500MMK
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
</div>
</div>
</section>
<hr>

<section id=five>
<div class="header"><h1>  Thai Cuisine</h1></div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://img.theculturetrip.com/1440x/smart/wp-content/uploads/2020/04/g1t75m.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Som Tam (Spicy Green Papaya Salad) <br>
               <b> Price </b>: 2000MMK          
            </div>
            <br>
           <div class="text-center">
           <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
        
        <div class="card-body">
            <img class="detail-img" src="https://marionskitchen.com/wp-content/uploads/2019/05/Thai-Chicken-Laab2.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : laab (spicy salad) <br>
               <b> Price </b>:2000MMK 
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://img.theculturetrip.com/1440x/smart/wp-content/uploads/2020/04/m0f08d.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Pad Thai (Thai Style Fried Noodles)<br>
               <b> Price </b>: 2500MMK
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
</div>
<br>
<div class="row">
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://img.theculturetrip.com/1440x/smart/wp-content/uploads/2020/04/c8htgb.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Khao Pad (Fried Rice)<br>
               <b> Price </b>: 2000MMK            
            </div>
            <br>
           <div class="text-center">
           <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
        
        <div class="card-body">
            <img class="detail-img" src="https://properfoodie.com/wp-content/uploads/2020/07/featured-Panang-Curry-5.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  :Panang (Thai Curry)<br>
               <b> Price </b>: 3000MMK
               
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://i0.wp.com/www.letscooksomefood.com/wp-content/uploads/2020/09/119068517_992266274533071_5519282505976939196_o.jpg?fit=1890%2C1694"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Kao Niew Ma Muang (Mango and  Rice)<br>
               <b> Price </b>: 1500MMK
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
</div>
</div>
</section>
<hr>

<section id=six>
<div class="header"><h1>  India Cuisine</h1></div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/e9e02c00-b20e-4bd8-9b3b-8f30d8f001ed/Derivates/82a1c4d4-44f6-4a49-b4b8-7675c8aa88c7.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Chicken makhani (butter chicken) <br>
               <b> Price </b>: 3000MMK          
            </div>
            <br>
           <div class="text-center">
           <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
        
        <div class="card-body">
            <img class="detail-img" src="https://www.blueosa.com/wp-content/uploads/2020/07/top-10-indian-dishes-samosas.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  :Samosas  <br>
               <b> Price </b>:500MMK  for one pack
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://www.blueosa.com/wp-content/uploads/2020/07/curried-meat-Indian-dshes.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  :Shu'bah’ (Tomato Soup)<br>
               <b> Price </b>: 2500MMK
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
</div>
<br>
<div class="row">
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://assets.bonappetit.com/photos/5cf6803b49ed0f428e6d0e51/1:1/w_2560%2Cc_limit/aloo-gobhi.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  : Aloo Gobi (Potato and Cauliflower)<br>
               <b> Price </b>: 2000MMK            
            </div>
            <br>
           <div class="text-center">
           <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
        
        <div class="card-body">
            <img class="detail-img" src="https://www.indianhealthyrecipes.com/wp-content/uploads/2021/07/matar-paneer-1.jpg.webp"  alt="">
            <div class="card-text">
               <b>Food Name</b> :Matar Paneer (Peas & Cottage Cheese)<br>
               <b> Price </b>: 3000MMK
               
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
        <div class="col-md-4">
    <div class="detail-card">
       
        <div class="card-body">
            <img class="detail-img" src="https://simply-delicious-food.com/wp-content/uploads/2019/10/Easy-Tandoori-chicken-1.jpg"  alt="">
            <div class="card-text">
               <b>Food Name</b>  :  Tandoori Chicken<br>
               <b> Price </b>: 1500MMK
            </div>
            <br>
            <div class="text-center">
            <a href="" class="btn btn-primary">To Cart <i class="fa-solid fa-cart-arrow-down"></i></a>
           </div>
        </div>
    </div>
        </div>
</div>
</div>
</section>



<footer >
  <h3 >This contact Own To Kyaw Zin Lin</h3>
</footer>


<script src="https://kit.fontawesome.com/668fd873f3.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     
</body>
</html>