
<html>
<head>
<title>interior era</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></link>
<link href="styleint.css" rel="stylesheet" ></link>
<script src="main.js"></script>


</head>
<body>
<div class="navbar">
<a class="active"href="#"><i class="fa fa-fw fa-search"></i> Status</a>
  <a href="contact_page.php"><i class="fa fa-fw fa-envelope"></i> Support</a>
  <a href="signup.php"><i class="fa fa-fw fa-user"></i> Signin/Signup</a>
  <img src="images\logo.png" alt="">
</div>
<center><i><h1><?php session_start();
     $r=$_SESSION['user'];
	echo "Hello  ".$r;
	session_write_close(); 	?></h1></i></center>
<center><i><h1> About Interior Era</h1></i></center>


<img src="images\int1.jpg" width="450px"height="250px">
<div class="abcd">
<p>
  At Interior Era you will find thousands of looks for every room and style Normally
If you want to do interior designing to your house then you need to contact Home Construction
Architects, Basement Waterproofing Contractors,Bedroom Interior Designers,Blue Metal Gravel Suppliers,Borewell Contractors,Building Contractors,Carpenters,
Curtains & Blinds Dealers, Earthing,Electrical Contractors,Fixtures & Fittings Dealers,Flooring ContractorsFurniture DealersHome Furniture Rentals
Home Interior DesignersInterior Designers & Decorators,Interior Painting Contractors,
Landscaping Contractors,
Office Interior Designers,
Painting Contractors and so on  where as through this website you time will be saved and there is no need for you to contact all these people just by using this one website a lot of work can be done easily by sitting at home</p>
</div>
<br><br>
<center><i><h1>Our Services</i></h1></center>
<br>
 <table>
   <tr>
     <th>
       <p2> <i class="fa fa-home" style="font-size:40px;color:black;"></i></p2>
     </th>
     <th><p2> <i class="fa fa-s15" style="font-size:40px;color:black;"></i></th></p2>
     <th><p2> <i class="fa fa-paint-brush" style="font-size:40px;color:black;"></i></th></p2>

   </tr>
   <tr>
     <th>
        <h2> Interior designing and Decoration</h2>
     </th>
     <th><h2> Flooring</h2></th>
     <th><h2> WallArts And Painting</h2></th>
   </tr>
   <tr>
     <th>
      <p1> Lorem ipsum dolor sit amet consectetur adipisicing elit. In sapiente deserunt quo harum tenetur esse similique blanditiis laudantium porro, fugiat itaque amet exercitationem autem totam quod fugit sequi delectus tempora.
    </p1> </th>
     <th>
      <p1> Lorem ipsum dolor sit amet consectetur adipisicing elit. In sapiente deserunt quo harum tenetur esse similique blanditiis laudantium porro, fugiat itaque amet exercitationem autem totam quod fugit sequi delectus tempora.
     </p1> </th>
      <th>
       <p1>  Lorem ipsum dolor sit amet consectetur adipisicing elit. In sapiente deserunt quo harum tenetur esse similique blanditiis laudantium porro, fugiat itaque amet exercitationem autem totam quod fugit sequi delectus tempora.
       </p1> </th>

   </tr>
 </table><br><table>
    <tr>
      <th>
         <i class="fa fa-home" style="font-size:40px;color:black;"></i>
      </th>
      <th> <i class="fa fa-bar-chart" style="font-size:40px;color:black;"></i></th>
  <th> <i class="fa fa-ticket" style="font-size:40px;color:black;"></i></th>
    </tr>
    <tr>
      <th>
         <h2> Interior designing and Decoration</h2>
      </th>
      <th><h2> Specialized design services</h2> </th>
      <th><h2>24/7 Support</h2> </th>


    </tr>
    <tr>
      <th>
        <p1>Lorem ipsum dolor sit amet consectetur adipisicing elit. In sapiente deserunt quo harum tenetur esse similique blanditiis laudantium porro, fugiat itaque amet exercitationem autem totam quod fugit sequi delectus tempora.
     </p1></th>
      <th>
         <p1>Lorem ipsum dolor sit amet consectetur adipisicing elit. In sapiente deserunt quo harum tenetur esse similique blanditiis laudantium porro, fugiat itaque amet exercitationem autem totam quod fugit sequi delectus tempora.
       </p1></th>
       <th>
          <p1>  Lorem ipsum dolor sit amet consectetur adipisicing elit. In sapiente deserunt quo harum tenetur esse similique blanditiis laudantium porro, fugiat itaque amet exercitationem autem totam quod fugit sequi delectus tepora.
          </p1> </th>


    </tr>
  </table>

  <br>
  <br>
