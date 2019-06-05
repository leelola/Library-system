<?php
 require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT .DS. "header.php")?>
    <!-- Page Content -->
    <div id ="page=wrapper">
<div class="container-fluid">

   
   
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>A Warm Welcome!</h1>
            <p>You can find similar books in this category that might meet your choice.</p>
                    </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Books</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

        <?php get_products_in_cat_page(); ?>            

           

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    

    <?php include(TEMPLATE_FRONT .DS. "footer.php")?>