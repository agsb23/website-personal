<!-- soal.php -->
<?php
session_start();
require_once('function.php'); // Pastikan ini menunjuk ke lokasi yang benar
$questions = array(
        1 => array(
            'question' => 'Di sebuah kebun, terdapat dua jenis tanaman. Untuk setiap 2 tanaman jenis pertama, terdapat 3 tanaman jenis kedua. Jika di kebun tersebut ada 6 tanaman jenis pertama, berapakah jumlah tanaman jenis kedua?',
            'options' => array('9', '4', '10', '12', '6', '18', '16', '8'),
            'correct' => '9',
            'explanation' => 'Jika perbandingan tanaman jenis pertama dan kedua adalah 2:3, maka jika 6 tanaman jenis pertama, tanaman jenis kedua yang setara adalah 9.',
            'category' => 'Matematika'
        ),
        2 => array(
            'question' => 'Seorang koki menggunakan perbandingan 5:8 untuk mencampurkan dua bahan. Jika 20 gram bahan pertama digunakan, berapa gram bahan kedua yang digunakan?',
            'options' => array('32', '25', '30', '40', '50', '35', '45', '20'),
            'correct' => '32',
            'explanation' => 'Dengan menggunakan rumus perbandingan senilai, x = (8 * 20) / 5, yang menghasilkan 32 gram bahan kedua.',
            'category' => 'Matematika'
        ),
        3 => array(
            'question' => 'Dalam sebuah perlombaan, perbandingan waktu yang dibutuhkan untuk lari antara dua pelari adalah 3:4. Jika pelari pertama membutuhkan waktu 12 menit, berapa waktu yang dibutuhkan pelari kedua?',
            'options' => array('16', '9', '15', '14', '12', '10', '18', '8'),
            'correct' => '16',
            'explanation' => 'Jika perbandingan waktu adalah 3:4, maka 12 menit untuk pelari pertama dibandingkan dengan 16 menit untuk pelari kedua.',
            'category' => 'Matematika'
        ),
        4 => array(
            'question' => 'Dalam perbandingan 7:9, ada sebuah peternakan yang memiliki jumlah kambing dan sapi. Jika 35 kambing ada di peternakan, berapa banyak sapi yang ada?',
            'options' => array('45', '42', '40', '38', '37', '36', '33', '30'),
            'correct' => '45',
            'explanation' => 'Dengan rumus perbandingan senilai, x = (9 * 35) / 7, yang menghasilkan 45 sapi.',
            'category' => 'Matematika'
        ),
        5 => array(
            'question' => 'Seorang petani menanam tanaman dalam perbandingan 6:11. Jika dia menanam 36 tanaman jenis pertama, berapa jumlah tanaman jenis kedua yang ditanam?',
            'options' => array('66', '60', '72', '54', '56', '58', '55', '63'),
            'correct' => '66',
            'explanation' => 'Dengan rumus perbandingan senilai, x = (11 * 36) / 6, hasilnya adalah 66 tanaman jenis kedua.',
            'category' => 'Matematika'
        ),
        6 => array(
            'question' => 'Pada sebuah pabrik, perbandingan jumlah mesin dan pekerja adalah 10:15. Jika ada 20 mesin di pabrik, berapa jumlah pekerja di pabrik tersebut?',
            'options' => array('30', '25', '35', '40', '45', '28', '32', '38'),
            'correct' => '30',
            'explanation' => 'Perbandingan senilai dapat dihitung dengan x = (15 * 20) / 10, hasilnya adalah 30 pekerja.',
            'category' => 'Matematika'
        ),
        7 => array(
            'question' => 'Di sebuah pabrik, jumlah bahan baku yang diproses memiliki perbandingan 8:12. Jika ada 32 unit bahan baku, berapa jumlah bahan yang sudah diproses?',
            'options' => array('48', '42', '40', '36', '44', '50', '45', '52'),
            'correct' => '48',
            'explanation' => 'Dengan rumus perbandingan senilai, x = (12 * 32) / 8, hasilnya adalah 48 unit bahan yang sudah diproses.',
            'category' => 'Matematika'
        ),
        8 => array(
            'question' => 'Seorang pedagang menawarkan barang dengan harga perbandingan 5:7. Jika ia memiliki 25 barang, berapa harga barang lainnya yang setara dengan 25 barang tersebut?',
            'options' => array('35', '32', '28', '40', '30', '33', '38', '36'),
            'correct' => '35',
            'explanation' => 'Dengan rumus perbandingan senilai, x = (7 * 25) / 5, hasilnya adalah 35.',
            'category' => 'Matematika'
        ),
        9 => array(
            'question' => 'Dalam perbandingan 4:6, ada sebuah gudang yang menyimpan barang. Jika 24 kotak barang ada di gudang tersebut, berapa banyak barang lainnya yang setara?',
            'options' => array('36', '32', '30', '28', '40', '42', '45', '50'),
            'correct' => '36',
            'explanation' => 'Perbandingan senilai dapat dihitung dengan x = (6 * 24) / 4, hasilnya adalah 36 barang lainnya.',
            'category' => 'Matematika'
        ),
        10 => array(
            'question' => 'Seorang pengusaha memiliki 3 mobil yang dapat mengangkut barang dalam perbandingan 3:5. Jika 15 barang dipindahkan oleh mobil pertama, berapa banyak barang yang akan dipindahkan oleh mobil kedua?',
            'options' => array('25', '22', '30', '20', '27', '24', '32', '28'),
            'correct' => '25',
            'explanation' => 'Dengan rumus perbandingan senilai, x = (5 * 15) / 3, hasilnya adalah 25 barang yang akan dipindahkan oleh mobil kedua.',
            'category' => 'Matematika'
        ),
        11 => array(
            'question' => 'Sebuah restoran menggunakan perbandingan 4:7 untuk mencampurkan bahan makanan. Jika 28 kilogram bahan pertama digunakan, berapa banyak bahan kedua yang digunakan?',
            'options' => array('49', '50', '48', '44', '42', '40', '46', '52'),
            'correct' => '49',
            'explanation' => 'Jika perbandingan bahan pertama dan kedua adalah 4:7, maka 28 kilogram bahan pertama dibandingkan dengan 49 kilogram bahan kedua.',
            'category' => 'Matematika'
        ),
        12 => array(
            'question' => 'Dalam sebuah sekolah, rasio jumlah siswa dan guru adalah 9:12. Jika terdapat 27 siswa di kelas, berapa jumlah guru yang ada?',
            'options' => array('36', '48', '45', '54', '42', '40', '38', '32'),
            'correct' => '36',
            'explanation' => 'Dengan rumus perbandingan senilai, x = (12 * 27) / 9, hasilnya adalah 36 guru.',
            'category' => 'Matematika'
        ),
        13 => array(
            'question' => 'Di sebuah pabrik, mesin dan pekerja memiliki perbandingan 6:8. Jika 18 mesin digunakan dalam pabrik, berapa banyak pekerja yang dibutuhkan?',
            'options' => array('22', '20', '24', '26', '18', '30', '28', '32'),
            'correct' => '24',
            'explanation' => 'Jika 6 mesin dibandingkan dengan 8 pekerja, maka 18 mesin dibandingkan dengan 24 pekerja.',
            'category' => 'Matematika'
        ),
        14 => array(
            'question' => 'Seorang pedagang memiliki barang dalam perbandingan 2:5. Jika ada 14 barang, berapa banyak barang lainnya yang tersedia?',
            'options' => array('35', '30', '28', '25', '40', '45', '38', '50'),
            'correct' => '35',
            'explanation' => 'Dengan rumus perbandingan senilai, x = (5 * 14) / 2, hasilnya adalah 35 barang lainnya.',
            'category' => 'Matematika'
        ),
        15 => array(
            'question' => 'Seorang petani menggunakan perbandingan 5:8 untuk mencampur pupuk. Jika ia menggunakan 15 kg pupuk pertama, berapa kg pupuk kedua yang digunakan?',
            'options' => array('25', '27', '30', '22', '24', '23', '28', '26'),
            'correct' => '24',
            'explanation' => 'Jika perbandingan pupuk pertama dan kedua adalah 5:8, maka 15 kg pupuk pertama dibandingkan dengan 24 kg pupuk kedua.',
            'category' => 'Matematika'
        )
    );    

