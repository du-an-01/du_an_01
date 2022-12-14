<?php include_once 'header.php' ?>
<style>
    .footer {
        margin-top: 140px;
    }
</style>
<div class="header__collections">
    <a href="?ctr=home">Trang chủ / </a>
    <span style="margin-left: 5px;">Giày đá bóng nam</span>
</div>
<div class="header__danhmuc">
    <h1>Giày Đá Bóng Nam</h1>
</div>
<div class="header__categoryCollection">
    <ul class="header__listCategoryCollection">
        <li>
            <a href="">NAM</a>
            <a href=""><i class='bx bx-chevron-down'></i></a>
        </li>
        <li>
            <a href="">NỮ</a>
            <a href=""><i class='bx bx-chevron-down'></i></a>
        </li>
        <li>
            <a href="">TRẺ EM</a>
            <a href=""><i class='bx bx-chevron-down'></i></a>
        </li>
        <li>
            <a href="">THỂ THAO</a>
            <a href=""><i class='bx bx-chevron-down'></i></a>
        </li>
        <li>
            <a href="">CÁC NHÃN HIỆU</a>
            <a href=""><i class='bx bx-chevron-down'></i></a>
        </li>
    </ul>
    <select name="" id="">
        <option value="">Mới nhất</option>
        <option value="">Sản phẩm nổi bật</option>
        <option value="">Giá: Tăng dần</option>
        <option value="">Giá: Giảm dần</option>
        <option value="">Giá: Tên A-Z</option>
        <option value="">Giá: Tên Z-A</option>
        <option value="">Cũ nhất</option>
        <option value="">Bán chạy nhất</option>
    </select>
</div>
<div class="main__listProduct" style="margin-top: 20px;">
    <?php for ($i = 0; $i < 12; $i++) : ?>
        <div class="main__product">
            <a href=""><img src="/public/images/img_client/shoes_soccer_07.png" alt="" class="img_product"></a>
            <div class="title_product">BÓNG ĐÁ FIFA QUALITY PRO SEA GAMES 31 UHV 2.07</div>
            <div href="" class="price_product">2,250,000<sup><u>đ</u></sup></div>
            <div class="main__btn">
                <button class="btn-add">Thêm vào giỏ</button>
                <button class="btn-buy">Mua ngay</button>
            </div>
        </div>
    <?php endfor; ?>
</div>
<?php include_once 'footer.php' ?>