
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
        height: 90vh;
    }
    .container {
        height: 100%;
        width:100%;
    }
    .card1 {
        background-color: #2E2E2E;
        width: 123px;
        height:3px;
        border-radius: 30px;
    }
    .barr2 {
        margin:-1px 0px -1px 50px;
        text:center;
        background-color: #E67952;
        width: 20px;
        height:6px;
    }
    
    .card {
        text-align: center;
        border-radius: 30px;
        position: center;
        height:404px;
        margin-top: 30px;
        margin-bottom: auto;
        width: 680px;
        max-width:100%;
        background-color: #EA906B !important;
    }


    
    .cnts { 
        border-radius: 30px;
        display: flex;
    }
   
    .input1 {
        border-radius: 10px;
        height: 200px;
        width: 600px ;
        margin-left:34px;
      
    }
    .input2 {
        margin-left:19px;
        height:46px;
        width: 290px;
        border-radius: 8px;
    }

   
    .input3 {
        margin-right:10px;
        margin-left:3px;
        height:46px;
        width: 290px;
        border-radius: 8px;
    }
   
    .input4 {
        font-size: 100%;
        margin:0px 5px 0px 5px;
        background-color: #EA906B;
        height:40;
        width:200px;
        border-radius: 10px;
    }
     
    
    .input6 {
        background-color: #383836;
        width: 160px;
        height: 40px;
        border-radius: 10px;
    }
    
    
   .vv{
    margin-top: 40px;
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
   @media screen and (max-width:769px){
    .input2 {
        margin-left:19px;
        margin-right:19px;
        height:46px;
        width: 94%;
        border-radius: 8px;
    }
    .input3 {
        margin-left:19px;
        margin-right:19px;
        height:46px;
        width: 94%;
        border-radius: 8px;
    }
    .input1 {
        margin-left:33px;
        margin-right:5%;
        width: 95%;
        height: 200px;
        border-radius: 8px;
    }
    
    .input6 {
        background-color: #383836;
        width: 35%;
        height: 40px;
        border-radius: 10px;
    }
    
    
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
        <a class="navbar-brand" href="#">
        <img src="https://static-public.klickpages.com.br/uploads/media/file/3100356/logo---branco.png" class="img-fluid" style="max-height: 80px">
        </a>
            <div class="vv">
               
            <a class="input4 btn btn-primary" type="submit" href="index.php">INTRODUÇÃO</a>
            <a class="input4 btn btn-primary" type="submit" href="index.phpcontato.php">CONTATO</a>
                
        </div>
        </div>
        
        
                
        
        <div class="ww text-white text-center">
          <h4>CONTATO</h4>
        </div>
       <div class="d-flex justify-content-center ">
        <div class="card1">
            <div class="barr2 justify-content-center">
                
            </div>
        </div>
        </div>
       
       <section>
            <div class="card">
                <form >      
                    <div class="card-body">
                        <div>
                            <div class="form-row  d-flex justify-content-center py-3 ">
                                <div class=" col-md-6">
                                    <input  type="text" class="input2 row form-control is-valid" id="validationServer01" placeholder="Nome"value="" required="">   
                                </div>
                                <div class=" col-md-6">
                                    <input  type="text" class="input3 row form-control is-valid" id="validationServer01" placeholder="E-mail"value="" required="">   
                                </div>
                            </div>  
                        </div>
                        <div class="row align-items-end menssagem">
                            <textarea name="Menssagem"  class="input1 form-control is-valid" id="validationServer02" placeholder="Menssagen*" value="" required=""></textarea> 
                        </div class="form-row">
                        <div class=" container justify-content-center py-3">
                            <button class="input6  btn btn-primary">ENVIAR</button>
                        <div>                           
                        </div>
                    </div>
                </form>
            </div>
</section> 
</body>
</header>
<footer >
<p class="p-2 ww text-white text-center">© <?= date('Y')?>. Todos os direitos reservados. Junior Rodrigues DEVJUNIOR.</p>
</footer>
</html>
