<?php 
    
    $active='Contact';
    include("includes/header.php");

?>
  
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Acasă</a>
                   </li>
                   <li>
                       Contact
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2> Protecția ta o asigurăm noi!</h2>
                           <br>
                           <p class="text-muted"><!-- text-muted Begin -->
                        
                               <h4><span style="color:red;font-style:italic;"> BTF</span><span style="color:black; font-style:italic;"> Protect</span>
                               <span style="color:black;font-style:normal;">este colaboratorul companiei CERVA Cz, importator și distribuitor de echipamente de protecție a muncii și PSI. Compania noastră vă stă la dispoziție cu o gamă variată de produse și oferte care caută să satisfacă nevoile firmei dumneavoastră. </span></h4>
                               <h4 class="btf-par" style="color:black;">La solicitarea clientului,<span style="color:red;font-style:italic;"> BTF</span><span style="color:black; font-style:italic;"> Protect</span> <span style="color:black; font-style:normal">deține posibilitatea personalizării echipamentelor conform cerințelor.</span></h4>
                               <h4 class="btf-par" style="color:black;">Pentru prezentarea mai multor produse, detalii și oferte nu ezitați să ne contactați! Suntem convinși că împreună vom găsi soluții optime de colaborare bazate pe flexibilitatea echipei și pe motivația că orice client este important pentru noi!</h4>
                            </p><!-- text-muted Finish -->
                            <br>
                            <h2>Contactează-ne</h2>
                           
                       </center><!-- center Finish -->
                       
                       <form action="contact.php" method="post"><!-- form Begin -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Nume</label>
                               
                               <input type="text" class="form-control" name="name" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Email</label>
                               
                               <input type="text" class="form-control" name="email" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Subiect</label>
                               
                               <input type="text" class="form-control" name="subject" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Mesaj</label>
                               
                               <textarea name="message" class="form-control"></textarea>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="submit" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> Trimite mesaj
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->
                       
                       <?php 
                       
                       if(isset($_POST['submit'])){
                           
                           /// Admin receives message with this ///
                           
                           $sender_name = $_POST['name'];
                           
                           $sender_email = $_POST['email'];
                           
                           $sender_subject = $_POST['subject'];
                           
                           $sender_message = $_POST['message'];
                           
                           $receiver_email = "bogdan@btfprotect";
                           
                           mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
                           
                           /// Auto reply to sender with this ///
                           
                           $email = $_POST['email'];
                           
                           $subject = "Protecția ta o asigurăm noi!";
                           
                           $msg = "Mulțumim pentru mesajul trimis. Vom răspunde în timpul cel mai scurt.";
                           
                           $from = "bogdan@btfprotect";
                           
                           mail($email,$subject,$msg,$from);
                           
                           echo "<h2 align='center'> Mesajul tău a fost trimis cu succes! </h2>";
                           
                       }
                       
                       ?>
                       
                   </div><!-- box-header Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-12 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>