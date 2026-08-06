
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Interaksi Tombol Skill
        document.querySelectorAll('.skill-btn').forEach(button => {
            button.addEventListener('click', function() {
                const skillName = this.getAttribute('data-skill');
                console.log(`Skill diklik: ${skillName}`);
                
                this.style.transform = 'scale(0.9)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);

                if (skillName === 'html5' && box) {
            // Hentikan animasi kotak yang sedang berjalan
            clearTimeout(spawnTimeout);
            box.classList.remove('box-spawning', 'box-idle');
            
            // Trigger reflow agar animasi bisa direpeat setiap klik
            void box.offsetWidth; 
            
            // Jalankan animasi HTML
            box.classList.add('box-html');

            // Setelah animasi selesai kembalikan ke state idle
            setTimeout(() => {
                box.classList.remove('box-html');
                box.classList.add('box-idle');
            }, 2000); // 2s sesuai durasi animation di CSS
        }

        if (skillName === 'css3' && box) {
            // Hentikan animasi kotak yang sedang berjalan
            clearTimeout(spawnTimeout);
            box.classList.remove('box-spawning', 'box-idle');
            
            // Trigger reflow agar animasi bisa di-repeat setiap klik
            void box.offsetWidth; 
            
            // Jalankan animasi HTML
            box.classList.add('box-css');

            // Setelah animasi selesai, kembalikan ke state idle
            setTimeout(() => {
                box.classList.remove('box-css');
                box.classList.add('box-idle');
            }, 2000); // 2s sesuai durasi animation di CSS
        }

        if (skillName === 'javascript' && box) {
            // Hentikan animasi kotak yang sedang berjalan
            clearTimeout(spawnTimeout);
            box.classList.remove('box-spawning', 'box-idle');
            
            // Trigger reflow agar animasi bisa di-repeat setiap klik
            void box.offsetWidth; 
            
            // Jalankan animasi JavaScript
            box.classList.add('box-js');

            // Setelah animasi selesai, kembalikan ke state idle
            setTimeout(() => {
                box.classList.remove('box-js');
                box.classList.add('box-idle');
            }, 2000); // 2s sesuai durasi animation di CSS
        }

        if (skillName === 'php' && box) {
            // Hentikan animasi kotak yang sedang berjalan
            clearTimeout(spawnTimeout);
            box.classList.remove('box-spawning', 'box-idle');
            
            // Trigger reflow agar animasi bisa di-repeat setiap klik
            void box.offsetWidth; 
            
            // Jalankan animasi PHP
            box.classList.add('box-php');

            // Setelah animasi selesai, kembalikan ke state idle
            setTimeout(() => {
                box.classList.remove('box-php');
                box.classList.add('box-idle');
            }, 2000); // 2s sesuai durasi animation di CSS
        }

        if (skillName === 'laravel' && box) {
            // Hentikan animasi kotak yang sedang berjalan
            clearTimeout(spawnTimeout);
            box.classList.remove('box-spawning', 'box-idle');
            
            // Trigger reflow agar animasi bisa di-repeat setiap klik
            void box.offsetWidth; 
            
            // Jalankan animasi Laravel
            box.classList.add('box-laravel');

            // Setelah animasi selesai, kembalikan ke state idle
            setTimeout(() => {
                box.classList.remove('box-laravel');
                box.classList.add('box-idle');
            }, 2000); // 2s sesuai durasi animation di CSS
        }

        if (skillName === 'bootstrap' && box) {
            // Hentikan animasi kotak yang sedang berjalan
            clearTimeout(spawnTimeout);
            box.classList.remove('box-spawning', 'box-idle');
            
            // Trigger reflow agar animasi bisa di-repeat setiap klik
            void box.offsetWidth; 
            
            // Jalankan animasi Bootstrap
            box.classList.add('box-bootstrap');

            // Setelah animasi selesai, kembalikan ke state idle
            setTimeout(() => {
                box.classList.remove('box-bootstrap');
                box.classList.add('box-idle');
            }, 2000); // 2s sesuai durasi animation di CSS
        }

        if (skillName === 'node.js' && box) {
            // Hentikan animasi kotak yang sedang berjalan
            clearTimeout(spawnTimeout);
            box.classList.remove('box-spawning', 'box-idle');

            // Trigger reflow agar animasi bisa di-repeat setiap klik
            void box.offsetWidth;

            // Jalankan animasi Node.js
            box.classList.add('box-nodejs');

            // Setelah animasi selesai, kembalikan ke state idle
            setTimeout(() => {
                box.classList.remove('box-nodejs');
                box.classList.add('box-idle');
            }, 3000); // 3s sesuai durasi animation di CSS
         } 
         
         if (skillName === 'mysql' && box) {
            // Hentikan animasi kotak yang sedang berjalan
            clearTimeout(spawnTimeout);
            box.classList.remove('box-spawning', 'box-idle');

            // Trigger reflow agar animasi bisa di-repeat setiap klik
            void box.offsetWidth;

            // Jalankan animasi MySQL
            box.classList.add('box-mysql');

            // Setelah animasi selesai, kembalikan ke state idle
            setTimeout(() => {
                box.classList.remove('box-mysql');
                box.classList.add('box-idle');
            }, 2000); // 2s sesuai durasi animation di CSS
         }  

            if (skillName === 'vs code' && box) {
            // Hentikan animasi kotak yang sedang berjalan
            clearTimeout(spawnTimeout);
            box.classList.remove('box-spawning', 'box-idle');

            // Trigger reflow agar animasi bisa di-repeat setiap klik
            void box.offsetWidth;

            // Jalankan animasi VS Code
            box.classList.add('box-vscode');

            // Setelah animasi selesai, kembalikan ke state idle
            setTimeout(() => {
                box.classList.remove('box-vscode');
                box.classList.add('box-idle');
            }, 3500); // 3.5s sesuai durasi animation di CSS
         }  

            });
        });

        // MANAJEMEN ANIMASI KARAKTER & KOTAK
        const char = document.querySelector('.pixel-character');
        const box = document.querySelector('.pixel-box');
        const profileWrapper = document.querySelector('.profile-img-wrapper');
        const skillsSection = document.querySelector('#skills');
        let isScrollTimer = null;
        let spawnTimeout = null;

        // Sequence Animasi Awal Karakter
        char.addEventListener('animationend', (event) => {
            if (event.animationName === 'fallingDown') {
                char.classList.add('landed');
            }
            
            if (event.animationName === 'landSequence') {
                char.classList.remove('landed');
                if (!char.classList.contains('interact') && !char.classList.contains('grabbing')) {
                    char.classList.add('idle');
                }
            }
        });

        // DETEKSI GERAKAN SCROLL
        window.addEventListener('scroll', () => {
            char.classList.add('grabbing');
            char.classList.remove('idle', 'landed', 'interact');
            clearTimeout(isScrollTimer);
            isScrollTimer = setTimeout(() => {
                char.classList.remove('grabbing');
                
                if (profileWrapper && profileWrapper.matches(':hover')) {
                    char.classList.add('interact');
                } else {
                    char.classList.add('idle');
                }
            }, 150);
        });

        // DETEKSI SECTION SKILLS UNTUK ANIMASI KOTAK
        if (skillsSection && box) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        box.classList.add('show-box');
                        if (!box.classList.contains('box-idle') && !box.classList.contains('box-spawning')) {
                            void box.offsetWidth;
                            box.classList.add('box-spawning');
                            clearTimeout(spawnTimeout);
                            spawnTimeout = setTimeout(() => {
                                box.classList.remove('box-spawning');
                                box.classList.add('box-idle');
                            }, 600);
                        }
                    } else {
                        clearTimeout(spawnTimeout);
                        box.classList.remove('box-spawning', 'box-idle', 'show-box');
                       
                    }
                });
            }, {
                threshold: 0.2
            });
            observer.observe(skillsSection);
        }

        // INTERAKSI HOVER FOTO PROFIL
        if (profileWrapper && char) {
            profileWrapper.addEventListener('mouseenter', () => {
                if (!char.classList.contains('grabbing')) {
                    char.classList.remove('landed', 'idle');
                    char.classList.add('interact');
                }
            });
            profileWrapper.addEventListener('mouseleave', () => {
                char.classList.remove('interact');
                if (!char.classList.contains('grabbing')) {
                    char.classList.add('idle');
                }
            });
        }

        // logika dark dan light mode