<h1>We're In The Business Of Giving Quality Service<br>
  <br>Helping to give Peace of Mind for Your Family by decorating your sweet home</h1>

<div class="slideshow-container">

<div class="mySlides fade">

  <img src="images\int1.jpg" style="width:95%">

</div>

<div class="mySlides fade">

  <img src="images\int6.jpg" style="width:95%">

</div>

<div class="mySlides fade">

  <img src="images\int 5.jpg" style="width:95%">

</div>
<div class="mySlides fade">

  <img src="images\int 2.jpg" style="width:95%">

</div>
<div class="mySlides fade">

  <img src="images\int.jpg" style="width:95%">

</div>

</div>

<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  
</div>
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>
    <h3> For which spaces do you require the service for? </h3>
    <table>
    <tr>
      <td>
   <div class="dropdown">
      <button class="dropbtn">Home</button>
      <div class="dropdown-content">
      <a href="filtered.php?value=1">Complete House</a>
      <a href="filtered.php?value=2">Living Room</a>
      <a href="filtered.php?value=3">Bed Room</a>
      <a href="filtered.php?value=4">Bath Room</a>
      <a href="filtered.php?value=5">Dining Room</a>
      <a href="filtered.php?value=6">Kitchen</a>
      <a href="filtered.php?value=7">Terrace</a>
      </div>
    </div></td>
    <td>
        <div class="dropdown">
           <button class="dropbtn">Restaurants</button>
           <div class="dropdown-content">
           <a href="filtered.php?value=8">Cafe</a>
           <a href="filtered.php?value=9">Fine Dining</a>
           <a href="filtered.php?value=10">Food Trucks</a>
           </div>
         </div></td>
         <td>
            <div class="dropdown">
               <button class="dropbtn">Work Place</button>
               <div class="dropdown-content">
               <a href="filtered.php?value=11">Offices</a>
               <a href="filtered.php?value=12">Show Rooms</a>
               <a href="filtered.php?value=13">Theatres</a>
               <a href="filtered.php?value=14">Garrage</a>
               <a href="filtered.php?value=15">Hospitals</a>
               <a href="filtered.php?value=16">Schools And Colleges</a>
              </div>
             </div></td>
             <td>
                <div class="dropdown">
                   <button class="dropbtn">Other</button>
                   <div class="dropdown-content">
                   <a href="filtered.php?value=17">Villas</a>
                   <a href="filtered.php?value=18">Resorts</a>
                   <a href="filtered.php?value=19">Guest Houses</a>

                  </div>
                 </div></td>
</tr>
</table>
<br><br><br><br>
<center><h1> Our Special Team</h3></center>


  <div class="gallery">
      <a target="_blank" href="images\int des5.jpg">
        <img src="images\int des5.jpg" alt="Cinque Terre" width="60%">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>

    <div class="gallery">
      <a target="_blank" href="images\int des5.jpg">
        <img src="images\int des5.jpg" alt="Forest" width="60%">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>

    <div class="gallery">
      <a target="_blank" href="images\int des5.jpg">
        <img src="images\int des5.jpg" alt="Northern Lights" width="60%">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>

    <div class="gallery">
      <a target="_blank" href="images\int des5.jpg">
        <img src="images\int des5.jpg" alt="Mountains" width="60%">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
    <div class="gallery">
      <a target="_blank" href="images\int des5.jpg">
        <img src="images\int des5.jpg" alt="Mountains" width="60%">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
	<div class="gallery">
      <a target="_blank" href="images\int des5.jpg">
        <img src="images\int des5.jpg" alt="Cinque Terre" width="60%">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>

<br><br><br><br>
 <center> <h1> ......Our Portfolio......</h1> </center>
 <div class="row">
  <div class="column">
    <img src="images\int des2.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="images\int des1.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="images\int des3.jpg" alt="Mountains" style="width:100%">
  </div>
</div>
<div class="row">
  <div class="column">
    <img src="images\int des7.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="images\int des6.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="images\int des8.jpg" alt="Mountains" style="width:100%">
  </div>
</div>

<center> <h1> Contact Us</h1> </center>
</body>
</html>
