<html>
    <head>
    <link rel="stylesheet" href="/public/css/bootstrap.css">
        <style>
            #content a img {
                //background-image: url('');
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -225px; /* Отрицательный отступ от верхнего края страницы, должен равняться половине высоты блока со знаком минус */
                margin-left: -225px;
                width: 450px;
                height: 450px;
                animation-duration: 3s;
                animation-name: bounceIn;
            }
            @keyframes bounceIn {
                0% {
                    transform: scale(0.1);
                    opacity: 0;
                }
                60% {
                    transform: scale(1.2);
                    opacity: 1;
                }
                100% {
                    transform: scale(1);
                }
            }
        </style>
    </head>
<body>
    <div class="container container-fluid">
        <div id="content">
            <a href="/main/"><img src="/public/img/brand_content.png"></a>
        </div>
    </div>
<script type="application/javascript" src="/public/js/jquery.js"></script>
<script type="application/javascript" src="/public/js/bootstrap.min.js"></script>
<script>

</script>
</body>
</html>