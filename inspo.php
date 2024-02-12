<!DOCTYPE html>
<html lang="en">
    <!-- head-->
    <?php include 'head.php';?>
<body>
    <!-- Responsive navbar-->
    <?php include 'nav-bar.php';?>

    <!-- Header - set the background image for the header in the line below-->
    <section class="mb-0">
        <div class="container my-1">
            <div class="row justify-content-left mt-0 mb-5 pb-5 text-left">
                <div class="col-lg-3">
                    <br><br><br><br><br><br>
                    <h2>A splash of inspiration</h2>
                    <h4 class="mb-0"></h4><br><br>
                </div>
                <div class="col-lg-9">
                    <img onclick="history.back()" class="img-fluid" src="assets/state-of-art/img – 1.jpg">
                </div>
            </div>
        </div>
    </section>

<!-- <section class='py-5 mt-5 mb-5'>
        <img onclick='history.back()' class='img-fluid img-content d-flex p-2' src='assets/state-of-art/img – 1.jpg'>
        </section> -->

        <?php

for ($i = 2; $i < 44; $i++) {

?>

<section class='py-5 mt-5 mb-5 state-of-art'>
     <img onclick='history.back()' class='img-fluid img-content d-flex p-2' src='assets/state-of-art/img – <?php printf("%01d\n", $i)?>.jpg' alt='Henrique Almeida Graphic Design'>
 </section>

<?php
}
?>



        <!-- Back-->
        <?php include 'back.php';?>

        <!-- Footer-->
        <?php include 'footer.php';?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
    </html>
