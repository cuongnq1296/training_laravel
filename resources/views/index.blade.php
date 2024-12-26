<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
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
                Dashboard
            </span>
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
        <div class="overview">
            <div>
                <p style="font-size: 12px; font-weight: bold;">Tổng số sản phẩm</p>
                <p style="font-size: 18px; color: #1A73E8; font-weight: bold; margin-top: 5px;">4</p>
            </div>
            <div>
                <p style="font-size: 12px; font-weight: bold;">Tổng giá trị</p>
                <p style="font-size: 18px; color: #1A73E8; font-weight: bold; margin-top: 5px;">464.880.000 VNĐ
                </p>
            </div>
            <div>
                <p style="font-size: 12px; font-weight: bold;">Sản phẩm hết hàng</p>
                <p style="font-size: 18px; color: #1A73E8; font-weight: bold; margin-top: 5px;">0</p>
            </div>
        </div>

        <div class="form">
            <h3 style="font-weight: bold; margin-bottom: 10px">Thêm Sản Phẩm Mới</h3>
            <form action="#" id="add-form">
                <div>
                    <div class="group-input">
                        <label for="name">Tên sản phẩm:</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="group-input">
                        <label for="price">Giá (VNĐ):</label>
                        <input type="number" id="price" name="price">
                    </div>
                    <div class="group-input">
                        <label for="quantity">Số lượng:</label>
                        <input type="number" id="quantity" name="quantity">
                    </div>
                    <div class="group-input">
                        <label for="category">Danh mục:</label>
                        <select name="category" id="category">
                            <option value="0" selected>Chọn danh mục</option>
                            <option value="1">Laptop</option>
                            <option value="2">Điện thoại</option>
                            <option value="3">Máy tính bảng</option>
                            <option value="4">Phụ kiện</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="button button-add">Thêm
                    sản phẩm</button>
            </form>
        </div>
        <div style="overflow-x: auto;">
            <table>
                <tr>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Danh mục</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
                <tr style="border-top: 1px solid #ddd;">
                    <td>
                        <img src="https://cdn.tgdd.vn/Products/Images/44/231244/grey-1-750x500.jpg" alt="Laptop"
                            style="height: 40px;">
                    </td>
                    <td>Laptop Dell XPS 13</td>
                    <td>Laptop</td>
                    <td>25.000.000 VNĐ</td>
                    <td>10</td>
                    <td>
                        <p class="badge">Còn
                            hàng</p>
                    </td>
                    <td>
                        <div style="display: flex; justify-content: start; align-items: center;">
                            <a href="./edit.html" class="button button-edit"
                                style="text-decoration: none; margin: 0 5px;">Sửa</a>
                            <a href="#" class="button button-delete"
                                style="text-decoration: none; margin: 0 5px;">Xóa</a>
                        </div>
                    </td>
                </tr>
                <tr style="border-top: 1px solid #ddd;">
                    <td>
                        <img src="https://cdnv2.tgdd.vn/mwg-static/tgdd/Products/Images/42/329149/iphone-16-pro-max-titan-sa-mac-1-638638962337813406-750x500.jpg"
                            alt="Laptop" style="height: 40px;">
                    </td>
                    <td>Iphone 16 Pro</td>
                    <td>Điện thoại</td>
                    <td>10.000.000 VNĐ</td>
                    <td>5</td>
                    <td>
                        <p class="badge">Còn
                            hàng</p>
                    </td>
                    <td>
                        <div style="display: flex; justify-content: start; align-items: center;">
                            <a href="./edit.html" class="button button-edit"
                                style="text-decoration: none; margin: 0 5px;">Sửa</a>
                            <a href="#" class="button button-delete"
                                style="text-decoration: none; margin: 0 5px;">Xóa</a>
                        </div>
                    </td>
                </tr>
                <tr style="border-top: 1px solid #ddd;">
                    <td>
                        <img src="https://cdnv2.tgdd.vn/mwg-static/common/Campaign/4f/c5/4fc550f4d52194a9a133afa987a9668a.png"
                            alt="Laptop" style="height: 40px;">
                    </td>
                    <td>Ipad M1 156GB</td>
                    <td>Máy tính bảng</td>
                    <td>15.000.000 VNĐ</td>
                    <td>5</td>
                    <td>
                        <p class="badge">Còn
                            hàng</p>
                    </td>
                    <td>
                        <div style="display: flex; justify-content: start; align-items: center;">
                            <a href="./edit.html" class="button button-edit"
                                style="text-decoration: none; margin: 0 5px;">Sửa</a>
                            <a href="#" class="button button-delete"
                                style="text-decoration: none; margin: 0 5px;">Xóa</a>
                        </div>
                    </td>
                </tr>
                <tr style="border-top: 1px solid #ddd;">
                    <td>
                        <img src="https://cdnv2.tgdd.vn/mwg-static/tgdd/Products/Images/9499/330020/adapter-sac-2-cong-usb-type-c-iq3-20w-anker-a2348-trang-2-638622760507471378-750x500.jpg"
                            alt="Laptop" style="height: 40px;">
                    </td>
                    <td>Củ sạc Anker 30W Nano 3 PD Type-C</td>
                    <td>Phụ kiện</td>
                    <td>240.000 VNĐ</td>
                    <td>10</td>
                    <td>
                        <p class="badge">Còn
                            hàng</p>
                    </td>
                    <td>
                        <div style="display: flex; justify-content: start; align-items: center;">
                            <a href="./edit.html" class="button button-edit"
                                style="text-decoration: none; margin: 0 5px;">Sửa</a>
                            <a href="#" class="button button-delete"
                                style="text-decoration: none; margin: 0 5px;">Xóa</a>
                        </div>
                    </td>
                </tr>
            </table>
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
