<!DOCTYPE html>
<head>
    <title>Guest List</title>
    <style>
html
{
    background-color:pink;
}
table, th, td
{
    border: 2px solid black;
    width: 1300px;
    height: 75px;
    background-color: aliceblue;
}
h1, tr
{
    text-align: center;
}
    </style>
</head>
<body>
    <h1>Guest List</h1>
    <table>
        <thead>
        <tr>
            <th>Ticket ID</th>
            <th>Student ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact Number</th>
        </tr>
        </thead>
        <tbody>
<?php
include_once('print.php');
$stmt = $file_db->prepare("SELECT * FROM Guest");
$stmt->execute();
$users = $stmt->fetchAll();
foreach($users as $user)
{
?>
<tr>
<td>
    <?php echo $user['ticketID']; ?>
</td>
<td>
    <?php echo $user['studentID']; ?>
</td>
<td>
    <?php echo $user['name']; ?>
</td>
<td>
    <?php echo $user['email']; ?>
</td>
<td>
    <?php echo $user['contactNum']; ?>
</td>
<?php
}
?>
        </tbody>
    </table>
</body>
</html>
