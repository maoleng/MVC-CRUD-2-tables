<h1>Sửa sinh viên</h1>

<form action="?action=update&id=<?php echo $id ?>" method="post">
    <input type="hidden" value="<?php echo $id ?>" name="id">
    Tên
    <br>
    <input type="text" name="name" value="<?php echo $result['name'] ?>">
    <br>
    <button>Sửa</button>
</form>