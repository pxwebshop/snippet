<?php 
$pageid = "movie002";
$scss = "dev/scss/3_project/_movie.scss";
$myPath = __FILE__;

$menuOff = true;

?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>
<!-- Responsive 3 -->

<section class="background-movie">
    <div class="background-movie__header">
        <a href="/movie/movie002.php"><h1>vietnamese food</h1></a>
    </div>
    <div class="c-movie3">
        <div class="c-movie3__container">
            <iframe
                src="https://www.youtube.com/embed/hyrsMKhaQJM?autoplay=1&playlist=hyrsMKhaQJM&loop=1"
                width="1903" 
                height="1071"
                frameborder="0"
                allowFullScreen
            >
            </iframe>
        </div>       
    </div>
    <div class="c-movie3__ttl">
    <a href="http://www.vietnam-guide.com/vietnam-top10s/best-vietnamese-food.htm" target="_blank"><h2>Love roll, noodles or noodle soup?<br/>Welcome to VietNam</h2></a>
    </div>
</section>

<br>
<br>
<br>
<br>
<p style="text-align: center;">Main contents here</p>
<br>
<br>
<br>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>