<?php
include 'bigballs.php';
?>
<!DOCTYPE html>
<html lang="id" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hanif Nurfajri Putra Permana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="bigballs.css">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg border-bottom border-secondary fixed-top backdrop-blur">
        <div class="container">
            <a class="navbar-brand font-monospace text-primary-custom fw-bold" href="#">
                &lt;<span class="brand-text">Dahanif.Dev</span> /&gt;
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto font-monospace align-items-center">
                    <?php foreach ($nav_links as $link): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#<?= strtolower($link) ?>"><?= $link ?></a>
                        </li>
                    <?php endforeach; ?>
                    
                    <!-- TOMBOL TOGGLE TEMA -->
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <button id="theme-toggle" class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;">
                            <i id="theme-icon" class="bi bi-sun-fill"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- home -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center gy-5">
               <div class="col-lg-6 animate-fade-up delay-1">
                    <span class="badge bg-opacity-10 bg-success text-primary-custom border border-primary-custom font-monospace mb-3 p-2">
                        <i class="bi bi-circle-fill fs-6 me-1"></i> Not Available for hire
                    </span>
                    <h1 class="display-3 fw-bold mb-2">Hanif Nurfajri <br><span class="text-primary-custom">Putra Permana</span></h1>
                    <p class="fs-5 text-secondary font-monospace">&gt; Student Coding Engineer</p>
                    <p class="lead text-secondary mb-4">Membangun project</p>
                    
                    <div class="d-flex flex-wrap gap-2 mb-4 font-monospace">
                        <span class="badge bg-secondary text-primary-custom">JavaScript</span>
                        <span class="badge bg-secondary text-primary-custom">HTML</span>
                        <span class="badge bg-secondary text-primary-custom">PHP</span>
                        <span class="badge bg-secondary text-primary-custom">Bootstrap</span>
                    </div>
                    
                    <div class="d-flex gap-3">
                        <a href="#projects" class="btn btn-success bg-primary-custom border-0 fw-semibold px-4 py-2">
                            Lihat Proyek <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="#contact" class="btn btn-outline-secondary px-4 py-2">Hubungi Saya</a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block animate-fade-left delay-3">
                    <div class="card-maingo card-custom font-monospace shadow-lg">
                        <div class="card-header border-secondary d-flex align-items-center gap-2 bg-secondary bg-opacity-25">
                            <span class="rounded-circle bg-danger d-inline-block" style="width:12px; height:12px;"></span>
                            <span class="rounded-circle bg-warning d-inline-block" style="width:12px; height:12px;"></span>
                            <span class="rounded-circle bg-success d-inline-block" style="width:12px; height:12px;"></span>
                            <small class="text-secondary ms-2">main.go</small>
                        </div>
                        <div class="card-body p-4 fs-6">
                            <p class="text-secondary mb-0">// Backend Engineer Profile</p>
                            <p class="mb-0"><span class="text-info">package</span> main</p><br>
                            <p class="mb-0"><span class="text-info">type</span> <span class="text-warning">Engineer</span> <span class="text-info">struct</span> {</p>
                            <p class="mb-0 ms-3 text-success">Name <span class="code-text">string</span></p>
                            <p class="mb-0 ms-3 text-success">Role <span class="code-text">string</span></p>
                            <p class="mb-0 ms-3 text-success">YearsExp <span class="code-text">int</span></p>
                            <p class="mb-0">}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- tentang -->
    <section id="about" class="py-5 container hero-section">
        <div class="py-5 w-100">
            <p class="font-monospace text-primary-custom mb-1">about</p>
            <h2 class="fw-bold mb-5">Tentang Saya</h2>
            <div class="row gy-5 align-items-center">
                <div class="col-lg-5 col-xl-4 text-center order-1 order-lg-2">
                    <div class="profile-img-wrapper mx-auto">
                        <div class="profile-img-frame"></div>
                        <img src="sprite/20241009_092455.jpg" 
                             alt="Foto Profil" 
                             class="img-fluid profile-img rounded shadow-lg" 
                             loading="lazy">
                    </div>
                </div>
                <div class="col-lg-7 col-xl-8 animate-fade-up delay-1 order-2 order-lg-1">
                    <h1 class="display-3 fw-bold mb-2">Hanif Nurfajri <br><span class="text-primary-custom">Putra Permana</span></h1>
                    <p class="text-secondary lead">
                        Saya adalah seorang Student & Coding Engineer yang berfokus pada pengembangan backend serta front end dan eksplorasi teknologi web modern. Saya bisa dalam menulis kode yang efisien, dan memecahkan masalah kompleks.
                    </p>
                    <p class="text-secondary">
                        Fokus utama saya meliputi pengelolaan basis data, serta pemahaman arsitektur perangkat lunak yang andal dan aman.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- skill -->
    <section id="skills" class="py-5 bg-secondary bg-opacity-10 border-top border-bottom border-secondary hero-section">
        <div class="container py-5">
            <p class="font-monospace text-primary-custom mb-1">skills</p>
            <h2 class="fw-bold mb-5">Keahlian Teknis</h2>
            
            <div class="row g-4">
                <?php foreach ($skills as $group): ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-custom h-100 p-3">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <i class="bi <?= $group['icon'] ?> text-primary-custom fs-5"></i>
                                <h5 class="card-title font-monospace m-0 fs-6"><?= $group['category'] ?></h5>
                            </div>
                            
                            <div class="d-flex flex-wrap gap-2">
                                <?php foreach ($group['items'] as $item): ?>
                                    <button type="button" 
                                            class="skill-btn btn btn-outline-secondary font-monospace fs-7 d-flex align-items-center gap-2 py-2 px-3 border-opacity-20"
                                            data-skill="<?= strtolower($item['name']) ?>">
                                        
                                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/<?= $item['logo'] ?>/<?= $item['logo'] ?>-original.svg" 
                                             alt="<?= $item['name'] ?> icon" 
                                             style="width: 18px; height: 18px; object-fit: contain;"
                                             onerror="this.style.display='none';">
                                        
                                        <span><?= $item['name'] ?></span>
                                    </button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- project -->
    <section id="projects" class="py-5 container hero-section">
        <div class="py-5 w-100">
            <p class="font-monospace text-primary-custom mb-1">projects</p>
            <h2 class="fw-bold mb-5">Proyek Terpilih</h2>
            <div class="row g-4">
                <?php foreach ($projects as $project): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-project h-100 border-0 shadow-sm">
                            <?php 
                                $jsonImages = htmlspecialchars(json_encode($project['images']), ENT_QUOTES, 'UTF-8');
                                $projectTitle = htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8');
                            ?>
                            <div class="card-img-wrapper cursor-pointer" 
                                 style="cursor: pointer;"
                                 onclick='openProjectModal(<?= $jsonImages ?>, "<?= $projectTitle ?>")'>
                                
                                <img src="<?= $project['images'][0] ?>" 
                                     class="card-img-top" 
                                     alt="<?= $project['title'] ?>" 
                                     loading="lazy">
                            </div>
                            
                            <div class="card-body d-flex flex-column p-4">
                                <h5 class="card-title fw-bold mb-3"><?= $project['title'] ?></h5>
                                <p class="card-text text-body-secondary flex-grow-1 mb-4 fs-6">
                                    <?= $project['description'] ?>
                                </p>
                                
                                <div class="d-flex flex-wrap gap-2 mt-auto">
                                    <?php foreach ($project['tech'] as $tech): ?>
                                        <span class="badge badge-tech font-monospace"><?= $tech ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

   <!-- contact -->
