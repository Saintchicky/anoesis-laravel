<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouveau Contact</title>
</head>
<body>

    <div class="container">
        <div class="mail">
            <div class="title">
                <h3>Vous avez un nouveau message !</h3>
            </div>
            <br>
            <div class="msg">
                {{$bodyMessage}}
            </div>
            <div class="infos">
                    <div class="nomEmail">
                        <p>Son nom et prénom: {{$name}}</p>
                        <p>Envoyé par: {{$email}}</p>
                    </div>
                </div>  
            
            <br>
        </div>
    </div>

</body>

<style>
    .container{
        display: flex;
        justify-content: center;
    }


    .mail{
        border: solid black 5px;
        width: 100%;
        display:flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        margin-top: 100px;
        border-radius: 15px 15px 15px 15px;
        box-shadow: 10px 10px 30px 0px rgba(0,0,0,0.75);
    }

    
    .infos{
        display: flex;
        width: 100%;
        justify-content: space-around;
    }



</style>
</html>
