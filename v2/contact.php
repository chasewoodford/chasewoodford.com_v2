<!-- Contact Section
================================================== -->
<section id="contact">
    <div class="row section-head">
        <div class="two columns header-col">
            <h1><span>Get In Touch.</span></h1>
        </div>
        <div class="ten columns">
            <h2>Say Hello</h2>

            <p>
                I'm always happy to chat. Feel free to drop me a line. I do my best to get back to everyone who takes
                the time to get in touch with me. And though I do have a full time job, I always entertain conversations
                about taking on freelance work, helping out with open source projects or anything else that may be on
                your mind. There's nothing better than talking a little shop.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="eight columns">

            <!-- Form -->
            <form action="" method="post" id="contactForm" name="contactForm">
                <fieldset>
                    <div>
                        <label for="contactName">Name <span class="required">*</span></label>
                        <input type="text" value="" size="35" id="contactName" name="contactName">
                    </div>
                    <div>
                        <label for="contactEmail">Email <span class="required">*</span></label>
                        <input type="text" value="" size="35" id="contactEmail" name="contactEmail">
                    </div>
                    <div>
                        <label for="contactSubject">Subject</label>
                        <input type="text" value="" size="35" id="contactSubject" name="contactSubject">
                    </div>
                    <div>
                        <label for="contactMessage">Message <span class="required">*</span></label>
                        <textarea cols="50" rows="15" id="contactMessage" name="contactMessage"></textarea>
                    </div>
                    <div>
                        <button class="submit"><i class="fa fa-paper-plane"></i>&nbsp;Submit</button>
                            <span id="image-loader">
                                <img alt="" src="<?php bloginfo('template_directory'); ?>/images/loader.gif">
                            </span>
                    </div>
                </fieldset>
            </form><!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">Error boy</div>

            <!-- contact-success -->
            <div id="message-success"><i class="fa fa-check"></i>Your message was sent, thank you!<br></div>
        </div>
        <aside role="complementary" class="four columns">
            <div>
                <h4>Address and Phone</h4>

                <p class="address">
                    Chase Woodford<br/>
                    1414 Lincoln Drive W<br/>
                    Ambler, PA 19002 US<br/>
                    <a class="no-underline" href="https://goo.gl/maps/s0BJc"><i class="fa fa-map-marker"></i>Google Map</a><br/>
                    <a class="no-underline" href="tel:+17179033168"><i class="fa fa-phone"></i>(717) 903-3168</a><br/>
                    <a class="no-underline" href="https://twitter.com/intent/tweet?screen_name=chase1263070"><i class="fa fa-twitter"></i>@chase1263070</a>
                </p>
            </div>
        </aside>
    </div>
</section><!-- Contact End -->