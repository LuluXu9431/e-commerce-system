<?php require_once("../resources/config.php");?>
<?php require_once("../resources/functions.php");?>

<?php include(TEMPLATE_FRONT . DS . "header.php")?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header >
            <h1> Shop  </h1h>
           
            
        </header>

        <hr>

        <!-- Page Features -->
        <div class="row text-center">

            <?php get_products_in_shop_page();?>
    
        </div>
        <!-- /.row -->

     
    </div>
    <!-- /.container -->
<?php include(TEMPLATE_FRONT . DS . "footer.php")?>