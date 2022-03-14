<h1 align="center">Áp dụng mô hình MVC vào CRUD 2 bảng</h1>

<h2>Mô tả chức năng</h2>
Người dùng sẽ đứng ở index.php mà vẫn có thể thao tác được nhiều chức năng
<br>
<ul>
  <li>Ở file index.php, khởi tạo biến $controller</li>
  <li>Nếu không có $_GET['controller'] thì nhúng controller/controller.php vào</li>
  <li>File controller/controller.php sẽ gọi tới menu để hiển thị ra Submenu quản lí học sinh và Submenu quản lí lớp học</li>
  <li>
    Lớp học
    <ul>
      <li>Khi ấn vào menu lớp học, truyền lên URL tham số ?controller=classes</li>
      <li>File index.php sẽ bắt được khi $_GET['controller'] == 'classes', khi bắt được sẽ nhúng file controller/classes.php vào</li>
      <li>File controller/classes.php sẽ bắt $_GET['action'] trên URL</li>
      <li>
        Các action:
        <ul>
          <li>Khi $action trống, sẽ nhúng file model để lấy ra dữ liệu các lớp. Sau đó nhúng file view xem toàn bộ danh sách lớp</li>
          <li>Khi $action == 'create', sẽ nhúng file view thêm lớp vào</li>
          <li>Khi $action == 'store', sẽ nhúng file model để xử lí thêm lớp</li>
          <li>Khi $action == 'edit', sẽ nhúng file model để lấy dữ liệu lớp cũ. Sau đó nhúng file view để hiển thị form chỉnh sửa</li>
          <li>Khi $action == 'update', sẽ nhúng file model để xử lí chỉnh sửa lớp</li>
          <li>Khi $action == 'delete', sẽ nhúng file model để xử lí xóa lớp</li>
        </ul>
    </ul>
  </li>
  
  <li>
    Sinh viên
    <ul>
      <li>Khi ấn vào menu sinh viên, truyền lên URL tham số ?controller=students</li>
      <li>File index.php sẽ bắt được khi $_GET['controller'] == 'students', khi bắt được sẽ nhúng file controller/students.php vào</li>
      <li>File controller/students.php sẽ bắt $_GET['action'] trên URL</li>
      <li>
        Các action:
        <ul>
          <li>Khi $action trống, sẽ nhúng file model để lấy ra dữ liệu các sinh viên kèm theo lớp. Sau đó nhúng file view xem toàn bộ danh sách sinh viên</li>
          <li>Khi $action == 'create', sẽ nhúng file view thêm lớp vào</li>
          <li>Khi $action == 'store', sẽ nhúng file model để xử lí thêm sinh viên</li>
          <li>Khi $action == 'edit', sẽ nhúng file model để lấy dữ liệu sinh viên cũ. Sau đó nhúng file view để hiển thị form chỉnh sửa</li>
          <li>Khi $action == 'update', sẽ nhúng file model để xử lí chỉnh sửa sinh viên</li>
          <li>Khi $action == 'delete', sẽ nhúng file model để xử lí xóa sinh viên</li>
        </ul>
    </ul>
  </li>
</ul>


