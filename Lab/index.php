<?php

session_start();
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="../Admin/style.css">
  <link rel="icon" href="../images/logo2.png" type="image/gif" sizes="16x16">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <title>Document</title>
</head>

<body>
  <header>
    <nav>
      <div class="logo">
      <img width="50px"    data-aos="fade-left" src="../images/logo.png" width="300px" ; alt="">
      </div>
      <div>
        <ul>
          <a style="color:#ffffff" href="../Admin/">خروج</a>
          <a style="color:#ffffff" href="#Part">شركائنا</a>
          <a style="color:#ffffff" href="#who">من نحن</a>
          <a style="color:#ffffff" href="index.php">الرئيسية</a>
          <a style="color:#ffffff" href="lab.php">
            <img width="50px" style="border-radius:50%" src="../images/<?php echo $_SESSION['logged_user']['img']; ?>" alt="">
          </a>
        </ul>
      </div>
    </nav>
  </header>
  <section class="body">
  <iframe src='https://my.spline.design/untitled-181e978c3e5a70f1fdc0743fe959b947/' 
frameborder='0' ></iframe>
  </section>

  <section  class="who_are">
    <div>
      <img data-aos="fade-left" src="../images/b1ea61166699829.Y3JvcCwxMjAwLDkzOCwwLDA.png" width="300px" ; alt="">
    </div>
    <div data-aos="fade-right" class="text">
      <h2>من مكان واحد<br> احجز الكل .. تحاليل وأشعة </h2>
      <p>تقدم موقعنا خدمات شاملة لحجز معامل التحاليل والأشعة. يمكن للمستخدمين البحث في قاعدة بياناتنا للمعامل المتاحة والعثور على المواقع القريبة منهم. يمكنهم حجز موعد تحليل أو جلسة أشعة بسهولة وسرعة عبر الموقع. نحن نضمن التعامل مع معامل ذات جودة عالية ومعتمدة، تقدم خدمات طبية متخصصة وفحوصات دقيقة. نحرص على توفير بيئة آمنة ونظيفة وفريق طبي متخصص يهتم براحة وصحة المرضى. بفضل موقعنا، يمكن للمستخدمين تجنب الانتظارات الطويلة والتنقلات الزائدة، وبدلاً من ذلك يتمتعون بتجربة حجز مريحة وفعالة</p>
    </div>
  </section>

  <section>
    <div data-aos="fade-up" class="about_us">
      <h2>:لماذا معملكم</h2>
      <p>
        نحن نفخر بتقديم خدمات حجز معامل التحاليل والأشعة عبر موقعنا الإلكتروني. نهدف إلى تسهيل عملية الحجز وتوفير تجربة مريحة وسلسة للمرضى. نحن ندرك أن الحجز التقليدي في المعامل الطبية يمكن أن يكون مرهقًا ويستهلك الوقت، ولذا قمنا بتطوير هذا الموقع لتوفير حلاً مبتكرًا وذكيًا للحجز عبر الإنترنت.
      </p>
    </div>
  </section>

  <section class="photos">
    <div class="images">
      <img data-aos="fade-up-right" src="../images/1234809-تحاليل.jpg" alt="">
      <img data-aos="fade-up-left" src="../images/2018_4_27_8_5_3_643.jpg" alt="">
      <img data-aos="fade-up-right" src="../images/pexels-karolina-grabowska-4226924.jpg" alt="">
    </div>
    <section class="photos">
      <div class="images">
        <img data-aos="fade-up-right" src="../images/تسويق-طبي.jpg" alt="">
        <img data-aos="fade-up-left" src="../images/pngtree-a-doctor-holds-a-test-tube-with-a-blood-sample-for-hepatic-testing-wearing-a-protective-mask-and-glasses-photo-image_34314534.jpg" alt="">
        <img data-aos="fade-up-right" src="../images/cbc-test-price-in-egypt.jpg" alt="">
      </div>
    </section>

    <section id="Part" class="partner">
      <div>
        <h2>شركائنا</h2>
      </div>
      <div class="images">
        <img data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" src="../images/WhatsApp Image 2023-09-25 at 17.52.16_92ef70af.jpg" alt="">
        <img data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" src="../images/WhatsApp Image 2023-09-25 at 17.52.17_8ebc7912.jpg" alt="">
        <img data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" src="../images/WhatsApp Image 2023-09-25 at 17.52.17_afde9bbc.jpg" alt="">
        <img data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" src="../images/WhatsApp Image 2023-09-25 at 17.52.17_b4517abf.jpg" alt="">
      </div>
    </section>
    <section class="photos">
      <div>
        <h2 id="who" data-aos="fade-up">من نحن </h2>
        <p data-aos="fade-up">
        يقدم موقعنا خدمات شاملة لحجز معامل التحاليل والأشعة <br> 
        يمكن للمستخدمين البحث في قاعدة بياناتنا للمعامل المتاحة والعثور على المواقع القريبة منهم <br>
        يمكنهم حجز موعد تحليل أو جلسة أشعة بسهولة وسرعة عبر الموقع <br>
        نحن نضمن التعامل مع معامل ذات جودة عالية ومعتمدة<br>
        تقدم خدمات طبية متخصصة وفحوصات دقيقة <br>
        نحرص على توفير بيئة آمنة ونظيفة وفريق طبي متخصص يهتم براحة وصحة المرضى. بفضل موقعنا<br>
        يمكن للمستخدمين تجنب الانتظارات الطويلة والتنقلات الزائدة وبدلاً من ذلك يتمتعون بتجربة حجز مريحة
      </div>
      <div class="images">
        <img data-aos="fade-up-right" src="../images/hossam2.jpg" alt="">
        <img data-aos="fade-up-right" src="../images/mohamed.jpg" alt="">
      </div>
      <div class="images">
        <img data-aos="fade-up-right" src="../images/hager2.jpg" alt="">
        <img data-aos="fade-up-right" src="../images/eman.jpg" alt="">
        <img data-aos="fade-up-right" src="../images/safa.jpg" alt="">
      </div>
    </section>



    <!-- Site footer -->
    <!-- Footer -->
    <footer data-aos="fade-up" data-aos="zoom-in" class="text-center text-lg-start bg-light text-muted">
      <!-- Section: Social media -->
      <section style="background-color:#046998;" class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block" >
          <span style="color: #ffffff;  margin-left: 110px;">تواصل معنا على شبكات التواصل الاجتماعي</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div style="color: #ffffff;  margin-right: 120px;">
          <a style="text-decoration: none;color:#ffffff" href="" class="me-4 text-reset">
            <i style="color: #ffffff;" class="fa-brands fa-facebook"></i>
          </a>
          <a style="text-decoration: none;" href="" class="me-4 text-reset">
            <i style="color: #ffffff;" class="fab fa-twitter"></i>
          </a>
          <a style="text-decoration: none;" href="" class="me-4 text-reset">
            <i style="color: #ffffff;" class="fab fa-google"></i>
          </a>
          <a style="text-decoration: none;" href="" class="me-4 text-reset">
            <i style="color: #ffffff;" class="fab fa-instagram"></i>
          </a>
          <a style="text-decoration: none;" href="" class="me-4 text-reset">
            <i style="color: #ffffff;" class="fab fa-linkedin"></i>
          </a>
          <a style="text-decoration: none;" href="" class="me-4 text-reset">
            <i style="color: #ffffff;" class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-">
              <i class="fa-solid fa-flask-vial" style="color: #1eff00;"></i>UR-LAB
              </h6>
              <p>
              هنا يمكنك العثور على خدمات مذهلة يقدمها فريق عمل مذهل على مدار 24 ساعة لمساعدتك خلال محاولات الحجز الخاصة بك وتوفير أموالك ووقتك
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <!-- <h6 class="text-uppercase fw-bold mb-4">
                Products
              </h6> -->
              <p>
                <a href="#!" class="text-reset"></a>
              </p>
              <p>
                <a href="#!" class="text-reset"></a>
              </p>
              <p>
                <a href="#!" class="text-reset"></a>
              </p>
              <p>
                <a href="#!" class="text-reset"></a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <!-- <h6 class="text-uppercase fw-bold mb-4">
                Useful links
              </h6> -->
              <p>
                <a href="#!" class="text-reset"></a>
              </p>
              <p>
                <a href="#!" class="text-reset"></a>
              </p>
              <p>
                <a href="#!" class="text-reset"></a>
              </p>
              <p>
                <a href="#!" class="text-reset"></a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">تواصل معنا</h6>
              <p><i class="fas fa-home me-3"></i> Aswan, Egypt</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                ur_lab@gmail.com
              </p>
              <p><i class="fas fa-phone me-3"></i> + 011 234 567 88</p>
              <p><i class="fas fa-print me-3"></i> + 010 234 567 89</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2023 By UR-LAB:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/"></a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script>
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();

          const targetId = this.getAttribute('href').substring(1);
          const targetElement = document.getElementById(targetId);

          if (targetElement) {
            window.scrollTo({
              top: targetElement.offsetTop,
              behavior: 'smooth'
            });
          }
        });
      });
    </script>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</html>