<?php
    session_start();
    date_default_timezone_set('Asia/Shanghai');
    $nowDate = date("m月d日");
    include "assets/API/db_config.php";
    $db = new mysqli($db_host,$db_user,$db_password,$db_database);
    if (!$db)
    {
        die('Could not connect: ' . mysql_error());
    }
    $db->query("set names 'utf8'");

    require_once 'Classes/PHPExcel.php';

    $sql_query = "SELECT * FROM `psycho`";
    $result = $db->query($sql_query);

    $objPHPExcel=new PHPExcel();
    $objPHPExcel->getProperties()->setCreator('Bupt')
            ->setLastModifiedBy('Bupt')
            ->setTitle('Office 2007 XLSX Document')
            ->setSubject('Office 2007 XLSX Document')
            ->setDescription('Document for Office 2007 XLSX, generated using PHP classes.')
            ->setKeywords('office 2007 openxml php')
            ->setCategory('Result file');
    $i = 1;
    $objPHPExcel->setActiveSheetIndex(0)
               ->setCellValue('A'.$i,"姓名")
               ->setCellValue('B'.$i,"学号")
               ->setCellValue('C'.$i,"性别")
               ->setCellValue('D'.$i,"生日")
               ->setCellValue('E'.$i,"学院")
               ->setCellValue('F'.$i,"年级")
               ->setCellValue('G'.$i,"民族")
               ->setCellValue('H'.$i,"手机号")
               ->setCellValue('I'.$i,"婚姻情况")
               ->setCellValue('J'.$i,"现住址")
               ->setCellValue('K'.$i,"独生子女")
               ->setCellValue('L'.$i,"家庭住址")
               ->setCellValue('M'.$i,"月消费")
               ->setCellValue('N'.$i,"父母关系")
               ->setCellValue('O'.$i,"家庭氛围")
               ->setCellValue('P'.$i,"沟通情况")
               ->setCellValue('Q'.$i,"人际关系")
               ->setCellValue('R'.$i,"咨询问题")
               ->setCellValue('S'.$i,"咨询原因")
               ->setCellValue('T'.$i,"教育评价")
               ->setCellValue('U'.$i,"重大事件")
               ->setCellValue('V'.$i,"精神病史")
               ->setCellValue('W'.$i,"相关治疗")
               ->setCellValue('X'.$i,$fQ);


    $i = 2;
    $q = array("学习问题","情绪压力问题","人际关系问题","恋爱问题","家庭问题","自信心问题",
                "自我认识问题","个人发展问题","性问题");
    foreach($result as $v){
        $s = "";
        for($j=1;$j<=9;$j++)
        {
            $index_p = "fProblem".$j;
            if($v[$index_p]=="on")
            {
                $s = $s.$q[$j-1]." ";
            }
        }
        if($v['fProblemOther']!=null)
            $s = $s.$v['fProblemOther'];

        $fQ = "";
        for($j=1;$j<=20;$j++)
        {
            $fQ = $fQ.$v["fQ".$j];
        }

     $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A'.$i,$v['fName'])
                ->setCellValue('B'.$i,$v['fSID'])
                ->setCellValue('C'.$i,$v['fSex'])
                ->setCellValue('D'.$i,$v['fBirthday'])
                ->setCellValue('E'.$i,$v['fSchool'])
                ->setCellValue('F'.$i,$v['fGrade'])
                ->setCellValue('G'.$i,$v['fNation'])
                ->setCellValue('H'.$i,$v['fPhone'])
                ->setCellValue('I'.$i,$v['fMarried'])
                ->setCellValue('J'.$i,$v['fAddress'])
                ->setCellValue('K'.$i,$v['fChildType'])
                ->setCellValue('L'.$i,$v['fHomeAddress'])
                ->setCellValue('M'.$i,$v['fSpending'])
                ->setCellValue('N'.$i,$v['fParents'])
                ->setCellValue('O'.$i,$v['fFamilyAtmosphere'])
                ->setCellValue('P'.$i,$v['fCommunication'])
                ->setCellValue('Q'.$i,$v['fRelationship'])
                ->setCellValue('R'.$i,$s)
                ->setCellValue('S'.$i,$v['fReason'])
                ->setCellValue('T'.$i,$v['fEducation'])
                ->setCellValue('U'.$i,$v['fBigEvent'])
                ->setCellValue('V'.$i,$v['fMentalIllness'])
                ->setCellValue('W'.$i,$v['fTreatment'])
                ->setCellValue('X'.$i,$fQ);
                $i++;
    }
    $objPHPExcel->getActiveSheet()->setTitle('Sheet1');
    $objPHPExcel->setActiveSheetIndex(0);
    $filename=urlencode('预约').'_'.date('Y-m-dHis');

/*
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="'.$filename.'.xlsx"');
    header('Cache-Control: max-age=0');
    $objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
*/
    /*
    *生成xls文件*/
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
    header('Cache-Control: max-age=0');
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

    $objWriter->save('php://output');
    //exit;

 ?>
