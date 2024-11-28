<?php
session_start();

// Validate required parameters
if (!isset($_POST['score']) || !isset($_POST['total']) || !isset($_POST['grade'])) {
    header('Location: soal.php');
    exit();
}

$score = $_POST['score'];
$total = $_POST['total'];
$grade = $_POST['grade'];
$percentage = round(($score / $total) * 100);
$date = date('d F Y');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sertifikat Penyelesaian</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        @media print {
            .no-print {
                display: none;
            }
            body {
                print-color-adjust: exact;
                -webkit-print-color-adjust: exact;
            }
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
        }

        .certificate {
            background: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
            min-height: 600px;
            border: 20px solid #f8f8f8;
        }

        .certificate::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(33, 150, 243, 0.1) 0%, rgba(33, 150, 243, 0) 100%);
            z-index: 1;
        }

        .certificate-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .certificate-header {
            margin-bottom: 40px;
        }

        .certificate-title {
            font-family: 'Playfair Display', serif;
            font-size: 48px;
            color: #2196F3;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 4px;
        }

        .certificate-subtitle {
            font-size: 24px;
            color: #666;
            margin-bottom: 40px;
        }

        .recipient-name {
            font-size: 36px;
            font-weight: 600;
            color: #333;
            margin: 20px 0;
            text-transform: capitalize;
        }

        .completion-text {
            font-size: 20px;
            color: #666;
            margin: 20px 0;
            line-height: 1.8;
        }

        .score-details {
            margin: 30px 0;
            padding: 20px;
            background: #f8f8f8;
            border-radius: 10px;
            display: inline-block;
        }

        .score-text {
            font-size: 24px;
            color: #2196F3;
            font-weight: 600;
        }

        .grade {
            font-size: 36px;
            font-weight: 700;
            color: #2196F3;
            margin: 10px 0;
        }

        .date {
            font-size: 18px;
            color: #666;
            margin-top: 40px;
        }

        .certificate-footer {
            margin-top: 60px;
            text-align: center;
        }

        .signature {
            width: 200px;
            border-top: 2px solid #333;
            margin: 10px auto;
            padding-top: 10px;
            font-weight: 600;
        }

        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 150px;
            opacity: 0.03;
            z-index: 1;
            pointer-events: none;
            font-weight: 700;
            text-transform: uppercase;
        }

        .print-button {
            background: #2196F3;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
            margin: 20px 0;
        }

        .print-button:hover {
            background: #1976D2;
        }

        @media print {
            .container {
                margin: 0;
                padding: 0;
            }

            .certificate {
                box-shadow: none;
                border: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="certificate">
            <div class="watermark">CERTIFIED</div>
            <div class="certificate-content">
                <div class="certificate-header">
                    <h1 class="certificate-title">Sertifikat</h1>
                    <div class="certificate-subtitle">Penyelesaian Kuis Pengetahuan Umum</div>
                </div>

                <p class="completion-text">
                    Dengan bangga kami menyatakan bahwa
                </p>
                
                <h2 class="recipient-name">Peserta Kuis</h2>
                
                <p class="completion-text">
                    telah berhasil menyelesaikan Kuis Pengetahuan Umum<br>
                    dengan hasil yang memuaskan
                </p>

                <div class="score-details">
                    <div class="score-text">
                        Skor: <?php echo $score; ?> dari <?php echo $total; ?> (<?php echo $percentage; ?>%)
                    </div>
                    <div class="grade">
                        Grade: <?php echo $grade; ?>
                    </div>
                </div>

                <div class="date">
                    Diterbitkan pada: <?php echo $date; ?>
                </div>

                <div class="certificate-footer">
                    <div class="signature">
                        Administrator Kuis
                    </div>
                </div>
            </div>
        </div>

        <div class="no-print" style="text-align: center;">
            <button onclick="window.print()" class="print-button">
                Cetak Sertifikat
            </button>
        </div>
    </div>
</body>
</html>