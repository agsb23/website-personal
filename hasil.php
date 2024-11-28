<!-- hasil.php -->
<?php
session_start();
require_once('function.php');

if (!isset($_POST['answers']) || !isset($_SESSION['selected_questions'])) {
    header('Location: soal.php');
    exit();
}

$selected_questions = array();
foreach ($_SESSION['selected_questions'] as $q_num) {
    $selected_questions[$q_num] = $questions[$q_num];
}

// Calculate results
list($score, $explanations) = calculateScore($_POST['answers'], $selected_questions);
$total_questions = count($selected_questions);
$grade = getGrade($score, $total_questions);
$comment = getComment($grade);
$time_taken = calculateTimeTaken($_POST['start_time']);
$percentage = ($score / $total_questions) * 100;

// Clear session
session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Kuis</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2196F3;
            --secondary-color: #1976D2;
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
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        .result-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 30px;
            margin-bottom: 30px;
            text-align: center;
        }

        .score-circle {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin: 20px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            border: 10px solid;
            transition: all 0.3s ease;
        }

        .score-circle.excellent {
            border-color: var(--success-color);
            color: var(--success-color);
        }

        .score-circle.good {
            border-color: var(--primary-color);
            color: var(--primary-color);
        }

        .score-circle.average {
            border-color: var(--warning-color);
            color: var(--warning-color);
        }

        .score-circle.poor {
            border-color: var(--error-color);
            color: var(--error-color);
        }

        .score-number {
            font-size: 3em;
            font-weight: 700;
        }

        .time-taken {
            display: inline-block;
            padding: 10px 20px;
            background: var(--primary-color);
            color: white;
            border
            border-radius: 25px;
            margin: 20px 0;
        }

        .grade-badge {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 15px;
            font-weight: 600;
            margin: 10px 0;
        }

        .grade-A {
            background: #E8F5E9;
            color: var(--success-color);
        }

        .grade-B {
            background: #E3F2FD;
            color: var(--primary-color);
        }

        .grade-C {
            background: #FFF3E0;
            color: #FF9800;
        }

        .grade-D, .grade-E {
            background: #FFEBEE;
            color: var(--error-color);
        }

        .review-section {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 30px;
            margin-bottom: 30px;
        }

        .review-section h2 {
            color: var(--primary-color);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--primary-color);
        }

        .question-card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #e0e0e0;
            transition: all 0.3s ease;
        }

        .question-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .question-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .question-number {
            font-weight: 600;
            color: var(--primary-color);
        }

        .category-tag {
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 0.9em;
            background: var(--accent-color);
            color: var(--primary-color);
        }

        .answer-status {
            display: flex;
            align-items: center;
            margin: 15px 0;
            padding: 10px;
            border-radius: 8px;
        }

        .answer-status.correct {
            background: #E8F5E9;
        }

        .answer-status.incorrect {
            background: #FFEBEE;
        }

        .status-icon {
            margin-right: 10px;
            font-size: 1.2em;
        }

        .explanation-box {
            background: #F5F5F5;
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
            position: relative;
        }

        .explanation-box::before {
            content: '💡';
            position: absolute;
            top: -10px;
            left: 15px;
            background: white;
            padding: 0 10px;
            border-radius: 50%;
        }

        .action-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 30px;
        }

        .btn {
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            text-align: center;
            min-width: 200px;
        }

        .btn-primary {
            background: var(--primary-color);
            color: white;
        }

        .btn-success {
            background: var(--success-color);
            color: white;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .performance-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }

        .stat-card {
            background: white;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .stat-value {
            font-size: 1.8em;
            font-weight: 600;
            color: var(--primary-color);
        }

        .stat-label {
            color: var(--text-secondary);
            font-size: 0.9em;
            margin-top: 5px;
        }

        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .performance-stats {
                grid-template-columns: 1fr;
            }

            .action-buttons {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="result-card">
            <h1>Hasil Kuis Pengetahuan Umum</h1>
            
            <div class="score-circle <?php 
                echo $percentage >= 90 ? 'excellent' : 
                    ($percentage >= 70 ? 'good' : 
                    ($percentage >= 50 ? 'average' : 'poor')); 
            ?>">
                <div class="score-number"><?php echo $percentage; ?>%</div>
                <div>Nilai Anda</div>
            </div>

            <div class="performance-stats">
                <div class="stat-card">
                    <div class="stat-value"><?php echo $score; ?>/<?php echo $total_questions; ?></div>
                    <div class="stat-label">Jawaban Benar</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value"><?php echo $grade; ?></div>
                    <div class="stat-label">Grade</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value"><?php echo $time_taken; ?></div>
                    <div class="stat-label">Waktu Pengerjaan</div>
                </div>
            </div>

            <div class="time-taken">
                <strong>Komentar:</strong> <?php echo $comment; ?>
            </div>
        </div>

        <div class="review-section">
            <h2>Review Jawaban</h2>
            <?php foreach ($explanations as $num => $data): ?>
                <div class="question-card">
                    <div class="question-header">
                        <span class="question-number">Soal <?php echo array_search($num, $_SESSION['selected_questions']) + 1; ?></span>
                        <span class="category-tag"><?php echo $questions[$num]['category']; ?></span>
                    </div>
                    
                    <div class="question-content">
                        <p><strong><?php echo $data['question']; ?></strong></p>
                        
                        <div class="answer-status <?php echo $data['is_correct'] ? 'correct' : 'incorrect'; ?>">
                            <span class="status-icon">
                                <?php echo $data['is_correct'] ? '✓' : '✗'; ?>
                            </span>
                            <div>
                                <div>Jawaban Anda: <strong><?php echo $data['your_answer']; ?></strong></div>
                                <?php if (!$data['is_correct']): ?>
                                    <div>Jawaban Benar: <strong><?php echo $data['correct_answer']; ?></strong></div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="explanation-box">
                            <strong>Penjelasan:</strong><br>
                            <?php echo $data['explanation']; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="action-buttons">
            <?php if ($grade == 'A' || $grade == 'B'): ?>
                <form action="certificate.php" method="post" target="_blank" style="display: inline;">
                     <input type="hidden" name="score" value="<?php echo $score; ?>">
                     <input type="hidden" name="total" value="<?php echo $total_questions; ?>">
                    <input type="hidden" name="grade" value="<?php echo $grade; ?>">
                     <button type="submit" class="btn btn-success">Cetak Sertifikat</button>
                </form>
            <?php endif; ?>
            <a href="soal.php" class="btn btn-primary">Coba Lagi</a>
        </div>
    </div>
</body>
</html>