<h1>Sửa lớp</h1>

<form action="?action=update&controller=classes" method="post">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    Tên lớp
    <br>
    <input type="text" name="name" value="<?php echo $name ?>">
    <br>
    <button>Sửa</button>
</form>