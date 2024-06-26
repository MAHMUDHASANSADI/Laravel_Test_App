<section class="section-padding" id="section_6">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-10 col-12 mx-auto">
                <h2 class="mb-4 text-center">Let's chat</h2>

                <form class="custom-form" role="form" action="" method="post">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 my-2">
                            <label class="mb-2" for="name">Full Name</label>

                            <input type="text" name="name" id="name" class="form-control" required="">
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 my-2">
                            <label class="mb-2" for="email">Email Address</label>

                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                class="form-control" required="">
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 my-2">
                            <label class="mb-2" for="subject">How did you know about us?</label>

                            <select class="form-select form-control" name="subject" id="subject">
                                <option selected="">Choose a subject</option>
                                <option value="web+search">Website Searches</option>
                                <option value="social+media">Social Media</option>
                                <option value="others">Others</option>
                            </select>
                        </div>

                        <div class="col-12 my-2">
                            <label class="mb-2" for="message">Tell us about the project</label>

                            <textarea class="form-control" rows="5" id="message" name="message"></textarea>

                            <button type="submit" class="form-control mt-4" id="submit">Submit</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
