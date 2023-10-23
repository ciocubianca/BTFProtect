<?php 

    $active='Home';
    include("includes/header.php");

?>
   <!-- carousel-indicators Finish <div class="container" id="slider"> container Begin -->
       
      <!-- carousel-indicators Finish  <div class="container-fluid d-flex min-vh-100 flex-column px-0 justify-content-center">col-md-12 Begin -->
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
               
               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                   <li data-target="#myCarousel" data-slide-to="4"></li>
                   <li data-target="#myCarousel" data-slide-to="5"></li>
                   <li data-target="#myCarousel" data-slide-to="6"></li>
                   
               </ol><!-- carousel-indicators Finish -->
               
               <div class="carousel-inner"><!-- carousel-inner Begin -->
                  
                  <?php 
                   
                   $get_slides = "select * from slider LIMIT 0,1";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];
                       $slide_url = $row_slides['slide_url'];
                       
                       echo "
                       
                       <div class='item active'>
                       
                           <a href='$slide_url'>

                                <img src='admin_area/slides_images/$slide_image'>

                           </a>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   $get_slides = "select * from slider LIMIT 1,6";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];
                       $slide_url = $row_slides['slide_url'];
                       
                       echo "
                       
                       <div class='item'>
                       
                           <a href='$slide_url'>

                                <img src='admin_area/slides_images/$slide_image'>

                           </a>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   ?>
                   
               </div><!-- carousel-inner Finish -->
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a><!-- left carousel-control Finish -->
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a><!-- right carousel-control Finish -->
               
           </div><!-- carousel slide Finish -->
           
      <!-- carousel-indicators Finish </div> col-md-12 Finish -->
       
  <!-- carousel-indicators Finish  </div>container Finish -->
   
   <div id="advantages"><!-- #advantages Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="same-height-row"><!-- same-height-row Begin -->

           <?php 
           
           $get_boxes = "select * from boxes_section";
           $run_boxes = mysqli_query($con,$get_boxes);

           while($run_boxes_section=mysqli_fetch_array($run_boxes)){

            $box_id = $run_boxes_section['box_id'];
            $box_title = $run_boxes_section['box_title'];
            $box_desc = $run_boxes_section['box_desc'];
           
           ?>
           <br>
               <div class="col-sm-4-center"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->

                       <h2><?php echo $box_title; ?></h2>
                       <br>

                                 <img src = "admin_area/other_images/portwest.png" style="width:30%;float:center; margin-right:60px; margin-top:-40px;">             
                      
                                <?php echo "<img src= 'admin_area/other_images/".$box_desc."' width = '20%'>"; ?>             

                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
           
            <?php    } ?>
               
           </div><!-- same-height-row Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- #advantages Finish -->
   
   <div id="hot"><!-- #hot Begin -->
       
       <div class="box"><!-- box Begin -->
           
           <div class="container"><!-- container Begin -->
               
               <div class="col-md-12"><!-- col-md-12 Begin -->
                   
                   <h2>
                       Ultimele noutăți
                   </h2>
                   
               </div><!-- col-md-12 Finish -->
               
           </div><!-- container Finish -->
           
       </div><!-- box Finish -->
       
   </div><!-- #hot Finish -->
   
   <div id="content" class="container"><!-- container Begin -->
       
       <div class="row"><!-- row Begin -->
          
          <?php 
           
           getPro();
           
           ?>
           
       </div><!-- row Finish -->
       
   </div><!-- container Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>