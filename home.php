<?php 
include("webpage_header.php");
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators" >
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wra
      per for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="fsendimage/phms1.jpg" alt="Los Angeles" style="width:120%;">
      </div>

      <div class="item">
        <img src="fsendimage/phms2.jpg" alt="chicago" style="width:100% ; hight:30%;">
      </div>
    
      <div class="item">
        <img src="fsendimage/phms3.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<?php 
include("webpage_footer.php");
?>