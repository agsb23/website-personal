<?php
// Array pertanyaan kuis
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
    

// Fungsi untuk mengacak array
function shuffleArray(&$array) {
    $keys = array_keys($array);
    shuffle($keys);
    $temp = array();
    foreach($keys as $key) {
        $temp[$key] = $array[$key];
    }
    $array = $temp;
    return true;
}

// Fungsi untuk mendapatkan opsi jawaban yang diacak
function getShuffledOptions($correct_answer, $all_options, $num_options = 4) {
    // Hapus jawaban benar dari array opsi
    $other_options = array_diff($all_options, array($correct_answer));
    // Acak opsi yang salah
    $other_options = array_values($other_options);
    shuffle($other_options);
    
    // Ambil sejumlah opsi yang diinginkan (dikurangi 1 untuk jawaban benar)
    $selected_options = array_slice($other_options, 0, $num_options - 1);
    
    // Gabungkan dengan jawaban benar
    $final_options = array_merge(array($correct_answer), $selected_options);
    
    // Acak posisi semua opsi
    shuffle($final_options);
    
    return $final_options;
}


// Fungsi untuk mendapatkan grade berdasarkan skor
function getGrade($score, $total_questions) {
    $percentage = ($score / $total_questions) * 100;
    
    if($percentage >= 90) return 'A';
    if($percentage >= 80) return 'B';
    if($percentage >= 70) return 'C';
    if($percentage >= 60) return 'D';
    return 'E';
}

// Fungsi untuk mendapatkan komentar berdasarkan grade
function getComment($grade) {
    switch($grade) {
        case 'A':
            return 'Luar biasa! Anda memiliki pemahaman yang sangat baik!';
        case 'B':
            return 'Bagus! Anda memiliki pemahaman yang baik.';
        case 'C':
            return 'Cukup baik. Terus tingkatkan pemahaman Anda.';
        case 'D':
            return 'Perlu belajar lebih giat lagi.';
        default:
            return 'Jangan menyerah, terus belajar!';
    }
}

// Fungsi untuk menghitung waktu pengerjaan
function calculateTimeTaken($start_time) {
    $end_time = time();
    $time_diff = $end_time - $start_time;
    $minutes = floor($time_diff / 60);
    $seconds = $time_diff % 60;
    return sprintf("%02d:%02d", $minutes, $seconds);
}

// Function to calculate score and generate explanations for quiz answers
function calculateScore($submitted_answers, $questions) {
    $score = 0;
    $explanations = array();
    
    foreach ($submitted_answers as $question_num => $answer) {
        $current_question = $questions[$question_num];
        $is_correct = ($answer === $current_question['correct']);
        
        if ($is_correct) {
            $score++;
        }
        
        $explanations[$question_num] = array(
            'question' => $current_question['question'],
            'your_answer' => $answer,
            'correct_answer' => $current_question['correct'],
            'is_correct' => $is_correct,
            'explanation' => $current_question['explanation']
        );
    }
    
    return array($score, $explanations);
}
?>
