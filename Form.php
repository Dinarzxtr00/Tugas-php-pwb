<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h2>
    <form method ="POST" action="welcome.php">

    <p>Nama Lengkap</p>
        <label for="fname">First Name</label><br>
        <input type="text"name="fname" required>
        <br>
        <label for="lname">Last Name</label><br>
        <input type="text"name="lname" required>
        
    <p>Gender</p>
    <input type="radio" name="gender" value="Laki-laki">Male<br>
    <input type="radio" name="gender" value="Perempuan">Female
    <p>Nationality</p>
    <select name = "country">
        <option value="Indonesia">Indonesia</option>
        <option value="English">English</option>
        <option value="Germany">Germany</option>
        <option value="Other">Other</option>
    </select>
    <p>Languange Spoken</p>
    <input name="bahasa[]" value="Indonesia" type="checkbox">Indonesia<br>
    <input name="bahasa[]" value="English" type="checkbox">English<br>
    <input name="bahasa[]" value="China" type="checkbox">China<br>
    <input name="bahasa[]" value="Arab" type="checkbox">Arab<br>
    <input name="bahasa[]" value="Other" type="checkbox">Other
    <p>Bio</p>
    <textarea cols="30" rows="10" name="bio"></textarea>
    <br>
    <button>Sign up</button>
    </form>
</body>
</html>
