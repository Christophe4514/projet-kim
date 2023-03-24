<footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-6 footer-widget footer-about">
                    <h3 class="widget-title">A Propos</h3>
                    <img loading="lazy" width="200px" class="footer-logo" src="{{ asset('front-end/images/logoValide2.jpeg') }}"
                        alt="Constra">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done
                        idunt ut
                        labore et dolore magna aliqua.</p>
                    <div class="footer-social">
                        <ul>
                            <li><a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" aria-label="Github"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div><!-- Footer social end -->
                </div><!-- Col end -->

                <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                    <h3 class="widget-title">Notre Horaire</h3>
                    <div class="working-hours">
                        Nous sommes ouvert 7 / 7 jours, chaque jour excepté les jours feriés.contactez-nous en cas
                        d'urgence, avec Notre
                        numéro ou par le formulaire de contact.
                        <br><br> Lundi - Vendredi: <span class="text-right">10:00 - 16:00 </span>
                        <br> Samedi: <span class="text-right">12:00 - 15:00</span>
                        <br> Dimanche: <span class="text-right">09:00 - 12:00</span>
                    </div>
                </div><!-- Col end -->

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                    <h3 class="widget-title">Services</h3>
                    <ul class="list-arrow">
                        @foreach ($servicesName as $item)
                            <li><a href="#">{{ $item->service_name }} </a></li>
                        @endforeach
                    </ul>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright" style="background-color: #1c1c1d;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="copyright-info text-white">
                        <span>Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>, Designed &amp; Developed by <a
                                href="mailto:Kimengineering15@gmail.com">Kim Engineering</a>
                        </span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="footer-menu text-center text-md-right">
                        <ul class="list-unstyled text-white">
                            <li><a href="{{ url('/about') }}">A propos de nous</a></li>
                            <li><a href="{{url('/temoignage')}}">Temoignage</a></li>
                            <li><a href="{{ url('/faq') }}">Faq</a></li>
                            <li><a href="{{ url('/project') }}">Projets</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- Row end -->

            <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                <button class="btn btn-primary" title="Back to Top">
                    <i class="fa fa-angle-double-up"></i>
                </button>
            </div>

        </div><!-- Container end -->
    </div><!-- Copyright end -->
</footer>
