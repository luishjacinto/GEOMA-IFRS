<?php
require('fpdf/fpdf.php');

$cookie_name = "user";
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
}

$caminho = "arquivos/".$_COOKIE[$cookie_name]."/";

$pdf= new FPDF("P","pt","A4");

$pdf->AddPage();
$pdf->SetFont('arial','B',16);
$pdf->Cell(0,5,"Usuario:",'L');
$pdf->Ln(24);
$pdf->SetFont('arial','B',11);
$pdf->Cell(0,5,$_COOKIE[$cookie_name],0,1,'L');
$pdf->Ln(20);

if(is_dir($caminho)){
    $pdf->SetFont('arial','B',16);
    $pdf->Cell(0,5,"Arquivos Salvos (Nome - Tamanho):",0,1,'L');
    $pdf->Ln(24);
    $pdf->SetFont('arial','B',11);
    foreach (new DirectoryIterator($caminho) as $fileInfo) {
            if($fileInfo->isDot()) continue;
            $pdf->Cell(0,5,$fileInfo->getFilename()." - ".filesize($caminho.$fileInfo)."bytes",0,1,'L');
            $pdf->Ln(20);
    }


}else{
}
$pdf->Output('D');

echo "<br><br><a href=adicionar.php>Adicionar arquivo</a>";
echo "<br><a href=pdf.php>Baixar PDF do usuario</a>";
echo "<br><a href=logout.php>Logout</a>";
?>

<head>
    <meta charset="ISO-8859-1">
    <title>Relatorio PDF</title>
</head>
