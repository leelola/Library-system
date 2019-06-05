<?php
 require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT .DS. "header.php")?>
<div id ="page=wrapper">
<div class="container-fluid">


    <!-- Page Content -->
    <div class="container">

        <div class="row">
        <?php include(TEMPLATE_FRONT .DS. "side_nav.php")?>


           <!---categories here-->

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                    <?php include(TEMPLATE_FRONT .DS. "slider.php")?>
                         </div>
                </div>

<div class="row">
<?php get_products(); ?>


                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Cannot find the book you are looking for?</a>
                        </h4>
                        <p>If you like this website you, then check out our partners<a target="_blank" href="https://www.amazon.com/Computers-Technology-Books/b/ref=amb_link_16?ie=UTF8&node=5&pf_rd_m=ATVPDKIKX0DER&pf_rd_s=merchandised-search-leftnav&pf_rd_r=S3NDP2RVVBG2HABSK0XC&pf_rd_r=S3NDP2RVVBG2HABSK0XC&pf_rd_t=101&pf_rd_p=236809c3-4466-4af6-b74a-f71840acc8fd&pf_rd_p=236809c3-4466-4af6-b74a-f71840acc8fd&pf_rd_i=465600"> Amazon Books</a> on STEM books!</p>
                        <a class="btn btn-primary" target="_blank" href="https://www.amazon.com/Computers-Technology-Books/b/ref=amb_link_16?ie=UTF8&node=5&pf_rd_m=ATVPDKIKX0DER&pf_rd_s=merchandised-search-leftnav&pf_rd_r=S3NDP2RVVBG2HABSK0XC&pf_rd_r=S3NDP2RVVBG2HABSK0XC&pf_rd_t=101&pf_rd_p=236809c3-4466-4af6-b74a-f71840acc8fd&pf_rd_p=236809c3-4466-4af6-b74a-f71840acc8fd&pf_rd_i=465600">View now</a>
                    </div>

                </div><!----row end here-->

            </div>

        </div>

    </div>
    <!-- /.container -->
    <?php include(TEMPLATE_FRONT .DS. "footer.php")?>
    </div>

    