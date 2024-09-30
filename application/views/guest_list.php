<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Lists</title>
</head>
<body>
    
<h2>Guest List</h2>

<table>
    <thead>
        <tr>
            <th>Name &amp; contact</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            for ($i=0; $i < $records; $i++) { 
                echo "<tr><td>".$records[$i]['name']."</td></tr>";
            }
        
        ?>
    </tbody>    
</table>

</body>
</html>