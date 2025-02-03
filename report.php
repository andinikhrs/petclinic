<!doctype html>
<html>
    <head>
        <title>Pet Clinic Andin</title>
        <link rel="stylesheet" href="css/report.css">
    </head>
    <body>
        <h1>Pet Clinic Andin</h1><hr>
        <h3>Monthly Report</h3>
        <?php
        $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $year = date('Y');
        ?>
        <form>
            <p>Select
                <select name="month" required>
                    <option value="">Month</option>
                    <?php for($m=1;$m<=12;$m++) {?>
                    <option value="<?=$m?>"><?=$months[$m-1]?></option>
                    <?php } ?>
                </select>
                <select name="year" required>
                    <option value="">Year</option>
                    <?php for($y=0;$y<=2;$y++) {?>
                    <option value="<?=$year-$y?>"><?=$year-$y?></option>
                    <?php } ?>
                </select>
                <input type="submit" value="View Report">
            </p>
        </form>
        <?php
        if(isset($_GET['year'])) { 
            include'connection_230041.php';

            $query= $query = "SELECT m.mr_date_230041, d.doctor_name_230041, p.pet_name_230041, p.pet_owner_230041, m.cost_230041
            FROM medicals_230041 AS m, doctor_230041 AS d, petclinic_230041 AS p
            WHERE m.doctor_id_230041 = d.doctor_id_230041 
            AND m.pet_id_230041 = p.pet_id_230041
            AND MONTH(m.mr_date_230041) = '{$_GET['month']}'
            AND YEAR(m.mr_date_230041) = '{$_GET['year']}'";

            $report=mysqli_query($db_connection,$query);

            ?>
        <h4>Report Periode <?=$months[$_GET['month']-1]?> - <?=$_GET['year']?></h4>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Date</th>
                <th>Doctor</th>
                <th>Pet</th>
                <th>Owner</th>
                <th>Pay ($)</th>
</tr>
<?php
if(mysqli_num_rows($report) > 0) {
    $i=1; $total=0;
    foreach($report as $data) :
        $total=$total+$data['cost_230041'];
?>
<tr>
                <td><?=$i++?></td>
                <td><?=$data['mr_date_230041']?></td>
                <td><?=$data['doctor_name_230041']?></td>
                <td><?=$data['pet_name_230041']?></td>
                <td><?=$data['pet_owner_230041']?></td>
                <td align="right"><?=$data['cost_230041']?></td>
</tr>
<?php endforeach; ?>
<tr><th colspan="7" align="right">Total : $ <?=$total?></th></tr>
<?php } else { ?>
<tr><td colspan="7" align="center">No Record !</td></tr>
<?php } ?>
</table>
<?php } ?>
<p><a href="index.php">Back to Home</a></p>
    </body>
</html>