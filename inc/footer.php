    <!-- Satrt Footer Section -->
    <!-- Footer -->
    <footer class=" py-5 footer-section">


        <!-- Section: Links  -->

        <div class="container">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-4">
                    <!-- Content -->
                    <div class="footer-text-box text-center wow animate__animated animate__backInLeft">
                        <img src="../images/fortuneLogo.gif" class="footer-logo" alt="">
                       
                    </div>
                </div>


                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <!-- Links -->
               <div class="footer-text-box wow animate__animated animate__backInUp">
                   <ul class="">
                       <li class=""><a href="#">Who we Are</a></li>
                       <li><a href="#">How we Work</a></li>
                       <li><a href="#">Join Our Community</a></li>
                       <li><a href="#"><img src="../images/fortune_empire_login-35.jpg" alt=""></a></li>
                   </ul>
               </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-4">
                    <div class="footer-text-box wow animate__animated animate__backInRight">
                        <ul class="">
                            <li><a href="#">Success Stories</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>

                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>

        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-right text-white p-4" style="background-color: rgba(0, 0, 0, 0.05);">
           <p>Copyright © 2022 Fortune Empire, LLC</p>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- end Footer Section -->
    


    <!-- Jquery js link -->
    <script src="../js/jquery.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/calculator.js"></script>

    <script src="../js/scroll-to-top.js"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'en'
                },
                'google_translate_element'
            );
        }
    </script>

    <script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit">
    </script>
    <script>
        var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null // optional scroll container selector, otherwise use window
  }
);
wow.init();
    </script>


    <!-- header navigation js code -->
    <script>
        $(document).ready(function () {


            /*mobile menu*/
            $('.menu-icon').on('click', function () {
                $('.mobile-menu').toggleClass('mobile-menu-active');
            });
            $('.mm-ci').on('click', function () {
                $('.mobile-menu').toggleClass('mobile-menu-active');
            });


        });
    </script>


    <script>
        $(document).ready(function () {
            // Add minus icon for collapse element which is open by default
            $(".collapse.show").each(function () {
                $(this).prev(".menu-link").find(".fa-minus").addClass("fa-minus").removeClass(
                    "fa-plus");
            });

            // Toggle plus minus icon on show hide of collapse element
            $(".collapse").on('show.bs.collapse', function () {
                $(this).prev(".menu-link").find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
            }).on('hide.bs.collapse', function () {
                $(this).prev(".menu-link").find(".fa-minus").removeClass("fa-minus").addClass(
                    "fa-plus");
            });
            /*mobile-menu-click*/
            $('.mmenu-btn').click(function () {
                $(this).toggleClass("menu-link-active");

            });
        });
    </script>
    <!-- What Say People js extra code -->
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 1,
                    nav: false,
                    loop: true
                }
            }
        })
    </script>
    <script>
        function scrollToTop() {
            window.scrollTo(0, 0);
        }
    </script>
    
   
   
    

</body>
</html>