<style>
    h3{
        text-align:center;
    }
    </style>
    <h3> Student Information </h3><br>


<div class="container" style="position:relative; height:500px; width: 500px; top: 150px; left: 50px;">
    <form action="index.php" method="POST">
        
        <label for="username"> Enter Username: </label> 
        <input type="text" id="username" name="username" autofocus="on" placeholder="Username"> <br>
        <label for="email"> Enter Email: </label>
        <input type="text" id="email" name="email" placeholder="Email"><br>
        <label for="gender">Gender</label>
        <input type="radio" name="gender" id="Male" value = "Male">
        <label for="Male">Male</label>
        <input type="radio" name="gender" id="Female" value = "Female">
        <label for="Female">Female</label><br>
        <label for="city"> City </label>
        <select name="city" id="city">
            <option value="Dehradun">Dehradun</label>
            <option value="Hardiwar">Haridwar</label>
            <option value="Nanital">Nanital</label>
        </select><br>
        <input type="submit" name="submit" value="submit">
    </form>
</div>