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
  <section id="homepage-banner" style="background-color: #428371;">
    <div class="jumbotron py-3 min-vh-90 font-family-lato">
      <div class="container content align-items-center">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6 mt-5">
            <div class="row align-self-center">
              <h1 class="title text-light" style="margin-top: 50px; text-align:center">Dataset</h1>

            </div>
          </div>

          <div class="col-lg-6 d-none d-sm-block h-60">
            <img loading="lazy" src="assets/images/im-statistics-vector.png" alt="" class="img-fluid image mr-lg-n5" style="margin-top: 150px; margin-bottom: 50px">
          </div>

        </div>
      </div>
    </div>
  </section>

  <section id="dataset-pencarian">
    <div class="container py-5">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-6">
            <div class="input-group d-inline-flex p-2">
              <div class="form-outline" data-mdb-input-init>
                <input id="search-input" type="search" id="form1" class="form-control border-secondary" placeholder="Cari Dataset" style="padding-right: 300px" />
              </div>
              <button id="search-button" type="button" class="btn" style="background-color: #000633;">
                <i class="fa fa-search" style="color:white">></i>
              </button>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="btn-group d-inline-flex p-2">
              <button type="search" class="btn btn-light border-secondary" style="padding-right: 400px; background-color: #FFFFFF;">Urutkan Berdasarkan</button>
              <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #000633;">
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>

              <ul class="dropdown-menu dropdown-menu-lg-end">
                <li><a class="dropdown-item" href="#">Default</a></li>
                <li><a class="dropdown-item" href="#">Relevansi</a></li>
                <li><a class="dropdown-item" href="#">Nama A-Z</a></li>
                <li><a class="dropdown-item" href="#">Nama Z-A</a></li>
                <li><a class="dropdown-item" href="#">Data Terbaru</a></li>
                <li><a class="dropdown-item" href="#">Data Terlama</a></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="dataset-container">
    <div class="container align-middle">
      <div class="sdp-topic-row row">

        <div class="col-lg-3">
          <div class="sdp-heading">
            <h1>Pencarian Kategori</h1>
          </div>
          <div class="sdp-section-list">
            <div class="sdp-section-list_header flex-row-between bg-secondary">
              <div class="sdp-section-list_title fw-bold">Wilayah</div>
              <div class="icon-box right"><svg width="12" height="3" viewBox="0 0 12 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 1.2C0 0.88174 0.105357 0.576516 0.292893 0.351472C0.48043 0.126428 0.734784 0 1 0H11C11.2652 0 11.5196 0.126428 11.7071 0.351472C11.8946 0.576516 12 0.88174 12 1.2C12 1.51826 11.8946 1.82348 11.7071 2.04853C11.5196 2.27357 11.2652 2.4 11 2.4H1C0.734784 2.4 0.48043 2.27357 0.292893 2.04853C0.105357 1.82348 0 1.51826 0 1.2Z" fill="var(--black-dark)"></path>
                </svg></div>
            </div>

            <div class="sdp-section-list_options">
              <div class="sdp-section-list_option-item">Provinsi DI Yogyakarta<div class="sdp-section-list_tag">475</div>
              </div>
              <div class="sdp-section-list_option-item">Provinsi DKI Jakarta<div class="sdp-section-list_tag">769</div>
              </div>
              <div class="sdp-section-list_option-item">Provinsi Banten<div class="sdp-section-list_tag">350</div>
              </div>
              <div class="sdp-section-list_option-item">Provinsi Jawa Barat<div class="sdp-section-list_tag">554</div>
              </div>
              <div class="sdp-section-list_option-item">Provinsi Jawa Timur<div class="sdp-section-list_tag">287</div>
              </div>
              <div class="sdp-section-list_option-item">Provinsi Sumatera Utara<div class="sdp-section-list_tag">400</div>
              </div>
              <div class="sdp-section-list_option-item show-more">Lainnya</div>
            </div>
          </div>

          <div class="sdp-section-list mt-8">
            <div class="sdp-section-list_header flex-row-between bg-secondary">
              <div class="sdp-section-list_title fw-bold">Tahun</div>
              <div class="icon-box right"><svg width="12" height="3" viewBox="0 0 12 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 1.2C0 0.88174 0.105357 0.576516 0.292893 0.351472C0.48043 0.126428 0.734784 0 1 0H11C11.2652 0 11.5196 0.126428 11.7071 0.351472C11.8946 0.576516 12 0.88174 12 1.2C12 1.51826 11.8946 1.82348 11.7071 2.04853C11.5196 2.27357 11.2652 2.4 11 2.4H1C0.734784 2.4 0.48043 2.27357 0.292893 2.04853C0.105357 1.82348 0 1.51826 0 1.2Z" fill="var(--black-dark)"></path>
                </svg></div>
            </div>

            <div class="sdp-section-list_options">
              <div class="sdp-section-list_option-item">2023<div class="sdp-section-list_tag">610</div>
              </div>
              <div class="sdp-section-list_option-item">2022<div class="sdp-section-list_tag">308</div>
              </div>
              <div class="sdp-section-list_option-item">2021<div class="sdp-section-list_tag">240</div>
              </div>
              <div class="sdp-section-list_option-item">2020<div class="sdp-section-list_tag">156</div>
              </div>
              <div class="sdp-section-list_option-item">2019<div class="sdp-section-list_tag">901</div>
              </div>
              <div class="sdp-section-list_option-item show-more">Lainnya</div>
            </div>
          </div>

          <div class="sdp-section-list mt-8">
            <div class="sdp-section-list_header flex-row-between bg-secondary">
              <div class="sdp-section-list_title fw-bold">Kategori</div>
              <div class="icon-box right"><svg width="12" height="3" viewBox="0 0 12 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 1.2C0 0.88174 0.105357 0.576516 0.292893 0.351472C0.48043 0.126428 0.734784 0 1 0H11C11.2652 0 11.5196 0.126428 11.7071 0.351472C11.8946 0.576516 12 0.88174 12 1.2C12 1.51826 11.8946 1.82348 11.7071 2.04853C11.5196 2.27357 11.2652 2.4 11 2.4H1C0.734784 2.4 0.48043 2.27357 0.292893 2.04853C0.105357 1.82348 0 1.51826 0 1.2Z" fill="var(--black-dark)"></path>
                </svg></div>
            </div>

            <div class="sdp-section-list_options">
              <div class="sdp-section-list_option-item">Kepegawaian<div class="sdp-section-list_tag">610</div>
              </div>
              <div class="sdp-section-list_option-item">Anggaran<div class="sdp-section-list_tag">308</div>
              </div>
              <div class="sdp-section-list_option-item">Hukum<div class="sdp-section-list_tag">240</div>
              </div>
              <div class="sdp-section-list_option-item">Imigrasi<div class="sdp-section-list_tag">156</div>
              </div>
              <div class="sdp-section-list_option-item">Administrasi<div class="sdp-section-list_tag">901</div>
              </div>
              <div class="sdp-section-list_option-item">Pelayanan<div class="sdp-section-list_tag">901</div>
              </div>
              <div class="sdp-section-list_option-item show-more">Lainnya</div>
            </div>
          </div>

          <div class="sdp-section-list mt-8">
            <div class="sdp-section-list_header flex-row-between bg-secondary">
              <div class="sdp-section-list_title fw-bold">Format</div>
              <div class="icon-box right"><svg width="12" height="3" viewBox="0 0 12 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 1.2C0 0.88174 0.105357 0.576516 0.292893 0.351472C0.48043 0.126428 0.734784 0 1 0H11C11.2652 0 11.5196 0.126428 11.7071 0.351472C11.8946 0.576516 12 0.88174 12 1.2C12 1.51826 11.8946 1.82348 11.7071 2.04853C11.5196 2.27357 11.2652 2.4 11 2.4H1C0.734784 2.4 0.48043 2.27357 0.292893 2.04853C0.105357 1.82348 0 1.51826 0 1.2Z" fill="var(--black-dark)"></path>
                </svg></div>
            </div>

            <div class="sdp-section-list_options">
              <div class="sdp-section-list_option-item">WORD<div class="sdp-section-list_tag">610</div>
              </div>
              <div class="sdp-section-list_option-item">PPT<div class="sdp-section-list_tag">308</div>
              </div>
              <div class="sdp-section-list_option-item">CSV<div class="sdp-section-list_tag">240</div>
              </div>
              <div class="sdp-section-list_option-item">XLSX<div class="sdp-section-list_tag">156</div>
              </div>
              <div class="sdp-section-list_option-item">JPG<div class="sdp-section-list_tag">901</div>
              </div>
              <div class="sdp-section-list_option-item">PDF<div class="sdp-section-list_tag">901</div>
              </div>
              <div class="sdp-section-list_option-item show-more">Lainnya</div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="sdp-table sdp-table--card sdp-dataset__table sdp-table--highlight">
            <div class="sdp-table_table-wrapper">
              <div class="sdp-dataset__filters-wrapper"></div>
              <table role="table" class="table">
                <tbody role="rowgroup">
                  <tr role="row" class="">
                    <td role="cell">
                      <div class="row sdp-card-wrapped d-flex p-16 justify-content-between access-Terbuka">
                        <div class="col-sm-8 flex-column">
                          <div class="sdp-left-wrapper mb-16 mr-16">
                            <div style="display: flex;"></div>
                            <div style="display: flex;">
                              <div><button title="dataset" class="sdp-link border-0 bg-transparent p-0">
                                  <div class="mb-8 fs-15 fw-bold lh-19" style="text-align: left;">DATASET 1</div>
                                </button></div>
                            </div>
                            <div class="fs-14 lh-21 sdp-text-black-dark" style="min-height: 21px;">
                              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sapien rutrum, imperdiet quam eu, fringilla nibh. Vestibulum aliquam mauris ut nisi pretium interdum.</div>
                            </div>
                          </div>

                          <div class="d-flex flex-wrap" data-format="csv">
                            <div class="data-type mt-2">CSV &nbsp;</div>
                            <img src="assets/icons/ic-csv-file.png" alt="" width="45" height="45">
                          </div>
                        </div>

                        <div class="col-sm-4 dataset-row-right">
                          <div>
                            <div class="dataset-status access-Terbuka">Terbuka</div>
                          </div>
                          <div style="color: rgb(0, 102, 204);">Pemerintah Provinsi DI Yogyakarta</div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr role="row" class="">
                    <td role="cell">
                      <div class="row sdp-card-wrapped d-flex p-16 justify-content-between access-Terbuka">
                        <div class="col-sm-8 flex-column">
                          <div class="sdp-left-wrapper mb-16 mr-16">
                            <div style="display: flex;"></div>
                            <div style="display: flex;">
                              <div><button title="dataset" class="sdp-link border-0 bg-transparent p-0">
                                  <div class="mb-8 fs-15 fw-bold lh-19" style="text-align: left;">DATASET 2</div>
                                </button></div>
                            </div>
                            <div class="fs-14 lh-21 sdp-text-black-dark" style="min-height: 21px;">
                              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sapien rutrum, imperdiet quam eu, fringilla nibh.</div>
                            </div>
                          </div>

                          <div class="d-flex flex-wrap" data-format="csv">
                            <div class="data-type mt-2">CSV &nbsp;</div>
                            <img src="assets/icons/ic-csv-file.png" alt="" width="45" height="45">
                          </div>
                        </div>

                        <div class="col-sm-4 dataset-row-right">
                          <div>
                            <div class="dataset-status access-Terbuka">Terbuka</div>
                          </div>
                          <div style="color: rgb(0, 102, 204);">Pemerintah Provinsi DI Yogyakarta</div>
                        </div>
                      </div>
                    </td>
                  </tr>

                  <tr role="row" class="">
                    <td role="cell">
                      <div class="row sdp-card-wrapped d-flex p-16 justify-content-between access-Terbuka">
                        <div class="col-sm-8 flex-column">
                          <div class="sdp-left-wrapper mb-16 mr-16">
                            <div style="display: flex;"></div>
                            <div style="display: flex;">
                              <div><button title="dataset" class="sdp-link border-0 bg-transparent p-0">
                                  <div class="mb-8 fs-15 fw-bold lh-19" style="text-align: left;">DATASET 3</div>
                                </button></div>
                            </div>
                            <div class="fs-14 lh-21 sdp-text-black-dark" style="min-height: 21px;">
                              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sapien rutrum, imperdiet quam eu, fringilla nibh. Vestibulum aliquam mauris ut nisi pretium interdum.</div>
                            </div>
                          </div>

                          <div class="d-flex flex-wrap" data-format="word">
                            <div class="data-type mt-2">WORD &nbsp;</div>
                            <img src="assets/icons/ic-word-file.png" alt="" width="45" height="45">
                          </div>
                        </div>

                        <div class="col-sm-4 dataset-row-right">
                          <div>
                            <div class="dataset-status access-Terbuka">Terbuka</div>
                          </div>
                          <div style="color: rgb(0, 102, 204);">Pemerintah Provinsi DKI Jakarta</div>
                        </div>
                      </div>
                    </td>
                  </tr>

                  <tr role="row" class="">
                    <td role="cell">
                      <div class="row sdp-card-wrapped d-flex p-16 justify-content-between access-Terbuka">
                        <div class="col-sm-8 flex-column">
                          <div class="sdp-left-wrapper mb-16 mr-16">
                            <div style="display: flex;"></div>
                            <div style="display: flex;">
                              <div><button title="dataset" class="sdp-link border-0 bg-transparent p-0">
                                  <div class="mb-8 fs-15 fw-bold lh-19" style="text-align: left;">DATASET 4</div>
                                </button></div>
                            </div>
                            <div class="fs-14 lh-21 sdp-text-black-dark" style="min-height: 21px;">
                              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sapien rutrum, imperdiet quam eu, fringilla nibh.</div>
                            </div>
                          </div>

                          <div class="d-flex flex-wrap" data-format="word">
                            <div class="data-type mt-2">WORD &nbsp;</div>
                            <img src="assets/icons/ic-word-file.png" alt="" width="45" height="45">
                          </div>
                        </div>

                        <div class="col-sm-4 dataset-row-right">
                          <div>
                            <div class="dataset-status access-Terbuka">Terbuka</div>
                          </div>
                          <div style="color: rgb(0, 102, 204);">Pemerintah Provinsi DKI Jakarta</div>
                        </div>
                      </div>
                    </td>
                  </tr>

                  <tr role="row" class="">
                    <td role="cell">
                      <div class="row sdp-card-wrapped d-flex p-16 justify-content-between access-Terbuka">
                        <div class="col-sm-8 flex-column">
                          <div class="sdp-left-wrapper mb-16 mr-16">
                            <div style="display: flex;"></div>
                            <div style="display: flex;">
                              <div><button title="dataset" class="sdp-link border-0 bg-transparent p-0">
                                  <div class="mb-8 fs-15 fw-bold lh-19" style="text-align: left;">DATASET 5</div>
                                </button></div>
                            </div>
                            <div class="fs-14 lh-21 sdp-text-black-dark" style="min-height: 21px;">
                              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sapien rutrum, imperdiet quam eu, fringilla nibh. Vestibulum aliquam mauris ut nisi pretium interdum.</div>
                            </div>
                          </div>

                          <div class="d-flex flex-wrap" data-format="pdf">
                            <div class="data-type mt-2">PDF &nbsp;</div>
                            <img src="assets/icons/ic-pdf-file.png" alt="" width="45" height="45">
                          </div>
                        </div>

                        <div class="col-sm-4 dataset-row-right">
                          <div>
                            <div class="dataset-status access-Terbuka">Terbuka</div>
                          </div>
                          <div style="color: rgb(0, 102, 204);">Pemerintah Provinsi Banten</div>
                        </div>
                      </div>
                    </td>
                  </tr>

                  <tr role="row" class="">
                    <td role="cell">
                      <div class="row sdp-card-wrapped d-flex p-16 justify-content-between access-Terbuka">
                        <div class="col-sm-8 flex-column">
                          <div class="sdp-left-wrapper mb-16 mr-16">
                            <div style="display: flex;"></div>
                            <div style="display: flex;">
                              <div><button title="dataset" class="sdp-link border-0 bg-transparent p-0">
                                  <div class="mb-8 fs-15 fw-bold lh-19" style="text-align: left;">DATASET 6</div>
                                </button></div>
                            </div>
                            <div class="fs-14 lh-21 sdp-text-black-dark" style="min-height: 21px;">
                              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sapien rutrum, imperdiet quam eu, fringilla nibh. Vestibulum aliquam mauris ut nisi pretium interdum.</div>
                            </div>
                          </div>

                          <div class="d-flex flex-wrap" data-format="pdf">
                            <div class="data-type mt-2">PDF &nbsp;</div>
                            <img src="assets/icons/ic-pdf-file.png" alt="" width="45" height="45">
                          </div>
                        </div>

                        <div class="col-sm-4 dataset-row-right">
                          <div>
                            <div class="dataset-status access-Terbuka">Terbuka</div>
                          </div>
                          <div style="color: rgb(0, 102, 204);">Pemerintah Provinsi Banten</div>
                        </div>
                      </div>
                    </td>
                  </tr>

                  <tr role="row" class="">
                    <td role="cell">
                      <div class="row sdp-card-wrapped d-flex p-16 justify-content-between access-Terbuka">
                        <div class="col-sm-8 flex-column">
                          <div class="sdp-left-wrapper mb-16 mr-16">
                            <div style="display: flex;"></div>
                            <div style="display: flex;">
                              <div><button title="dataset" class="sdp-link border-0 bg-transparent p-0">
                                  <div class="mb-8 fs-15 fw-bold lh-19" style="text-align: left;">DATASET 7</div>
                                </button></div>
                            </div>
                            <div class="fs-14 lh-21 sdp-text-black-dark" style="min-height: 21px;">
                              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sapien rutrum, imperdiet quam eu, fringilla nibh. Vestibulum aliquam mauris ut nisi pretium interdum.</div>
                            </div>
                          </div>

                          <div class="d-flex flex-wrap" data-format="jpg">
                            <div class="data-type mt-2">JPG &nbsp;</div>
                            <img src="assets/icons/ic-jpg-file.png" alt="" width="45" height="45">
                          </div>
                        </div>

                        <div class="col-sm-4 dataset-row-right">
                          <div>
                            <div class="dataset-status access-Terbuka">Terbuka</div>
                          </div>
                          <div style="color: rgb(0, 102, 204);">Pemerintah Provinsi Jawa Barat</div>
                        </div>
                      </div>
                    </td>
                  </tr>

                  <tr role="row" class="">
                    <td role="cell">
                      <div class="row sdp-card-wrapped d-flex p-16 justify-content-between access-Terbuka">
                        <div class="col-sm-8 flex-column">
                          <div class="sdp-left-wrapper mb-16 mr-16">
                            <div style="display: flex;"></div>
                            <div style="display: flex;">
                              <div><button title="dataset" class="sdp-link border-0 bg-transparent p-0">
                                  <div class="mb-8 fs-15 fw-bold lh-19" style="text-align: left;">DATASET 8</div>
                                </button></div>
                            </div>
                            <div class="fs-14 lh-21 sdp-text-black-dark" style="min-height: 21px;">
                              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sapien rutrum, imperdiet quam eu, fringilla nibh. Vestibulum aliquam mauris ut nisi pretium interdum.</div>
                            </div>
                          </div>

                          <div class="d-flex flex-wrap" data-format="jpg">
                            <div class="data-type mt-2">JPG &nbsp;</div>
                            <img src="assets/icons/ic-jpg-file.png" alt="" width="45" height="45">
                          </div>
                        </div>

                        <div class="col-sm-4 dataset-row-right">
                          <div>
                            <div class="dataset-status access-Terbuka">Terbuka</div>
                          </div>
                          <div style="color: rgb(0, 102, 204);">Pemerintah Provinsi Jawa Barat</div>
                        </div>
                      </div>
                    </td>
                  </tr>

                  <tr role="row" class="">
                    <td role="cell">
                      <div class="row sdp-card-wrapped d-flex p-16 justify-content-between access-Terbuka">
                        <div class="col-sm-8 flex-column">
                          <div class="sdp-left-wrapper mb-16 mr-16">
                            <div style="display: flex;"></div>
                            <div style="display: flex;">
                              <div><button title="dataset" class="sdp-link border-0 bg-transparent p-0">
                                  <div class="mb-8 fs-15 fw-bold lh-19" style="text-align: left;">DATASET 9</div>
                                </button></div>
                            </div>
                            <div class="fs-14 lh-21 sdp-text-black-dark" style="min-height: 21px;">
                              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sapien rutrum, imperdiet quam eu, fringilla nibh. Vestibulum aliquam mauris ut nisi pretium interdum.</div>
                            </div>
                          </div>

                          <div class="d-flex flex-wrap" data-format="html">
                            <div class="data-type mt-2">HTML &nbsp;</div>
                            <img src="assets/icons/ic-html-file.png" alt="" width="45" height="45">
                          </div>
                        </div>

                        <div class="col-sm-4 dataset-row-right">
                          <div>
                            <div class="dataset-status access-Terbuka">Terbuka</div>
                          </div>
                          <div style="color: rgb(0, 102, 204);">Pemerintah Provinsi Jawa Timur</div>
                        </div>
                      </div>
                    </td>
                  </tr>

                  <tr role="row" class="">
                    <td role="cell">
                      <div class="row sdp-card-wrapped d-flex p-16 justify-content-between access-Terbuka">
                        <div class="col-sm-8 flex-column">
                          <div class="sdp-left-wrapper mb-16 mr-16">
                            <div style="display: flex;"></div>
                            <div style="display: flex;">
                              <div><button title="dataset" class="sdp-link border-0 bg-transparent p-0">
                                  <div class="mb-8 fs-15 fw-bold lh-19" style="text-align: left;">DATASET 10</div>
                                </button></div>
                            </div>
                            <div class="fs-14 lh-21 sdp-text-black-dark" style="min-height: 21px;">
                              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sapien rutrum, imperdiet quam eu, fringilla nibh. Vestibulum aliquam mauris ut nisi pretium interdum.</div>
                            </div>
                          </div>

                          <div class="d-flex flex-wrap" data-format="html">
                            <div class="data-type mt-2">HTML &nbsp;</div>
                            <img src="assets/icons/ic-html-file.png" alt="" width="45" height="45">
                          </div>
                        </div>

                        <div class="col-sm-4 dataset-row-right">
                          <div>
                            <div class="dataset-status access-Terbuka">Terbuka</div>
                          </div>
                          <div style="color: rgb(0, 102, 204);">Pemerintah Provinsi Jawa Timur</div>
                        </div>
                      </div>
                    </td>
                  </tr>

                  <tr role="row" class="">
                    <td role="cell">
                      <div class="row sdp-card-wrapped d-flex p-16 justify-content-between access-Terbuka">
                        <div class="col-sm-8 flex-column">
                          <div class="sdp-left-wrapper mb-16 mr-16">
                            <div style="display: flex;"></div>
                            <div style="display: flex;">
                              <div><button title="dataset" class="sdp-link border-0 bg-transparent p-0">
                                  <div class="mb-8 fs-15 fw-bold lh-19" style="text-align: left;">DATASET 11</div>
                                </button></div>
                            </div>
                            <div class="fs-14 lh-21 sdp-text-black-dark" style="min-height: 21px;">
                              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sapien rutrum, imperdiet quam eu, fringilla nibh. Vestibulum aliquam mauris ut nisi pretium interdum.</div>
                            </div>
                          </div>

                          <div class="d-flex flex-wrap" data-format="pdf">
                            <div class="data-type mt-2">PDF &nbsp;</div>
                            <img src="assets/icons/ic-pdf-file.png" alt="" width="45" height="45">
                          </div>
                        </div>

                        <div class="col-sm-4 dataset-row-right">
                          <div>
                            <div class="dataset-status access-Terbuka">Terbuka</div>
                          </div>
                          <div style="color: rgb(0, 102, 204);">Pemerintah Provinsi Sumatera Utara</div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="pagination-dt float-lg-end">
              <div class="pagination-prev disabled"><svg fill="var(--gray-light)" height="11" width="11" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.881 511.881" transform="rotate(90)">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="var(--gray-light)" stroke-width="35.831669999999995">
                    <g>
                      <g>
                        <g>
                          <path d="M248.36,263.428c4.16,4.16,10.88,4.16,15.04,0L508.733,18.095c4.053-4.267,3.947-10.987-0.213-15.04 c-4.16-3.947-10.667-3.947-14.827,0l-237.76,237.76L18.173,3.054C13.907-1.106,7.187-0.999,3.027,3.268 c-3.947,4.16-3.947,10.667,0,14.827L248.36,263.428z"></path>
                          <path d="M508.627,248.388c-4.267-4.053-10.773-4.053-14.933,0l-237.76,237.76l-237.76-237.76 c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l245.333,245.333c4.16,4.16,10.88,4.16,15.04,0 L508.84,263.428C512.893,259.161,512.787,252.441,508.627,248.388z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                  <g id="SVGRepo_iconCarrier">
                    <g>
                      <g>
                        <g>
                          <path d="M248.36,263.428c4.16,4.16,10.88,4.16,15.04,0L508.733,18.095c4.053-4.267,3.947-10.987-0.213-15.04 c-4.16-3.947-10.667-3.947-14.827,0l-237.76,237.76L18.173,3.054C13.907-1.106,7.187-0.999,3.027,3.268 c-3.947,4.16-3.947,10.667,0,14.827L248.36,263.428z"></path>
                          <path d="M508.627,248.388c-4.267-4.053-10.773-4.053-14.933,0l-237.76,237.76l-237.76-237.76 c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l245.333,245.333c4.16,4.16,10.88,4.16,15.04,0 L508.84,263.428C512.893,259.161,512.787,252.441,508.627,248.388z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg></div>
              <div class="pagination-prev disabled"><svg width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.99979 11.0001C5.19754 11 5.39083 10.9414 5.55524 10.8315C5.71966 10.7216 5.84779 10.5654 5.92346 10.3827C5.99913 10.2 6.01894 9.999 5.98037 9.80505C5.9418 9.6111 5.8466 9.43293 5.70679 9.29308L2.41379 6.00008L5.70679 2.70708C5.8023 2.61483 5.87848 2.50449 5.93089 2.38249C5.9833 2.26048 6.01088 2.12926 6.01204 1.99648C6.01319 1.8637 5.98789 1.73202 5.93761 1.60913C5.88733 1.48623 5.81307 1.37458 5.71918 1.28069C5.62529 1.18679 5.51364 1.11254 5.39074 1.06226C5.26784 1.01198 5.13616 0.986677 5.00339 0.987831C4.87061 0.988985 4.73939 1.01657 4.61738 1.06898C4.49538 1.12139 4.38503 1.19757 4.29279 1.29308L0.292786 5.29308C0.105315 5.48061 0 5.73492 0 6.00008C0 6.26525 0.105315 6.51955 0.292786 6.70708L4.29279 10.7071C4.48028 10.8946 4.73459 11 4.99979 11.0001Z" fill="var(--gray-light)"></path>
                </svg></div>

              <div class="pagination-page active" style="margin-right: 12px;">1</div>
              <div class="pagination-page" style="margin-right: 12px;">2</div>
              <div class="pagination-page" style="margin-right: 12px;">3</div>
              <div class="pagination-page" style="margin-right: 12px;">4</div>
              <div class="pagination-page" style="margin-right: 10px;">...&nbsp;&nbsp;</div>
              <div class="pagination-page">12</div>
              <div class="pagination-next"><svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.01207 5.01229C6.01207 4.74712 5.90676 4.49282 5.71929 4.30529L1.71929 0.305288C1.62704 0.209778 1.5167 0.133596 1.39469 0.0811869C1.27269 0.0287779 1.14147 0.00119157 1.00869 3.7757e-05C0.87591 -0.00111606 0.744232 0.0241854 0.621336 0.0744663C0.498439 0.124747 0.386787 0.199 0.292894 0.292893C0.199001 0.386786 0.124747 0.498438 0.0744663 0.621334C0.0241854 0.744231 -0.00111606 0.87591 3.77571e-05 1.00869C0.00119157 1.14147 0.0287788 1.27269 0.0811878 1.39469C0.133597 1.5167 0.209778 1.62704 0.305288 1.71929L3.59829 5.01229L0.305288 8.30529C0.12313 8.49389 0.0223355 8.74649 0.0246139 9.00869C0.0268924 9.27089 0.132062 9.5217 0.31747 9.70711C0.502878 9.89252 0.753691 9.99768 1.01589 9.99996C1.27808 10.0022 1.53069 9.90145 1.71929 9.71929L5.71929 5.71929C5.90676 5.53176 6.01207 5.27745 6.01207 5.01229Z" fill="var(--gray-dark)"></path>
                </svg></div>
              <div class="pagination-next"><svg fill="var(--gray-dark)" height="11" width="11" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.881 511.881" transform="rotate(270)">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="var(--gray-dark)" stroke-width="35.831669999999995">
                    <g>
                      <g>
                        <g>
                          <path d="M248.36,263.428c4.16,4.16,10.88,4.16,15.04,0L508.733,18.095c4.053-4.267,3.947-10.987-0.213-15.04 c-4.16-3.947-10.667-3.947-14.827,0l-237.76,237.76L18.173,3.054C13.907-1.106,7.187-0.999,3.027,3.268 c-3.947,4.16-3.947,10.667,0,14.827L248.36,263.428z"></path>
                          <path d="M508.627,248.388c-4.267-4.053-10.773-4.053-14.933,0l-237.76,237.76l-237.76-237.76 c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l245.333,245.333c4.16,4.16,10.88,4.16,15.04,0 L508.84,263.428C512.893,259.161,512.787,252.441,508.627,248.388z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                  <g id="SVGRepo_iconCarrier">
                    <g>
                      <g>
                        <g>
                          <path d="M248.36,263.428c4.16,4.16,10.88,4.16,15.04,0L508.733,18.095c4.053-4.267,3.947-10.987-0.213-15.04 c-4.16-3.947-10.667-3.947-14.827,0l-237.76,237.76L18.173,3.054C13.907-1.106,7.187-0.999,3.027,3.268 c-3.947,4.16-3.947,10.667,0,14.827L248.36,263.428z"></path>
                          <path d="M508.627,248.388c-4.267-4.053-10.773-4.053-14.933,0l-237.76,237.76l-237.76-237.76 c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l245.333,245.333c4.16,4.16,10.88,4.16,15.04,0 L508.84,263.428C512.893,259.161,512.787,252.441,508.627,248.388z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg></div>
            </div>
          </div>
        </div>
        
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

</html>