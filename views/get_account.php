
<div>
    
    <!-- My account area -->
    <h2>My Account</h2>
    <hr>
    
    <div class="row">
      <div class="col-xs-12 col-md-4">
              <img src="images/profile.png" class="profile-image"/>
          
      </div>
      
      
      <div class="col-xs-6 col-md-8">
        
        <form class="form-horizontal">
            <div class="username-heading">
                <h4>Username: <?php echo $_SESSION['username']; ?></h4>
            </div>
          
          
          <div class="form-group">
            <label for="inputName3" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword3" placeholder="John Does">
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="doesjohn@gmail.com">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary btn-lg">Update Information</button>
            </div>
          </div>
        </form>
          
      </div>
      
    </div>
    
    <div class="row">
      <div class="col-xs-12 col-md-12">
        <h2>Team Summary</h2>
        <hr>
        <h4>Name: Team Name</h4>
        <h4>Members: </h4>
        <hr>
      </div>
    </div>
</div>