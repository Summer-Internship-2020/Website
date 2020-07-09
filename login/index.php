<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <script src="JQuery220.min.js" type="text/javascript"></script>
    <script>
    function valid()
    {
        n=document.f_sup.name.value;
        e=document.f_sup.email.value;
        ph=document.f_sup.phno.value;
        pw=document.f_sup.pass.value;
        cpw=document.f_sup.cpass.value;
        
        if (n=="") document.getElementById('a').innerText="!";    
        else document.getElementById('a').innerText="";
        if (e.startsWith('@')==1||e.endsWith(".com")==0||e.includes('@')==0||e.includes("@.com")==1) document.getElementById('b').innerText="!";
        else document.getElementById('b').innerText="";
        if (ph.length!=10) document.getElementById('c').innerText="!";       
        else document.getElementById('c').innerText="";
        if (pw.length<8) document.getElementById('d').innerText="!";
        else document.getElementById('d').innerText="";
        if (cpw!=pw) document.getElementById('e').innerText="!";
        else document.getElementById('e').innerText="";

        if(n!=""&&e.startsWith('@')==0&&e.endsWith(".com")==1&&e.includes('@')==1&&e.includes("@.com")==0&&ph.length==10&&pw.length>=8&&cpw==pw)
        document.f_sup.submit();
    }
    function check() 
    {
        ue=document.f_sin.uemail.value;
        upass=document.f_sin.upass.value;
        
        if (ue.startsWith('@')==1||ue.endsWith(".com")==0||ue.includes('@')==0||ue.includes("@.com")==1) document.getElementById('f').innerText="!";    
        else document.getElementById('f').innerText="";
        if (upass.length<8) document.getElementById('g').innerText="!";
        else document.getElementById('g').innerText="";
        
        if(ue.startsWith('@')==0&&ue.endsWith(".com")==1&&ue.includes('@')==1&&ue.includes("@.com")==0&&upass.length>=8)
        document.f_sin.submit();
    }
    </script>
</head>

<body>
    <div class="logsign">
    
    
        <div class="login-box">
        <form name="f_sin" action="signin.php" method="POST">
            <h1>Login</h1>
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Email" name="uemail">
                <span id="f" title="Invalid Email" style="cursor: pointer;"></span>
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="upass">
                <span id="g" title="Invalid Password" style="cursor: pointer;"></span>
            </div>

            <input type="button" class="btn" value="Sign In" id="log" onclick="check()">
            <p>New to this site? Sign up!!</p>
            <input type="button" class="btn" value="Sign Up" id="sign">
        </form>
        </div>
        
        <div class="signup-box hide">
        <form name="f_sup" action="signup.php" method="POST">
            <h1>Sign Up</h1>
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Your full name" name="name" >
                <span id="a" title="Invalid Username" style="cursor: pointer;"></span>
            </div>
            <div class="textbox">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Your Email ID" name="email">
                <span id="b" title="Invalid Email ID" style="cursor: pointer;"></span>
            </div>
            <div class="textbox">
                <i class="fas fa-phone"></i>
                <input type="number" placeholder="Contact Number" name="phno">
                <span id="c" title="Invalid Contact Info" style="cursor: pointer;"></span>
            </div>
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="pass">
                <span id="d" title="Password Should be atleast 8 Character long" style="cursor: pointer;"></span>
            </div>
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Confirm Password" name="cpass">
                <span id="e" title="Password Mismatch" style="cursor: pointer;"></span>
            </div>
            <input type="button" class="btn" value="Sign Up" id="sign2" onclick="valid()">
            <p>Have a account? Sign in!!</p>
            <input type="button" class="btn" value="Sign In" id="log2">
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $("#sign").click(function(){ 
            $(".login-box").addClass("hide");
            $(".signup-box").removeClass("hide");
        });
        $("#log2").click(function(){
            $(".signup-box").addClass("hide");
            $(".login-box").removeClass("hide");
        });
    </script>
</body>
</html>
