<?php
session_start();
$message = "";
if (isset($_POST["name"]))
{

}
?>
<html>
<head>
    <meta charset="UTF-8">
<style>
    .main {
        width: 50%;
        margin-right: 25%;
        margin-left: 25%;
    }
    body {
        background-color:#87dfd6;
        text-align:center;
    }
    h1 {
        color: #fbfd8a};
    }
</style>
</head>
<body dir="rtl">
<div class="main">
<h1>
    Match Maker 2020 - Find Your soulmate
</h1>
<h3>
    משתמש/ת מס' 1
</h3>
<form action="index.php" method="post">
<table class="main" border="1">
    <tr>
        <td>שימך?</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>שנת הלידה:</td>
        <td><input type="text" name="yearOfBirth"></td>
    </tr>
    <tr>
        <td>מחפש/ת נפש תאומה:</td>
        <td><input type="radio" name="radio">למטרות זוגיות<br/>
            <input type="radio" name="radio">למטרות ידידות<br/>
            <input type="radio" name="radio">מה שיוצא אני מרוצה
        </td>
    </tr>
    <tr>
        <td>חיות שאני אוהב/ת:</td>
        <td><input type="checkbox" name="cats">חתולים<br/>
            <input type="checkbox" name="dogs">כלבים<br/>
            <input type="checkbox" name="hamsters">אוגרים<br/>
            <input type="checkbox" name="goldfish">דגי זהב<br/>
            <input type="checkbox" name="human">בני אדם
        </td>
    </tr>
    <tr>
        <td>הדבר האהוב עלי בעולם:</td>
        <td><input type="text" name="bestLove"></td>
    </tr>
</table>
    <input type="submit" name="submit" value="בדיקת התאמה">
</form>
</div>
</body>
</html>
<?php
?>