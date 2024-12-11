<div id="main">
                <div class ="history">
                    <p>history</p>
                </div>
                <?php
                if(isset($_GET['quanly'])){
                    $tam = $_GET['quanly'];
                }
                else{
                    $tam ='';
                }
                if($tam=='theloai'){
                    include("main/theloai.php");
                }
                elseif($tam=='lichsu'){
                    include("main/lichsu.php");
                }
                elseif($tam=='theodoi'){
                    include("main/theodoi.php");
                }
                elseif($tam=='yeuthich'){
                    include("main/yeuthich.php");
                }
                elseif($tam=='timkiem'){
                    include("main/timkiem.php");
                }
                elseif($tam=='dangnhap'){
                    include("main/dangnhap.php");
                }
                else{
                    include("main/Index.php");
                }
                ?> 
            </div>