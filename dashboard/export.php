<?php  
$connect = mysqli_connect("virtacalls.cdw6aao0k58a.us-east-1.rds.amazonaws.com", "admin", "virtacalls", "virtacalls");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM inquirers ORDER BY id DESC";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" style="border-collapse: collapse; width: 100%;">  
                    <tr>  
                         <th style="border: 1px solid black; text-align: left; padding: 8px;">ID</th>  
                         <th style="border: 1px solid black; text-align: left; padding: 8px;">Name</th>  
                         <th style="border: 1px solid black; text-align: left; padding: 8px;">Phone number</th>  
                         <th style="border: 1px solid black; text-align: left; padding: 8px;">E-mail</th>  
                         <th style="border: 1px solid black; text-align: left; padding: 8px;">Message</th>  
                         <th style="border: 1px solid black; text-align: left; padding: 8px;">Date</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td style="border: 1px solid black; text-align: left; padding: 8px;">'.$row["id"].'</td>  
                         <td style="border: 1px solid black; text-align: left; padding: 8px;">'.$row["name"].'</td>  
                         <td style="border: 1px solid black; text-align: left; padding: 8px;">'.$row["phone_number"].'</td>  
                         <td style="border: 1px solid black; text-align: left; padding: 8px;">'.$row["email"].'</td>  
                         <td style="border: 1px solid black; text-align: left; padding: 8px;">'.$row["message"].'</td>
                         <td style="border: 1px solid black; text-align: left; padding: 8px;">'.$row["registration_date"].'</td>
     </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
