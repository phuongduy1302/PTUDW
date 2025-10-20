<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghi Nhận Sản Phẩm - HQLSX</title>
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
            U
            <span>Quản lý xưởng A</span> </div>
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
        <h2>Ghi Nhận Sản Phẩm Theo Ngày</h2>
        <hr>

        <div class="main-content">
            
            <div class="left-column">
                <div class="form-box">
                    <h3>Nhập Thông Tin Ghi Nhận</h3>
                    
                    <form action="submit_log.php" method="POST">
                        
                        <div class="form-group">
                            <label for="ten_xuong">Xưởng Ghi Nhận</label>
                            <input type="text" id="ten_xuong" name="ten_xuong" value="Xưởng A" readonly>
                        </div>
                        
                        <div class="form-group">
                            <label for="ngay_ghi_nhan">Ngày Ghi Nhận</label>
                            <input type="date" id="ngay_ghi_nhan" name="ngay_ghi_nhan" value="<?php echo date('Y-m-d'); ?>" readonly>
                        </div>
                        
                        <hr class="form-divider">

                        <div class="form-group">
                            <label for="san_pham">Chọn Sản Phẩm *</label>
                            <select id="san_pham" name="san_pham" required>
                                <option value="">-- Chọn sản phẩm đã hoàn thành --</option>
                                <option value="sp_a">Sản phẩm A (DH-2025-001)</option>
                                <option value="sp_b">Sản phẩm B (DH-2025-002)</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="so_luong">Số Lượng Hoàn Thành *</label>
                            <input type="number" id="so_luong" name="so_luong" placeholder="Nhập số lượng..." min="1" required>
                        </div>

                        <div class="button-group">
                            <button type="submit" class="primary">Ghi Nhận</button>
                            <button type="reset" class="secondary">Nhập Lại</button>
                        </div>

                    </form>
                </div>
            </div>

            <div class="right-column">
                <div class="info-box">
                    <h3>Thông Tin Ghi Nhận (Hôm Nay)</h3>
                    <p>Tổng số phiếu đã ghi nhận: <strong>[Số liệu]</strong></p>
                    <p>Tổng sản lượng đã ghi nhận: <strong>[Số liệu]</strong></p>
                </div>
            </div>

        </div>

        <div class="table-container">
            <h3>Danh Sách Ghi Nhận Gần Đây</h3>
            <table>
                <thead>
                    <tr>
                        <th>Mã Phiếu</th>
                        <th>Sản Phẩm</th>
                        <th>Số Lượng</th>
                        <th>Xưởng</th>
                        <th>Ngày Ghi Nhận</th>
                        <th>Người Ghi Nhận</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>[Mã Phiếu]</td>
                        <td>[Tên Sản Phẩm]</td>
                        <td>[Số Lượng]</td>
                        <td>[Xưởng]</td>
                        <td>[Ngày]</td>
                        <td>[Người Ghi Nhận]</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div> </body>
</html>