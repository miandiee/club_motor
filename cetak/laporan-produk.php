<?php
require('fpdf186/fpdf.php');
include '../proses/connect.php';

class PDF extends FPDF {
    function Header() {
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(12);
        $this->Cell(100, 10, "Laporan Produk", 0, 1);
        $this->Ln(5);

        $this->SetFont('Arial', 'B', 11);
        $this->SetFillColor(180, 180, 255);
        $this->SetDrawColor(50, 50, 100);
        $this->Cell(10, 5, 'NO', 1, 0, '', true);
        $this->Cell(60, 5, 'NAMA PRODUK', 1, 0, '', true);
        $this->Cell(40, 5, 'KATEGORI', 1, 0, '', true);
        $this->Cell(40, 5, 'HARGA JUAL', 1, 1, '', true);
    }
}

ob_start(); // Memulai output buffering

$pdf = new PDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial', '', 9);
$pdf->SetDrawColor(50, 50, 100);

$query = mysqli_query($conn, "SELECT * FROM produk");
$nomor = 1;
while ($data = mysqli_fetch_array($query)) {
    $pdf->Cell(10, 5, $nomor, 1, 0);
    $pdf->Cell(60, 5, $data['nama_produk'], 1, 0);
    $pdf->Cell(40, 5, $data['kategori'], 1, 0);
    $pdf->Cell(40, 5, $data['harga_jual'], 1, 1);
    $nomor++;
}

$pdf->Output();

?>
