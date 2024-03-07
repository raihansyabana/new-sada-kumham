<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
        <img src="assets/images/im-logo-sada-kumham.png" href="/" height="60" width="150" alt=""></a>
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

      <a class="navbar-brand" href="#">
        <img src="assets/images/im-logo-satudata.png" height="70" width="110" alt=""></a>

      <a class="navbar-brand" href="#">
        <img src="assets/images/im-tagline-kumhampasti.png" height="70" width="70" alt=""></a>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Masthead-->
  <section id="homepage-banner" style="background-color: #F3D10D;">
    <div class="jumbotron py-3 min-vh-90 font-family-lato">
      <div class="container content align-items-center">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6 mt-5">
            <div class="row align-self-center">
              <h1 class="title text-light" style="margin-top: 200px; text-align:center">Visualisasi Data</h1>
              <p class="description font-family-lato" style="margin-top: 10px;"></p>

              <div class="input-group group-filter mb-4 pr-lg-5">
                <div class="d-flex flex-grow-1 mb-sm-0 mb-3" style="margin-top: 80px;">

                  <div class="input-group-append">

                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-none d-sm-block h-60">
            <img loading="lazy" src="assets/images/im-statistics-vector.png" alt="" class="img-fluid image mr-lg-n5" style="margin-top: 150px; margin-bottom: 50px">
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- content -->

  <section class="page-visual">
    <div class="container-1 py-5">
        
      <div class="wrap">
        <div class="search">
          <input type="text" class="searchTerm" placeholder="Cari Visualiasi Data">
          <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>

      <button type="button" class="btn btn-light border-secondary" style="margin-left: 55%; padding-right: 30%; background-color: #FFFFFF;">Urutkan Berdasarkan</button>
      <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #000633;">
        <span class="visually-hidden">Toggle Dropdown</span>
      </button>

      <ul class="dropdown-menu dropdown-menu-lg-end">
        <li><a class="dropdown-item" href="#">Tree Chart</a></li>
        <li><a class="dropdown-item" href="#">Bar Chart</a></li>
        <li><a class="dropdown-item" href="#">Log Chart</a></li>
        <li><a class="dropdown-item" href="#">Pie Chart</a></li>
        <li><a class="dropdown-item" href="#">Column Chart</a></li>
        <li><a class="dropdown-item" href="#">Line Chart</a></li>
        <li><a class="dropdown-item" href="#">Scatter Chart</a></li>

      </ul>

    </div>
  </section>

  <section class="cardss">

    <div class="blog-card">
      <div class="meta">
        <div class="photo" style="background-image: url(assets/images/im-pie-chart.png)"></div>
        <ul class="details">
          <li class="author"><a href="#">Rifqy</a></li>
          <li class="date">January 18, 2019</li>


        </ul>
      </div>
      <div class="description">
        <h1>Visualisasi Data</h1>
        <h2>Pie Chart</h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
        <p class="read-more">
          <a href="#">Read More</a>
        </p>
      </div>
    </div>

    <div class="blog-card alt">
      <div class="meta">
        <div class="photo" style="background-image: url(assets/images/im-bar-chart.png)"></div>
        <ul class="details">
          <li class="author"><a href="#">Rifqy</a></li>
          <li class="date">January 18, 2019</li>

        </ul>
      </div>
      <div class="description">
        <h1>Visualisasi Data</h1>
        <h2>Bar Chart</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
        <p class="read-more">
          <a href="#">Read More</a>
        </p>
      </div>
    </div>

    <div class="blog-card">
      <div class="meta">
        <div class="photo" style="background-image: url(assets/images/im-tree-map.png)"></div>
        <ul class="details">
          <li class="author"><a href="#">Rifqy</a></li>
          <li class="date">January 18, 2019</li>


        </ul>
      </div>
      <div class="description">
        <h1>Visualisasi Data</h1>
        <h2>Tree Map</h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
        <p class="read-more">
          <a href="#">Read More</a>
        </p>
      </div>
    </div>


    <div class="blog-card alt">
      <div class="meta">
        <div class="photo" style="background-image: url(assets/images/im-line-chart.png)"></div>
        <ul class="details">
          <li class="author"><a href="#">Rifqy</a></li>
          <li class="date">January 18, 2019</li>

        </ul>
      </div>
      <div class="description">
        <h1>Visualisasi Data</h1>
        <h2>Line Chart</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
        <p class="read-more">
          <a href="#">Read More</a>
        </p>
      </div>
    </div>

  </section>

  <section>
    <div class="pagination justify-content-center">
      <a href="#">&laquo;</a>
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#">5</a>
      <a href="#">6</a>
      <a href="#">&raquo;</a>
    </div>

  </section>
  <!-- content -->

  <!-- footer -->
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

</html>