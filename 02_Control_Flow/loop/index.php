<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <select name="year" id="year">
            <?php   
            for($i = 2025; $i >= 2000; $i--){
                echo "<option value=\"$i\">$i</option>";
            }
             ?> 
        </select>
    </form>
    <form action="#">
        <select name="year">
            <?php for ($y = 2000; $y <= 2050; $y++): ?>
                <option value="<?= $y ?>"><?= $y ?></option>
            <?php endfor; ?>
        </select>
    </form>

</body>
</html>