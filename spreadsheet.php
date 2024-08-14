<?php 
    require 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    // membuat spreadsheet baru 
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1','hello word !');

    // menulis file ke disk 
    $writer = new Xlsx($spreadsheet);
    $writer->save('hello_Word.xlsx');

    echo "spreadsheet created successfully";
    ?>