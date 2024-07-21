<!-- Footer -->
<footer class="footer-shop">
    <div class="container">
        <div class="row">

            <!-- Contact -->
            <div class="col-md-4">
                <h4>PT. MUSTWILL INTERNASIONAL</h4>
                <p><b>Address:</b> Jl. Rose Garden 2 No.73, RT.002/RW.017, Jaka Setia,
                    Kec. Bekasi Selatan, Kota Bks, Jawa Barat 17148</p>
                <p><b>Phone:</b> 021-82746788</p>
                <p><b>Email:</b> mustwill@gmail.com</p>
                <div class="social-links"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-linkedin"></i></a> <a href="#."><i class="fa fa-pinterest"></i></a> <a href="#."><i class="fa fa-instagram"></i></a> <a href="#."><i class="fa fa-google"></i></a> </div>
            </div>

            <!-- Categories -->
            <div class="col-md-3">
                <h4>RESIDENTIAL AC</h4>
                <ul class="links-footer">
                    <li><a href="#.">AC Split</a></li>
                    <li><a href="#.">AC Multi Split</a></li>
                    <li><a href="#.">Pasang AC</a></li>
                    <li><a href="#.">AC Portable</a></li>
                    <li><a href="#.">Air Purifier & Air Curtain</a></li>
                    <li><a href="#.">Cuci AC</a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div class="col-md-3">
                <h4>PROYEK AC</h4>
                <ul class="links-footer">
                    <li><a href="#.">Informasi Proyek Pasang AC</a></li>
                    <li><a href="#.">AC Floor Standing</a></li>
                    <li><a href="#.">AC Cassette</a></li>
                    <li><a href="#.">AC Ceiling</a></li>
                    <li><a href="#.">AC Ducting</a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div class="col-md-2">
                <h4>INFO PERUSAHAAN</h4>
                <ul class="links-footer">
                    <li><a href="#.">Tentang Kami</a></li>
                    <li><a href="#.">Kontak Kami</a></li>
                    <li><a href="#.">Lokasi Toko</a></li>
                    <li><a href="#.">Kebijakan Privasi</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Rights -->
<div class="rights">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <p>Copyright ©Laptopia 2024</p>
            </div>
            <!--<div class="col-sm-6 text-right"> <img src="<?= BASEURL; ?>/images/card-icon.png" alt=""> </div>-->
        </div>
    </div>
</div>

<!-- End Footer -->

<!-- GO TO TOP  -->
<a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a>
<!-- GO TO TOP End -->
</div>
<!-- End Page Wrapper -->

<!-- JavaScripts -->
<script src="<?= BASEURL; ?>/js/vendors/jquery/jquery.min.js"></script>
<script src="<?= BASEURL; ?>/js/vendors/wow.min.js"></script>
<script src="<?= BASEURL; ?>/js/vendors/bootstrap.min.js"></script>
<script src="<?= BASEURL; ?>/js/vendors/jquery.magnific-popup.min.js"></script>
<script src="<?= BASEURL; ?>/js/vendors/own-menu.js"></script>
<script src="<?= BASEURL; ?>/js/vendors/jquery.sticky.js"></script>
<script src="<?= BASEURL; ?>/js/vendors/owl.carousel.min.js"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="<?= BASEURL; ?>/rs-plugin/js/jquery.tp.t.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/rs-plugin/js/jquery.tp.min.js"></script>
<script src="<?= BASEURL; ?>/js/main.js"></script>
<script>
    jQuery(document).ready(function($) {

        //  Price Filter ( noUiSlider Plugin)
        $("#price-range").noUiSlider({
            range: {
                'min': [0],
                'max': [1000]
            },
            start: [40, 940],
            connect: true,
            serialization: {
                lower: [
                    $.Link({
                        target: $("#price-min")
                    })
                ],
                upper: [
                    $.Link({
                        target: $("#price-max")
                    })
                ],
                format: {
                    // Set formatting
                    decimals: 2,
                    prefix: '$'
                }
            }
        })
    })
</script>
</body>

</html>