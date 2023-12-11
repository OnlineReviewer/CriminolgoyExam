<?php  

include ('connector.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
<title>Assessment</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<body>
<?php include_once('user-header.php');?><br>
  
      <div class="container-fluid page-body-wrapper">
        
        <?php include_once('sidebar.php');?>
           <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Result Rates </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> View Result Rates</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <div class="page-header">
                  <h3 class="page-title">  <div id="timer-display"></div> </h3> </div>  
                  <center><h1>Exam</h1></center>
                    <?php
if(isset($_POST["submit"]))
                {
                  extract($_POST);
$correct = 0;
$incorrect = 0;
$studanswer = array();

foreach ($_POST as $key => $value) {
    if (strpos($key, 'option') !== false) {
        $examid = str_replace('option', '', $key);
        $studanswer[$examid] = $value;

        $sql = "SELECT answer FROM exam WHERE examid = $examid";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $correctanswer = $row['answer'];

            if ($studanswer[$examid] == $correctanswer) {
                $correct++;
            } else {
                $incorrect++;
            }
        }
    }
}

$total = $correct + $incorrect;
$score = round($correct / $total * 100, 2);
date_default_timezone_set("Asia/Manila");
$dateregister = date("Y-m-d");

        $sql = "SELECT count(*) FROM `barchart` WHERE studid = $studid AND classid = $classid";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
        if ($row['count(*)'] != 0) {
           $sql = "UPDATE `barchart` SET  `studid`='$studid',`posTtest`='$correct',`classid`='$classid',`datesofposttest`='$dateregister' WHERE `studid`='$studid' AND `classid`='$classid'";
        }
        else
        {
           $sql = "INSERT INTO barchart(studid, posTtest, classid, datesofposttest) VALUES 
                           ('$studid', '$correct', '$classid','$dateregister')";

        }


if($conn->query($sql) === TRUE) 
{$correct = 0;
    $incorrect = 0;
    $studanswer = array();

    foreach ($_POST as $key => $value) {
        if (strpos($key, 'option') !== false) {
            $examid = str_replace('option', '', $key);
            $studanswer[$examid] = $value;

            $sql = "SELECT examques, answer FROM exam WHERE examid = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $examid);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $correctanswer = $row['answer'];

                if ($studanswer[$examid] == $correctanswer) {
                    $correct++;
                } else {
                    $incorrect++;
                }

                $resultArray[] = array(
                    'question' => $row['examques'],
                    'userAnswer' => $studanswer[$examid],
                    'correctAnswer' => $correctanswer,
                    'isCorrect' => ($studanswer[$examid] == $correctanswer)
                );
            }
            $stmt->close();
        }
    }

    $total = $correct + $incorrect;
    $score = round($correct / $total * 100, 2);
    date_default_timezone_set("Asia/Manila");
    $dateregister = date("Y-m-d");
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exam Result</title>
    </head>
    <body>
        <h2>Exam Result</h2>
        <p>Total Questions: <?php echo $total; ?></p>
        <p>Correct Answers: <?php echo $correct; ?></p>
        <p>Incorrect Answers: <?php echo $incorrect; ?></p>
        <p>Score: <?php echo $score; ?>%</p>

        <h3>Details:</h3>
        <ul>
            <?php foreach ($resultArray as $resultItem) : ?>
                <li>
                    <?php echo $resultItem['question']; ?>
                    <br>
                    Your Answer: <?php echo $resultItem['userAnswer']; ?>
                    <br>
                    Correct Answer: <?php echo $resultItem['correctAnswer']; ?>
                    <br>
                    Result: <?php echo $resultItem['isCorrect'] ? 'Correct' : 'Incorrect'; ?><br><br>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="postExam.php?classid=<?php echo $classid; ?>"><button >Retake</a>
    </body>
    </html>


 <?php
}}      
if((isset($_GET['classid'])&&(!isset($_POST["submit"]))))
{
  $classid = $_GET["classid"];
                $studid = $_SESSION['studid'];
                $sql = "SELECT * FROM exam WHERE classid = $classid ORDER BY RAND()" ;
                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                {   $i =1;
                    // Output exam question form
                    echo "<form method='post'>";
                     $subanswer = array();
                    while ($row = $result->fetch_assoc()) 
                    { 
                        $examid = $row['examid'];
                        $examques = $row['examques'];
                        $answer = $row['answer'];?>
                        <p><input type="text"  name="question" value='<?php echo $row['examques'];?>' hidden> 
                          <input type="text"  name="classid" value='<?php echo $row['classid'];?>' hidden>
                          <input type="text"  name="studid" value='<?php echo $studid;?>' hidden>
                          <?php echo $i;?>. <?php echo $row['examques'];?></p>
                        <div id="radio-group">                       
                        <input type="radio" id="option1" name="<?php echo 'option'.$examid ?>" value='<?php echo $row['options1'];?> 'required>
                        <label for="option1"><?php echo $row['options1'];?></label> <br>
                        <input type="radio" id="option2" name="<?php echo 'option'.$examid ?>" value='<?php echo $row['options2'];?>'required >
                        <label for="option2"><?php echo$row['options2'];?></label> <br>
                        <input type="radio" id="option3" name="<?php echo 'option'.$examid ?>" value='<?php echo $row['options3'];?>'required >
                        <label for="option3"><?php echo$row['options3'];?></label> <br>
                        <input type="radio" id="option3" name="<?php echo 'option'.$examid ?>" value='<?php echo $row['options4'];?>'required>
                        <label for="option4"><?php echo$row['options4'];?></label> <br>
                        </div>
                        <br>
                        <?php $i++;
                    }

                    echo "<button id='exam-button' name= 'submit'>Submit Exam</button>";
                    echo "</form>";
                } else {
                    echo "No questions found!";
                }

                ?> 
                </div>
              </div>
            </div>
           
            
          </div>
          
         <?php 
                
     include_once('footer.php');?>
          
        </div>
    </div>

<script src="../asset/jquery/jquery.min.js"></script>
<script src="../asset/js/adminlte.js"></script>
<script src="../asset/js/chart.js"></script>
<script>
  // Set the exam duration in minutes
  const examDuration = 3600; // 60 minutes

  // Start the timer and disable the exam button after time elapses
  setTimeout(() => {
    document.getElementById('exam-button').disabled = true;
  }, examDuration * 60 * 1000);
</script>
<script>

  // Set the initial timer value
  let remainingTime = examDuration;

  // Update the timer display every second
  setInterval(() => {
    remainingTime--;

    // Format the remaining time (minutes:seconds)
    const formattedTime = `${Math.floor(remainingTime / 60)}:${remainingTime % 60}`;

    // Update the timer display element
    document.getElementById('timer-display').textContent = `Time Remaining: ${formattedTime}`;

    // Disable the exam button if time expires
    if (remainingTime <= 0) {
      document.getElementById('exam-button').disabled = true;
    }
  }, 1000); // Update every second
</script>
</script>
<?php  }?>
</body>
</html>