const themeToggleBtn = document.getElementById('theme-toggle');
const themeIcon = document.getElementById('theme-icon');
const htmlElement = document.documentElement;

// Function untuk memperbarui ikon tombol sesuai tema
function updateThemeIcon(theme) {
    if (theme === 'dark') {
        themeIcon.className = 'bi bi-sun-fill text-warning'; // Ikon matahari warna kuning jika dark mode
    } else {
        themeIcon.className = 'bi bi-moon-stars-fill text-dark'; // Ikon bulan jika light mode
    }
}

// 1. Cek pilihan tema sebelumnya dari localStorage
const savedTheme = localStorage.getItem('theme') || 'dark';
htmlElement.setAttribute('data-bs-theme', savedTheme);
updateThemeIcon(savedTheme);

// 2. Event listener untuk tombol toggle
if (themeToggleBtn) {
    themeToggleBtn.addEventListener('click', () => {
        const currentTheme = htmlElement.getAttribute('data-bs-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

        htmlElement.setAttribute('data-bs-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        updateThemeIcon(newTheme);
    });
}

// Fungsi untuk membuka Pop Up / Modal Foto Proyek
function openProjectModal(images, title) {
    // Set judul modal
    document.getElementById('modalProjectTitle').textContent = title;

    const carouselInner = document.getElementById('carouselInner');
    const carouselIndicators = document.getElementById('carouselIndicators');

    // Reset isi slider sebelumnya
    carouselInner.innerHTML = '';
    carouselIndicators.innerHTML = '';

    // Generate gambar & indikator berdasarkan array 'images'
    images.forEach((imgSrc, index) => {
        const activeClass = index === 0 ? 'active' : '';

        // 1. Tambah Foto Slide
        const slideHtml = `
            <div class="carousel-item ${activeClass}">
                <img src="${imgSrc}" class="d-block w-100 rounded shadow" alt="Screenshot ${index + 1}" style="max-height: 75vh; object-fit: contain;">
            </div>
        `;
        carouselInner.innerHTML += slideHtml;

        // 2. Tambah Titik Indikator (hanya jika gambar lebih dari 1)
        if (images.length > 1) {
            const indicatorHtml = `
                <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="${index}" class="${activeClass}" aria-current="${activeClass ? 'true' : 'false'}" aria-label="Slide ${index + 1}"></button>
            `;
            carouselIndicators.innerHTML += indicatorHtml;
        }
    });

    // Sembunyikan tombol panah jika foto cuma 1
    const prevBtn = document.querySelector('#projectCarousel .carousel-control-prev');
    const nextBtn = document.querySelector('#projectCarousel .carousel-control-next');
    if (images.length <= 1) {
        prevBtn.style.display = 'none';
        nextBtn.style.display = 'none';
    } else {
        prevBtn.style.display = 'flex';
        nextBtn.style.display = 'flex';
    }

    // Tampilkan Modal
    const projectModal = new bootstrap.Modal(document.getElementById('projectModal'));
    projectModal.show();
}

// klik karakter untuk animasi meledak
if (char) {
    char.addEventListener('click', () => {
        // Cegah pemicuan ulang jika sedang beranimasi meledak
        if (char.classList.contains('explode')) return;

        // Hapus class lain agar animasi meledak berjalan mulus
        char.classList.remove('idle', 'grabbing', 'interact', 'landed');
        char.classList.add('explode');

        // Setelah animasi selesai (0.7 detik = 700ms), kembalikan ke state idle
        setTimeout(() => {
            char.classList.remove('explode');
            char.classList.add('idle');
        }, 700);
    });
}
