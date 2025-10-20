<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập Nhật Chất Lượng SP - HQLSX</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <header class="main-header">
      <div class="top-bar">
        <div class="left-section">
          <div class="logo">Logo</div>
          <h1>HỆ THỐNG QUẢN LÝ SẢN XUẤT</h1>
        </div>
        <div class="right-section">
          <button class="icon-btn">?</button> <button class="icon-btn notify">
            B
            <span class="badge"></span>
          </button>
          <div class="user">
            <span>Bộ phận KCS</span> </div>
        </div>
      </div>

      <nav class="nav-bar">
        <button>Trang chủ</button>
        <button>Giới thiệu</button>
        <button>Danh mục</button>
        <button class="logout-btn">Đăng xuất</button>
      </nav>
    </header>

    <div class="page-container">
        <h2>Cập Nhật Tình Trạng Thành Phẩm</h2>
        <hr>

        <div class="main-content">
            
            <div class="left-column">
                <div class="form-box">
                    <h3>Tìm Phiếu Yêu Cầu Kiểm Tra</h3>
                    
                    <div class="form-group">
                        <label for="ma_phieu_yc">Nhập Mã Phiếu Yêu Cầu</label>
                        <input type="text" id="ma_phieu_yc" name="ma_phieu_yc" placeholder="Tìm theo mã...">
                    </div>
                    
                    <button type="button" class="secondary" style="margin-bottom: 20px;">Tìm Kiếm</button>

                    <hr class="form-divider">

                    <h4>Danh Sách Phiếu Chờ Kiểm Tra</h4>
                    <div class="inner-table-wrapper">
                        <table class="inner-table">
                            <thead>
                                <tr>
                                    <th>Mã YC</th>
                                    <th>Sản Phẩm</th>
                                    <th>SL</th>
                                    <th>Xưởng</th>
                                    <th>Chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>YC-001</td>
                                    <td>Sản phẩm A</td>
                                    <td>100</td>
                                    <td>Xưởng 1</td>
                                    <td><button class="select-button">Kiểm tra</button></td>
                                </tr>
                                <tr>
                                    <td>YC-002</td>
                                    <td>Sản phẩm B</td>
                                    <td>250</td>
                                    <td>Xưởng 2</td>
                                    <td><button class="select-button">Kiểm tra</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="right-column">
                <div class="form-box">
                    <h3>Thông Tin Kiểm Tra Chất Lượng</h3>
                    
                    <form action="submit_qc_report.php" method="POST">
                        
                        <div class="form-group">
                            <label>Phiếu Yêu Cầu</label>
                            <input type="text" value="[Mã YC được chọn]" readonly>
                        </div>
                        <div class="form-group">
                            <label>Sản Phẩm</label>
                            <input type="text" value="[Tên sản phẩm]" readonly>
                        </div>
                        
                        <hr class="form-divider">

                        <div class="form-group">
                            <label for="sp_tot">Số Sản Phẩm Tốt *</label>
                            <input type="number" id="sp_tot" name="sp_tot" placeholder="Nhập số lượng tốt..." required>
                        </div>
                        
                        <div class="form-group">
                            <label for="sp_loi">Số Sản Phẩm Lỗi *</label>
                            <input type="number" id="sp_loi" name="sp_loi" placeholder="Nhập số lượng lỗi..." required>
                        </div>
                        
                        <div class="form-group">
                            <label for="ghi_chu">Ghi Chú / Lý Do Lỗi</label>
                            <textarea id="ghi_chu" name="ghi_chu" rows="3" placeholder="Mô tả lý do..."></textarea>
                        </div>

                        <div class="button-group">
                            <button type="submit" class="primary">Xác Nhận</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="table-container">
            <h3>Phiếu Kiểm Tra Chất Lượng Gần Đây</h3>
            <table>
                <thead>
                    <tr>
                        <th>Mã Phiếu KT</th>
                        <th>Mã Yêu Cầu</th>
                        <th>Sản Phẩm</th>
                        <th>SL Tốt</th>
                        <th>SL Lỗi</th>
                        <th>Người Kiểm Tra</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>[Mã KT]</td>
                        <td>[Mã YC]</td>
                        <td>[Tên SP]</td>
                        <td>[Số Lượng]</td>
                        <td>[Số Lượng]</td>
                        <td>[Người KT]</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> </body>
</html>