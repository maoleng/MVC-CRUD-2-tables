<h1>Danh sách các lớp</h1>

<a href="?action=create&controller=classes">Thêm lớp học</a>

<table border="1px solid black">
    <tr>
        <th>Mã</th>
        <th>Tên lớp</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach( $query as $each_class ) { ?>
    <tr>
        <td><?php echo $each_class['id'] ?></td>
        <td><?php echo $each_class['name'] ?></td>
        <td>
            <a href="?action=edit&controller=classes&id=<?php echo $each_class['id'] ?>">Sửa</a>
        </td>
        <td>
            <a href="?action=delete&controller=classes&id=<?php echo $each_class['id'] ?>">Xóa</a>
        </td>
    </tr>
    <?php } ?>
</table>