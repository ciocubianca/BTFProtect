<?php 

    $active='Shop';
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
                       Produse
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?> 
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->

                <div class='box'><!-- box Begin -->
                    <h1>Shop</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo deleniti accusamus, consequuntur illum quasi ut. Voluptate a, ipsam repellendus ut fugiat minima? Id facilis itaque autem, officiis veritatis perferendis, quaerat!
                    </p>
                </div><!-- box Finish -->
               
               <div id="products" class="row"><!-- row Begin -->

                    <?php getProducts(); ?>
               
               </div><!-- row Finish -->
               
               <center>
                   <ul class="pagination"><!-- pagination Begin -->

                        <?php getPaginator(); ?>

                   </ul><!-- pagination Finish -->
               </center>
               
           </div><!-- col-md-9 Finish -->

           <div id="wait" style="position:absolute;top:40%;left:45%;padding: 200px 100px 100px 100px;"></div>
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <script>
    
        $(document).ready(function(){

            // Hide & Show Sidebar Toggle //

            $('.nav-toggle').click(function(){
                
                $('.panel-collapse,.collapse-data').slideToggle(700,function(){

                    if($(this).css('display')=='none'){

                        $(".hide-show").html('Show');

                    }else{

                        $(".hide-show").html('Hide');

                    }

                });

            });

            // Finish Hide & Show Sidebar Toggle //

            // Search Filters | by Letter // 

            $(function(){

                $.fn.extend({

                    filterTable: function(){

                        return this.each(function(){

                            $(this).on('keyup', function(){

                                var $this = $(this),
                                search = $this.val().toLowerCase(),
                                target = $this.attr('data-filters'),
                                handle = $(target),
                                rows = handle.find('li a');

                                if(search == ''){

                                    rows.show();

                                }else{

                                    rows.each(function(){

                                        var $this = $(this);

                                        $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();

                                    });

                                }
                            });

                        });

                    }

                });

                $('[data-action="filter"][id="dev-table-filter"]').filterTable();

            });

            // Finish Search Filters | by Letter //

        });
    
    </script>

    <script>
    
        $(document).ready(function(){

            // getProducts Function Begin //

            function getProducts(){  

                // Code For Manufacturers Begin //

                var sPath = '';
                var manInputs = $('li').find('.get_manufacturer');
                var manKeys = Array();
                //var aValues = Array();

                iKey = 0;

                $.each(manInputs, function(key, oInput){

                    if(oInput.checked){

                        manKeys[iKey] = oInput.value

                    };

                    iKey++;

                });

                if(manKeys.length>0){

                    var sPath = '';

                    for(var i = 0; i < manKeys.length; i++){

                        sPath = sPath + 'man[]=' + manKeys[i]+'&';

                    }

                }

                // Code For Manufacturers Finish //

                // Code For Product Categories Begin //

                var pcatInputs = $('li').find('.get_p_cat');
                var pcatKeys = Array();
                //var aValues = Array();

                iKey = 0;

                $.each(pcatInputs, function(key, oInput){

                    if(oInput.checked){

                        pcatKeys[iKey] = oInput.value

                    };

                    iKey++;

                });

                if(pcatKeys.length>0){

                    //var sPath = '';

                    for(var i = 0; i < pcatKeys.length; i++){

                        sPath = sPath + 'p_cat[]=' + pcatKeys[i]+'&';

                    }
                }

                // Code For Product Categories Finish //

                // Code For Categories Begin //

                var catInputs = $('li').find('.get_cat');
                var catKeys = Array();

                iKey = 0;

                $.each(catInputs, function(key, oInput){

                    if(oInput.checked){

                        catKeys[iKey] = oInput.value

                    };

                    iKey++;

                });

                if(catKeys.length>0){

                    //var sPath = '';

                    for(var i = 0; i < catKeys.length; i++){

                        sPath = sPath + 'cat[]=' + catKeys[i]+'&';

                    }

                }

                // Code For Categories Finish //

                // Loader When Loading Begin //    

                $('#wait').html('<img src="images/load.gif"');

                // Loader When Loading Finish //  

                $.ajax({

                    url:"load.php",
                    method:"POST",

                    data: sPath+'sAction=getProducts',

                    success:function(data){

                        $('#products').html('');
                        $('#products').html(data);
                        $('#wait').empty();

                    }

                });

                $.ajax({

                    url:"load.php",
                    method:"POST",

                    data: sPath+'sAction=getPaginator',

                    success:function(data){

                        $('.pagination').html('');
                        $('.pagination').html(data);

                    }

                });

            }

            // getProducts Function Finish //

            $('.get_manufacturer').click(function(){
                getProducts();
            });

            $('.get_p_cat').click(function(){
                getProducts();
            });

            $('.get_cat').click(function(){
                getProducts();
            });
            

        });
    
    </script>
    
    
</body>
</html>