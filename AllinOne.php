

<!DOCTYPE html>
<html>
<head>
	<title>Asset Manager</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="homestyle.css">

<link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<script>

$(document).ready(function(){
	$("#signUp").click(function(){
		var e = $("#inputEmail").val();
		var p = $("#password").val();
		var d = $("#designation").val();
		var dept = $("#dept").val();
		var u = $("#inputUsername").val();
		$.post("register1.php",{
				email: e,
				Password: p,
				designation: d,
				department: dept,
				username: u
			},function(data, status){
				if(data=="Account of your ID already Exists")
					$("#error").html(data);
				else
					$("#close").addClass("close");
			});
	});
	
	$("#loginIn").click(function(){
		var email = $("#inputUserName").text();
		var password = $("#inputPassword").text();
		$.post("login.php",{
			e: email,
			p: inputPassword
		},function(data,status){
			$("#fatalerror").html(data);
		});
		
	});
});

function checkEmail() {

      var email = document.getElementById("inputEmail");
      var filter= /^([a-zA-Z0-9_\-\.])+\@ves.ac.in$/;
      var messageDisplay=document.querySelector("#message");

      if (!filter.test(email.value)) {
      // alert('Please provide a VES email address');
      messageDisplay.textContent="Please enter a valid VES Email-ID.";
      email.textContent=" ";  
      email.focus;
      return false;
 }
     else{
      messageDisplay.textContent="";
     }
}
	
</script>

<style type="text/css">
  #message{
    color: red;
  }
</style>

</head>


<body>

	<nav class="navbar navbar-default">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
<!--         <span class="icon-bar"></span>
        <span class="icon-bar"></span> -->
      </button>
      <a class="navbar-brand" href="#">Asset Manager</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li data-target="#registerModal" data-toggle="modal"><a href="#"><i class="fas fa-user-plus"></i>Sign-Up</a></li>
        <li data-target="#loginModal" data-toggle="modal"><a href="#"><i class="fas fa-user"></i>Login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>

	
	<div class="container">
  	<div class="row">
    	<div class="col-lg-12">
    		<div id="content">
    			<h1>Asset Manager</h1>
    		    <hr>
    		</div>
    	</div>
    </div>
 	</div>


<div class="container" id="20>
    <div class="row">
      <div class="col-xs-12">
        <div class="modal" id="registerModal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button class="close" data-dismiss="modal" id="close">&times;</button>
                <h4 class="modal-title">Sign Up</h4> 
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input class="form-control" placeholder="Login Email" type="text" id="inputEmail" name="Email" required="true" autocomplete="on">
                  </div>
                  <span id="message"></span>
                  <div class="form-group">
                    <label for="inputUsername">Username</label>
                    <input type="text" id="inputUsername" placeholder="Login Username" class="form-control" name="Username" required="true" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="designation">Designation</label>
                    <select name="designation" id="designation">
                      <option value="Staff">Staff</option>
                      <option value="Non teaching Staff">Non teaching Staff</option>
                      <option value="HOD">HOD</option>
                      <option value="Dept Purchase officer">Departmental Purchase Officer</option>
                      <option value="VESIT purchase officer">VESIT Purchase Officer</option>
                      <option value="Principal">Principal</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="dept">Department</label>
                    <select name="department" id="dept">
                      <option value="MCA">MCA</option>
                      <option value="INST">INST</option>
                      <option value="ETRX">ETRX</option>
                      <option value="CMPN">CMPN</option>
                      <option value="EXTC">EXTC</option>
                      <option value="IT">IT</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Login Password" class="form-control" required="true" name="Password" autocomplete="current-password">
                  </div>
                </form>
              </div>
              <div class="modal-footer">
               <button class="btn btn-primary" id="signUp" >Sign up</button>
                <button class="btn btn-primary" data-dismiss="modal">Close</button>
				<p class="text-danger" id="error"></p>
			  </div>
            </div>            
          </div>
        </div>  
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="modal" id="loginModal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button class="close" data-dismiss="modal" id="close">&times;</button>
                <h4 class="modal-title">Login</h4> 
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="inputUserName">Username </label>
                    <input class="form-control" placeholder="Login Username" type="text" id="inputUserName">
                  </div>
                  <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="Password" id="inputPassword" placeholder="Login Password" class="form-control" autocomplete="current-password">
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button class="btn btn-primary" id="loginIn">Login</button>
                <button class="btn btn-primary" data-dismiss="modal">Close</button>
				<p class="text-danger" id="fatalerror"></p>
              </div>
            </div>            
          </div>
        </div>  
      </div>
    </div>
  </div>

</body>
</html>