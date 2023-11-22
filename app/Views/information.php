<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/Infos" method ="post">
        <label>Name: </label>
    <input type="text" name="ResidentName" placeholder ="Resident Name">
    
    <input type="text" name = "ContactNo" placeholder ="Contact">
   <Select name="Status">
    <option>Single</option>
    <option>Married</option>
    <option>Widowed</option>
    <option>Separated</option>
   </Select>
    <Select name="Gender">
    <option>Male</option>
    <option>Female</option>
    </Select>
    <input type="date" name="Birthdate" placeholder ="Birthdate">
    <input type="text" name="Age" placeholder ="Age">
    <input type="text" name = "Address" placeholder = "Address">
    <button type ="submit">save</button>
    </form>
    <?php if(isset($info)) ?>
        <table border = "1">
            <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Birthdate</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Address</th>
            </tr>
        <?php foreach ($info as $St): ?>
        
            <tr>
            
                <th><?= $St['ResidentName'] ?></th>
                <th><?= $St['Status'] ?></th>
                <th><?= $St['Birthdate'] ?></th>
                <th><?= $St['Gender'] ?></th>
                <th><?= $St['Age'] ?></th>
                <th><?= $St['Address'] ?></th>
        </tr>
        <?php endforeach; ?>
        </table>
        </div>
       
</body>
</html>