
<!-- Modal -->
<div class="modal fade" id="singupModal" tabindex="-1" role="dialog" aria-labelledby="singupModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="singupModalLabel">SingUp to <span class="text-warning">K</span>eep<span class="text-warning">K</span>now</h5></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <form action="question/files/_hadalsingup.php" method="post">
                    <div class="form-group row">

                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Enter Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Phone No.</label>
                            <input type="text" class="form-control" id="phone" class="phone" placeholder="phone no">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Qualification</label>
                            <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Qualification">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Address</label>
                            <input type="text" class="form-control" id="adres" id="adres" placeholder="Address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="pass" name="pass" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Conform password</label>
                            <input type="password" id="cpass" id="cpass" class="form-control" placeholder="Conform password">
                        </div>
                        
                    </div>
                    
                    
                    <button type="submit" class="btn btn-warning">Submite</button>
                </form>
      </div>
      
    </div>
  </div>
</div>