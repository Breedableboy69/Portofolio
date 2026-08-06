<?php
$nav_links = ["Home", "About", "Skills", "Projects", "Contact"];
$skills = [
    [
        'category' => 'Languages',
        'icon'     => 'bi-code-slash',
        'items'    => [
            ['name' => 'HTML5',      'logo' => 'html5'],
            ['name' => 'CSS3',       'logo' => 'css3'],
            ['name' => 'JavaScript', 'logo' => 'javascript'],
            ['name' => 'PHP',        'logo' => 'php'],
        ]
    ],
    [
        'category' => 'Frameworks',
        'icon'     => 'bi-box-seam',
        'items'    => [
            ['name' => 'Laravel',   'logo' => 'laravel'],
            ['name' => 'Bootstrap', 'logo' => 'bootstrap'],
            ['name' => 'Node.js',   'logo' => 'nodejs'],
        ]
    ],
    [
        'category' => 'Databases',
        'icon'     => 'bi-database',
        'items'    => [
            ['name' => 'MySQL',   'logo' => 'mysql'],
        ]
    ],
    [
        'category' => 'Tools & Others',
        'icon'     => 'bi-tools',
        'items'    => [
            ['name' => 'VS Code', 'logo' => 'vscode'],
        ]
    ]
];

$projects = [
    [
        'title'       => 'Sistem Manajemen E.Kas Sekolah',
        'description' => 'Aplikasi manajemen kas kelas untuk sekolah yang bertugas untuk menghitung duit kas dan informasi siswa yang belum membayar uang kas',
        'images'       => [
            'sistemkasweb/Screenshot 2026-08-05 102115.png',
            'sistemkasweb/Screenshot 2026-08-05 102148.png',
            'sistemkasweb/Screenshot 2026-08-05 102218.png',
            'sistemkasweb/Screenshot 2026-08-05 102236.png',
            'sistemkasweb/Screenshot 2026-08-05 102251.png' ,
        ],
        'tech'        => ['PHP', 'MySQL', 'Bootstrap', 'JavaScript']
    ],
    [
        'title'       => 'Sistem Manajemen E.Kas Sekolah Java',
        'description' => 'Aplikasi manajemen kas kelas untuk sekolah yang bertugas untuk menghitung duit kas dan informasi siswa yang belum membayar uang kas',
        'images'       => [
            'sprite/Screenshot 2026-08-02 084449.png', 
            'sistemkasjava/login.png', 
            'sistemkasjava/Screenshot 2026-08-05 105907.png', 
            'sistemkasjava/Screenshot 2026-08-05 105918.png', 
            'sistemkasjava/Screenshot 2026-08-05 105926.png', 
            'sistemkasjava/Screenshot 2026-08-05 110207.png'  
        ],
        'tech'        => ['JavaScript', 'Apache Netbeans']
    ],
    [
        'title'       => 'Sistem Ekstrakulikuler Sekolah',
        'description' => 'Sistem Untuk Pendaftaran Ekstrakulikuler Untuk Siswa Dan Berisi Informasi Ekstrakulikuler apa saja yang tersedia dan Berisi Admin Untuk Para Pembina Dan pelatih dari mata pelajaran Ekskul tersebut',
        'images'       => [
            'sprite/Screenshot 2026-08-02 084245.png',
            'eskul/Screenshot 2026-08-05 110521.png',
            'eskul/Screenshot 2026-08-05 113509.png',
            'eskul/Screenshot 2026-08-05 113548.png',
            'eskul/Screenshot 2026-08-05 113556.png',
            'eskul/Screenshot 2026-08-05 113602.png',
            'eskul/Screenshot 2026-08-05 110521.png',
            'eskul/Screenshot 2026-08-05 113248.png'
        ],
        'tech'        => ['PHP', 'MySQL', 'Bootstrap']
    ],
    [
        'title'       => 'Sistem Wisata Kalimantan',
        'description' => 'Website Yang Memperlihatkan semua Tempat wisata Di Kalimantan',
        'images'       => [
            'sprite/Screenshot 2026-08-02 084120.png',
            'sistemwisata/Screenshot 2026-08-05 104830.png',
            'sistemwisata/Screenshot 2026-08-05 104846.png',
            'sistemwisata/Screenshot 2026-08-05 105045.png',
            'sistemwisata/Screenshot 2026-08-05 105140.png'
        ],
        'tech'        => ['PHP', 'HTML', 'MySQL', 'Bootstrap']
    ],
];
?>