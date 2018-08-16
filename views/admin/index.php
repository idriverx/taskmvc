<?php
header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>   <meta charset="utf-8">   <style>
        table, th, td{
            border: 0.1px solid black;
        }
    </style></head>
<body>
<form action="/index.php?admin=1"  enctype='multipart/form-data' method="post">
    <p>
        <label>Введите email </label>
        <input type="text" name="email" >
    </p>
    <p>
        <label>Введите текст</label>
        <input type="text" name="text" >
    </p>
    <input name="file" type="file"  >
    <p>
        <input type="submit" name="" value="Добавить">
    </p></form>
</table>
<table>
    <tr>
        <th>ID </th>
        <th>Email</th>
        <th>Text</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    <?php foreach ($arrayTasks as $key=> $array):?>
        <tr>
            <td> <p ><?php echo $array['id'];?></p></td>
            <td> <p ><?php echo $array['email'];?></p></td>
            <td> <p ><?php echo $array['text'];?></p></td>
            <td>  <img src="/uploads/<?php echo $array['img'];?>.jpeg" width="100" height="100" alt="картинка"></td>
            <td> <a href = 'index.php/admin/edit/<?php echo $array['id'];?>'>Редактировать</a>

                <form action='/index.php/admin/delete/<?php echo $array['id'];?>' method='post'>
                    <button type='submit' value ='delete'>Удалить</button>
                </form>
        </td>
        </tr>
    <?php endforeach; ?>


</table>

</form>
</body>
</html>