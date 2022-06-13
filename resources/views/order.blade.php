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
    
</head>
<body>
  <!-- nav-gp start -->
    <div class="navbar-gp">
    <nav class="navbar navbar-expand-lg fixed-top navbar navbar-dark bg-dark   ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> Online-Store Testing</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://127.0.0.1:8000/cart">Cart</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Details</a></li>
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
<!-- nav gp end -->

<!-- carousel stat -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="carousel-img" src="https://wallpapers.oceanofwallpapers.com/wallpapers/previews/wallpaper-vg7wwl-646222-Preview.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img class="carousel-img"  src="https://burst.shopifycdn.com/photos/flatlay-iron-skillet-with-meat-and-other-food.jpg?width=500&format=pjpg&exif=1&iptc=1" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img class="carousel-img"  src="https://wallpapercave.com/wp/mGD11sD.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
<!-- carousel end -->


<section>
    <div class=" card-container">
        <div class="row">
        <div class="col-md-4">
                <div class="card">
                    <div class="card-title"><h3>Card-Title</h3></div>
                    <div class="card-body">
                    <img src="\images\1.jpg" alt="Card-img">
                      
                        <div class="card-text" >
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Aspernatur neque dicta ipsum. Quaerat quam minus animi ipsum illo,
                          vel expedita ea consequatur quod! Laboriosam esse aut iste pariatur,
                            blanditiis architecto!
                        </div>
                    </div>
                    <div class="card-footer">
                      <div class="text-center">
                      <a class="btn btn-primary" href="" >More Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-title"><h3>Card-Title</h3></div>
                    <div class="card-body">
                    <img src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpCTd8s3od0QrO3_euyXSS1XOlqyEhSROjJg&usqp=CAU" alt="Card-img">
                    <div class="card-text" >
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Aspernatur neque dicta ipsum. Quaerat quam minus animi ipsum illo,
                          vel expedita ea consequatur quod! Laboriosam esse aut iste pariatur,
                            blanditiis architecto!
                        </div>
                    </div>
                    <div class="card-footer">
                      <div class="text-center">
                      <a class="btn btn-primary" href="" >More Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card">
                    <div class="card-title"><h3>Card-Title</h3></div>
                    <div class="card-body">
                    <img src="https://www.mwallpapers.com/download-image/533647/1080x810" alt="Card-img">
                    <div class="card-text" >
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Aspernatur neque dicta ipsum. Quaerat quam minus animi ipsum illo,
                          vel expedita ea consequatur quod! Laboriosam esse aut iste pariatur,
                            blanditiis architecto!
                        </div>
                    </div>
                    <div class="card-footer">
                      <div class="text-center">
                      <a class="btn btn-primary" href="" >More Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-title"><h3>Card-Title</h3></div>
                    <div class="card-body">
                    <img src="https://img.freepik.com/free-photo/grilled-beef-steak-dark-wooden-surface_1150-44344.jpg?w=2000" alt="Card-img">
                    <div class="card-text" >
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Aspernatur neque dicta ipsum. Quaerat quam minus animi ipsum illo,
                          vel expedita ea consequatur quod! Laboriosam esse aut iste pariatur,
                            blanditiis architecto!
                        </div>
                    </div>
                    <div class="card-footer">
                      <div class="text-center">
                      <a class="btn btn-primary" href="" >More Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-title"><h3>Card-Title</h3></div>
                    <div class="card-body">
                    <img src="https://im1.dineout.co.in/images/uploads/restaurant/sharpen/1/u/u/p104074-1648453905624169117df6e.jpg?w=400" alt="Card-img">
                    <div class="card-text" >
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Aspernatur neque dicta ipsum. Quaerat quam minus animi ipsum illo,
                          vel expedita ea consequatur quod! Laboriosam esse aut iste pariatur,
                            blanditiis architecto!
                        </div>
                    </div>
                    <div class="card-footer">
                      <div class="text-center">
                      <a class="btn btn-primary" href="" >More Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-title"><h3>Card-Title</h3></div>
                    <div class="card-body">
                    <img src="https://d1hjkbq40fs2x4.cloudfront.net/2018-01-29/files/food-photography_1735-t.jpg" alt="Card-img">
                    <div class="card-text" >
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Aspernatur neque dicta ipsum. Quaerat quam minus animi ipsum illo,
                          vel expedita ea consequatur quod! Laboriosam esse aut iste pariatur,
                            blanditiis architecto!
                        </div>
                    </div>
                    <div class="card-footer">
                      <div class="text-center">
                      <a class="btn btn-primary" href="" >More Details</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
    <footer>
      <div class="container-fluid fixed-buttom ">
        <h3 >This content Own to @KyawZinLin</h3>
      </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     
</body>
</html>