<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Eko Irwanda</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="https://partosa-html.netlify.app/assets/css/fontawesome.min.css"/>
        <link rel="stylesheet" href="https://partosa-html.netlify.app/assets/css/style.css"/>

        <link rel="stylesheet" href="https://partosa-html.netlify.app/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://partosa-html.netlify.app/assets/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://partosa-html.netlify.app/assets/css/animate.css">
        <link rel="stylesheet" href="https://partosa-html.netlify.app/assets/css/lightgallery.min.css">
        <link rel="stylesheet" href="https://partosa-html.netlify.app/assets/css/style.css">
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="cs_preloader cs_accent_color cs_primary_font">
            <div class="cs_preloader_in">E</div>
        </div>

        <header class="cs_site_header cs_style_1 cs_transparent_header cs_primary_color cs_sticky_header">
        <div class="cs_main_header">
            <div class="container">
            <div class="cs_main_header_in">
                <div class="cs_main_header_right">
                <nav class="cs_nav cs_semibold">
                    <ul class="cs_nav_list">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#resume">RESUME</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                        <li><a href="{{ route('tugas') }}">CRUD (TUGAS)</a></li>
                    </ul>
                </nav>
                </div>
            </div>
            </div>
        </div>
        </header>

        <section class="cs_hero cs_style_2 cs_center position-relative cs_hobble text-center" id="home">
        <div class="container position-relative">
            <div class="cs_hero_text position-relative">
            <h1 class="cs_hero_title cs_fs_90 cs_mb_18">Hi, I am <span>Eko Irwanda</span></h1>
            <p class="cs_hero_subtitle cs_mb_45">I am a frontend web developer. I can provide clean code and pixel perfect design. <br>I also make website more & more interactive with web animations.</p>
            </div>
        </div>
        <div id="particles-js"></div>
        </section>

        <section class="cs_ternary_bg" id="about">
            <div class="cs_height_145 cs_height_lg_70"></div>
            <div class="container">
              <div class="cs_section_heading cs_style_1 text-center">
                <p class="cs_section_subtitle cs_accent_color cs_mb_16 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">About Me</p>
                <h2 class="cs_section_title cs_fs_67 mb-0">Unveiling the <br>Layers of My Story</h2>
              </div>
              <div class="cs_height_95 cs_height_lg_50"></div>
              <div class="row align-items-center cs_gap_y_50">
                <div class="col-lg-12">
                  <div class="cs_about_info">
                    <p class="cs_mb_38">I am Eko Irwanda, graduate of Vocational School in 2019. Have work experience as a Quality Control (QC) at PT Wahyu Abadi, PT Sumber Alfaria Trijaya Tbk. as Crew Store with achievement of 90% work efficiency using Point Of Sale Program to organize and listed the job, PT Tempo Group as a Production Operator. I have an interest in a career as a production Operator and am proficient in using Microsoft Office Tools</p>
                    <div class="cs_height_37 cs_height_lg_30"></div>
                    <div class="cs_gradient_seperator"></div>
                    <div class="cs_height_33 cs_height_lg_30"></div>
                    <ul class="cs_list cs_style_3 cs_mp_0">
                      <li>Email : <a href="mainto:partosa@gmail.com">ekoirwanda@gmail.com</a></li>
                      <li>Phone : <a href="tel:+44232178736">+62 8531 1407 8788</a></li>
                      <li>Location : ID (Indonesia)</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="cs_height_150 cs_height_lg_80"></div>
          </section>




          <section id="resume" class="cs_ternary_bg">
            <div class="container">
              <div class="cs_section_heading cs_style_2">
                <div class="cs_section_heading_left">
                  <p class="cs_section_subtitle cs_accent_color cs_mb_16 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Resume</p>
                <h2 class="cs_section_title cs_fs_67 mb-0">Education And Experience</h2>
                </div>
              </div>
              <div class="cs_height_95 cs_height_lg_50"></div>
              <div class="row cs_gap_y_50">
                <div class="col-lg-6">
                  <h3 class="cs_fs_37 cs_mb_66 cs_mb_lg_35">Education</h3>
                  <ul class="cs_list cs_style_1 cs_mp_0">
                    <li>
                      <p class="cs_mb_30 cs_mb_lg_15">2022 - Now</p>
                      <h3 class="cs_fs_28 cs_mb_11">Computer Science</h3>
                      <p class="mb-0">University of Bhayangkara Jakarta Raya</p>
                    </li>
                    <li>
                      <p class="cs_mb_30 cs_mb_lg_15">2016 - 2019</p>
                      <h3 class="cs_fs_28 cs_mb_11">Social Sciences Program</h3>
                      <p class="mb-0">SMAN 02 Tambun Utara</p>
                    </li>
                    <li>
                      <p class="cs_mb_30 cs_mb_lg_15">2013 - 2016</p>
                      <h3 class="cs_fs_28 cs_mb_11">General Studies</h3>
                      <p class="mb-0">SMPN 03 Tambun Utara</p>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <div class="cs_pl_100">
                    <h3 class="cs_fs_37 cs_mb_66 cs_mb_lg_35">Experience</h3>
                    <ul class="cs_list cs_style_1 cs_mp_0">
                      <li>
                        <p class="cs_mb_30 cs_mb_lg_15">2022 - NOW</p>
                        <h3 class="cs_fs_28 cs_mb_11">Production Operator</h3>
                        <p class="mb-0">PT. Tempo Group</p>
                      </li>
                      <li>
                        <p class="cs_mb_30 cs_mb_lg_15">2019 - 2021</p>
                        <h3 class="cs_fs_28 cs_mb_11">Crew Store</h3>
                        <p class="mb-0">PT. Sumber Alfaria Trijaya Tbk.</p>
                      </li>
                      <li>
                        <p class="cs_mb_30 cs_mb_lg_15">2019 - 2019</p>
                        <h3 class="cs_fs_28 cs_mb_11">Quality Control</h3>
                        <p class="mb-0">PT. Wahyu Abadi</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="cs_height_135 cs_height_lg_70"></div>

          </section>

          <footer class="cs_footer" id="contact">
            <div class="cs_height_142 cs_height_lg_75"></div>
            <div class="container">
              <div class="row cs_reverse_col_lg cs_gap_y_50">
                <div class="col-lg-6 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
                  <div class="cs_contact_info_wrap">
                    <div>
                      <h2 class="cs_fs_67 mb-0">let’s do something awesome</h2>
                      <div class="cs_height_84 cs_height_lg_50"></div>
                      <ul class="cs_contact_info_list cs_mp_0">
                        <li>
                          <span class="cs_contact_icon"><img src="assets/img/icons/map.svg" alt=""></span>
                          <div class="cs_contact_info_right">
                            <h3 class="cs_fs_28 cs_mb_14">Address</h3>
                            <p class="mb-0">Karangsatria, Kec. Tambun Utara, Kabupaten Bekasi, Jawa Barat 17510</p>
                          </div>
                        </li>
                        <li>
                          <span class="cs_contact_icon"><img src="assets/img/icons/phone-email.svg" alt=""></span>
                          <div class="cs_contact_info_right">
                            <h3 class="cs_fs_28 cs_mb_14">Phone & Email</h3>
                            <p class="mb-0">
                                <a href="tel:+44232178736">+62 8531 1407 8788</a><br>
                              <a href="mainto:loramendiz@gmail.com">ekoirwanda@gmail.com</a>
                            </p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                  <div class="cs_pl_100">
                    <form action="#">
                      <div class="cs_mb_18">
                        <label>Full Name*</label>
                        <input type="text" class="cs_form_field">
                      </div>
                      <div class="cs_mb_18">
                        <label>Email*</label>
                        <input type="email" class="cs_form_field">
                      </div>
                      <div class="cs_mb_18">
                        <label>Mobile*</label>
                        <input type="text" class="cs_form_field">
                      </div>
                      <div class="cs_mb_25">
                        <label>Write Project Details*</label>
                        <textarea cols="30" rows="5" class="cs_form_field"></textarea>
                      </div>
                      <button class="cs_btn cs_style_1 cs_type_2 cs_accent_btn cs_radius_15">Send Message</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="cs_height_150 cs_height_lg_80"></div>
            <div class="cs_copyright_wrap">
              <div class="container">
                <div class="cs_copyright">Copyright © 2024 Eko Irwanda. All rights reserved.</div>
              </div>
            </div>
          </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

        <script src="https://partosa-html.netlify.app/assets/js/jquery-3.6.0.min.js"></script>
        <script src="https://partosa-html.netlify.app/assets/js/wow.min.js"></script>
        <script src="https://partosa-html.netlify.app/assets/js/lightgallery.min.js"></script>
        <script src="https://partosa-html.netlify.app/assets/js/particles.min.js"></script>
        <script src="https://partosa-html.netlify.app/assets/js/ripples.min.js"></script>
        <script src="https://partosa-html.netlify.app/assets/js/gsap.min.js"></script>
        <script src="https://partosa-html.netlify.app/assets/js/main.js"></script>
    </body>
</html>
