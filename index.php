<?php 
include './host.php'
;?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <link rel="shortcut icon" href="https://static-public.klickpages.com.br/uploads/media/file/3100356/logo---branco.png" type="image/x-icon" />
        <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">
        <title>HIT </title>
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
       
    }

    .card {
        text-align: center;
        border-radius: 30px;
        position: center;
        height: 500px;
        margin-top: 30px;
        margin-bottom: auto;
        width: 40%;
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
        margin-right: 30px;
        background-color: #EA906B;
        width: 200px;
        border-radius: 10px;
    }
    .input5 {
        background-color: #EA906B;
        width: 200px;
        border-radius: 10px;
    }
    .input6 {
        background-color: #383836;
        width: 200px;
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
   
</head>
   
<header>

    <body >  
        
       
        <div class="tp text-white text-center">
        <a class="navbar-brand" href="<?=base_url()?>">
            <img src="https://static-public.klickpages.com.br/uploads/media/file/3100356/logo---branco.png" class="img-fluid" style="max-height: 80px">
        </a>
            <div class="vv">
            <a class="input4 btn btn-primary" type="submit" href="<?=base_url()?> ">INTRODUÇÃO</a>
            <a class="input4 btn btn-primary" type="submit" href="<?=base_url()?>contato.php">CONTATO</a>
           
        </div>
        </div>
        
        
                
        
        <div class="ww text-white text-center">
          <h1>Contato</h1>
        </div>
       
       <section>
            <div class="card">
               <div>                        
                    <h3>
                        Why do we use it? 
                    </h3>
                    <a>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                    </a>
                </div>
                <div>
                    <h3>
                        Where can I get some?
                    </h3>
                    <a>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. 
                    /a>
                </div> 
            </div>
        </section> 
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    
    
</body>
</header>
<footer >
<p class="p-2 ww text-white text-center">© <?= date('Y')?>. Todos os direitos reservados. Junior Rodrigues DEVJUNIOR.</p>
</footer>

</html>