if (!isset($_SESSION['start_time'])) {
    $_SESSION['start_time'] = time();
}

if (!isset($_SESSION['selected_questions']) || isset($_GET['refresh'])) {
    $keys = array_keys($questions);
    shuffle($keys);
    $_SESSION['selected_questions'] = array_slice($keys, 0, 5);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Kuis Pengetahuan Umum</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2196F3;
            --secondary-color: #1976D2;
            --accent-color: #E3F2FD;
            --success-color: #4CAF50;
            --warning-color: #FFC107;
            --error-color: #F44336;
            --text-primary: #333;
            --text-secondary: #666;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            background: #f5f5f5;
            color: var(--text-primary);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .quiz-header {
            text-align: center;
            padding: 40px 0;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .quiz-header h1 {
            font-size: 2.5em;
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .quiz-container {
            display: grid;
            grid-template-columns: 3fr 1fr;
            gap: 30px;
        }

        .questions {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .question {
            margin-bottom: 40px;
            padding: 20px;
            border-radius: 8px;
            background: #fff;
            border: 1px solid #e0e0e0;
        }

        .question h3 {
            color: var(--primary-color);
            font-size: 1.2em;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .question h3::before {
            content: '❯';
            margin-right: 10px;
            color: var(--primary-color);
        }

        .category-tag {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 15px;
            background: var(--accent-color);
            color: var(--primary-color);
            font-size: 0.8em;
            margin-left: 10px;
        }

        .option-label {
            display: block;
            margin: 10px 0;
            padding: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .option-label:hover {
            border-color: var(--primary-color);
            background: var(--accent-color);
        }

        .option-label input[type="radio"] {
            position: absolute;
            opacity: 0;
        }

        .option-label input[type="radio"]:checked + span {
            color: var(--primary-color);
            font-weight: 500;
        }

        .option-label input[type="radio"]:checked + span::before {
            content: '✓';
            margin-right: 10px;
            color: var(--success-color);
        }

        .question-numbers {
            position: sticky;
            top: 20px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .number-box {
            margin: 10px 0;
            padding: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
        }

        .number-box.answered {
            background: var(--accent-color);
            border-color: var(--primary-color);
            color: var(--primary-color);
        }

        .submit-btn {
            display: block;
            width: 100%;
            padding: 15px;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background 0.3s ease;
            margin-top: 30px;
        }

        .submit-btn:hover {
            background: var(--secondary-color);
        }

        .progress-container {
            margin-bottom: 20px;
            padding: 15px;
            background: white;
            border-radius: 8px;
        }

        .progress-bar {
            width: 100%;
            height: 10px;
            background: #e0e0e0;
            border-radius: 5px;
            overflow: hidden;
        }

        .progress {
            width: 0%;
            height: 100%;
            background: var(--primary-color);
            transition: width 0.3s ease;
        }

        @media (max-width: 768px) {
            .quiz-container {
                grid-template-columns: 1fr;
            }

            .question-numbers {
                position: static;
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="quiz-header">
            <h1>Kuis Pengetahuan Umum</h1>
            <p>Jawablah pertanyaan berikut dengan teliti</p>
        </div>

        <div class="progress-container">
            <h3>Progress Kuis</h3>
            <div class="progress-bar">
                <div class="progress" id="progress"></div>
            </div>
        </div>

        <form action="hasil.php" method="post" id="quizForm">
            <input type="hidden" name="start_time" value="<?php echo $_SESSION['start_time']; ?>">
            <div class="quiz-container">
                <div class="questions">
                    <?php
                    foreach ($_SESSION['selected_questions'] as $index => $q_num) {
                        $question = $questions[$q_num];
                        $options = $question['options'];
                        $correct_answer = $question['correct'];
                        
                        // Remove correct answer from options and shuffle remaining
                        $other_options = array_diff($options, array($correct_answer));
                        shuffle($other_options);
                        
                        // Take 3 random wrong options
                        $selected_wrong_options = array_slice($other_options, 0, 3);
                        
                        // Combine with correct answer and shuffle
                        $final_options = array_merge(array($correct_answer), $selected_wrong_options);
                        shuffle($final_options);
                    ?>
                        <div class="question" id="question<?php echo $index + 1; ?>">
                            <h3>
                                Soal <?php echo $index + 1; ?>
                                <span class="category-tag"><?php echo $question['category']; ?></span>
                            </h3>
                            <p><?php echo $question['question']; ?></p>
                            <?php foreach ($final_options as $option) { ?>
                                <label class="option-label">
                                    <input type="radio" name="answers[<?php echo $q_num; ?>]" 
                                           value="<?php echo $option; ?>" 
                                           onchange="updateQuestionStatus(<?php echo $index + 1; ?>)">
                                    <span><?php echo $option; ?></span>
                                </label>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="question-numbers">
                    <h3>Navigasi Soal</h3>
                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                        <div class="number-box" id="number<?php echo $i; ?>" 
                             onclick="scrollToQuestion(<?php echo $i; ?>)">
                            Soal <?php echo $i; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <button type="submit" class="submit-btn">Selesai</button>
        </form>
    </div>

    <script>
        function updateQuestionStatus(number) {
            document.getElementById('number' + number).classList.add('answered');
            updateProgress();
        }

        function scrollToQuestion(number) {
            document.getElementById('question' + number).scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        }

        function updateProgress() {
            const total = document.querySelectorAll('.question').length;
            const answered = document.querySelectorAll('.number-box.answered').length;
            const percentage = (answered / total) * 100;
            document.getElementById('progress').style.width = percentage + '%';
        }

        // Initialize progress
        updateProgress();
    </script>
</body>
</html>