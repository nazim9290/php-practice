<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <?php if(isset($_GET['fname'])){?>
        <p>first name : <?php echo $_GET['fname'] ;?>  </p>
        <?php } ?>

        <?php if(isset($_GET['lname'])){ ?>
        <p>last name : <?php echo $_GET['lname'] ;?> </p>
        <?php } ?>

        
    </div>

    <div>
        <form method="GET">
            <label for="fname">
                <input type="text" name="fname" id="fname">
            </label>
            <label for="lname">
                <input type="text" name="lname" id="lname">
            </label>
            <button type="submit">Submit</button>
        </form>
    </div>
    
</body>
</html>