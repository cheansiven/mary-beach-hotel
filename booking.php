<?php 
date_default_timezone_set('Asia/Phnom_Penh');
/** Include PHPExcel */
require_once 'PHPExcel/Classes/PHPExcel.php';
require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';

$objPHPExcel = PHPExcel_IOFactory::load("booking.xlsx");
$objPHPExcel->setActiveSheetIndex(0);
$row = $objPHPExcel->getActiveSheet()->getHighestRow()+1;
//echo $row;
$objPHPExcel->getActiveSheet()->SetCellValue('A'.$row, date("Y/m/d"));
$objPHPExcel->getActiveSheet()->SetCellValue('B'.$row, $_SERVER['REMOTE_ADDR']);
$objPHPExcel->getActiveSheet()->SetCellValue('C'.$row, '1');
$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save('booking.xlsx');
header('Location: http://www.channelmanager.com.au/BookAndPayNow/BookAndPayNowRooms.aspx?id=10422&Body=@CCCCCC&Hdr=@787878&Add=@787878&GridHF=@32608B&pop=@32608B&nav=@193E61&btn=@193E61&lnk=@32608B&bkgshdr=@787878');
?>

