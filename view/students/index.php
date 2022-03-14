<h1>Danh sách các sinh viên</h1>

<a href="?action=create&controller=students">Thêm lớp sinh viên</a>

<table border="1px solid black">
    <tr>
        <th>Mã</th>
        <th>Tên sinh viên</th>
        <th>Tên lớp</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach( $query as $each_student ) { ?>
    <tr>
        <td><?php echo $each_student['id'] ?></td>
        <td><?php echo $each_student['name'] ?></td>
        <td><?php echo $each_student['class_name'] ?></td>
        <td>
            <a href="?action=edit&controller=students&id=<?php echo $each_student['id'] ?>">Sửa</a>
        </td>
        <td>
            <a href="?action=delete&controller=students&id=<?php echo $each_student['id'] ?>">Xóa</a>
        </td>
    </tr>
    <?php } ?>
</table>