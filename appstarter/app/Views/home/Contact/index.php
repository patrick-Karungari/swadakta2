  <head>
      <title><?php echo $site_title ?? "Home - Swadakta";?></title>
  </head>
  <!-- subscription area start -->
  <section id="subscribe-area" class="wow animate fadeInDown" data-wow-delay="2s" data-wow-duration="2s">
      <div class="container mt-1">
          <div class="row">
              <div class="col-sm-12">
                  <div class="subscribe-wrapper home-style-2 ptb-40">
                      <div class="row">
                          <div class="col-sm-4">
                              <div class="subscribe-text">
                                  <h2>Subscribe Now</h2>
                              </div>
                          </div>
                          <div class="col-sm-8">
                              <div class="subscribe-box">
                                  <form class="subscription-form" method="POST" action="php/subscribe.php">
                                      <input type="email" class="form-control" id="subscribe-input"
                                          name="subscribe-input" placeholder="Enter Your Email Address">
                                      <button class="email-submit-btn" type="submit"><i
                                              class="icofont icofont-paper-plane"></i></button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- subscription area end -->
  <!-- contact area start -->
  <section id="contact-area" class="bounceInDown wow" data-wow-delay="0.5s">
      <div class="contact-box home-style-2">
          <div class="container">
              <div class="contact-box-inner">
                  <div class="row">
                      <div class="col-sm-7">
                          <div class="get-in-touch p-100">
                              <h2>Get in Touch</h2>
                              <form id="appai-contact-form" action="mailto" method="POST" name="appai_message_form">
                                  <div class="form-group">
                                      <input type="text" name="name" class="form-control" id="name"
                                          placeholder="Your Name*" required>
                                      <div class="form-grad-border"></div>
                                  </div>
                                  <div class="form-group">
                                      <input type="text" name="subject" class="form-control" placeholder="Your Subject">
                                      <div class="form-grad-border"></div>
                                  </div>
                                  <div class="form-group">
                                      <input type="email" name="email" class="form-control" id="email"
                                          placeholder="Email Address*" required>
                                      <div class="form-grad-border"></div>
                                  </div>
                                  <div class="form-group">
                                      <input type="tel" name="phone" class="form-control" id="phone"
                                          placeholder="Your phone number*" required>
                                      <div class="form-grad-border"></div>
                                  </div>

                                  <div class="form-group">
                                      <textarea name="message" class="form-control" rows="3"
                                          placeholder="Write Message*" required></textarea>
                                      <div class="form-grad-border"></div>
                                  </div>
                                  <button type="submit" class="btn btn-style-2">SEND MESSAGE</button>
                                  <p class="appai-form-send-message"></p>
                              </form>
                          </div>
                      </div>
                      <div class="col-sm-5">
                          <div class="address-box p-100">
                              <h2>Address</h2>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicin elit, sed do eiusmod tempor
                                  incididunt ut labore et dolore magna aliqua.</p>
                              <ul class="address-info">
                                  <li class="phone-number">
                                      <div class="info-icon dsp-tc">
                                          <i class="icofont icofont-phone"></i>
                                      </div>
                                      <div class="info-details dsp-tc">
                                          <p>+0044 545 989 626</p>
                                      </div>
                                  </li>
                                  <li class="email-address">
                                      <div class="info-icon dsp-tc">
                                          <i class="icofont icofont-paper-plane"></i>
                                      </div>
                                      <div class="info-details dsp-tc">
                                          <p>marveltheme@gmail.com</p>
                                      </div>
                                  </li>
                                  <li class="address">
                                      <div class="info-icon dsp-tc">
                                          <i class="icofont icofont-social-google-map"></i>
                                      </div>
                                      <div class="info-details dsp-tc">
                                          <p>28 Green Tower, Street Name
                                              <br>New York City, USA
                                          </p>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- map area end -->
