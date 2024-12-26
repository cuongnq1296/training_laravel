<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./style/edit.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-color: #F0F2F5; width: 100%;">
    <header style="box-shadow: 0px 2px 3px rgba(192, 192, 192, 0.747); padding: 5px 0;">
        <div class="header-left" style="cursor: pointer;">
            <img src="https://fonts.gstatic.com/s/e/notoemoji/15.1/1f6cd/512.png=s20" alt="Admin Dashboard"
                class="img-md">
            <span style="font-weight: bold; color: #1A73E8; margin: 0 10px;">Admin
                Dashboard</span>
        </div>
        <div>
            <ul id="menu-header">
                <li class="item" style="margin: 0 5px;">
                    <img src="https://fonts.gstatic.com/s/e/notoemoji/15.1/1f3e0/512.png=s20" alt="Trang chủ">
                    <a href="#">Trang chủ</a>
                </li>
                <li class="item" style="margin: 0 5px;">
                    <img src="https://fonts.gstatic.com/s/e/notoemoji/15.1/1f3e0/512.png=s20" alt="Thống kê">
                    <a href="#">Thống kê</a>
                </li>
                <li class="item" style="margin: 0 5px;">
                    <img src="https://fonts.gstatic.com/s/e/notoemoji/15.1/2699_fe0f/512.png=s20" alt="Cài đặt">
                    <a href="#">Cài đặt</a>
                </li>
            </ul>
        </div>
    </header>

    <main class="container">
        <div class="box-edit">
            <div class="box-edit-content">
                <h2>Sửa sản phẩm</h2>
                <a href="./index.html">
                    <i class="fa-solid fa-arrow-left-long" style="margin-right: 7px;"></i>
                    <span>Quay lại</span></a>
            </div>
            <div class="box-edit-body">
                <form action="#" id="form-edit">
                    <div class="item-image">
                        <label for="image">Ảnh hiện tại: </label>
                        <img src="https://cdn.tgdd.vn/Products/Images/44/231244/grey-1-750x500.jpg" alt="Laptop"
                            style="height: 60px;">
                    </div>
                    <div class="item-data">
                        <div class="group-input">
                            <label for="name">Tên sản phẩm:</label>
                            <input type="text" id="name" name="name" value="Laptop Dell XPS 13">
                        </div>
                        <div class="group-input">
                            <label for="price">Giá (VNĐ):</label>
                            <input type="number" id="price" name="price" value="25000000">
                        </div>
                        <div class="group-input">
                            <label for="quantity">Số lượng:</label>
                            <input type="number" id="quantity" name="quantity" value="10">
                        </div>
                        <div class="group-input">
                            <label for="category">Danh mục:</label>
                            <select name="category" id="category">
                                <option value="0">Chọn danh mục</option>
                                <option value="1" selected>Laptop</option>
                                <option value="2">Điện thoại</option>
                                <option value="3">Máy tính bảng</option>
                                <option value="4">Phụ kiện</option>
                            </select>
                        </div>
                    </div>
                    <div class="item-submit">
                        <a href="./index.html" style="text-decoration: none; margin-right: 10px;"
                            class="button button-cancel">Hủy</a>
                        <button type="button" class="button button-edit">Cập nhật sản phẩm</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <p style="margin-bottom: 15px;">© 2023 Training Store. All rights reserved.</p>
        <ul id="footer-list">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </footer>
</body>

</html>