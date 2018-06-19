
<!DOCTYPE html>
 
<html lang="es">

<head>
<title>Titulo de la web</title>
<meta charset="utf-8" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>
 
<body>
<div class="container">    
        <div id="loginbox" style="margin-top:50px; margin-left:25%;" class="col-md-6 col-md-offset-4">                    
        
           <?= $this->Flash->render('auth') ?>
      
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <h2>InmoCMS &nbsp;&nbsp;|  &nbsp;  &nbsp;     &nbsp;  &nbsp;      Iniciar Sesión</h2>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <?= $this->Form->create() ?>
                    
                                    
                            <div style="margin-bottom: 25px" >
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                         
                                        <?= $this->Form->control('username',['class'=>'form-control form-control-lg','placeholder'=>'Nombre de usuario', 'label'=>false, 'required']) ?>                                  
                                    </div>
                                
                            <div style="margin-bottom: 25px" >
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    
                                      
                                      <?= $this->Form->control('password',['class'=>'form-control form-control-lg','placeholder'=>'Contraseña', 'label'=>false, 'required']) ?>   
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                    <?= $this->Form->button('Acceder', ['class'=>'btn btn-success'])?>
                                     <!-- <a id="btn-login" href="#" class="btn btn-success">Login  </a>-->
                                     <!-- <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>-->
                                     
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                          
                                     
                                        </div>
                                    </div>
                                </div>    
                           <!-- </form>-->
                           
                           <?= $this->Form->end() ?>     



                        </div>                     
                    </div>  
        </div>
      
</body>
</html>