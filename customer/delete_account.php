<center><!-- center Begin -->
    
    <h1> Ești sigur că vrei să ștergi contul? </h1>
    
    <form action="" method="post"><!-- form Begin -->
        
       <input type="submit" name="Yes" value="Da, vreau sa îl șterg" class="btn btn-danger"> 
        
       <input type="submit" name="No" value="Nu, nu vreau sa îl șterg" class="btn btn-primary"> 
        
    </form><!-- form Finish -->
    
</center><!-- center Finish -->


<?php 

$c_email = $_SESSION['customer_email'];

if(isset($_POST['Yes'])){
    
    $delete_customer = "delete from customers where customer_email='$c_email'";
    
    $run_delete_customer = mysqli_query($con,$delete_customer);
    
    if($run_delete_customer){
        
        session_destroy();
        
        echo "<script>alert('Contul tău a fost șters cu succes!')</script>";
        
        echo "<script>window.open('../index.php','_self')</script>";
        
    }
    
}

if(isset($_POST['No'])){
    
    echo "<script>window.open('my_account.php?my_orders','_self')</script>";
    
}

?>