<?php 
    try 
    {
      $studid = $_SESSION['studid'];
      $sql = 
      "
      SELECT * FROM quizscore WHERE studid = '$studid'
      ";
      $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
      $quizscore = 0; $perfectscore=0;  $quizweight =0;                      
      while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
      {
        $quizscore = $quizscore + $row['score'];      
        $perfectscore = $perfectscore+10;      
      }
      if ($quizscore != 0) {
       $quizweight= (($quizscore / $perfectscore)*100);
      }
      
      $sql = 
      "
      SELECT * FROM barchart  WHERE studid = '$studid'
      ";
      $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
      $examscore = 0; $perfectscore=0;                        
      while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
      {
        $examscore = $examscore + $row['postTest'];      
        $perfectscore = $perfectscore+50;      
      }
      if ($examscore != 0) 
      {
        $examsweight= (($examscore / $perfectscore)*100);
      }
      else 
      {
        $examsweight=0;
      }
      
      $chanceofsuc =  ($quizweight * .30)+($examsweight * .70); 
      $totalofmissing =  100 - $chanceofsuc;
      $sql = "UPDATE `student` SET  `studid`='$studid',`grade`='$chanceofsuc' WHERE `studid`='$studid'";
      $conn->query($sql);
      $sql = "UPDATE `student` SET  `avequiz`='$quizweight',`aveexamscore`='$examsweight' WHERE `studid`='$studid'";
      $conn->query($sql);
      $sql = 
      "
      SELECT * FROM quizscore 
      ";
      $result1 = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
      $quizscore1 = 0; $perfectscore1=0;                        
      while ($row = $result1->fetch_array(MYSQLI_ASSOC)) 
      {
        $quizscore1 = $quizscore1 + $row['score'];      
        $perfectscore1 = $perfectscore1+10;      
      }
      $quizweight1= (($quizscore1 / $perfectscore1)*100);
      $sql = 
      "
      SELECT * FROM barchart  
      ";
      $result1 = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
      $examscore1 = 0; $perfectscore1=0;                        
      while ($row = $result1->fetch_array(MYSQLI_ASSOC)) 
      {
        $examscore1 = $examscore1 + $row['postTest'];      
        $perfectscore1 = $perfectscore1+50;      
      }
      $examsweight1= (($examscore1 / $perfectscore1)*100);
      $chanceofsuc1 =  ($quizweight1 * .30)+($examsweight1 * .70); 
      $totalofmissing1 =  100 - $chanceofsuc1;

      $sql = "SELECT count(*) FROM `student`";
      $result = $conn->query($sql);
      $row = mysqli_fetch_array($result);
      $zstandard =  ($chanceofsuc - $chanceofsuc1)/$row['count(*)'];
      $absoluteZScore = ($zstandard);

      if ($absoluteZScore <= -3) {
          $percentageValue = 0.1353;
      } elseif ($absoluteZScore <= -2) {
          $percentageValue = 2.2750 ;
      } elseif ($absoluteZScore <= -1.5) {
          $percentageValue = 84.1340;
      } elseif ($absoluteZScore <= -1) {
          $percentageValue = 15.8655;
      }
      elseif ($absoluteZScore <= 0.5) {
          $percentageValue = 69.1463;
      } elseif ($absoluteZScore <= 1.0) {
          $percentageValue = 84.13407;
      } elseif ($absoluteZScore <= 1.5) {
          $percentageValue = 93.3203;
      } elseif ($absoluteZScore <= 2.0) {
          $percentageValue = 97.7250;
      } else {
          // Use a more accurate approximation formula for larger z-scores
          $percentageValue = 100 - (15.87 / pow($absoluteZScore + 0.625, 2.5));
      }
      $sql = 
      "
      SELECT * FROM quizscore WHERE studid = '$studid'
      ";
      $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
      $classnum1 = 0; $classnum1p=0; $classnum3 = 0; $classnum3p=0; $classnum5 = 0; $classnum5p=0;
      $classnum2 = 0; $classnum2p=0; $classnum4 = 0; $classnum4p=0; $classnum6 = 0; $classnum6p=0;                   
      while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
      {
        $classid = $row['classid'];
        if ($classid == 1) 
        {
           $classnum1 = $classnum1 + $row['score'];      
           $classnum1p = $classnum1p+10;
        } 
        elseif ($classid == 2)  
        {
           $classnum2 = $classnum2 + $row['score'];      
           $classnum2p = $classnum2p+10;
        }
        elseif ($classid == 3)  
        {
           $classnum3 = $classnum3 + $row['score'];      
           $classnum3p = $classnum3p+10;
        }
        elseif ($classid == 4)  
        {
           $classnum4 = $classnum4 + $row['score'];      
           $classnum4p = $classnum4p+10;
        }
        elseif ($classid == 5)  
        {
           $classnum5 = $classnum5 + $row['score'];      
           $classnum5p = $classnum5p+10;
        }
        elseif ($classid == 6)  
        {
           $classnum6 = $classnum6 + $row['score'];      
           $classnum6p = $classnum6p+10;
        }
              
      }
      if ($classnum1 != 0) 
      {
        $quizweight1= (($classnum1 / $classnum1p)*100);
      }
      else
      {
        $quizweight1=0;
      }
      if ($classnum2 != 0) 
      {
        $quizweight2= (($classnum2 / $classnum2p)*100);
      }
      else
      {
        $quizweight2=0;
      }
      if ($classnum3 != 0) 
      {
        $quizweight3= (($classnum3 / $classnum3p)*100);
      }
      else
      {
        $quizweight3=0;
      }
      if ($classnum4 != 0) 
      {
         $quizweight4= (($classnum4 / $classnum4p)*100);
      }
      else
      {
        $quizweight4=0;
      }
      if ($classnum5 != 0) 
      {
         $quizweight5= (($classnum5 / $classnum5p)*100);
      }
      else
      {
        $quizweight5=0;
      }
      if ($classnum6 != 0) 
      {
         $quizweight6= (($classnum6 / $classnum6p)*100);
      }
      else
      {
        $quizweight6=0;
      }
      
      $sql = 
      "
      SELECT * FROM barchart  WHERE studid = '$studid'
      ";
      $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
      $examscore1 = 0; $perfectscore1 = 0; $examscore2 = 0; $perfectscore2 = 0; $examscore6 = 0; $perfectscore6 = 0;     
      $examscore3 = 0; $perfectscore3 = 0; $examscore4 = 0; $perfectscore4 = 0; $examscore5 = 0; $perfectscore5 = 0;

      while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
      {
        $classid = $row['classid'];
        if ($classid == 1) 
        {
          $examscore1 = $examscore1 + $row['postTest'];      
          $perfectscore1 = $perfectscore1+50;   
        } 
        else if ($classid == 2) 
        {
          $examscore2 = $examscore2 + $row['postTest'];      
          $perfectscore2 = $perfectscore2+50;   
        }  
        else if ($classid == 3) 
        {
          $examscore3 = $examscore3 + $row['postTest'];      
          $perfectscore3 = $perfectscore3+50;   
        }  
        else if ($classid == 4) 
        {
          $examscore4 = $examscore4 + $row['postTest'];      
          $perfectscore4 = $perfectscore4+50;   
        }  
        else if ($classid == 5) 
        {
          $examscore5 = $examscore5 + $row['postTest'];      
          $perfectscore5 = $perfectscore5+50;   
        }  
        else if ($classid == 6) 
        {
          $examscore6 = $examscore6+ $row['postTest'];      
          $perfectscore6 = $perfectscore6+50;   
        } 
           
      }
      if ($examscore1 != 0) 
      {
        $examsweight1= (($examscore1 / $perfectscore1)*100);
      }
      else
      {
        $examsweight1= 0;
      }
      if ($examscore2 != 0) 
      {
        $examsweight2= (($examscore2 / $perfectscore2)*100);
      }
      else
      {
        $examsweight2= 0;
      }
      if ($examscore3 != 0) 
      {
        $examsweight3= (($examscore3 / $perfectscore4)*100);
      }
      else
      {
        $examsweight3= 0;
      }
      if ($examscore4 != 0) 
      {
        $examsweight4= (($examscore4 / $perfectscore4)*100);
      }
      else
      {
        $examsweight4= 0;
      }
      if ($examscore5 != 0) 
      {
        $examsweight5= (($examscore5 / $perfectscore5)*100);
      }
      else
      {
        $examsweight5= 0;
      }
      if ($examscore6 != 0) 
      {
        $examsweight6= (($examscore6 / $perfectscore6)*100);
      }
      else
      {
        $examsweight6= 0;
      }
    
      $chanceofsuc1 =  ($quizweight1 * .30)+($examsweight1 * .70);
      $chanceofsuc2 =  ($quizweight2 * .30)+($examsweight2 * .70); 
      $chanceofsuc3 =  ($quizweight3 * .30)+($examsweight3 * .70); 
      $chanceofsuc4 =  ($quizweight4 * .30)+($examsweight4 * .70); 
      $chanceofsuc5 =  ($quizweight5 * .30)+($examsweight5 * .70); 
      $chanceofsuc6 =  ($quizweight6 * .30)+($examsweight6 * .70); 
      
    } 
    
    catch (Exception $e) 
    {
      die("Error:Could not able to execute $sql.".$e->getMessage());
    } ?>