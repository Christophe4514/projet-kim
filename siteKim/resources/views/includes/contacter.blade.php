<section id="main-container" class="main-container">
    <div class="container">

        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">Rechercher Nos Locaux</h2>
                <h3 class="section-sub-title">trouver Notre Localisation</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-md-4">
                <div class="ts-service-box-bg text-center h-100">
                    <span class="ts-service-icon icon-round">
                        <i class="fas fa-map-marker-alt mr-0"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h4>Visiter Nos Buraux</h4>
                        <p>Kinshasa, kin 94126, RDC</p>
                    </div>
                </div>
            </div><!-- Col 1 end -->

            <div class="col-md-4">
                <div class="ts-service-box-bg text-center h-100">
                    <span class="ts-service-icon icon-round">
                        <i class="fa fa-envelope mr-0"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h4>Envoyer Nous Un Mail</h4>
                        <p>office@Constra.com</p>
                    </div>
                </div>
            </div><!-- Col 2 end -->

            <div class="col-md-4">
                <div class="ts-service-box-bg text-center h-100">
                    <span class="ts-service-icon icon-round">
                        <i class="fa fa-phone-square mr-0"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h4>Appeler Nous</h4>
                        <p>(+243) 810-000-000</p>
                    </div>
                </div>
            </div><!-- Col 3 end -->

        </div><!-- 1st row end -->

        <div class="gap-60"></div>

        <div class="google-map">
            <div id="map" class="map" data-latitude="-4.322447" data-longitude="15.307045"
                data-marker="images/marker.png" data-marker-name="Constra"></div>
        </div>

        <div class="gap-40"></div>

        <div class="row bg-light">
            <div class="col-md-12">
                <h3 class="column-title">Nous Ecrire Via Le Formulaire</h3>
                <form id="contact-form" action="#" method="post" role="form">
                    <div class="error-container"></div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control form-control-name" name="name" id="name"
                                    placeholder="" type="text" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control form-control-email" name="email" id="email"
                                    placeholder="" type="email" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Subject</label>
                                <input class="form-control form-control-subject" name="subject" id="subject"
                                    placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10"
                            required></textarea>
                    </div>
                    <div class="text-center"><br>
                        <button class="btn btn-primary solid blank" type="submit">Send Message</button>
                    </div>
                </form>
            </div>

        </div><!-- Content row -->
    </div><!-- Conatiner end -->
</section>
