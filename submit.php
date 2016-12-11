<?php
    ini_set("display_errors", "On");
    error_reporting(E_ALL | E_STRICT);
    session_start();
    date_default_timezone_set('Asia/Shanghai');

    //include ('assets/API/header_api_session.php');
    //include ('assets/API/iapp.php');
    include ('assets/API/db_config.php');

//    $yibanID = $_SESSION['yibanID'];

    $a = array (
            'fName' => addslashes($_POST['fName']),
            'fSID' => addslashes($_POST['fSID']),
            'fSex' => addslashes($_POST['fSex']),
            'fBirthday' => addslashes($_POST['fBirthday']),
            'fSchool' => addslashes($_POST['fSchool']),
            'fGrade' => addslashes($_POST['fGrade']),
            'fNation' => addslashes($_POST['fPhone']),
            'fMarried' => addslashes($_POST['fMarried']),
            'fAddress' => addslashes($_POST['fAddress']),
            'fChildType' => addslashes($_POST['fChildType']),
            'fHomeAddress' => addslashes($_POST['fHomeAddress']),
            'fSpending' => addslashes($_POST['fSpending']),
            'fParents' => addslashes($_POST['fParents']),
            'fFamilyAtmosphere' => addslashes($_POST['fFamilyAtmosphere']),
            'fCommunication' => addslashes($_POST['fCommunication']),
            'fRelationship' => addslashes($_POST['fRelationship']),
            'fProblemOther' => addslashes($_POST['fProblemOther']),
            'fReason' => addslashes($_POST['fReason']),
            'fEducation' => addslashes($_POST['fEducation']),
            'fBigEvent' => addslashes($_POST['fBigEvent']),
            'fMentalIllness' => addslashes($_POST['fMentalIllness']),
            'fQ1' => addslashes($_POST['fQ1']),
            'fQ2' => addslashes($_POST['fQ2']),
            'fQ3' => addslashes($_POST['fQ3']),
            'fQ4' => addslashes($_POST['fQ4']),
            'fQ5' => addslashes($_POST['fQ5']),
            'fQ6' => addslashes($_POST['fQ6']),
            'fQ7' => addslashes($_POST['fQ7']),
            'fQ8' => addslashes($_POST['fQ8']),
            'fQ9' => addslashes($_POST['fQ9']),
            'fQ10' => addslashes($_POST['fQ10']),
            'fQ11' => addslashes($_POST['fQ11']),
            'fQ12' => addslashes($_POST['fQ12']),
            'fQ13' => addslashes($_POST['fQ13']),
            'fQ14' => addslashes($_POST['fQ14']),
            'fQ15' => addslashes($_POST['fQ15']),
            'fQ16' => addslashes($_POST['fQ16']),
            'fQ17' => addslashes($_POST['fQ17']),
            'fQ18' => addslashes($_POST['fQ18']),
            'fQ19' => addslashes($_POST['fQ19']),
            'fQ20' => addslashes($_POST['fQ20']),
            'updateTime' => date("Y年m月d日 H:i")
    );

    $db = new mysqli($db_host,$db_user,$db_password,$db_database);
    if (!$db)
    {
        exit('Could not connect: ' . mysql_error());
    }
    $db->query("set names 'utf8'");

    $s="INSERT INTO psycho SET ";
    foreach ($a as $key => $value) {
        $s = $s.$key."='".$value."',";
    }
    $s = substr($s, 0, -1);

    $result = $db->query($s);
    if (!$result)
    {
    echo $s;
    echo $db->error;
    die;
    }
    else {
    echo "1";
    }




echo $s;
