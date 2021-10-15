<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <ul>
        <li><a href="<?= url('/student/add')?>">Add Student</a></li>
        <li><a href="<?= url('/teasher/add')?>">Add Teasher</a></li>
        <li><a href="<?= url('/parent/add')?>">Add Parent</a></li>
    </ul>
</body>
</html>