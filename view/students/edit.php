<h1>Sửa lớp</h1>

<form action="?action=update&controller=students" method="post">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    Tên lớp
    <br>
    <input type="text" name="name" value="<?php echo $name ?>">
    <br>
    <select name="class_id">
        <?php foreach ($classes as $each_class) { ?>
            <option value="<?php echo $each_class['id'] ?>" <?php if ( $each_class['id'] == $class_id ) echo 'selected' ?>>
                <?php echo $each_class['name'] ?>
            </option>
        <?php } ?>
    </select>
    <button>Sửa</button>
</form>