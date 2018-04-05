





<html>
    <head>
    <link type="text/css" rel="stylesheet" href="style.css">
        <h1 class="header">Enter your details</h1>
    </head>
    
    <body>
        <section class="form">
        
        <form action="insert.php" method="post">
            
            
            
            <div class="row-padding">
        First name:  <input type="text" name="firstName" >
            <br>
             </div>
            
            
            
            <div class="row-padding">
        Last name:  <input type="text" name="lastName" >
            <br>
             </div>
            
            
            <div class="row-padding">
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female" > female <br>
            </div>
            
            
            <div class="row-padding">
             Birth date:<input type="date" name="birthday"> 
            <br> 
            </div>
            
            
            <div class="row-padding" >
            <input type="submit" name="submit" >
            <input type="reset">
            </div>
            
            
        </form>
            
            </section>
        <footer class="footer">
        
        
        </footer>
    </body>

</html>