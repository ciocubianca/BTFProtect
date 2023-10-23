<div id="footer"><!-- #footer Begin -->
    <div class="container"><!-- container Begin -->
        <div class="row"><!-- row Begin -->
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
               
               <h4>Meniu</h4>
                
                <ul><!-- ul Begin -->
                    <li><a href="../cart.php">Coșul meu</a></li>
                    <li><a href="../contact.php">Contact</a></li>
                    <li><a href="../shop.php">Produse</a></li>
                    <li><a href="my_account.php">Contul meu</a></li>
                </ul><!-- ul Finish -->
                
                <hr>
                
                <h4>Secțiunea utilizatorului</h4>
                
                <ul><!-- ul Begin -->
                           
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='../checkout.php'>Login</a>";
                               
                           }else{
                               
                              echo"<a href='my_account.php?my_orders'>My Account</a>"; 
                               
                           }
                           
                           ?>
                    
                    <li>
                    
                            <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='../checkout.php'>Autentificare</a>";
                               
                           }else{
                               
                              echo"<a href='my_account.php?edit_account'>Editează contul</a>"; 
                               
                           }
                           
                           ?>
                    
                    </li>
                    <li><a href="../terms.php">Termeni și condiții</a></li>
                </ul><!-- ul Finish -->
                
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="com-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Categorii principale</h4>
                
                <ul><!-- ul Begin -->
                
                    <?php 
                    
                        $get_p_cats = "select * from product_categories";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
                    
                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                            
                            $p_cat_id = $row_p_cats['p_cat_id'];
                            
                            $p_cat_title = $row_p_cats['p_cat_title'];
                            
                            echo "
                            
                                <li>
                                
                                    <a href='../shop.php?p_cat=$p_cat_id'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
                            
                        }
                    
                    ?>
                
                </ul><!-- ul Finish -->
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Informații de contact</h4>
                
                <p><!-- p Start -->
                    
                    <strong>BTF Protect</strong>
                    <br/>Timișoara
                    <br/>0723.456.901
                    <br/>bogdan@btfprotect
                    <br/><strong>Bogdan Tudorel</strong>
                    
                </p><!-- p Finish -->
                
                <a href="contact.php">Accesează formularul de contact</a>
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3">
                
            <h4>Află primul noutățile!</h4>
                
                <p class="text-muted">
                    Nu rata cele mai noi produse.
                </p>
                
                <form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=M-devMedia', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" method="post"><!-- form begin -->
                    <div class="input-group"><!-- input-group begin -->
                        
                        <input type="text" class="form-control" name="email">
                        
                        <input type="hidden" value="M-devMedia" name="uri"/><input type="hidden" name="loc" value="en_US"/>
                        
                        <span class="input-group-btn"><!-- input-group-btn begin -->
                            
                            <input type="submit" value="subscribe" class="btn btn-default">
                            
                        </span><!-- input-group-btn Finish -->
                        
                    </div><!-- input-group Finish -->
                </form><!-- form Finish -->
                
                <hr>
                
                <h4>Keep In Touch</h4>
                
                <p class="social">
                    <a href="../#" class="fa fa-facebook"></a>
                    <a href="../#" class="fa fa-twitter"></a>
                    <a href="../#" class="fa fa-instagram"></a>
                    <a href="../#" class="fa fa-google-plus"></a>
                    <a href="../#" class="fa fa-envelope"></a>
                </p>
                
            </div>
        </div><!-- row Finish -->
    </div><!-- container Finish -->
</div><!-- #footer Finish -->


<div id="copyright"><!-- #copyright Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
            <p class="pull-left">&copy; 2022 Maftei Bianca All Rights Reserved</p>
            
        </div><!-- col-md-6 Finish -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
            <p class="pull-right">Theme by: <a href="#">MrGhie</a></p>
            
        </div><!-- col-md-6 Finish -->
    </div><!-- container Finish -->
</div><!-- #copyright Finish -->