<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background:   #B22222;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse " >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images\hauz1.jpg" style="height: 400px;" alt="Image">
        <div class="carousel-caption">
          <h3>bla bla</h3>
          <p>Money Money.</p>
        </div>      
      </div>

      <div class="item">
        <img src="images\hauz2.jpg" style="height: 400px;" alt="Image">
        <div class="carousel-caption">
          <h3>More bla bla</h3>
          <p>yeah yeah</p>
        </div>      
      </div>

      <div class="item">
        <img src="images\hauz3.jpg" style="height: 400px;" alt="Image">
        <div class="carousel-caption">
          <h3>More bla bla</h3>
          <p>yeah yeah</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>What We Do</h3><br>
  <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading" style="background:   #B22222">Current project</div>
       <div class="panel-body">
        <div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel velit luctus, tempus nisl et, luctus odio. Quisque efficitur, augue nec hendrerit varius, nunc nulla ullamcorper lacus, vel convallis sem nisi nec dolor. Morbi accumsan dapibus purus nec laoreet. Suspendisse ut ex luctus, malesuada ipsum non, ultrices nulla. Sed varius urna at leo euismod luctus ut vitae lacus. In hac habitasse platea dictumst. Nam blandit nunc eu ullamcorper consectetur. Vivamus et convallis est. Aenean sed arcu massa. Donec vitae lacus lobortis, faucibus mauris in, sollicitudin massa. Duis mauris nisl, posuere et pharetra vel, egestas in elit. Vestibulum id velit eu diam elementum porta.</p>
        </div>
      </div>
    </div> 
  </div> 
  <div class="col-md-5">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <br>
  </div>

    <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading" style="background:   #B22222">Current project</div>
       <div class="panel-body">
        <div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel velit luctus, tempus nisl et, luctus odio. Quisque efficitur, augue nec hendrerit varius, nunc nulla ullamcorper lacus, vel convallis sem nisi nec dolor. Morbi accumsan dapibus purus nec laoreet. Suspendisse ut ex luctus, malesuada ipsum non, ultrices nulla. Sed varius urna at leo euismod luctus ut vitae lacus. In hac habitasse platea dictumst. Nam blandit nunc eu ullamcorper consectetur. Vivamus et convallis est. Aenean sed arcu massa. Donec vitae lacus lobortis, faucibus mauris in, sollicitudin massa. Duis mauris nisl, posuere et pharetra vel, egestas in elit. Vestibulum id velit eu diam elementum porta.</p>
        </div>
      </div>
    </div> 
  </div> 
  <div class="col-md-5">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <br>
  </div>

    <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading" style="background:   #B22222">Current project</div>
       <div class="panel-body">
        <div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel velit luctus, tempus nisl et, luctus odio. Quisque efficitur, augue nec hendrerit varius, nunc nulla ullamcorper lacus, vel convallis sem nisi nec dolor. Morbi accumsan dapibus purus nec laoreet. Suspendisse ut ex luctus, malesuada ipsum non, ultrices nulla. Sed varius urna at leo euismod luctus ut vitae lacus. In hac habitasse platea dictumst. Nam blandit nunc eu ullamcorper consectetur. Vivamus et convallis est. Aenean sed arcu massa. Donec vitae lacus lobortis, faucibus mauris in, sollicitudin massa. Duis mauris nisl, posuere et pharetra vel, egestas in elit. Vestibulum id velit eu diam elementum porta.</p>
        </div>
      </div>
    </div> 
  </div> 
  <div class="col-md-5">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <br>
  </div>







  

</div>


<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
