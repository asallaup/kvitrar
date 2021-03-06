<?php 
?>

<div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Innstillinger</h4>
        </div>
        <div class="modal-body">
          
            <div class="tabbable"> <!-- Only required for left/right tabs -->
                <ul class="nav nav-tabs">
                 <li class="active"><a href="#account" data-toggle="tab">Generelt</a></li>
                <li><a href="#password" data-toggle="tab">Endre passord</a></li>
                <li><a href="#profilepicture" data-toggle="tab">Endre profilbilde</a></li>
                </ul>
            
            <div class="tab-content">
                
                <div class="tab-pane active" id="account">
                  <h5>Generelle innstillinger</h5>
                  
                  <form method="POST" action="php/functions/edituser.php">
                    Navn:<input class="form-control" type="text" name="name" value="<?php echo $profile_user->name;?>">
                    Brukarnavn: <input class="form-control" type="text" name="username" value="<?php echo $profile_user->username;?>">
                    E-post: <input class="form-control" type="text" name="email" value="<?php echo $profile_user->email;?>">
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Lukk</button>
                      <button type="submit" class="btn btn-primary">Lagre endringer</button>
                  </div>
                  </form>
                    
                </div>
                
                <div class="tab-pane" id="password">
                  <h5>Endre passord</h5>
                  
                  <form method="POST" action="php/functions/editpassword.php">
                    Nåværende passord:<input class="form-control" type="password" name="currentpassword">
                    Nytt passord: <input class="form-control" type="password" name="newpassword">
                    Gjenta nytt passord: <input class="form-control" type="password" name="repeatpassword">
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Lukk</button>
                      <button type="submit" class="btn btn-primary">Lagre endringer</button>
                  </div>
                  </form>
                </div>
                
                <div class="tab-pane" id="profilepicture">
                  <h3>Endre profilbilde</h3>
                  
                  <form action="php/functions/upload_picture.php" method="post"
                    enctype="multipart/form-data">
                    <label for="file">Nytt profilbilde:</label>
                    <input type="file" name="file" id="file"><br>
                    <div class="modal-footer">
                        <a>Det kan ta noen minutter før bildet blir oppdatert.</a>
                     <button type="button" class="btn btn-default" data-dismiss="modal">Lukk</button>
                      <button type="submit" class="btn btn-primary">Lagre endringer</button>
                  </div>
                  </form>
                </div>

                  
                  
                  
                  
                  
                </div>
                
              </div>
            
            
            
            
            </div>
                
        </div>
        
          
          
          
          
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->