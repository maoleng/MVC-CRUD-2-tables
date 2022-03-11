<h1>Danh sách sinh viên</h1>

<a href="?action=create">Thêm sinh viên mới</a>

<table style="width:100%" border="1px solid black">
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($query as $each_student) { ?>
        <tr>
            <td><?php echo $each_student['id'] ?></td>
            <td><?php echo $each_student['name'] ?></td>
            <td>
                <a href="?action=edit&id=<?php echo $each_student['id'] ?>">Sửa</a>
            </td>
            <td>
                <a href="?action=delete&id=<?php echo $each_student['id'] ?>">Xóa</a>
            </td>
        </tr>
    <?php } ?>
</table>