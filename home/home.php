<!DOCTYPE html>
<html>
    <head>
        <title>Tugas RWD</title>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="images/1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Slide 1</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="images/2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Slide 2</h5>
                              <p>Some representative placeholder content for the second slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="images/3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Slide 3</h5>
                              <p>Some representative placeholder content for the third slide.</p>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#">NF Computer</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Event</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Courses
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="#">Fullstack Web Developer</a></li>
                                  <li><a class="dropdown-item" href="#">Network Administrator </a></li>
                                  <li><a class="dropdown-item" href="#">Big Data Analytics</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Other</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                              </li>
                            </ul>
                            <form class="d-flex">
                              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-actionlist-group-item-secondary" aria-current="true">Profil</li>
                        <li class="list-group-item list-group-item-action list-group-item-primary"
                        >Certified</li>
                        <li class="list-group-item list-group-item-action list-group-item-secondary"
                        >Training</li>
                        <li class="list-group-item list-group-item-action list-group-item-primary"
                        >Article</li>
                        <li class="list-group-item list-group-item-action list-group-item-secondary"
                        >About Us</li>
                      </ul>
                </div>
                <div class="col-md-6">
                  <div class="accordion mb-3" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button
                          class="accordion-button"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseOne"
                          aria-expanded="true"
                          aria-controls="collapseOne"
                        >
                          Profil
                        </button>
                      </h2>
                      <div
                        id="collapseOne"
                        class="accordion-collapse collapse show"
                        aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <strong>NF COMPUTER</strong> adalah bagian dari grup Nurul Fikri yang telah dipercaya oleh masyarakat Indonesia di bidang pendidikan 
                          dan peningkatan sumber daya manusia selama lebih dari 24 tahun. Alumni-alumninya telah berkiprah dan diakui kualitas kerja dan integritasnya oleh dunia usaha.
                          NF COMPUTER dirintis sejak tahun 1994 dan merupakan sebuah lembaga di bidang pendidikan dan pelatihan IT (Information Technology). Kami berkomitmen menjadi partner perusahaan Anda dalam mengembangkan kemampuan serta keahlian SDM di bidang IT. 
                          Dengan komitmen tersebut, kami mempersiapkan tim pengajar yang professional dan berpengalaman di bidang IT.
                          Di Era Industri 4.0 saat ini, teknologi informasi berkembang sangat cepat, oleh karena itu pengembangan sumber 
                          daya manusia di bidang IT menjadi sebuah kebutuhan yang perlu diprioritaskan. NF COMPUTER menjadi jawaban yang
                          tepat atas kebutuhan pengembangan kompetensi IT. Sehingga kami selalu berusaha untuk terus berinovasi terhadap 
                          teknologi terbaru.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseTwo"
                          aria-expanded="false"
                          aria-controls="collapseTwo"
                        >
                          Visi & Misi
                        </button>
                      </h2>
                      <div
                        id="collapseTwo"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <strong>Visi</strong><br/>
                          Menjadi institusi pelatihan yang kompeten dan profesional di
                          bidang pendidikan teknologi informasi dan komunikasi di
                          berbagai wilayah indonesia.
                          <br /><br />
                          <strong>Misi</strong><br/>
                          Membangun, memelihara dan mengembangkan institusi pelatihan
                          bisnis berdaya saing tinggi, berkarakter profesional,
                          kompeten, mengedepankan integritas dan tanggung jawab sosial,
                          dengan mengembangkan dan menyediakan produk produk pendidikan
                          dan pelatihan teknologi informasi dan komunikasi prima.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseThree"
                          aria-expanded="false"
                          aria-controls="collapseThree"
                        >
                          Deskripsi Bisnis
                        </button>
                      </h2>
                      <div
                        id="collapseThree"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <strong>Public Class</strong> merupakan short course bidang
                          TIK (Teknologi Informasi dan Komunikasi) yang berbasis Linux
                          maupun Windows. <br /><br />
                          <strong>Exclusive Class</strong>
                          merupakan paket training yang diberikan kepada customer dengan
                          durasi 6-8 jam perhari dengan jumlah peserta minimal 2 orang
                          dan pelaksanaan pelatihannya di NF Computer.
                          <br /><br />
                          <strong> In House/In Company Training</strong>
                          yaitu pelatihan TIK yang dikustomisasi untuk kebutuhan
                          perusahaan-perusahaan.
                        </div>
                      </div>
                    </div>
                  </div>
        
                  <table class="table table-hover table-primary">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Durasi</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Office Aplication</td>
                        <td>32 Jam</td>
                        <td>Rp. 3.200.000</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Multimedia</td>
                        <td>40 Jam</td>
                        <td>Rp. 4.000.000</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Programming</td>
                        <td>40 Jam</td>
                        <td>Rp. 4.200.000</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="d-flex gap-3">
                    <div class="card" style="width: 20rem">
                      <img src="images/public.png" class="card-img-top" alt="..." />
                      <div class="card-body">
                        <p class="card-text">
                          <strong>Public Class</strong>
                          <br />
                          Short course bidang TIK (Teknologi Informasi dan Komunikasi)
                          yang berbasis Linux maupun Windows.
                        </p>
                      </div>
                    </div>
                    <div class="card" style="width: 20rem">
                      <img src="images/eclusive.png" class="card-img-top" alt="..." />
                      <div class="card-body">
                        <p class="card-text">
                          <strong>Exclusive Class</strong>
                          <br />Paket training dengan durasi 6-8 jam perhari pelaksanaan
                          pelatihannya di NF Computer.
                        </p>
                      </div>
                    </div>
                    <div class="card" style="width: 20rem">
                      <img src="images/inhouse.jpg" class="card-img-top" alt="..." />
                      <div class="card-body">
                        <p class="card-text">
                          <strong> In House/In Company Training</strong>
                          <br />pelatihan TIK yang dikustomisasi untuk kebutuhan
                          perusahaan-perusahaan.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-md-3">
                    <p><h4>Category Filter</h4></p> <hr/>
                    <ol class="list-group list-group-numbered" style="cursor: pointer;">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Fullstack Web Developer</div>
                            <placeholder>See Courses</placeholder>
                          </div>
                          <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Network Administrator</div>
                            <placeholder>Coming Soon</placeholder>
                          </div>
                          <span class="badge bg-primary rounded-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Big Data Analytics</div>
                            <placeholder>Cooming Soon</placeholder>
                          </div>
                          <span class="badge bg-primary rounded-pill">1</span>
                        </li>
                      </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"> 
                  <footer class="mt-5 alert alert-primary mb-0">
                    <p class="text-center">Design By Faturrohman &copy; Kampus_Merdeka 2022</p>
                  </footer>
                </div>

            </div>
        </div>
    </body>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>
