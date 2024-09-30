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
            foreach ($bwisita as $v) {
                echo "<tr><td>".$v->name. " - ".$v->contact."</td><td>".$v->message."</td></tr>";
            }
        ?>
    </tbody>    
</table>

</body>
</html>