<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Lists</title>
    <style>
        table {
            width: 100%; /* Full width of the container */
            border-collapse: collapse; /* Merge table borders */
            margin: 20px 0; /* Margin around the table */
        }
        th, td {
            border: 1px solid black; /* Border for table cells */
            padding: 10px; /* Space within cells */
            text-align: left; /* Align text to the left */
        }
        th {
            background-color: #f2f2f2; /* Light gray background for headers */
        }
        .col-20 {
            width: 30%; /* Set width for the first column */
        }
        .col-80 {
            width: 20%; /* Set width for the second column */
        }
    </style>
</head>
<body>

    <div class="col-lg-3">
        <h2>Guest List</h2>
    </div>
    <div class="col-lg-9">
        <h4>Head Count: <?= count($bwisita); ?></h4>
    </div>

    <div class="col-lg-12">
<table >
    <thead>
        <tr>
            <th>Name</th>
            <th>Contact</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach ($bwisita as $v) {
                echo "<tr><td>".$v->name."</td><td>".$v->contact."</td></tr>";
            }
        ?>
    </tbody>    
</table>
        </div>
</body>
</html>