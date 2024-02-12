<!DOCTYPE html>
<html lang="en">
<!-- head-->
<?php include 'head.php';?>
<body>
    <!-- Responsive navbar-->
    <?php include 'nav-bar.php';?>


    <?php

    $date1 = '2015-01-01';

    $date2 = date("Y");

    $diff = abs(strtotime($date2)-strtotime($date1));

    $years = floor($diff / (365*60*60*24));?>

<!--     <section class="mb-0">
        <div class="container my-1">
            <div class="row justify-content-left mt-0 mb-5 pb-5 text-left">
                <div class="col-lg-6">
                    <br><br><br><br><br><br>
                    <h1 class="mb-0">"Henrique is an exceptional graphic designer with <?php echo $years; ?> years of experience. He is highly skilled, creative and has a discerning eye for impressionable design work."<br><span style="font-weight:200;">- Courtney Ellis, Creative Director</span><br><br><br></h1>
                        <h3 style="font-weight:200;">During my time as a designer I’ve curated books, designed brand identity, art directed cultural events, and coded websites. I’m passionate about using creativity as a powerful tool to problem-solve and am always delighted to take on a new project that can challenge me.<br>My heart belongs to design, art, photography, and food - and in my spare time you’ll find me flying a Cessna in the skies of Portugal.</span>
                    </h3><br><br>
                    <h5>Services
                        <span class="services"><br>Graphic Design<br>Visual Identity<br>Branding Design<br>E-commerce<br>Photography<br>Videography<br>Video Animation<br>Editorial Design<br>Art Direction<br>UI/UX<br>Web Coding</span></h5>
                    </div>
                    <div class="col-lg-1 mt-5 pt-2">
                    </div>
                    <div class="col-lg-5 mt-5 pt-2">
                        <img class="img-fluid" src="assets/portrait/portrait_henrique_almeida.jpg">
                    </div>
                </div>
            </div>
        </section> -->


        <!-- <section class="about">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-5">
                        <img src="assets/portrait/portrait_henrique_almeida.jpg" class="img-fluid portrait" alt="Portrait of Henrique">
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-6">
                        <h1 class="mb-0">"Henrique is an exceptional graphic designer with <?php echo $years; ?> years of experience. He is highly skilled, creative and has a discerning eye for impressionable design work."<br><a href="https://www.courtneybae.com/" target="blank" style="font-weight:200;" class="highlight">- Courtney Ellis, Creative Director</a></h1><br><br><br>
                        <h2 style="font-weight:200;">During my time as a designer I’ve curated books, designed brand identity, art directed cultural events, and coded websites. I’m passionate about using creativity as a <span class="highlight">powerful tool to problem-solve</span> and am always delighted to take on a new project that can challenge me.<br>My heart belongs to design, art, photography, and food - and in my spare time you’ll find me flying a Cessna in the skies of Portugal.</h2><br><br>
                        <h5>Services</h5>
                        <p class="services">
                            Graphic Design<br>
                            Visual Identity<br>
                            Branding Design<br>
                            E-commerce<br>
                            Photography<br>
                            Videography<br>
                            Video Animation<br>
                            Editorial Design<br>
                            Art Direction<br>
                            UI/UX<br>
                            Web Coding
                        </p>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="about">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-5">
                <div class="image-container">
                    <img src="assets/portrait/portrait_henrique_almeida.jpg" class="img-fluid portrait" alt="Portrait of Henrique">
                    <p class="image-description"></p>
                </div>
            </div>
            <div class="col-md-1">
                <!-- Intentional empty column for spacing -->
            </div>
            <div class="col-md-6">
                <h1 class="mb-0">"Henrique is an exceptional graphic designer with <?php echo $years; ?> years of experience. He is highly skilled, creative and has a discerning eye for impressionable design work."
                    <br><a href="https://www.courtneybae.com/" target="blank" style="font-weight:200;" class="highlight">- Courtney Ellis, Creative Director</a>
                </h1><br><br><br>
                <h2 style="font-weight:200;"><i>London, five years ago.</i><br>
Starting my journey in London serving on a terrace along the Thames and playing violin on the streets. I came with high aspirations in graphic design and to learn with the best, while Gemma was teaching me how to properly serve oysters and Prosecco. It was a tough balancing act of survival and networking.<br><br>

The goal was clear - <span class="highlight">to work with the best team in London to develop great design.</span><br><br>
This period was defined by persistence; 
I literally knocked on doors, seeking my break. My persistence never ended and it finally opened doors at <a class="link" href="motley.php" target="_blank">Motley London</a>, a jewellery start-up in its early stages. A start of something big. The best team I could ever have. In this vibrant startup, I not only advanced my design skills but also discovered the power of collaboration and lifelong learning.</h2><br><br>
                <h2 style="font-weight:200;">During my time as a designer I’ve curated books, designed brand identity, art directed cultural events, and coded websites. I’m passionate about using creativity as a <span class="highlight">powerful tool to problem-solve</span> and am always delighted to take on a new project that can challenge me.
                    <br>My heart belongs to design, art, photography, and food - and in my spare time you’ll find me flying a Cessna in the skies of Portugal.
                </h2><br><br>
                <h5>Services</h5>
                <p class="services">
                    <a href="motley.php">Graphic Design</a><br>
                     <a href="hadoc.php">Visual Identity</a><br>
                     <a href="congregados.php">Branding Design</a><br>
                     <a href="miguel-simoes.php">UI/UX</a><br>
                     <a href="ads.php">Motion Graphics</a><br>
                     <a href="bom-jesus.php">Editorial Design</a><br>
                     <a href="exhibitions.php">Art Direction</a><br>
                     <a href="index.php">Web Coding</a><br>
                     <a href="photography.php">Photography</a><br>
                </p>
            </div>
        </div>
    </div>
</section>




        <!-- Footer-->
        <?php include 'footer.php';?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
    </html>
