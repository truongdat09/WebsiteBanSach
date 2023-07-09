<?php
  include("body/Connection.php");
  
$output = "";

if(isset($_POST["btn_export"])){
    $output .=" 
    '<table border='1'>  
            <thead> 
                <tr>
                    <th>MASACH</th>
                    <th>MACD</th>
                    <th>MANXB</th>
                    <th>TENSACH</th>    
                    <th>GIABAN</th>
                    <th>ANHBIA</th>
                    <th>SLTON</th>
                    <th>MOTA</th>
                    <th>TACGIA</th>
                    <th>GIAMGIA</th>
                </tr>   
            </thead>          
            <tbody> 
    ";
    $sql = "SELECT *FROM sach";
    $sta = $pdo->prepare($sql);
    $sta->execute();
  
    if($sta->rowCount() > 0){
        $sach = $sta->fetchAll(PDO::FETCH_BOTH);		
    }
    foreach ($sach as $s) {
        $output .= "
            <tr>
                <td>$s[0]</td>
                <td>$s[1]</td>
                <td>$s[2]</td>
                <td>$s[3]</td>
                <td>$s[4]</td>
                <td>$s[5]</td>
                <td>$s[6]</td>
                <td>$s[7]</td>
                <td>$s[8]</td>
                <td>$s[9]</td>
                
            </tr>";
    }
        $output .="
        </tbody>
        </table>";
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=report.xls');
        echo $output;
    }
?>