<?php 
include("header.php");
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Solutions For Your Business</h1>
          <h2>We are team of talented designers and developers making your business stands out in the job market</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="book.php" class="btn-get-started scrollto">Get In Touch</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

   

     <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Get In Touch</h2>
          <p>We will be more than happy to do business with you. Lay all the stress in getting your business online, providing you with a compelling website, developing great content and awesome creatives while you concentrate your time and energy on managing your business and day to day activities. GO DIGITAL</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>PLT 435 Henry-Street, Madina- La Nkwantanang, Accra-Ghana</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@techinnova.net || techinnova@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+233 (0) 24 954 4164 / 559783643 / 203645745</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127059.37084580459!2d-0.250229982591708!3d5.625134153433522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9b25dece923f%3A0x928807e525c239df!2sTech%20Innova!5e0!3m2!1sen!2sgh!4v1647078605351!5m2!1sen!2sgh" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>
            
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms.php" method="post" role="form" class="php-email-for">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Contact Number</label>
                <input type="number" class="form-control" id="subject" name="subject" required>
              </div>
              
              <div class="row">
                <div class="form-group col-md-6">
                <label for="name">Country</label>
                <input type="text" class="form-control" id="country" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Services</label>
                <select class="form-control" id="service" >
                  <option value="0">Select Service</option>
                  <option value="Software development">Software development</option>
                  <option value="Web Design & Development">Web Design & Development</option>
                  <option value="Digital Marketing">Digital Marketing</option>
                  <option value="Content writing">Content writing</option>
                  <option value="Content writing">Branding & Creative designs</option>
                  <option value="Content writing">Business consulting</option>
                  <option value="Content writing">Executive assistance</option>
                  <option value="Content writing">Recruiting</option>
                  <option value="Content writing">Team management</option>
                  <option value="Content writing">Administrative assistance</option>
                </select>
              </div>
              </div>
              
              <div class="form-group">
                <label for="name">Additional Info</label>
                <textarea id="allTxt" class="form-control" rows="10" required></textarea>
                 <textarea id="allInputs" class="form-control" name="message" rows="10" style="display: none;"></textarea>
              </div>
              <div class="my-3">
                <div class="loading"></div>
                <div class="error-message"></div>
                <div class="sent-message"></div>
              </div>
              <div class="text-center" onclick="service()"><button type="submit" name="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
  

  

   

   

  </main><!-- End #main -->

<?php 
include("footer.php");
?>

</body>

</html>