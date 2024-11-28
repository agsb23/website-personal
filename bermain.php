<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perbandingan senilai - Interactive Learning</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 1200px;
            margin: 0 auto;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 20px;
            min-height: 100vh;
        }

        .header {
            background: linear-gradient(45deg, #2193b0, #6dd5ed);
            color: white;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            position: relative;
        }

        .nav-menu {
            background: white;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .nav-button {
            padding: 10px 20px;
            background: linear-gradient(45deg, #2193b0, #6dd5ed);
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            font-weight: bold;
        }

        .nav-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(33, 147, 176, 0.3);
        }

        .page {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .page.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .matrix-game {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin: 20px 0;
        }

        .matrix-cell {
            background: #e9ecef;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .matrix-cell:hover {
            background: #2193b0;
            color: white;
            transform: scale(1.05);
        }

        .achievement-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin: 20px 0;
        }

        .achievement-item {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .achievement-item:hover {
            transform: translateY(-5px);
            background: linear-gradient(45deg, #11998e, #38ef7d);
            color: white;
        }

        .quiz-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }

        .quiz-option {
            padding: 10px;
            margin: 10px 0;
            background: #f8f9fa;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .quiz-option:hover {
            background: #2193b0;
            color: white;
        }

        .profile-container {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 20px;
            margin: 20px 0;
        }

        .profile-stats {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .progress-bar {
            width: 100%;
            height: 20px;
            background: #e9ecef;
            border-radius: 10px;
            margin: 10px 0;
            overflow: hidden;
        }

        .progress {
            width: 0%;
            height: 100%;
            background: linear-gradient(45deg, #11998e, #38ef7d);
            transition: width 0.3s ease;
        }

        .badge {
            display: inline-block;
            padding: 8px 15px;
            background: linear-gradient(45deg, #11998e, #38ef7d);
            color: white;
            border-radius: 20px;
            margin: 5px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🎮 PERBANDINGAN SENILAI </h1>
        <p>Petualangan Seru</p>
    </div>

    <div class="nav-menu">
        <button class="nav-button" onclick="showPage('home')">Beranda</button>
        <button class="nav-button" onclick="showPage('lessons')">Pelajaran</button>
        <button class="nav-button" onclick="showPage('games')">Permainan</button>
        <button class="nav-button" onclick="showPage('quiz')">Kuis</button>
        <button class="nav-button" onclick="showPage('profile')">Profil</button>
    </div>
<!-- Beranda (Home) Section -->
<div id="home" class="page active">
    <div class="card">
        <h2>👋 Selamat Datang di Perbandingan Senilai Adventure!</h2>
        <p>Mari jelajahi keajaiban matematika melalui perbandingan senilai yang seru dan mudah dipahami!</p>
        <div class="achievement-grid">
            <div class="achievement-item" onclick="showPage('lessons')">
                <h3>📚 Mulai Belajar</h3>
                <p>Temukan konsep perbandingan senilai yang menarik</p>
                <small>Cocok untuk siswa kelas 7</small>
            </div>
            <div class="achievement-item" onclick="showPage('games')">
                <h3>🎮 Main Game Matematika</h3>
                <p>Bermain sambil belajar konsep perbandingan</p>
                <small>Tantangan seru menunggu!</small>
            </div>
            <div class="achievement-item" onclick="showPage('quiz')">
                <h3>✍️ Ikuti Kuis Interaktif</h3>
                <p>Uji pemahamanmu tentang perbandingan</p>
                <small>Dapatkan skor tertinggi!</small>
            </div>
        </div>
        <div class="card" style="margin-top: 20px; background-color: #f0f8ff;">
            <h3>🌟 Mengapa Belajar Perbandingan Senilai?</h3>
            <ul>
                <li>Memahami hubungan matematis dalam kehidupan sehari-hari</li>
                <li>Mengembangkan kemampuan berpikir logis</li>
                <li>Persiapan untuk materi matematika lebih lanjut</li>
                <li>Melatih keterampilan pemecahan masalah</li>
            </ul>
        </div>
    </div>
</div>

<!-- Halaman Pelajaran (Lessons) -->
<div id="lessons" class="page">
    <div class="card">
        <h2>📚 Materi Perbandingan Senilai Kelas 7</h2>
        <div class="achievement-grid">
            <div class="achievement-item" onclick="showLessonDetail('konsep-dasar')">
                <h3>Bab 1: Konsep Dasar</h3>
                <p>Pengertian Perbandingan Senilai</p>
                <ul>
                    <li>Definisi Perbandingan</li>
                    <li>Ciri-ciri Perbandingan Senilai</li>
                    <li>Contoh dalam Kehidupan Sehari-hari</li>
                </ul>
            </div>
            <div class="achievement-item" onclick="showLessonDetail('perhitungan')">
                <h3>Bab 2: Teknik Perhitungan</h3>
                <p>Metode Menghitung Perbandingan</p>
                <ul>
                    <li>Rumus Perbandingan</li>
                    <li>Cara Menentukan Perbandingan</li>
                    <li>Latihan Soal Praktis</li>
                </ul>
            </div>
            <div class="achievement-item" onclick="showLessonDetail('aplikasi')">
                <h3>Bab 3: Aplikasi Nyata</h3>
                <p>Perbandingan dalam Kehidupan</p>
                <ul>
                    <li>Contoh di Pasar</li>
                    <li>Perhitungan Resep Masakan</li>
                    <li>Studi Kasus Sederhana</li>
                </ul>
            </div>
            <div class="achievement-item" onclick="showLessonDetail('grafik')">
                <h3>Bab 4: Grafik Perbandingan</h3>
                <p>Visualisasi Matematis</p>
                <ul>
                    <li>Membuat Grafik Perbandingan</li>
                    <li>Interpretasi Grafik</li>
                    <li>Latihan Menggambar</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="lessonDetail"></div>
        </div>
    </div>

    <script>
        const lessonDetails = {
            'konsep-dasar': `
                <h2>Bab 1: Konsep Dasar - Pengertian Perbandingan Senilai</h2>
                <p>Dalam bab ini, kita akan mempelajari fondasi konseptual dari perbandingan senilai.</p>
                <h3>Materi Pembahasan:</h3>
                <ul>
                    <li>Definisi Perbandingan: Membandingkan dua besaran dengan cara membagi</li>
                    <li>Ciri-ciri Perbandingan Senilai: Jika satu besaran naik, besaran lain juga naik</li>
                    <li>Contoh: Jumlah beras dan air untuk memasak</li>
                </ul>
            `,
            'perhitungan': `
                <h2>Bab 2: Teknik Perhitungan - Metode Menghitung Perbandingan</h2>
                <p>Pada bab ini, kita akan mempraktikkan cara menghitung perbandingan.</p>
                <h3>Topik Utama:</h3>
                <ul>
                    <li>Rumus Perbandingan: A/B = C/D</li>
                    <li>Cara Sistematis Menentukan Perbandingan</li>
                    <li>Latihan Soal untuk Meningkatkan Kemampuan</li>
                </ul>
            `,
            'aplikasi': `
                <h2>Bab 3: Aplikasi Nyata - Perbandingan dalam Kehidupan</h2>
                <p>Mari kita lihat bagaimana perbandingan digunakan dalam kehidupan sehari-hari.</p>
                <h3>Studi Kasus:</h3>
                <ul>
                    <li>Perhitungan Harga di Pasar</li>
                    <li>Resep Masakan dan Skala Bahan</li>
                    <li>Contoh Praktis dari Berbagai Profesi</li>
                </ul>
            `,
            'grafik': `
                <h2>Bab 4: Grafik Perbandingan - Visualisasi Matematis</h2>
                <p>Belajar menggambar dan memahami grafik perbandingan.</p>
                <h3>Kegiatan Belajar:</h3>
                <ul>
                    <li>Teknik Membuat Grafik Perbandingan</li>
                    <li>Cara Membaca dan Menginterpretasi Grafik</li>
                    <li>Latihan Menggambar Grafik Interaktif</li>
                </ul>
            `
        };

        function showLessonDetail(lesson) {
            const detailContainer = document.getElementById('lessonDetail');
            detailContainer.innerHTML = lessonDetails[lesson];
            detailContainer.style.display = 'block';
        }
    </script>

<!-- Halaman Permainan (Games) -->
<!-- Halaman Permainan (Games) -->
<div id="games" class="page">
    <div class="card">
        <h2>🎮 Permainan Perbandingan Senilai</h2>
        <div class="matrix-game">
            <div class="matrix-cell" onclick="startGame('rasio')">
                <h4>Tantangan Rasio</h4>
                <p>Selesaikan perbandingan secepat mungkin!</p>
                <small>Uji kecepatan berpikirmu dalam memecahkan soal rasio.</small>
            </div>
            <div class="matrix-cell" onclick="startGame('praktis')">
                <h4>Simulasi Praktis</h4>
                <p>Pecahkan soal kehidupan nyata berdasarkan perbandingan senilai.</p>
                <small>Gunakan logika matematikamu untuk menyelesaikan masalah sehari-hari.</small>
            </div>
            <div class="matrix-cell" onclick="startGame('tebak')">
                <h4>Tebak Perbandingan</h4>
                <p>Tebak nilai perbandingan tersembunyi di dalam soal!</p>
                <small>Asah intuisi dan kecepatan dalam menebak nilai perbandingan.</small>
            </div>
            <div class="matrix-cell" onclick="startGame('konstruksi')">
                <h4>Bangun Perbandingan</h4>
                <p>Susun perbandingan yang benar dengan logika yang tepat.</p>
                <small>Kembangkan strategi yang baik untuk menyelesaikan soal perbandingan.</small>
            </div>
            <div class="matrix-cell" onclick="startGame('waktu')">
                <h4>Balapan Waktu</h4>
                <p>Selesaikan soal dalam waktu terbatas dan buktikan kecepatanmu!</p>
                <small>Tantangan kecepatan dalam memecahkan soal perbandingan senilai.</small>
            </div>
            <div class="matrix-cell" onclick="startGame('logika')">
                <h4>Tantangan Logika</h4>
                <p>Pecahkan teka-teki perbandingan senilai dengan logika yang kuat!</p>
                <small>Gunakan nalar matematis untuk menemukan solusi terbaik.</small>
            </div>
            <div class="matrix-cell" onclick="startGame('visual')">
                <h4>Visualisasi Perbandingan</h4>
                <p>Ubah angka-angka menjadi grafik untuk memahami perbandingan secara visual.</p>
                <small>Belajar lebih efektif dengan visualisasi yang menarik.</small>
            </div>
            <div class="matrix-cell" onclick="startGame('kombinasi')">
                <h4>Kombinasi Cerdas</h4>
                <p>Gabungkan berbagai konsep untuk menyelesaikan soal perbandingan senilai.</p>
                <small>Tingkatkan kemampuan matematika kamu dengan soal yang menantang.</small>
            </div>
            <div class="matrix-cell" onclick="startGame('master')">
                <h4>Master Challenge</h4>
                <p>Uji kemampuan tertinggi dengan soal yang sangat sulit!</p>
                <small>Buktikan kehebatanmu dalam perbandingan senilai!</small>
            </div>
        </div>
    </div>
</div>

<!-- Tampilkan skor dan leaderboard -->
<div id="scoreboard" class="page">
    <h3>Skor Terakhir: <span id="current-score">0</span></h3>
    <h4>Leaderboard:</h4>
    <ul id="leaderboard">
        <!-- Leaderboard akan tampil di sini -->
    </ul>
</div>

<script>
// Variabel global untuk menyimpan skor dan level
let score = 0;
let level = 1;
let leaderboard = JSON.parse(localStorage.getItem('leaderboard')) || [];

// Fungsi untuk memulai permainan
function startGame(gameType) {
    switch (gameType) {
        case 'rasio':
            startRasioGame();
            break;
        case 'praktis':
            startPraktisGame();
            break;
        case 'tebak':
            startTebakGame();
            break;
        case 'konstruksi':
            startKonstruksiGame();
            break;
        case 'waktu':
            startWaktuGame();
            break;
        case 'logika':
            startLogikaGame();
            break;
        case 'visual':
            startVisualGame();
            break;
        case 'kombinasi':
            startKombinasiGame();
            break;
        case 'master':
            startMasterGame();
            break;
        default:
            alert('Pilih permainan yang ingin dimainkan.');
    }
}

// Logika permainan "Tantangan Rasio"
function startRasioGame() {
    let soal = generateRasioQuestion();
    let userAnswer = prompt("Tantangan Rasio: " + soal.question);
    if (parseFloat(userAnswer) === soal.answer) {
        score += 10;
        alert("Jawaban Benar! Skor kamu sekarang: " + score);
    } else {
        alert("Jawaban Salah. Jawaban yang benar adalah: " + soal.answer);
    }
    checkLevel();
    showScore();
}

// Fungsi untuk menghasilkan soal rasio secara acak
function generateRasioQuestion() {
    let a = Math.floor(Math.random() * 10) + 1;
    let b = Math.floor(Math.random() * 10) + 1;
    let x = Math.floor(Math.random() * 10) + 1;
    let y = (a * x) / b; // Perbandingan senilai
    return {
        question: `Jika ${a} : ${b} = ${x} : ?, berapa nilai ?`,
        answer: y
    };
}

// Logika permainan "Simulasi Praktis"
function startPraktisGame() {
    let soal = "Di sebuah kebun terdapat 12 pohon mangga dan 4 pohon jeruk. Berapa banyak pohon jeruk jika terdapat 48 pohon mangga?";
    let userAnswer = prompt("Simulasi Praktis: " + soal);
    if (parseInt(userAnswer) === 16) {
        score += 10;
        alert("Jawaban Benar! Skor kamu sekarang: " + score);
    } else {
        alert("Jawaban Salah. Jawaban yang benar adalah: 16.");
    }
    checkLevel();
    showScore();
}

// Logika permainan "Tebak Perbandingan"
function startTebakGame() {
    let soal = generateTebakQuestion();
    let userAnswer = prompt("Tebak Perbandingan: " + soal.question);
    if (parseFloat(userAnswer) === soal.answer) {
        score += 10;
        alert("Jawaban Benar! Skor kamu sekarang: " + score);
    } else {
        alert("Jawaban Salah. Jawaban yang benar adalah: " + soal.answer);
    }
    checkLevel();
    showScore();
}

// Fungsi untuk menghasilkan soal tebak perbandingan
function generateTebakQuestion() {
    let a = Math.floor(Math.random() * 10) + 1;
    let b = Math.floor(Math.random() * 10) + 1;
    let x = Math.floor(Math.random() * 10) + 1;
    let y = (a * x) / b; // Perbandingan senilai
    return {
        question: `Jika ${a} : ${b} = ${x} : ?, berapa nilai ?`,
        answer: y
    };
}

// Logika permainan "Bangun Perbandingan"
function startKonstruksiGame() {
    let soal = "Susun perbandingan yang benar: 2 : 4 = ? : 8";
    let userAnswer = prompt("Bangun Perbandingan: " + soal);
    if (parseInt(userAnswer) === 4) {
        score += 10;
        alert("Jawaban Benar! Skor kamu sekarang: " + score);
    } else {
        alert("Jawaban Salah. Jawaban yang benar adalah: 4.");
    }
    checkLevel();
    showScore();
}

// Fungsi untuk memeriksa level pemain
function checkLevel() {
    if (score >= 50 && level === 1) {
        level = 2;
        alert("Selamat! Anda telah naik ke Level 2!");
    }
    if (score >= 100 && level === 2) {
        level = 3;
        alert("Selamat! Anda telah naik ke Level 3!");
    }
}

// Menampilkan skor saat ini
function showScore() {
    document.getElementById("current-score").textContent = score;
}

// Menyimpan skor tertinggi ke leaderboard
function saveLeaderboard() {
    let playerName = prompt("Masukkan nama Anda:");
    leaderboard.push({ name: playerName, score: score });
    leaderboard.sort((a, b) => b.score - a.score);
    leaderboard = leaderboard.slice(0, 5); // Menyimpan hanya 5 skor tertinggi
    localStorage.setItem('leaderboard', JSON.stringify(leaderboard));
    showLeaderboard();
}

// Menampilkan leaderboard
function showLeaderboard() {
    let leaderboardList = document.getElementById("leaderboard");
    leaderboardList.innerHTML = '';
    leaderboard.forEach((entry) => {
        let li = document.createElement("li");
        li.textContent = `${entry.name}: ${entry.score}`;
        leaderboardList.appendChild(li);
    });
}

// Menampilkan leaderboard saat pertama kali dimuat
showLeaderboard();
</script>




<!-- Halaman Kuis (Quiz) -->
<div id="quiz" class="page">
    <div class="quiz-container">
        <h2>✍️ Kuis Perbandingan Senilai Interaktif</h2>
        <div class="card">
            <h3>Kategori Kuis:</h3>
            <div class="achievement-grid">
                <div class="achievement-item" onclick="startQuiz('pemula')">
                    <h3>Kuis Pemula</h3>
                    <p>Konsep Dasar Perbandingan</p>
                    <small>5 soal sederhana</small>
                </div>
                <div class="achievement-item" onclick="startQuiz('menengah')">
                    <h3>Kuis Menengah</h3>
                    <p>Perhitungan Praktis</p>
                    <small>10 soal tantangan</small>
                </div>
                <div class="achievement-item" onclick="startQuiz('mahir')">
                    <h3>Kuis Mahir</h3>
                    <p>Analisis Kompleks</p>
                    <small>15 soal sulit</small>
                </div>
            </div>

            <div class="card" style="margin-top: 20px; background-color: #f0f8ff;">
                <h3>💡 Tips Mengerjakan Kuis:</h3>
                <ol>
                    <li>Baca soal dengan teliti</li>
                    <li>Gunakan konsep perbandingan senilai</li>
                    <li>Periksa kembali jawabanmu</li>
                    <li>Jangan terburu-buru</li>
                    <li>Percaya diri!</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<script>
// Menyimpan soal untuk setiap kategori
const quizQuestions = {
    pemula: [
        { question: "Jika 2 : 4 = x : 8, berapakah nilai x?", answer: "4" },
        { question: "Jika 3 : 9 = x : 27, berapakah nilai x?", answer: "9" },
        { question: "Jika 5 : 10 = x : 20, berapakah nilai x?", answer: "10" },
        { question: "Jika 1 : 2 = x : 4, berapakah nilai x?", answer: "2" },
        { question: "Jika 7 : 14 = x : 28, berapakah nilai x?", answer: "14" }
    ],
    menengah: [
        { question: "Jika 6 : 12 = x : 24, berapakah nilai x?", answer: "24" },
        { question: "Jika 9 : 18 = x : 36, berapakah nilai x?", answer: "18" },
        { question: "Jika 4 : 8 = x : 32, berapakah nilai x?", answer: "16" },
        { question: "Jika 5 : 15 = x : 30, berapakah nilai x?", answer: "10" },
        { question: "Jika 7 : 21 = x : 63, berapakah nilai x?", answer: "21" },
        { question: "Jika 2 : 4 = x : 20, berapakah nilai x?", answer: "10" },
        { question: "Jika 12 : 36 = x : 72, berapakah nilai x?", answer: "24" },
        { question: "Jika 8 : 16 = x : 64, berapakah nilai x?", answer: "32" },
        { question: "Jika 3 : 6 = x : 18, berapakah nilai x?", answer: "9" },
        { question: "Jika 10 : 20 = x : 100, berapakah nilai x?", answer: "50" }
    ],
    mahir: [
        { question: "Jika 3 : 6 = x : 18, berapakah nilai x?", answer: "9" },
        { question: "Jika 4 : 8 = x : 32, berapakah nilai x?", answer: "16" },
        { question: "Jika 5 : 15 = x : 75, berapakah nilai x?", answer: "25" },
        { question: "Jika 6 : 18 = x : 72, berapakah nilai x?", answer: "24" },
        { question: "Jika 9 : 27 = x : 54, berapakah nilai x?", answer: "18" },
        { question: "Jika 10 : 50 = x : 200, berapakah nilai x?", answer: "40" },
        { question: "Jika 15 : 45 = x : 180, berapakah nilai x?", answer: "60" },
        { question: "Jika 7 : 35 = x : 105, berapakah nilai x?", answer: "21" },
        { question: "Jika 2 : 8 = x : 16, berapakah nilai x?", answer: "4" },
        { question: "Jika 8 : 32 = x : 64, berapakah nilai x?", answer: "16" },
        { question: "Jika 3 : 9 = x : 72, berapakah nilai x?", answer: "24" },
        { question: "Jika 12 : 48 = x : 96, berapakah nilai x?", answer: "24" },
        { question: "Jika 5 : 25 = x : 100, berapakah nilai x?", answer: "20" },
        { question: "Jika 6 : 18 = x : 108, berapakah nilai x?", answer: "36" },
        { question: "Jika 7 : 28 = x : 140, berapakah nilai x?", answer: "35" }
    ]
};

// Fungsi untuk memulai kuis
function startQuiz(level) {
    let questions = quizQuestions[level];
    let currentQuestionIndex = 0;
    let score = 0;

    function askQuestion() {
        if (currentQuestionIndex < questions.length) {
            let currentQuestion = questions[currentQuestionIndex];
            let userAnswer = prompt(currentQuestion.question);
            if (userAnswer === currentQuestion.answer) {
                score += 10;  // Tambah skor 10 untuk jawaban benar
                alert("Jawaban Benar! Skor kamu sekarang: " + score);
            } else {
                alert("Jawaban Salah. Jawaban yang benar adalah: " + currentQuestion.answer);
            }
            currentQuestionIndex++;
            askQuestion();
        } else {
            alert("Kuis selesai! Skor kamu adalah: " + score);
            // Menyimpan skor ke localStorage atau menampilkan leaderboard (opsional)
            let playerName = prompt("Masukkan nama Anda untuk menyimpan skor:");
            let leaderboard = JSON.parse(localStorage.getItem('leaderboard')) || [];
            leaderboard.push({ name: playerName, score: score });
            leaderboard.sort((a, b) => b.score - a.score);
            leaderboard = leaderboard.slice(0, 5);  // Menyimpan hanya 5 skor tertinggi
            localStorage.setItem('leaderboard', JSON.stringify(leaderboard));
            showLeaderboard();
        }
    }

    askQuestion();
}

// Menampilkan leaderboard
function showLeaderboard() {
    let leaderboard = JSON.parse(localStorage.getItem('leaderboard')) || [];
    let leaderboardList = document.createElement("ul");
    leaderboard.forEach(entry => {
        let li = document.createElement("li");
        li.textContent = `${entry.name}: ${entry.score}`;
        leaderboardList.appendChild(li);
    });

    let leaderboardContainer = document.getElementById("leaderboard");
    leaderboardContainer.innerHTML = "<h4>Leaderboard:</h4>";
    leaderboardContainer.appendChild(leaderboardList);
}

// Menampilkan leaderboard saat pertama kali dimuat
showLeaderboard();
</script>


<!-- Halaman Profil (Profile) -->
<div id="profile" class="page">
    <div class="profile-container">
        <div class="profile-stats">
            <h2>📊 Statistik Belajar Perbandingan</h2>
            <div class="progress-bar">
                <div class="progress" style="width: 75%"></div>
            </div>
            <p>Progress Belajar: 75% - Kamu Hebat!</p>
            <div class="achievement-grid" style="grid-template-columns: repeat(3, 1fr);">
                <div class="badge">Level 7</div>
                <div class="badge">10 Kuis</div>
                <div class="badge">Ahli Perbandingan</div>
            </div>
        </div>
        <div class="card">
            <h2>🏆 Pencapaian Belajar</h2>
            <div class="achievement-grid">
                <div class="achievement-item">
                    <h3>🌱 Pemula Perbandingan</h3>
                    <p>Menguasai konsep dasar</p>
                    <small>Lanjutkan semangat belajarmu!</small>
                </div>
                <div class="achievement-item">
                    <h3>🧮 Praktisi Perbandingan</h3>
                    <p>Mahir menyelesaikan soal</p>
                    <small>Terus tingkatkan kemampuan!</small>
                </div>
                <div class="achievement-item">
                    <h3>🏅 Master Perbandingan</h3>
                    <p>Menguasai konsep lanjutan</p>
                    <small>Kamu luar biasa!</small>
                </div>
            </div>
        </div>
    </div>
</div>
   
    <script>
        // Fungsi untuk menampilkan halaman
        function showPage(pageId) {
            // Sembunyikan semua halaman
            document.querySelectorAll('.page').forEach(page => {
                page.classList.remove('active');
            });
            // Tampilkan halaman yang dipilih
            document.getElementById(pageId).classList.add('active');
        }

        // Fungsi untuk menangani klik pada game matrix
        function handleGameClick(cell) {
            cell.style.background = '#38ef7d';
            cell.style.color = 'white';
            setTimeout(() => {
                cell.style.background = '#e9ecef';
                cell.style.color = '#333';
            }, 500);
        }

        // Fungsi untuk memeriksa jawaban kuis
        function checkAnswer(option, type) {
            if (type === 'correct') {
                option.style.background = '#38ef7d';
                option.style.color = 'white';
            } else {
                option.style.background = '#ff6b6b';
                option.style.color = 'white';
            }
            setTimeout(() => {
                option.style.background = '#f8f9fa';
                option.style.color = '#333';
            }, 1000);
        }

        // Inisialisasi progress bar
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                document.querySelector('.progress').style.width = '65%';
            }, 500);
        });
    </script>
</body>
</html>