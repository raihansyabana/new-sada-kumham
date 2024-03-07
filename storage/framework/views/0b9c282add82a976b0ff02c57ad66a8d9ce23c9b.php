<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="assets/icons/ic-logo-kemenkumham.ico">
  <title>New Satu Data Kumham</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Google fonts-->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet" type="text/css" /> -->

  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light p-3 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="assets/images/im-logo-sada-kumham.png" height="60" width="150" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/dataset">DATASET</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/visual">VISUALISASI DATA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/about">TENTANG SADA KUMHAM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="https://de.kemenkumham.go.id/login">DASHBOARD EXECUTIVE</a>
          </li>
        </ul>
      </div>

      <a class="navbar-brand">
        <img src="assets/images/im-logo-satudata.png" height="70" width="110" alt=""></a>

      <a class="navbar-brand">
        <img src="assets/images/im-tagline-kumhampasti.png" height="70" width="70" alt=""></a>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Masthead-->
  <section id="homepage-banner" style="background-color: #1A89E1;">
    <div class="jumbotron py-3 min-vh-70 font-family-lato text-white">
      <div class="container content align-items-center">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6">
            <div class="row align-self-center">
              <h1 class="title">Satu Data Untuk Kemenkumham</h1>
              <p class="description font-family-lato" style="margin-top: 30px;"> Kumpulan berbagai informasi dan data Kementerian Hukum dan HAM dalam satu portal untuk mewujudkan e-governance yang lebih baik.</p>

              <div class="input-group group-filter mb-4 pr-lg-5">
                <div class="d-flex flex-grow-1 mb-sm-0 mb-3" style="margin-top: 80px;">
                  <input name="search" type="text" class="form-control input-search font-family-lato text-primary" placeholder="Cari Informasi atau Data">

                  <div class="input-group-append">
                    <span class="input-group-text search-button-holder">
                      <button class="btn btn-primary btn-search" src="assets/icons/ic-search.png" style="border-radius: 70px">
                        <i class="fas fa-search"></i>

                      </button></span>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-none d-sm-block h-60">
            <img loading="lazy" src="assets/images/im-asn-vector.png" alt="" class="img-fluid image mr-lg-n5" style="margin-top: 150px; margin-bottom: 50px">
          </div>

        </div>
      </div>
    </div>
  </section>

  <section id="homepage-profil-pimpinan">
    <div class="container py-5">
      <div class="header d-sm-block d-md-flex align-items-center">
        <h1 class="title text-nero font-family-lato fw-bold">Profil Pimpinan</h1>
      </div>

      <div class="btn-group py-5">
        <button type="button" class="btn btn-light border-secondary" style="padding-right: auto; background-color: #FFFFFF;">Sekretariat Jenderal</button>
        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #000633;">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>

        <ul class="dropdown-menu dropdown-menu-lg-end">
          <li><a class="dropdown-item" href="#">Inspektorat Jenderal</a></li>
          <li><a class="dropdown-item" href="#">Ditjen Administrasi Hukum Umum</a></li>
          <li><a class="dropdown-item" href="#">Ditjen Pemasyarakatan</a></li>
          <li><a class="dropdown-item" href="#">Ditjen Imigrasi</a></li>
          <li><a class="dropdown-item" href="#">Ditjen Kekayaan Intelektual</a></li>
          <li><a class="dropdown-item" href="#">Ditjen Peraturan Perundang-undangan</a></li>
          <li><a class="dropdown-item" href="#">Ditjen Hak Asasi Manusia</a></li>
          <li><a class="dropdown-item" href="#">Badan Pembinaan Hukum Nasional</a></li>
          <li><a class="dropdown-item" href="#">Badan Penelitian dan Pengembangan Hukum dan Hak Asasi Manusia</a></li>
          <li><a class="dropdown-item" href="#">Badan Pengembangan Sumber Daya Manusia Hukum dan Hak Asasi Manusia</a></li>
        </ul>

      </div>

      <div class="struktur-organisasi ">
        <img class="image img-fluid center" alt="" src="assets/images/im-strukturorganisasi-pusdatin.png" style="width: auto; margin-top: auto">
      </div>

    </div>
  </section>

  <section id="homepage-data-insight">
    <div class="container py-5">
      <div class="header d-sm-block d-md-flex align-items-center">
        <h1 class="title text-nero font-family-lato fw-bold">Data Insight</h1>
      </div>

      <div class="data-insight-setjen py-5">
        <div class="tableauPlaceholder" id="viz1708956427470" style="position: relative; border: 1px solid rgb(204, 204, 204); border-radius: 20px; width: 100%">

          <noscript>
            <a href='#'>
              <img alt='Dashboard Sekretariat Jenderal ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;Dashboard-Sekjen-Kumham&#47;Dashboard1&#47;1_rss.png' style='border: none' />
            </a></noscript>

          <object class='tableauViz' style='display:none;'>
            <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
            <param name='embed_code_version' value='3' />
            <param name='site_root' value='' />
            <param name='name' value='Dashboard-Sekjen-Kumham&#47;Dashboard1' />
            <param name='tabs' value='no' />
            <param name='toolbar' value='top' />
            <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;Dashboard-Sekjen-Kumham&#47;Dashboard1&#47;1.png' />
            <param name='animate_transition' value='yes' />
            <param name='display_static_image' value='yes' />
            <param name='display_spinner' value='yes' />
            <param name='display_overlay' value='yes' />
            <param name='display_count' value='yes' />
            <param name='language' value='en-US' />
            <param name='filter' value=':original_view=yes' />
          </object>
        </div>

        <script type='text/javascript'>
          var divElement = document.getElementById('viz1708956427470');
          var vizElement = divElement.getElementsByTagName('object')[0];
          if (divElement.offsetWidth > 800) {
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
          } else if (divElement.offsetWidth > 500) {
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
          } else {
            vizElement.style.width = '100%';
            vizElement.style.height = '1627px';
          }
          var scriptElement = document.createElement('script');
          scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
          vizElement.parentNode.insertBefore(scriptElement, vizElement);
        </script>
      </div>

    </div>
  </section>


  <section id="sp-bottom" style="background-color: #000633;">

    <div class="container py-5">
      <div class="container-inner">

        <div class="row">
          <div id="sp-bottom1" class="col-sm-col-sm-6 col-lg-3 ">
            <div class="sp-column ">
              <div class="sp-module ">
                <div class="sp-module-content">

                  <div class="maps-translate-middle">
                    <iframe style="border:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3096736414504!2d106.82969571464817!3d-6.222836062678549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f39909f5d6c1%3A0x9cebbc570bfdfb2b!2sKementerian%20Hukum%20dan%20Hak%20Asasi%20Manusia%20Republik%20Indonesia!5e0!3m2!1sid!2sid!4v1645462609874!5m2!1sid!2sid" width="280" height="300" frameborder="0" allowfullscreen=""></iframe></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="sp-bottom2" class="col-sm-col-sm-6 col-lg-5 ">
            <div class="sp-column ">
              <div class="sp-module-title-bawah">
                <div class="sp-module-content">

                  <div class="custom-title-bawah">
                    <table>
                      <tbody>
                        <tr>
                          <td>
                            <h5><img src="assets/images/im-logo-kemenkumham.png" alt="" width="42" height="44"></h5>
                          </td>
                          <td>
                            <h5>&nbsp;</h5>
                          </td>
                          <td style="text-align: left;" colspan="7">
                            <h6><span style="color: #FFFFFF;"><strong>KEMENTERIAN HUKUM DAN HAK ASASI MANUSIA</strong></span></h6>
                            <h6><span style="color: #F50F0E;"><strong>REPUBLIK</strong></span> &nbsp; <span style="color: #FFFFFF;"><strong>INDONESIA</strong></span></h6>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="sp-module">
                <div class="sp-module-content">

                  <div class="custom my-4">
                    <table>
                      <tbody>
                        <tr>
                          <td style="text-align: left;"><img src="assets/icons/ic-office.png" alt="" width="18" height="25">&nbsp;</td>
                          <td style="text-align: left;">&nbsp;</td>
                          <td style="text-align: left; color: #FFFFFF;">JL. Rasuna Said Kav 6-7 Kuningan<br>Jakarta Selatan, DKI Jakarta - 12940</td>
                        </tr>
                        <tr>
                          <td style="padding-top: 20px; text-align: left;"><img src="assets/icons/ic-call.png" alt="" width="20" height="20"></td>
                          <td style="text-align: left;">&nbsp;</td>
                          <td style="text-align: left; color: #FFFFFF; padding-top: 20px;">021 - 5253004</td>
                        </tr>
                        <tr>
                          <td style="padding-top: 20px; text-align: left;"><img src="assets/icons/ic-website.png" alt="" width="18" height="20"></td>
                          <td style="text-align: left;">&nbsp;</td>
                          <td style="text-align: left; padding-top: 20px;"><a href="mailto:rohumas@kemenkumham.go.id" style="color: #FFFFFF;">rohumas@kemenkumham.go.id</a></td>
                        </tr>
                        <tr>
                          <td style="padding-top: 20px; text-align: left;"><img src="assets/icons/ic-website.png" alt="" width="18" height="20"></td>
                          <td style="text-align: left;">&nbsp;</td>
                          <td style="text-align: left; padding-top: 20px;"><a href="mailto:pengaduan.setjen@kemenkumham.go.id" style="color: #FFFFFF;">pengaduan.setjen@kemenkumham.go.id</a></td>
                        </tr>
                      </tbody>
                    </table>
                    <p>&nbsp;</p>
                    <table>
                      <tbody>
                        <tr>
                          <td><a href="https://www.facebook.com/KemenkumhamRIofficial/"><img src="assets/icons/ic-facebook.png" alt="" width="32" height="32"></a></td>
                          <td>&nbsp;</td>
                          <td><a href="https://twitter.com/Kemenkumham_RI"><img src="assets/icons/ic-twitter.png" alt="" width="32" height="32"></a></td>
                          <td>&nbsp;</td>
                          <td><a href="https://www.instagram.com/kemenkumhamri/"><img src="assets/icons/ic-instagram.png" alt="" width="32" height="32"></a></td>
                          <td>&nbsp;</td>
                          <td><a href="https://www.linkedin.com/company/kementerian-hukum-dan-hak-asasi-manusia-republik-indonesia/"><img src="assets/icons/ic-linkedin.png" alt="" width="35" height="35"></a></td>
                          <td>&nbsp;</td>
                          <td><a href="https://www.youtube.com/channel/UCmJMRZ62mvUVc9bqEYScDyA"><img src="assets/icons/ic-youtube.png" alt="" width="35" height="35"></a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="sp-bottom3" class="col-lg-4 ">
            <div class="sp-column">
              <div class="sp-module">
                <h3 class="sp-module-title text-light">LINK PENELUSURAN</h3>
                <div class="sp-module-content me-10">
                  <ul class="other-menu-web py-3">
                    <li class="item-dataset"><a href="/dataset" style="color: #FFFFFF;">DATASET</a></li>
                    <li class="item-vis-data"><a href="/visual" style="color: #FFFFFF;">VISUALISASI DATA</a></li>
                    <li class="item-tentang-sada"><a href="/about" style="color: #FFFFFF;">TENTANG SADA KUMHAM</a></li>
                    <li class="item-dash-exe"><a href="https://de.kemenkumham.go.id/login" style="color: #FFFFFF;">DASHBOARD EXECUTIVE</a></li>
                    <li class="item-ofc-kemenkumham"><a href="https://www.kemenkumham.go.id/" style="color: #FFFFFF;">OFFICIAL WEBSITE KEMENKUMHAM</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH C:\Users\RAIHAN\Documents\new-sada-kumham\resources\views/welcome.blade.php ENDPATH**/ ?>