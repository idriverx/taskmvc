
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>    <meta charset="utf-8">  </head>
<body>
<p>Task id: <?php echo $element[0]['id']; ?></p>

    <form action="" method="post">

          <p><input type="text" name="email"  value="<?php echo $element[0]['email']; ?>"></p>
        <p>   <input type="text" name="text" value="<?php echo $element[0]['text']; ?>"></p>
        <p>    <input type="submit" name=""  value="Сохранить"></p>


    </form>

</table>

</form>
</body>
</html>