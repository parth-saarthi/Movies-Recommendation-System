<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MY SHOW</title>
    <link rel="stylesheet" href="style.css">
    <!---we had linked our css file----->
</head>

<body>
    <div class="full-page">
        <div class="navbar">
            <a href="homepage.php"><img src="myshow.jpg" style="height:45px"></a>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='homepage.php'>HOME</a></li>
                    <li><a href='about.php'>ABOUT US</a></li>
                    <li><a href='help.php'>HELP</a></li>
                    <li><a href='homepage.php'>LOGOUT</a></li>
                </ul>
            </nav>
        </div>
        <div class="slideshow-container" id="slideshow">
            <div class="mySlides fade">
                <img src="C:\Users\himan\Downloads\comedy.jpg" style="width:1000px">
                <div class="btn"><a class="buttons" href="comedy.html">COMEDY</a></div>
            </div>
            <div class="mySlides fade">
                <img src="C:\Users\himan\Downloads\adventure.jpg" style="width:100%">
                <div class="btn"><a class="buttons" href="adventure.html">ADVENTURE</a></div>
            </div>
            <div class="mySlides fade">
                <img src="C:\Users\himan\Downloads\techno.jpg" style="width:100%">
                <div class="btn"><a class="buttons" href="technology.html">TECHNOLOGY</a></div>
            </div>
            <div class="mySlides fade">
                <img src="C:\Users\himan\Downloads\h.jpg" style="width:100%">
                <div class="btn"><a class="buttons" href="horror.html">HORROR</a></div>
            </div>
            <div class="mySlides fade">
                <img src="C:\Users\himan\Downloads\kids-zone-children-entertaiment-cartoons_18591-51530.jpg"
                    style="width:100%">
                <div class="btn"><a class="buttons" href="children's.html">CHILDREN'S</a></div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <script>
            let slideIndex = 0;
            let timeoutId = null;
            const slides = document.getElementsByClassName("mySlides");
            showSlides();
            function currentSlide(index) {
                slideIndex = index;
                showSlides();
            }
            function plusSlides(step) {

                if (step < 0) {
                    slideIndex -= 2;

                    if (slideIndex < 0) {
                        slideIndex = slides.length - 1;
                    }
                }

                showSlides();
            }
            function showSlides() {
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                slides[slideIndex - 1].style.display = "block";
                if (timeoutId) {
                    clearTimeout(timeoutId);
                }
                timeoutId = setTimeout(showSlides, 5000); // Change image every 3 seconds
            }
        </script>
    </div>
</body>

</html>
