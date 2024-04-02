<section class="about section-padding" id="section_2">
    <div class="container">
        <div class="row">
            {{-- @dd($aboutSection); --}}
            <div class="col-lg-6 col-12">
                <h2 class="mb-5">Digital Happiness</h2>
            </div>

            <div class="col-lg-4 col-12 ms-lg-auto mb-5 mb-lg-0">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-intro-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-intro" type="button" role="tab" aria-controls="nav-intro"
                            aria-selected="true">Introduction</button>

                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                            type="button" role="tab" aria-controls="nav-profile"
                            aria-selected="false">Profile</button>

                        <button class="nav-link" id="nav-faq-tab" data-bs-toggle="tab" data-bs-target="#nav-faq"
                            type="button" role="tab" aria-controls="nav-faq" aria-selected="false">FAQs</button>
                    </div>
                </nav>
            </div>

            <div class="col-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-intro" role="tabpanel"
                        aria-labelledby="nav-intro-tab">
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                                <img src="{{ asset('assets/guest/images/webpage-browser-digital-icon-symbols-concept.jpg') }}"
                                    class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-5 col-12 m-auto">
                                <h3 class="mb-3">{{ $aboutSection->introHeadings }}</h3>

                                <p>We want you to be happy with our Tween Agency services. Our digital agency is
                                    ready to serve you to grow your business in a healthy way.</p>

                                <p>This is Bootstrap 5 HTML template for your website provided by <a rel="nofollow"
                                        href="https://www.tooplate.com/" target="_blank">Tooplate</a>. You can download,
                                    edit and use this layout
                                    for your company website.</p>

                                <p>Image credits go to <a rel="nofollow" href="https://freepik.com/"
                                        target="_blank">FreePik</a> and <a rel="nofollow" href="https://unsplash.com/"
                                        target="_blank">Unsplash</a> for images
                                    used in this template. We really appreciate these stock image websites for
                                    providing free photos to everyone.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row">
                            <div class="col-lg-5 col-12 m-auto">
                                <h3 class="mb-3">Marie Smarty, CEO</h3>

                                <p>Our priority is your happiness working together with us. We guarantee you the
                                    best service quality from us. Feel free to talk to us via email, twitter, or
                                    linkedin.</p>

                                <ul class="social-icon mt-lg-5 mt-3">
                                    <li class="me-3"><strong>Where to find?</strong></li>

                                    <li><a href="https://twitter.com/search?q=tooplate"
                                            class="social-icon-link bi-twitter"></a></li>

                                    <li><a href="#" class="social-icon-link bi-linkedin"></a></li>

                                    <li><a href="#" class="social-icon-link bi-envelope"></a></li>
                                </ul>
                            </div>

                            <div class="col-lg-6 col-12 mt-lg-0 mt-4">
                                <img src="{{ asset('assets/guest/images/dream-about-working-corporation-became-true.jpg') }}"
                                    class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-faq" role="tabpanel" aria-labelledby="nav-faq-tab">
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                                <img src="{{ asset('assets/guest/images/php-programming-html-coding-cyberspace-concept.jpg') }}"
                                    class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-5 col-12 m-auto">
                                <h3 class="mb-3">Frequenlty Asked Questions</h3>

                                <div class="accordion" id="accordionGeneral">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accordionGeneralOne"
                                                aria-expanded="true" aria-controls="accordionGeneralOne">
                                                What is Tween Agency?
                                            </button>
                                        </h2>

                                        <div id="accordionGeneralOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionGeneral">

                                            <div class="accordion-body">
                                                <p class="large-paragraph"><strong>Tween Agency</strong> is free
                                                    HTML template powered by Bootstrap 5 CSS framework. This
                                                    means you can use all standard CSS classes provided by
                                                    Bootstrap version 5 to customize your CSS layout.</p>

                                                <p class="large-paragraph">You are allowed to use it for your
                                                    clients. You are not allowed to redistribute this template
                                                    ZIP file on any other template website. Please <a
                                                        href="https://www.tooplate.com/contact"
                                                        target="_blank"><strong>contact Tooplate</strong></a>
                                                    for more info.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accordionGeneralTwo"
                                                aria-expanded="false" aria-controls="accordionGeneralTwo">
                                                What are available services?
                                            </button>
                                        </h2>

                                        <div id="accordionGeneralTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionGeneral">

                                            <div class="accordion-body">
                                                <p class="large-paragraph">We provide full digital marketing
                                                    services for all various aspects of your company's web
                                                    presence and social medias. You have 100% peace of mind for
                                                    your company by working with us.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accordionGeneralThree"
                                                aria-expanded="false" aria-controls="accordionGeneralThree">
                                                How many successful projects?
                                            </button>
                                        </h2>

                                        <div id="accordionGeneralThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionGeneral">

                                            <div class="accordion-body">
                                                <p class="large-paragraph">We have over 280+ successful projects
                                                    for different companies. There are great experiences of
                                                    working together with different clients all over the world.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