<section id="contact" class="py-5 bg-secondary bg-opacity-10 border-top border-secondary hero-section">
    <div class="container py-5 text-center">
       
        <p class="font-monospace text-primary-custom mb-2">contact</p>
        <h2 class="display-5 fw-bold mb-3">Mari Berkolaborasi</h2>
        <p class="text-secondary mx-auto mb-5 style-contact-desc" style="max-width: 650px;">
            Saya selalu terbuka untuk peluang baru, proyek menarik, atau sekadar ngobrol tentang backend engineering. Jangan ragu untuk menghubungi saya!
        </p>
        <div class="row g-4 justify-content-center mb-5">
            <div class="col-md-4">
                <a href="#home" class="text-decoration-none">
                    <div class="card card-custom contact-card h-100 p-4 text-center">
                        <i class="bi bi-envelope text-primary-custom fs-2 mb-2"></i>
                        <span class="text-secondary font-monospace fs-7 mb-1 d-block">Email</span>
                        <span class="font-monospace fw-semibold text-body fs-6">contoh@gmail.com</span>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="https://github.com/Breedableboy69" class="text-decoration-none">
                    <div class="card card-custom contact-card h-100 p-4 text-center">
                        <i class="bi bi-github text-primary-custom fs-2 mb-2"></i>
                        <span class="text-secondary font-monospace fs-7 mb-1 d-block">GitHub</span>
                        <span class="font-monospace fw-semibold text-body fs-6">github.com/Breedableboy69</span>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="#home" class="text-decoration-none">
                    <div class="card card-custom contact-card h-100 p-4 text-center">
                        <i class="bi bi-whatsapp text-primary-custom fs-2 mb-2"></i>
                        <span class="text-secondary font-monospace fs-7 mb-1 d-block">whatsapp</span>
                        <span class="font-monospace fw-semibold text-body fs-6">080000000000</span>
                    </div>
                </a>
            </div>
        </div>

       
    </div>
</section>

    <!-- FOOTER -->
    <footer class="py-4 border-top border-secondary text-center text-secondary font-monospace">
        <div class="container d-flex justify-content-between align-items-center">
            <small>&lt;<span class="text-primary-custom">Dahanif.Dev</span> /&gt; &copy; <?= date("Y") ?></small>
            <small class="d-none d-sm-inline">Aku pemain elden ring</small>
            <button onclick="scrollToTop()" class="btn btn-outline-secondary btn-sm"><i class="bi bi-arrow-up"></i></button>
        </div>
    </footer>

    <!-- ELEMEN KARAKTER & KOTAK -->
    <div class="pixel-character"></div>
    <div class="pixel-box"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="bigballs.js" type="text/javascript"></script>

    <!-- MODAL POPUP PREVIEW GAMBAR CAROUSEL -->
    <div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-dark border-secondary">
          <div class="modal-header border-secondary">
            <h5 class="modal-title font-monospace text-primary-custom" id="modalProjectTitle">Preview Proyek</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center p-3">
            <div id="projectCarousel" class="carousel slide" data-bs-ride="false">
              <div class="carousel-indicators" id="carouselIndicators"></div>
              <div class="carousel-inner" id="carouselInner"></div>
              <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>