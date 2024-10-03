<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
    <?php
        $connect = mysqli_connect(
            'localhost', 
            'root', 
            'root', 
            'httpfile5225'
        );
        if (!$connect) {
            echo 'Error Code: ' . mysqli_connect_errno();
            echo 'Error Message: ' . mysqli_connect_error();
        }
        $query = 'SELECT `Name`, `Hex` FROM colors';
    
        $results = mysqli_query($connect, $query);
        
        if (!$results) {
            echo  'Error Message: ' . mysqli_error($connect); 
        } else {
            echo  'The query found: ' . mysqli_num_rows($results);
        }

        

        while ($row = mysqli_fetch_assoc($results)) {
            echo '<table>';
            echo '<tr><th>Color Name</th></tr>';
            echo '<tr>';
            echo '<td style="background-color: ' . htmlspecialchars($row['Hex']) . ';">'. htmlspecialchars($row['Name']) . '</td>';
            // echo '<td style="background-color: ' . htmlspecialchars($row['Hex']) . ';">' . htmlspecialchars($row['Hex']) . '</td>';
            // echo '</tr>';
            echo '</table>';
        }

        
// for ($i=0;$i<$num_rows;$i++) {
// $row = mysql_fetch_assoc($result)
// $messageID = $row['messageID'];
// }

        
    
            
        
    ?>
</body>
</html>