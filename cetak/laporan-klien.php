<?php
require('fpdf186/fpdf.php');
include '../proses/connect.php';

class PDF extends FPDF {
    function Header() {
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(12);
        $this->Cell(100, 10, "Laporan Klien", 0, 1);
        $this->Ln(5);

        $this->SetFont('Arial', 'B', 11);
        $this->SetFillColor(180, 180, 255);
        $this->SetDrawColor(50, 50, 100);
        $this->Cell(10, 5, 'NO', 1, 0, '', true);
        $this->Cell(30, 5, 'NAMA', 1, 0, '', true);
        $this->Cell(40, 5, 'JENIS KELAMIN', 1, 0, '', true);
        $this->Cell(40, 5, 'ALAMAT', 1, 1, '', true);
    }
}

ob_start(); // Memulai output buffering

$pdf = new PDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial', '', 9);
$pdf->SetDrawColor(50, 50, 100);

$query = mysqli_query($conn, "SELECT * FROM klien");
$nomor = 1;
while ($data = mysqli_fetch_array($query)) {
    $data['jenis_kelamin'] = $data['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki laki';

    $pdf->Cell(10, 5, $nomor, 1, 0);
    $pdf->Cell(30, 5, $data['nama_klien'], 1, 0);
    $pdf->Cell(40, 5, $data['jenis_kelamin'], 1, 0);
    $pdf->Cell(40, 5, $data['alamat'], 1, 1);
    $nomor++;
}

// ob_end_clean(); // Menghentikan output buffering dan membersihkan buffer
$pdf->Output();