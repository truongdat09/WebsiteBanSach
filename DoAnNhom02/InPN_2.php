<?php 
require('./fpdf/tfpdf.php');
$pdf = new tFPDF('P', 'mm', "A4");
//--------------------
include("body/Connection.php");		   

        $mapn = $_GET['mapn'];
      
        $sql = "SELECT sach.MASACH,sach.TENSACH,SOLUONG,GIANHAP,TONGTIEN FROM sach_phieunhap,sach where sach_phieunhap.MASACH=sach.MASACH AND MAPN=".$mapn;
        $sta = $pdo->prepare($sql);
        $sta->execute();
        $chitietphieunhap = null;
        if($sta->rowCount() > 0){
            $chitietphieunhap = $sta->fetchAll(PDO::FETCH_BOTH);
        }  
        // truy xuat  thong tin nha cung cap, ngay lap, so phieu nhap
        $phieunhap = null;
        $sql1 = "SELECT  MAPN,NGAYNHAP,TONGNHAP,nhacungcap.TENNCC from phieunhap,nhacungcap where  phieunhap.MANCC=nhacungcap.MANCC and  MAPN=".$mapn;
        $sta1 = $pdo->prepare($sql1);
        $sta1->execute();        
        if($sta1->rowCount() > 0){
            $phieunhap = $sta1->fetchAll(PDO::FETCH_BOTH);
        }
        $mpn = null;
        $ngaylap = null;
        $nhacc = null;
        $tongnhap=null;

        foreach ($phieunhap as $pnn){
                $mpn = $pnn[0];
                $ngaylap = $pnn[1];
                $tongnhap = $pnn[2];
                $nhacc = $pnn[3];
        }
        $pdf->AddPage();
        // Add a Unicode font (uses UTF-8)
        $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
        $pdf->SetFont('DejaVu','',25);

        $pdf->Cell(65, 10, '', 0, 0);
        $pdf->Cell(59, 5, "Phiếu nhập hàng", 0, 0);
        $pdf->Cell(59, 10, '', 0, 1);

        //--------------------
        $pdf->SetFont('DejaVu','',11);
        $pdf->Cell(30, 4, 'Số phiếu nhập:', 0, 0);
        $pdf->Cell(34, 4, $mpn, 0, 1);
        $pdf->Multicell(0,6,"");
        $pdf->Cell(25, 4, 'Ngày lập', 0, 0);
        $pdf->Cell(34, 4, $ngaylap, 0, 1);
        $pdf->Multicell(0,6,"");
        $pdf->Cell(30, 4, "Nhà cung cấp", 0, 0);
        $pdf->Cell(100, 5, $nhacc, 2, 1);
        $pdf->Multicell(0,6,"");

        $pdf->SetFont('DejaVu','',10);
        $pdf->Cell(20, 6, 'Mã sách ', 1, 0,'C'); 
        $pdf->Cell(95, 6, 'Tên sách', 1, 0,'C'); 
        $pdf->Cell(20, 6, 'Số lượng', 1, 0,'C'); 
        $pdf->Cell(30, 6, 'Giá nhập', 1, 0,'C'); 
        $pdf->Cell(30, 6, 'Thành tiền', 1, 1,'C'); 

        $pdf->SetFont('DejaVu','',10);        
        foreach ($chitietphieunhap as $pn) {
            $pdf->Cell(20, 6, $pn[0], 1, 0,'C'); 
            $pdf->Cell(95, 6, $pn[1], 1, 0,'C'); 
            $pdf->Cell(20, 6, $pn[2], 1, 0,'C'); 
            $pdf->Cell(30, 6, $pn[3], 1, 0,'C'); 
            $pdf->Cell(30, 6, $pn[4], 1, 1,'C');   
            $pdf->Multicell(0,0,""); 
            ?>						
            <?php
        }   
        $pdf->Cell(140, 6,"", 0, 0,'L');   
        $pdf->Cell(25, 6,"Tổng tiền:", 0, 0,'L');   
        $pdf->Cell(30, 6,$tongnhap, 0, 0,'L');  
        $pdf->Output();        							    
        

?>