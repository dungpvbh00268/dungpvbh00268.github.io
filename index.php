<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Card</title>
    <!--font awasome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!--my css file-->
    <link rel="stylesheet" href="style.css">
    <!-- <audio src="We Wish You A Merry Christmas - Crazy Fr.mp3" autoplay="autoplay" loop="loop"></audio> -->
</head>
<body>
    <audio loop autoplay>
        <source src="crazy.mp3">
    </audio>

    <video autoplay muted plays-inline loop>
        <source src="./img/video (2).mp4" type="video/mp4">
    </video>
    <div class="container">
        <button class="call"><i class="fa-solid fa-phone"></i></button>
        <div class="card move">
            <div class="imgbox">
                <img src="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/271605415_1614588432227494_1107124473320678271_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=q17DmQYGZEgAX-s-jc1&_nc_ht=scontent.fhan14-2.fna&oh=00_AfChrOMX9yNgGqOvWwHnmme-EsF2L1M_hhz05fWtRnZ1Yg&oe=63C70A0F" alt="">
            </div>
            <div class="name-job">
                <h3>Phạm Văn Dũng</h3>
                <h5>Web Developer</h5>
            </div>
            <div class="skills">
                <button class="btn-Follow"><a href="https://www.facebook.com/100010290584323">Follow</a></button>
                <button class="btn-Message"><a href="https://www.facebook.com/100010290584323">Message</a>   </button>
            </div>

        </div>
        <div class="icons">
            <div class="icon">
                <i class="fa-brands fa-twitter front"></i>
                <i class="fa-brands fa-twitter back"></i>
                <i class="fa-brands fa-twitter left"></i>
                <i class="fa-brands fa-twitter right"></i>
                <i class="fa-brands fa-twitter top"></i>
                <i class="fa-brands fa-twitter bottom"></i>
            </div>
            <div class="icon">
                <i class="fa-brands fa-youtube front"></i>
                <i class="fa-brands fa-youtube back"></i>
                <i class="fa-brands fa-youtube left"></i>
                <i class="fa-brands fa-youtube right"></i>
                <i class="fa-brands fa-youtube top"></i>
                <i class="fa-brands fa-youtube bottom"></i>
            </div>
            <div class="icon">
                <i class="fa-brands fa-facebook-f front"></i>
                <i class="fa-brands fa-facebook-f back"></i>
                <i class="fa-brands fa-facebook-f left"></i>
                <i class="fa-brands fa-facebook-f right"></i>
                <i class="fa-brands fa-facebook-f top"></i>
                <i class="fa-brands fa-facebook-f bottom"></i>
            </div>
            <div class="icon">
                <i class="fa-brands fa-whatsapp front"></i>
                <i class="fa-brands fa-whatsapp back"></i>
                <i class="fa-brands fa-whatsapp left"></i>
                <i class="fa-brands fa-whatsapp right"></i>
                <i class="fa-brands fa-whatsapp top"></i>
                <i class="fa-brands fa-whatsapp bottom"></i>
            </div>
        </div>
    </div>

    <!-- <audio src="We Wish You A Merry Christmas - Crazy Fr.mp3" autoplay="autoplay" loop="loop"></audio> -->
</body>
</html>
<script>
    var container=document.querySelector('.container')
    var icons=document.querySelector('.icons')
    var call=document.querySelector('.call')
    var body =document.querySelector('body')
    var card=document.querySelector('.card')
    // body.addEventListener('onload',function(){
        setTimeout(function(){
        container.classList.add('move')
    },3000)
    // })
   setTimeout(function(){
    icons.style="opacity: 0"
    call.style="opacity: 0"
   },2000)
   setTimeout(function(){
    card.classList.remove('move')
    icons.style="opacity: 1"
    call.style="opacity: 1"
   },6000)

</script>