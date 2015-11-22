	<div class="navbar navbar-default navbar-fixed-top col-md-12 ">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><i class="fa fa-bolt fa-lg"></i> learnhour.in</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="?id=home"><i class="fa fa-home"></i> Home</a></li>
       <?php include('entranceexams.html'); ?>
       <?php include('cbse.html'); ?>
    </ul>
    <form class="navbar-form navbar-left">
      <input type="text" class="form-control col-lg-8" placeholder="Search">
    </form>
    <ul class="nav navbar-nav navbar-right">
       <li><a href="#"><i class="fa fa-paw fa-lg"></i>  Sign Up</a></li> 
      <?php include('login.html'); ?>
     
    </ul>
  </div>
</div>