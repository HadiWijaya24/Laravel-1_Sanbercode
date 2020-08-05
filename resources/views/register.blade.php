<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    
    <h3>Sign Up Form</h3>

    <form action="/welcome" method="POST">
        <!-- Metode pengamanan dari Laravel -->
        @csrf
        <!-- name -->
        <label for="username"><p>First Name : </p></label>
        <input type="text" name="username" id="username" required> 

        <label for="username2"><p>Last Name : </p></label>
        <input type="text" name="username2" id="username2" required>

        <!-- Gender -->
        <p>Gender : </p>
        <input type="radio" name="gender" id="Male" value="Male" required>
        <label for="Male">Male</label><br>

        <input type="radio" name="gender" id="Female" value="Female" required>
        <label for="Female">Female</label><br>

        <input type="radio" name="gender" id="Other" value="Other" required>
        <label for="Other">Other</label><br>

        <!-- Nasionality -->
        <p>Nasionality : </p>
        <select name="nasionality" id="">
            <option value="Indonesian">Indonesian</option>
            <option value="Singapore">Singapore</option>
            <option value="Malaysia">Malaysia</option>
        </select>

        <!-- Language -->
        <p>Language Spoken : </p> 
        
        <input type="checkbox" name="Bahasa" id="Bahasa"  >
        <label for="Bahasa">Bahasa Indonesia</label><br>

        <input type="checkbox" name="English" id="English" > 
        <label for="English">English</label><br>

        <input type="checkbox" name="other" id="other" >
        <label for="other">Other</label>

        <!-- text area -->
        <label for="Bio"><p>Bio : </p></label>
        <textarea name="Bio" id="Bio" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Sign Up</button>

    </form>
    
</body>
</html>