<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="image/login.png" type="image/x-icon">
    <style>
        table,
        tr,
        td,
        th {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <title>Load</title>
</head>

<body>
    <table>
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>User name</th>
            <th>Gender</th>
            <th>Date of birth</th>
        </tr>
        <?php
        $data = file_get_contents("data.json");
        $data = json_decode($data, true);
        if (isset($data)) {
            foreach ($data as $row) {
                echo
                '<tr>
                    <td>' . $row["name"] . '</td>
                    <td>' . $row["e-mail"] . '</td>
                    <td>' . $row["username"] . '</td>
                    <td>' . $row["gender"] . '</td>
                    <td>' . $row["dob"] . '</td>
                </tr>';
            }
        } else {
            echo "No data found";
        }
        ?>
    </table>
    <a href="store.php">Store Data</a>
</body>

</html>