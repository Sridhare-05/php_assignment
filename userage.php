<style>
    table {
        width: 50%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

<!-- i) Filter the array of users who have age between 22 to 30. -->

<?php
echo "i) Filter the array of users who have age between 22 to 30.<br>";
$users = [
    ['name' => 'John', 'age' => 28],
    ['name' => 'Jane', 'age' => 34],
    ['name' => 'Dave', 'age' => 25],
    ['name' => 'Sara', 'age' => 30],
    ['name' => 'Yuva', 'age' => 24],
    ['name' => 'Mohan', 'age' => 21],
];

$filtered_users = array_filter($users, function($user) {
    return ($user['age'] >= 22 && $user['age'] <= 30);
});

foreach ($filtered_users as $user) {
    foreach ($user as $key => $value) {
        echo "$key: $value<br>";
    }
    echo "<br>";
}
?>

<br><br>
<!-- ii) Display the above array in table format -->

<?php
echo "<p>ii) Display the above array in table format</p>";
echo "<table>";
echo "<tr><th>Serial No</th><th>Name</th><th>Age</th></tr>";
$serial_no = 1; 
foreach ($filtered_users as $user) { 
    echo "<tr><td>{$serial_no}</td><td>{$user['name']}</td><td>{$user['age']}</td></tr>";
    $serial_no++; 
}
echo "</table>";
?>
<br><br>
<!-- iii) Based on their current age, calculate their year of birth. -->

<?php
echo "<p>iii) Based on their current age, calculate their year of birth.</p>";
echo "<table>";
echo "<tr><th>Serial No</th><th>Name</th><th>Age</th><th>Year of Birth</th></tr>";
$serial_no = 1; 
foreach ($users as $user) {
    $year_of_birth = date('Y') - $user['age'];
    echo "<tr><td>{$serial_no}</td><td>{$user['name']}</td><td>{$user['age']}</td><td>{$year_of_birth}</td></tr>";
    $serial_no++; 
}
echo "</table>";
?>
