<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PHP - Checkbox </title>
</head>
<body>
<div class="container mt-5">
    <form action="" method="post" class="mb-3">
        <label>
            Apple
            <input type="checkbox" name="checkArr[]" value="Mar">
            <span></span>
        </label>
        <label>
            Banana
            <input type="checkbox" name="checkArr[]" value="Banana">
            <span></span>
        </label>
        <label>
            Pineapple
            <input type="checkbox" name="checkArr[]" value="Ananas">
            <span></span>
        </label>
        <label>
            Blueberry
            <input type="checkbox" name="checkArr[]" value="Zmeura">
            <span></span>
        </label>
        <input type="submit" name="submit" value="Alege optione"/>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['checkArr'])) {
            foreach ($_POST['checkArr'] as $checked) {
                echo $checked . '<br>';
            }
        } else {
            echo '<div class="error">Checkbox nu este selectat!</div>';
        }
    }
    ?>
</div>
</body>
</html>