        <footer class="footer-area section-gap"> <!-- start footer Area -->

        </footer> <!-- End footer Area -->


        <!-- Jquery needed -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/sample.js"></script>
        <script src="js/scripts.js"></script>

        <!-- Fonction pour ajouter un fond noir sur la navbar -->
        <script>
            $(window).scroll(function() {
                if ($(document).scrollTop() > 50) {
                    $('.nav').addClass('affix');
                    console.log("OK");
                } else {
                    $('.nav').removeClass('affix');
                }
            });
        </script>
        <!-- JavaScripts ========================== -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../../../assets/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="../../../assets/js/vendor/bootstrap.min.js"></script>
        <script src="../../../assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="../../../assets/js/owl.carousel.min.js"></script>
        <script src="../../../assets/js/jquery.nice-select.min.js"></script>
        <script src="../../../assets/js/jquery.magnific-popup.min.js"></script>
        <script src="../../../assets/js/main.js"></script>
    </body>
</html>