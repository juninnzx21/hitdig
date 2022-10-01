<?php 
include './host.php'
;?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon" />
        <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">
        <title>HIT DIG</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <meta name="author" content="Junior Rodrigues">
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css?family=Numans');
            
            
    .html,body {
        background:#262626;
        height: 100%;
        width:100%;
        font-family: 'Numans', sans-serif;
        
    }
            
    section {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 80vh;
    }
    .container {
        height: 100%;
        width:100%;
    }

    .card {
        text-align: center;
        border-radius: 30px;
        position: center;
        height: 500px;
        margin-top: 30px;
        margin-bottom: auto;
        width: 100%;
        background-color: #EA906B !important;
    }


    
    .cnts { 
        border-radius: 30px;
        display: flex;
    }
    .menssagem { 
        display: block;
        
    }
    .input1 {
        border-radius: 8px;
        height: 300px;
        display: block;
        width: 100% ;
        
    }
    
    .input2 {
        border-radius: 8px;
        display: block;
        width: 100%
    }
   
    .input3 {
        width: 100%;
        border-radius: 8px;
    }
   
    .input4 {
        margin-left: 10px;
        margin-right: 10%;
        background-color: #EA906B;
        width: 200px;
        border-radius: 10px;
    }
    .input5 {
        background-color: #EA906B;
        max-width: 200px;
        border-radius: 10px;
    }
    .input6 {
        background-color: #383836;
        max-width: 200px;
        border-radius: 10px;
    }
    
    
   .vv{
    margin-right: 30px;
    margin-top: 40px;
    background-color:;
   }

   .Nnv {
        text-align: center;
        width: 127%;
        border-radius: 10px;
        border-right: 100px;
        margin-left: -70px;
    
   }
   
   .ww {
    margin-top: 40px;
   }
   .tp{
    margin-top: 70px;
   }
    
    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    </script>
    
</head>
   
<header>

    <body >  
        
       
        <div class="tp text-white text-center">
        <a class="navbar-brand" href="<?=base_url()?>">
        <img src="https://static-public.klickpages.com.br/uploads/media/file/3100356/logo---branco.png" class="img-fluid" style="max-height: 80px">
        </a>
            <div class="vv">
            <a class="input4 btn btn-primary" type="submit" href="<?=base_url()?>">INTRODUÇÃO</a>
            <button class="input5 btn btn-primary" type="submit" href="<?=base_url()?>contato.php">CONTATO</button>
        </div>
        </div>
        
        
                
        
        <div class="ww text-white text-center">
          <h1>Contato</h1>
        </div>
       
       <section>
            <div class="card">
                    
                    
                    <div class="card-body">
                        
                        <form class="cnts">      
                            <div class="card-body">
                                <div>
                                    <div class="Nnv form-row  d-flex justify-content-center py-3 ">
                                        <div class=" col-md-5">
                                            <input type="text" class="input3 row form-control is-valid" id="validationServer01" placeholder="Nome"value="" required>
                                        </div>
                                    <div class=" col-md-5">
                                        <input type="text" class="input2 row form-control is-valid" id="validationServer02" placeholder="Email*" value="" required>
                                    </div>
                                    </div>
                                    <div>
                                    <div class="row align-items-end menssagem">
                                        <textarea name="Menssagem"  class="input1 form-control is-valid" id="validationServer02" placeholder="Menssagen*" value="" required></textarea> 
                                    </div class="form-row">
                                </div>
                                    

                                <div class=" container d-flex justify-content-center py-3">
                                    <button class="input6 btn btn-primary" type="submit">ENVIAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
</section> 
</body>
</header>
<footer >
<p class="p-2 ww text-white text-center">© <?= date('Y')?>. Todos os direitos reservados. Junior Rodrigues DEVJUNIOR.</p>
</footer>
</html>