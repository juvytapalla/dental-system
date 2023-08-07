<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="intro"> 
        <div class="logo-header">
        <img class="logo" src="img/logo2.png">
        </div>
    </div>
</body>
</html>
<script>
    let intro = document.querySelector('.intro');
    let logo = document.querySelector('.logo-header');
    let logoSpan = document.querySelectorAll('.logo');

    window.addEventListener('DOMContentLoaded', ()=> {

        setTimeout( ()=> {

            logoSpan.forEach((span,idx) =>{
                setTimeout(()=>{
                    span.classList.add('active');
                }, (idx + 1) * 400)
            });
            setTimeout( ()=> {
                logoSpan.forEach((span,idx) =>{

                    setTimeout(()=>{
                        span.classList.remove('active');
                        span.classList.add('fade');
                    }, (idx + 1) *50)
                })
            },2000);

            setTimeout(()=>{
                intro.style.top='-100vh';
            },2300)
        })
    })

</script>   
<style>
    *{
        margin: 0;
        padding:0;
        box-sizing: border-box;
        font-family:'Roboto', sans-serif;
    }
.logo-header {
    color: #FFFFFF;
    position: absolute;
    left:50%;
    top:50%;
    transform: translate(-50%, -50%);
    font-size: 30px;
}
.intro{
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width:100%;
    height:100vh;
    background-color:#47B5FF;
    transition:1s; 
}
.logo{
    position: relative;
    display: inline-block;
    height: 130px;
    width: 130px ;
    opacity:0;
}
.logo.active {
    bottom:0;
    opacity:1;
    transition: ease-in-out 0.5s;
}
.logo.fade {
    bottom: 150px;
    opacity:0;
    transition: ease-in-out 0.5s;
}

</style>