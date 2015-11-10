<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$current_page = "index";
require_once("header.php");
?>
<form action="<?= action ?>" enctype="multipart/form-data" method="post">
    <table border="0" cellpadding="1" cellspacing="0" style="width: 500px;">
    <tbody>
    <tr>
    <td>
    Name:</td>
    <td>
    <input name="name" type="text" /></td>
    </tr>
    <tr>
    <td>
    Last Name:</td>
    <td>
    <input name="name" type="text" /></td>
    </tr>
    <tr>
      <td>
        Email:</td>
      <td>
        <input name="email" type="text" /></td>
    </tr>
    <tr>
      <td>
        Title Photo:</td>
      <td>
        <input name="email" type="text" /></td>
    </tr>
    <tr>
      <td>
        Tags</td>
      <td>
        <input name="email" type="text" /></td>
    </tr>
    <tr>
    <td>
    Description:</td>
    <td>
    <textarea name="message" style="margin: 2px; height: 148px; width: 354px;"></textarea></td>
    </tr>
    <tr>
    <td>
    <p>
    Upload Image</p>
    </td>
    <td>
    <p>
    <input type="file" id="thefile" name="thefile">
    </p></td>
    </tr>
    <tr>
    <td>
    <input type="submit" value="Submit" /></td>
    <td>
    You will receive an email confirmation upon submission</td>
    </tr>
    </tbody>
    </table>
</form></body>