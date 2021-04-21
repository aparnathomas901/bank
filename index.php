<html>
<head>
<title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
<style>
  *{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
.navbar
{
    width:100%;
    font color : #000
    white-space:nowrap;
    background-color: #000;
}
.main_div
{
    width:100%;

    height:100vh;
    background-color: #ffffff;
   ;
}
.main_text
{
    font-size :70px;
    color:black;
    margin-top:120px;
    font-family: 'Times New Roman', monospace;
}
.big-text
{
    font-size :27px;
    margin:20px 0;
    color:black;
    font-family: 'Times New Roman', monospace;
}
.contactus{
    width:100%;
    height: 100vh;
    padding: 80px 0;
    position: relative;
}
.contactus:before{
    content:"";
    position: absolute;
    top:0;
    left:0;
    bottom: 0;
    right:0;
    background:linear-gradient(180deg,#ffff 0%, #878178	 0%);
    z-index: -1;
}
.formbutton button{
    border:1px solid #000;
    border-radius:100px;
    margin:0 50px;
    padding: 12px 35px;
    outline:none;
    columns: #50d1c0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.4;
    text-align: center;
    background:transparent;
    color:#fff;
   
}
form:hover .formbutton button{
background: white;
color:#5E11A3 ;
box-shadow: 0 0 20px 0 rgba(0,0,0,0.3);

}
@media(min-width:400px)
{
    .main_div
    {
        max-height:1000px;
    }
}
</style>
</head>

<body>
<div class="main_div">
 
     <div class="navbar navbar-expand-md">
   
     <a href="#" class="navbar-brand font-weight-bold text-white text-center  "><h2></h2></a>

    
      
      <button class="navbar-toggler text-black " type="button" data-toggle="collapse" data-target="#collapsenavbar">
      <span class="navbar-toggler-icon" style="background:black;"></span>
      </button>
     
       <div class="collapse navbar-collapse text-center" id="collapsenavbar">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a href="index.php" class="nav-link text-white "><span style="margin-left:90px;">ABOUT</span></a></li>
              <li class="nav-item">
                  <a href="viewcustomers.php" class="nav-link text-white "> CUSTOMER DETAILS</a></li>
              <li class="nav-item">
                  <a href="transfermoney.php" class="nav-link text-white"></a></li>
              <li class="nav-item">
                  <a href="#contact" class="nav-link text-white">QUERIES</a></li>    
               </ul>
        </div>
     </div>

     <div class="container">
        <div class="row">

          <div class="col-sm-6">
            <h1 class="main_text">WORLD BANK</h1>
            <p class="big-text">We Serve For The Society</p>
            <p1 class="big-text">Trust and Excellence since 1904, </p1>
            <p2 class="big-text">Your Perfect Banking Partner</p2>
            <p3 class="big-text"> Good People to Grow With...Our bank's service  is user friendly, and we provide the best service</p3>

            



          </div>

          <div class="col-sm-6">
            
          <img src="21.png" class="img-fluid" width="500" height="100" style="margin-top:60px;">

            
           
          </div>

       </div>
       
    </div>

</div>

</div>


  <!--contact starts-->
  <section class="contactus" id="QUERIES" >
        <div class="container headings text-center">
            <h1 class="center" style="font-weight: bold;text-align: center;">FOR ANY QUERIES,CONTACT US.....</h1>
            <p>We're Here To Help you</p>



        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offet-md-2-col col-1">
                    <form action="/action_page.php">
                        <div class="form-group">
                          
                          <input type="text" class="form-control" placeholder="Enter name" id="username" required autocomplete="off">
                        </div>
                        <form action="/action_page.php">
                            <div class="form-group">
                              
                              <input type="email" class="form-control" placeholder="Enter email" id="email" required autocomplete="off">
                            </div>
                            <form action="/action_page.php">
                                <div class="form-group">
                                  
                                  <input type="number" class="form-control" placeholder="Enter your mobile number" id="mobile" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="comment">your precious queries:</label>
                                    <textarea class="form-control" rows="4" id="comment" placeholder="Your queries..."></textarea>
                                  </div>
                                  <div class="formbutton" style="display: flex;justify-content: center;">
                        <button type="submit" >Click here to Submit</button></div>
                      </form>
                </div>
            </div>
        </div>
       </section>
</body>
</html>