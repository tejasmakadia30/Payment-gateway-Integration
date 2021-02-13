
<!DOCTYPE html>
<html lang="en">
<head>
<title>Donation form</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body style="font-family: Lato;" id="page2">
<nav class="navbar navbar-defaultt">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"><h4>Pet Project</h4></a>
      </div>
  </nav>
  <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div id="content" style="padding: 10% !important;">
              <h1 style="color: white;">Pet Project</h1>
           <div align="center"  class="main" >
          <form action="instamojo.php" method="post" accept-charset="utf-8">
    <div style="color: white; margin-bottom: 10px;" class="form"><br>
    Name<input type="text" name="name" class="form-control" placeholder="enter your name" required>
    </div>
      
  <div style="color: white; margin-bottom: 10px;" class="form">
         <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="enter your email" required>
    </div>
    <div style="color: white; margin-bottom: 10px;" class="form">
         <label>Phone</label>
    <input type="tel" name="phone" class="form-control" placeholder="enter your phone" required>
    </div>
    <div style="color: white; margin-bottom: 10px;" class="form">
         <label>Amount</label>
    <input type="number" name="amount" class="form-control" placeholder="donation amount" required>
    </div>
    <div class="form" style="margin-bottom: 10px;">
       
    <input type="submit" name="submit" class="bt2" value="Donate!" required><br><br>
    </div>
    </form>
</div>
            </div>
            
          </div>
        </div>
       </div>
    
  </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>