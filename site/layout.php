<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Online Shopping Center</title>
        <script src="<?=$CONTENT_URL?>/js/jquery.min.js"></script>
        
        <script src="<?=$CONTENT_URL?>/js/bootstrap.min.js"></script>
        <link href="<?=$CONTENT_URL?>/css/bootstrap.min.css" rel="stylesheet"/>
        
        <link href="<?=$CONTENT_URL?>/css/jquery-ui.min.css" rel="stylesheet"/>
        <script src="<?=$CONTENT_URL?>/js/jquery-ui.min.js"></script>
        
        <script>
        $(function (){
            $(".datepicker").datepicker({dateFormat:'yy-mm-dd'});
        });
        </script>
    </head>
    <style>
    footer
{
    border-top: 5px double orangered;
    line-height: 50px;
    background-color: black;
    font-variant: normal;
    text-align: center;
    clear: both;
    height: 350px;
   display: flex;
   flex-direction: row;
}

footer div
{    
    width: 30%;
    margin: 0 auto;
    padding: 2px;
    font-size: large;
    text-align: center;
    color: gray;
}
iframe
{
   border-radius: 2px;
    border: 2px solid yellow;
}
.oki
{
 color: white;
 font-size: 20px;
}
    </style>
    <body>
        <div class="container">
            <header class="row">
                <h1 class="alert alert-success">SIÊU THỊ TRỰC TUYẾN</h1>
            </header>
            <nav class="row">
                <?php require 'layout/menu.php';?>            
            </nav>
            <div class="row">
                <article class="col-sm-9">
                    <div class="row">
                    <?php
                        require $VIEW_NAME;
                    ?>  
                    </div>
                </article>
                <aside class="col-sm-3">
                    <!--LOGIN-->
                    <?php require 'layout/dang-nhap.php';?>
                    <!--CATALOG-->
                    <?php require 'layout/loai-hang.php';?>
                    <!--FAVORITE-->
                    <?php require 'layout/top10.php';?>
                </aside>
            </div>
            <footer class="row">
                 <div>
                <h4>Dự án mẫu</h4>
                <p class="oki">
                 Nguyễn Hoàng Minh <br>
                 MSSSV:PS26243
                </p>
               </div>
               <div>
                 <p class="oki">Fanpage</p>
                 <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100086684102361&tabs=timeline&width=300&height=250&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
               </div>
               <div>
                  <p class="oki">Địa Chỉ</p>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.79775800028!2d106.62615161471814!3d10.750064492339423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752c2ab06fc7b7%3A0x50a4eefae0a2deca!2sGalaxy%20Kinh%20Duong%20Vuong!5e0!3m2!1sen!2s!4v1664947113882!5m2!1sen!2s" width="300" height="250" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
            </footer>
        </div>
    </body>
</html>
