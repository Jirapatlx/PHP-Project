```php
<?php
$goals = [
    'พัฒนาเว็บไซต์ด้วยภาษา PHP และ HTML',
    'ฝึกการทำงานร่วมกันผ่าน Git และ GitHub',
    'เรียนรู้การพัฒนา Frontend และ Backend',
    'สร้างระบบที่ใช้งานง่ายและแก้ไขปัญหาได้จริง'
];
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>เกี่ยวกับระบบ</title>
</head>
<body>
    <nav>
        <a href="index.php">หน้าหลัก</a> |
        <a href="about.php">เกี่ยวกับระบบ</a> |
        <a href="server.php">ข้อมูลเซิร์ฟเวอร์</a>
    </nav>

    <h1>เกี่ยวกับระบบของทีม</h1>

    <h2>เป้าหมายของระบบ</h2>

    <ol>
        <?php foreach ($goals as $goal): ?>
            <li><?php echo $goal; ?></li>
        <?php endforeach; ?>
    </ol>

    <p>จำนวนเป้าหมายทั้งหมด: <?php echo count($goals); ?> ข้อ</p>
</body>
</html>
```