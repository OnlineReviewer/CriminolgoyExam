<?php  session_start();
include ('connector.php');
if(isset($_GET['subid']))
{
  $subid = $_GET["subid"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome Quiz App | CodingNepal</title>
    <!-- FontAweome CDN Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<style>
    /* importing google fonts */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    background: #007bff;
}

::selection{
    color: #fff;
    background: #007bff;
}

.start_btn,
.info_box,
.quiz_box,
.result_box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 
                0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.info_box.activeInfo,
.quiz_box.activeQuiz,
.result_box.activeResult{
    opacity: 1;
    z-index: 5;
    pointer-events: auto;
    transform: translate(-50%, -50%) scale(1);
}

.start_btn button{
    font-size: 25px;
    font-weight: 500;
    color: #007bff;
    padding: 15px 30px;
    outline: none;
    border: none;
    border-radius: 5px;
    background: #fff;
    cursor: pointer;
}

.info_box{
    width: 540px;
    background: #fff;
    border-radius: 5px;
    transform: translate(-50%, -50%) scale(0.9);
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
}

.info_box .info-title{
    height: 60px;
    width: 100%;
    border-bottom: 1px solid lightgrey;
    display: flex;
    align-items: center;
    padding: 0 30px;
    border-radius: 5px 5px 0 0;
    font-size: 20px;
    font-weight: 600;
}

.info_box .info-list{
    padding: 15px 30px;
}

.info_box .info-list .info{
    margin: 5px 0;
    font-size: 17px;
}

.info_box .info-list .info span{
    font-weight: 600;
    color: #007bff;
}
.info_box .buttons{
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding: 0 30px;
    border-top: 1px solid lightgrey;
}

.info_box .buttons button{
    margin: 0 5px;
    height: 40px;
    width: 100px;
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
    border: none;
    outline: none;
    border-radius: 5px;
    border: 1px solid #007bff;
    transition: all 0.3s ease;
}

.quiz_box{
    width: 550px;
    background: #fff;
    border-radius: 5px;
    transform: translate(-50%, -50%) scale(0.9);
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
}

.quiz_box header{
    position: relative;
    z-index: 2;
    height: 70px;
    padding: 0 30px;
    background: #fff;
    border-radius: 5px 5px 0 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0px 3px 5px 1px rgba(0,0,0,0.1);
}

.quiz_box header .title{
    font-size: 20px;
    font-weight: 600;
}

.quiz_box header .timer{
    color: #004085;
    background: #cce5ff;
    border: 1px solid #b8daff;
    height: 45px;
    padding: 0 8px;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 145px;
}

.quiz_box header .timer .time_left_txt{
    font-weight: 400;
    font-size: 17px;
    user-select: none;
}

.quiz_box header .timer .timer_sec{
    font-size: 18px;
    font-weight: 500;
    height: 30px;
    width: 45px;
    color: #fff;
    border-radius: 5px;
    line-height: 30px;
    text-align: center;
    background: #343a40;
    border: 1px solid #343a40;
    user-select: none;
}

.quiz_box header .time_line{
    position: absolute;
    bottom: 0px;
    left: 0px;
    height: 3px;
    background: #007bff;
}

section{
    padding: 25px 30px 20px 30px;
    background: #fff;
}

section .que_text{
    font-size: 25px;
    font-weight: 600;
}

section .option_list{
    padding: 20px 0px;
    display: block;   
}

section .option_list .option{
    background: aliceblue;
    border: 1px solid #84c5fe;
    border-radius: 5px;
    padding: 8px 15px;
    font-size: 17px;
    margin-bottom: 15px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

section .option_list .option:last-child{
    margin-bottom: 0px;
}

section .option_list .option:hover{
    color: #004085;
    background: #cce5ff;
    border: 1px solid #b8daff;
}

section .option_list .option.correct{
    color: #155724;
    background: #d4edda;
    border: 1px solid #c3e6cb;
}

section .option_list .option.incorrect{
    color: #721c24;
    background: #f8d7da;
    border: 1px solid #f5c6cb;
}

section .option_list .option.disabled{
    pointer-events: none;
}

section .option_list .option .icon{
    height: 30px;
    width: 30px;
    border: 2px solid transparent;
    border-radius: 70%;
    text-align: center;
    font-size: 13px;
    pointer-events: none;
    transition: all 0.3s ease;
    line-height: 24px;
}
.option_list .option .icon.tick{
    color: #23903c;
    border-color: #23903c;
    background: #d4edda;
}

.option_list .option .icon.cross{
    color: #a42834;
    background: #f8d7da;
    border-color: #a42834;
}

footer{
    height: 60px;
    padding: 0 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-top: 1px solid lightgrey;
}

footer .total_que span{
    display: flex;
    user-select: none;
}

footer .total_que span p{
    font-weight: 500;
    padding: 0 5px;
}

footer .total_que span p:first-child{
    padding-left: 0px;
}

footer button{
    height: 40px;
    padding: 0 13px;
    font-size: 18px;
    font-weight: 400;
    cursor: pointer;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    background: #007bff;
    border: 1px solid #007bff;
    line-height: 10px;
    opacity: 0;
    pointer-events: none;
    transform: scale(0.95);
    transition: all 0.3s ease;
}

footer button:hover{
    background: #0263ca;
}

footer button.show{
    opacity: 1;
    pointer-events: auto;
    transform: scale(1);
}

.result_box{
    background: #fff;
    border-radius: 5px;
    display: flex;
    padding: 25px 30px;
    width: 450px;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    transform: translate(-50%, -50%) scale(0.9);
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
}

.result_box .icon{
    font-size: 100px;
    color: #007bff;
    margin-bottom: 10px;
}

.result_box .complete_text{
    font-size: 20px;
    font-weight: 500;
}

.result_box .score_text span{
    display: flex;
    margin: 10px 0;
    font-size: 18px;
    font-weight: 500;
}

.result_box .score_text span p{
    padding: 0 4px;
    font-weight: 600;
}

.result_box .buttons{
    display: flex;
    margin: 20px 0;
}

.result_box .buttons button{
    margin: 0 10px;
    height: 45px;
    padding: 0 20px;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    border: none;
    outline: none;
    border-radius: 5px;
    border: 1px solid #007bff;
    transition: all 0.3s ease;
}

.buttons button.restart{
    color: #fff;
    background: #007bff;
}

.buttons button.restart:hover{
    background: #0263ca;
}

.buttons button.quit{
    color: #007bff;
    background: #fff;
}

.buttons button.quit:hover{
    color: #fff;
    background: #007bff;
}
</style>
<body>
    <!-- start -->
    <?php include_once('user-header.php');?>
    <?php include_once('sidebar.php');?>
    <div class="start_btn"><button>Start</button></div>

    <!--  rules  -->
    <div class="info_box">
        <div class="info-title"><span>Some Rules of this Test</span></div>
        <div class="info-list">
            <div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
            <div class="info">2. Once you select your answer, it can't be undone.</div>
            <div class="info">3. You can't select any option once time goes off.</div>
            <div class="info">4. You can't exit from the Quiz while you're playing.</div>
            <div class="info">5. You'll get points on the basis of your correct answers.</div>
        </div>
        <div class="buttons">
            <button class="quit">Exit</button>
            <button class="restart">Continue</button>
        </div>
    </div>

    <?php 
        try 
        {
            $studid = $_SESSION['studid'];
            $sql = 
            "
                SELECT * FROM `quiz` where subid = $subid ORDER BY RAND()
            ";
            $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
            $question  =  array();
            $answer  =  array();
            $option  =  array();
            $option1  =  array();
            $option2  =  array();
            $option2  =  array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
            {
                $question[] = $row['question'];
                $answer[] = $row['answer'];
                $options1[] = $row['options1'];
                $options2[] = $row['options2'];
                $options3[] = $row['options3'];    
            }
        } 
        catch (Exception $e) 
        {
            die("Error:Could not able to execute $sql.".$e->getMessage());
        }
        ?>

    <!-- Quiz -->
    <div class="quiz_box">
        <header>
            <div class="title">Assessment</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Next Question</button>
        </footer>
    </div>
        <div class="result_box">
       
            <div class="icon">
            <i class="fas fa-crown"></i>
            </div>
            <div class="complete_text">You've completed the Test!</div>
            <div class="score_text">
            

            </div>
            
            <div class="buttons">
                <form method="post">
                    <input type="text" id="demo" name="score" hidden> 
                    <button class="restart" >Retake</button>
                    <button class="quit" name="submit">Quit</button>
                </form>

            </div>

        
    </div>


    <!-- inserted Questions and Options only -->
    <script>
    const question =<?php echo json_encode($question);?>; 
    const answer =<?php echo json_encode($answer);?>; 
    const options1 =<?php echo json_encode($options1);?>;
    const options2 =<?php echo json_encode($options2);?>;
    const options3 =<?php echo json_encode($options3);?>;  
    let questions = 
    [
        {
            question: question[0],
            answer: answer[0],
            options:
            [
              options1[0],
              options2[0],
              options3[0],
            ]
                 
        },
        {
            question: question[1],
            answer: answer[1],
             options:
            [
              options1[1],
              options2[1],
              options3[1],
            ]     
        },
        {
            question: question[2],
            answer: answer[2],
             options:
            [
              options1[2],
              options2[2],
              options3[2],
            ]      
        },{
            question: question[3],
            answer: answer[3],
            options:
            [
              options1[3],
              options2[3],
              options3[3],
            ]
                 
        },{
            question: question[4],
            answer: answer[4],
             options:
            [
              options1[4],
              options2[4],
              options3[4],
            ]     
        },
        {
            question: question[5],
            answer: answer[5],
             options:
            [
              options1[5],
              options2[5],
              options3[5],,
            ]      
        },{
            question: question[6],
            answer: answer[6],
            options:
            [
              options1[6],
              options2[6],
              options3[6],
            ]
                 
        },
        {
            question: question[7],
            answer: answer[7],
             options:
            [
              options1[7],
              options2[7],
              options3[7],
            ]     
        },
        {
            question: question[8],
            answer: answer[8],
             options:
            [
              options1[8],
              options2[8],
              options3[8],
            ]      
        },{
            question: question[9],
            answer: answer[9],
            options:
            [
              options1[9],
              options2[9],
              options3[9],
            ]
                 
        },
     
        
    
    ];

    //selecting all required elements
    const start_btn = document.querySelector(".start_btn button");
    const info_box = document.querySelector(".info_box");
    const exit_btn = info_box.querySelector(".buttons .quit");
    const continue_btn = info_box.querySelector(".buttons .restart");
    const quiz_box = document.querySelector(".quiz_box");
    const result_box = document.querySelector(".result_box");
    const option_list = document.querySelector(".option_list");
    const time_line = document.querySelector("header .time_line");
    const timeText = document.querySelector(".timer .time_left_txt");
    const timeCount = document.querySelector(".timer .timer_sec");

    // if startQuiz button clicked
    start_btn.onclick = ()=>{
        info_box.classList.add("activeInfo"); //show info box
    }

    // if exitQuiz button clicked
    exit_btn.onclick = ()=>{
        info_box.classList.remove("activeInfo"); //hide info box
    }

    // if continueQuiz button clicked
    continue_btn.onclick = ()=>{
        info_box.classList.remove("activeInfo"); //hide info box
        quiz_box.classList.add("activeQuiz"); //show quiz box
        showQuetions(0); //calling showQestions function
        queCounter(1); //passing 1 parameter to queCounter
        startTimer(15); //calling startTimer function
        startTimerLine(0); //calling startTimerLine function
    }

    let timeValue =  15;
    let que_count = 0;
    let que_numb = 1;
    let userScore = 0;
    let counter;
    let counterLine;
    let widthValue = 0;
    let scoretims= 0;

    const restart_quiz = result_box.querySelector(".buttons .restart");
    const quit_quiz = result_box.querySelector(".buttons .quit");

    // if restartQuiz button clicked
    restart_quiz.onclick = ()=>{
        quiz_box.classList.add("activeQuiz"); //show quiz box
        result_box.classList.remove("activeResult"); //hide result box
        timeValue = 15; 
        que_count = 0;
        que_numb = 1;
        userScore = 0;
        widthValue = 0;
        showQuetions(que_count); //calling showQestions function
        queCounter(que_numb); //passing que_numb value to queCounter
        clearInterval(counter); //clear counter
        clearInterval(counterLine); //clear counterLine
        startTimer(timeValue); //calling startTimer function
        startTimerLine(widthValue); //calling startTimerLine function
        timeText.textContent = "Time Left"; //change the text of timeText to Time Left
        next_btn.classList.remove("show"); //hide the next button
    }

    // if quitQuiz button clicked
    quit_quiz.onclick = ()=>{
        window.location.reload(); //reload the current window
    }

    const next_btn = document.querySelector("footer .next_btn");
    const bottom_ques_counter = document.querySelector("footer .total_que");

    // if Next Que button clicked
    next_btn.onclick = ()=>{
        if(que_count < questions.length - 1){ //if question count is less than total question length
            que_count++; //increment the que_count value
            que_numb++; //increment the que_numb value
            showQuetions(que_count); //calling showQestions function
            queCounter(que_numb); //passing que_numb value to queCounter
            clearInterval(counter); //clear counter
            clearInterval(counterLine); //clear counterLine
            startTimer(timeValue); //calling startTimer function
            startTimerLine(widthValue); //calling startTimerLine function
            timeText.textContent = "Time Left"; //change the timeText to Time Left
            next_btn.classList.remove("show"); //hide the next button
        }else{
            clearInterval(counter); //clear counter
            clearInterval(counterLine); //clear counterLine
            showResult(); //calling showResult function
        }
    }

    // getting questions and options from array
    function showQuetions(index)
    {
        const que_text = document.querySelector(".que_text");

        //creating a new span and div tag for question and option and passing the value using array index
        let que_tag = questions[index].question;
        let option_tag = '<div class="option"><span>'+ questions[index].options[0] +'</span></div>'
        + '<div class="option"><span>'+ questions[index].options[1] +'</span></div>'
        + '<div class="option"><span>'+ questions[index].options[2] +'</span></div>';
        que_text.innerHTML = que_tag; //adding new span tag inside que_tag
        option_list.innerHTML = option_tag; //adding new div tag inside option_tag
        
        const option = option_list.querySelectorAll(".option");

        // set onclick attribute to all available options
        for(i=0; i < option.length; i++){
            option[i].setAttribute("onclick", "optionSelected(this)");
        }
    }
    // creating the new div tags which for icons
    let tickIconTag = '<div class="icon tick"><i class="fas fa-check"></i></div>';
    let crossIconTag = '<div class="icon cross"><i class="fas fa-times"></i></div>';

    //if user clicked on option
    function optionSelected(answer){
        clearInterval(counter); //clear counter
        clearInterval(counterLine); //clear counterLine
        let userAns = answer.textContent; //getting user selected option
        let correcAns = questions[que_count].answer; //getting correct answer from array
        const allOptions = option_list.children.length; //getting all option items
        
        if(userAns == correcAns){ //if user selected option is equal to array's correct answer
            userScore += 1;
            scoretims += 1;
            document.getElementById("demo").value = scoretims; //upgrading score value with 1
            answer.classList.add("correct"); //adding green color to correct selected option
            answer.insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to correct selected option
            console.log("Correct Answer");
            console.log("Your correct answers = " + userScore);
        }else{
            answer.classList.add("incorrect"); //adding red color to correct selected option
            answer.insertAdjacentHTML("beforeend", crossIconTag); //adding cross icon to correct selected option
            console.log("Wrong Answer");

            for(i=0; i < allOptions; i++){
                if(option_list.children[i].textContent == correcAns){ //if there is an option which is matched to an array answer 
                    option_list.children[i].setAttribute("class", "option correct"); //adding green color to matched option
                    option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to matched option
                    console.log("Auto selected correct answer.");
                }
            }
        }
        for(i=0; i < allOptions; i++){
            option_list.children[i].classList.add("disabled"); //once user select an option then disabled all options
        }
        next_btn.classList.add("show"); //show the next button if user selected any option
    }
   
        
    function showResult(){
        info_box.classList.remove("activeInfo"); //hide info box
        quiz_box.classList.remove("activeQuiz"); //hide quiz box
        result_box.classList.add("activeResult"); //show result box
        const scoreText = result_box.querySelector(".score_text");
        scoretims = result_box.querySelector(".score_text");
        if (userScore > 3){ // if user scored more than 3
            //creating a new span tag and passing the user score number and total question number
            let scoreTag = '<span>and congrats! , You got <p>'+ userScore +'</p> out of <p>'+ questions.length +'</p></span>';
            scoreText.innerHTML = scoreTag;  //adding new span tag inside score_Text

        }
        else if(userScore > 1){ // if user scored more than 1
            let scoreTag = '<span>and nice , You got <p>'+ userScore +'</p> out of <p>'+ questions.length +'</p></span>';
            scoreText.innerHTML = scoreTag;
        }
        else{ // if user scored less than 1
            let scoreTag = '<span>and sorry , You got only <p>'+ userScore +'</p> out of <p>'+ questions.length +'</p></span>';
            scoreText.innerHTML = scoreTag;
        }
    }

    function startTimer(time){
        counter = setInterval(timer, 1000);
        function timer(){
            timeCount.textContent = time; //changing the value of timeCount with time value
            time--; //decrement the time value
            if(time < 9){ //if timer is less than 9
                let addZero = timeCount.textContent; 
                timeCount.textContent = "0" + addZero; //add a 0 before time value
            }
            if(time < 0){ //if timer is less than 0
                clearInterval(counter); //clear counter
                timeText.textContent = "Time Off"; //change the time text to time off
                const allOptions = option_list.children.length; //getting all option items
                let correcAns = questions[que_count].answer; //getting correct answer from array
                for(i=0; i < allOptions; i++){
                    if(option_list.children[i].textContent == correcAns){ //if there is an option which is matched to an array answer
                        option_list.children[i].setAttribute("class", "option correct"); //adding green color to matched option
                        option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to matched option
                        console.log("Time Off: Auto selected correct answer.");
                    }
                }
                for(i=0; i < allOptions; i++){
                    option_list.children[i].classList.add("disabled"); //once user select an option then disabled all options
                }
                next_btn.classList.add("show"); //show the next button if user selected any option
            }
        }
    }

    function startTimerLine(time){
        counterLine = setInterval(timer, 29);
        function timer(){
            time += 1; //upgrading time value with 1
            time_line.style.width = time + "px"; //increasing width of time_line with px by time value
            if(time > 549){ //if time value is greater than 549
                clearInterval(counterLine); //clear counterLine
            }
        }
    }

    function queCounter(index){
        //creating a new span tag and passing the question number and total question
        let totalQueCounTag = '<span><p>'+ index +'</p> of <p>'+ questions.length +'</p> Questions</span>';
        bottom_ques_counter.innerHTML = totalQueCounTag;  //adding new span tag inside bottom_ques_counter
    }
    </script>
    <?php  if(isset($_POST['submit']))
    {
        extract($_POST);

        $sql = "SELECT COUNT(*) FROM `quizscore` WHERE studid = '$studid' AND subid = '$subid'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
        if ($row['COUNT(*)'] == 0) {
            $q1 = "INSERT INTO quizscore(studid, subid, score) VALUES ('$studid', '$subid', '$score')";
            
        }
        else
        {
            $q1="UPDATE `quizscore` SET  `score`='$score' WHERE `studid`='$studid' AND `subid`='$subid' ";
        }

        if ($conn->query($q1) === TRUE) 
        {?>
            <script type="text/javascript">
                window.location="tbl_rates.php";
            </script>
        <?php
        } 
       
    }    ?>
</body>
</html>
