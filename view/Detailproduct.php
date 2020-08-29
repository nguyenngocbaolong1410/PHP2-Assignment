<script>
    function Clords(){document.getElementById("nhanxet").style.display = "none";document.getElementById("motaa").style.display = "block";document.getElementById("motas").style.borderBottom= "0px solid rgb(145, 144, 144)";document.getElementById("nhanxetss").style.borderBottom= "1px solid rgb(145, 144, 144)";}
    function Clorss(){document.getElementById("motaa").style.display = "none";document.getElementById("nhanxet").style.display = "block";document.getElementById("nhanxetss").style.borderBottom = "0px solid rgb(145, 144, 144)";document.getElementById("motas").style.borderBottom= "1px solid rgb(145, 144, 144)";}
</script>
<div class="main sp-main-product">
    <div class="Catalog-mini-left">
    <?php require '../view/Catalog-mini-left.php'; ?>
    </div>
    <div class="show-pro Dshop">
        <div class="Img-Detail-Shop">
            <img src="../content/images/Logo-test.png" alt="">
        </div>
        <div class="Main-Name-Shop">
            <h1>ProDuct Name Demo </h1>
        </div>
        <div class="Price-Detail-PD">
            <p>120.000.000 VND</p>
        </div>
        <div class="scoll-RD">
            <input class="btn btn-outline-primary" type="number" name="quantity" id="" max="20" min="1" value="1">
        </div>
        <a href="">
            <div class="buy-it-RD">
                <h1>Mua hàng</h1>
            </div>
        </a>

        <div class="info-RD-DT">
            <button onclick="Clords()" class="text-RD-DT-MArgin text-RD-DT" id="motas">
                <h4>Mô tả</h4>
            </button>
            <div class="Z-dex Main-text-DT" id="motaa">
                <div class="box-text-DT">
                    <h5>Mô tả</h5>
                    <p>với hai thế mạnh chính là chuyên sâu về thiết kế nội thất và sản xuất thi công trực tiếp các công trình. Chúng tôi luôn mang đến
                         những giải pháp bố trí không gian thông minh nhất cùng tính thẩm mỹ cao nhất cho các khách hàng của mình bằng
                         sự hăng say với nghề mà tại BOXROOM, chúng tôi gọi là “Mang nghệ thuật vào không gian sống”</p>
                </div>
            </div>
            <!--Bình luận-->
            <button onclick="Clorss()" class="text-RD-DT-MarginII text-RD-DT" id="nhanxetss">
                <h4>Nhận xét</h4>
            </button>
            <div class="Main-text-DT NX-DT" id="nhanxet">
               <!-- Nội dung bình luận Add vào PHP để nó thêm tự động -->
               <div class="box-text-DT">
                    <h5>Nhận xét</h5>
                    <!-- Nội dung bình luận -->
                    <div class="content-BL">
                        <h6>NAME ABC[ Tên người nhận xét ]</h6>
                        <p>với hai thế mạnh chính là chuyên sâu về thiết kế nội thất và sản xuất thi công trực tiếp các công trình. Chúng tôi luôn mang đến
                            những giải pháp bố trí không gian thông minh nhất cùng tính thẩm mỹ cao nhất cho các khách hàng của mình bằng
                            sự hăng say với nghề mà tại BOXROOM, chúng tôi gọi là “Mang nghệ thuật vào không gian sống”</p>
                    </div>
                    <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                </div>
                 <!--Ghi Bình luận-->
                <div class="box-Comm-DT">
                    <form action="">
                        <div class="form-group">
                            <label><h4>Nội dung</h4></label>
                            <textarea required="" name="content" class="form-control" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btndanger">Đăng</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Phần dưới này m muốn Show item thì show nha -->
        
    </div>
</div>