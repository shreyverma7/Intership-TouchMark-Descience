<?php
extract($_REQUEST);
 if(isset($submit) && $submit == 'submit1'){
    echo "successful <br>" ;
    echo $form2Example18."<br>";
    echo $form2Example28;
    
    exit();

 }
?>
<html>
<title>Shrey</title>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <style>
        .login_form{
            background-color: #ccccff ;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 10px;
            font-weight:400;



        }
        .login_form h3{
            font-weight: 700;

        }
        .login_form #icon_size i {
            font-size: 50px;

        }
        

    </style>

</head>

<body>z
    <div class="Container vh-100">
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <i class="fas fa-crow fa-4x"></i>
                        <h5>Logo</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" >
                                <form class="login_form " method="post" style="width: 23rem; background-color: #db372b ;">

                                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

                                <div class="form-outline mb-4">
                                    <input type="email" id="form2Example18" name="form2Example18" class="form-control form-control-lg" />
                                    <label class="form-label" for="form2Example18">Email address</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="form2Example28" name="form2Example28" class="form-control form-control-lg" />
                                    <label class="form-label" for="form2Example28">Password</label>
                                </div>

                                
 
                                <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                                <p>Don't have an account? <a href="#!" class="link-info">Register here</a></p>

                                <div class="pt-1 mb-4 " id="icon_size" >
                                    <a href="#">
                                        <i class="fs fa-apple ">
                                            
                                        </i>
                                    </a>
                                    <button class="btn btn-info btn-lg btn-block" type="submit" name="submit" value="submit1">Login</button>
                                </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <img src="C:\Users\shrey\Dropbox\PC\Downloads\image1.png" width="80%" alt="img">
            </div>
        </div>
    </div>
</body>

</html>