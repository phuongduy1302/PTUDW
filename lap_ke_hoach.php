<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lập Kế Hoạch Sản Xuất - HQLSX</title>
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
            <span>Tên nhân viên</span> </div>
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
        <h2>Lập Kế Hoạch Sản Xuất</h2>
        <hr>

        <div class="main-content">
            
            <div class="left-column">
                <div class="form-box">
                    <h3>Nhập Thông Tin Kế Hoạch</h3>
                    
                    <form action="submit_plan.php" method="POST">
                        
                        <div class="form-group">
                            <label for="don_hang_sx">Chọn Đơn Hàng Sản Xuất *</label>
                            <input list="don_hang_list" id="don_hang_sx" name="don_hang_sx" placeholder="Nhập mã hoặc tên đơn hàng để tìm..." required>
                            <datalist id="don_hang_list">
                                <option value="DH-2025-001 - Sản xuất Bàn Gỗ">
                                <option value="DH-2025-002 - Sản xuất Ghế Văn Phòng">
                            </datalist>
                        </div>

                        <div class="form-group date-range">
                            <div>
                                <label for="ngay_bat_dau">Ngày Bắt Đầu *</label>
                                <input type="date" id="ngay_bat_dau" name="ngay_bat_dau" required>
                            </div>
                            <span>đến</span>
                            <div>
                                <label for="ngay_ket_thuc">Ngày Kết Thúc *</label>
                                <input type="date" id="ngay_ket_thuc" name="ngay_ket_thuc" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="san_pham">Chọn Sản Phẩm *</label>
                            <select id="san_pham" name="san_pham" required>
                                <option value="">-- Chọn sản phẩm --</option>
                                <option value="sp_a">Sản phẩm A</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="so_luong">Số Lượng Sản Phẩm *</label>
                            <input type="number" id="so_luong" name="so_luong" placeholder="Nhập số lượng..." required>
                        </div>

                        <div class="form-group">
                            <label for="xuong_phan_cong">Xưởng Phân Công *</label>
                            <select id="xuong_phan_cong" name="xuong_phan_cong" required>
                                <option value="">-- Chọn xưởng --</option>
                                <option value="xuong_1">Xưởng 1</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nguyên Vật Liệu & Số Lượng *</label>
                            <div id="nvl-container">
                                <div class="nvl-row">
                                    <input type="text" name="nguyen_vat_lieu[ma_nvl][]" placeholder="Nhập Mã NVL..." required>
                                    <input type="number" name="nguyen_vat_lieu[so_luong][]" placeholder="Số lượng..." required>
                                    <button type="button" class="remove-nvl-btn">&times;</button>
                                </div>
                            </div>
                            <button type="button" id="add-nvl-btn" class="secondary add-button">+ Thêm Nguyên Vật Liệu</button>
                        </div>
                        
                        <div class="button-group">
                            <button type="submit" class="primary">Lập Kế Hoạch</button>
                            <button type="reset" class="secondary">Đặt Lại</button>
                        </div>

                    </form>
                </div>
            </div>

            <div class="right-column">
                <div class="info-box">
                    <h3>Thông Tin Kế Hoạch</h3>
                    <p>Tổng số kế hoạch đã tạo: <strong>[Số liệu]</strong></p>
                    <p>Kế hoạch đang chờ duyệt: <strong>[Số liệu]</strong></p>
                </div>
            </div>

        </div>

        <div class="table-container">
            <h3>Danh Sách Kế Hoạch Gần Đây</h3>
            <table>
                <thead>
                    <tr>
                        <th>Mã KH</th>
                        <th>Tên Kế Hoạch</th>
                        <th>Sản Phẩm</th>
                        <th>Ngày Bắt Đầu</th>
                        <th>Người Tạo</th>
                        <th>Trạng Thái</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>[Mã KH]</td><td>[Tên Kế Hoạch]</td><td>[Sản Phẩm]</td><td>[Ngày Bắt Đầu]</td><td>[Người Tạo]</td><td>[Trạng Thái]</td></tr>
                </tbody>
            </table>
        </div>

    </div> <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('add-nvl-btn').addEventListener('click', function() {
                var container = document.getElementById('nvl-container');
                var newRow = document.createElement('div');
                newRow.className = 'nvl-row';
                newRow.innerHTML = `
                    <input type="text" name="nguyen_vat_lieu[ma_nvl][]" placeholder="Nhập Mã NVL..." required>
                    <input type="number" name="nguyen_vat_lieu[so_luong][]" placeholder="Số lượng..." required>
                    <button type="button" class="remove-nvl-btn">&times;</button>
                `;
                container.appendChild(newRow);
            });
            document.getElementById('nvl-container').addEventListener('click', function(e) {
                if (e.target && e.target.classList.contains('remove-nvl-btn')) {
                    if (document.getElementById('nvl-container').getElementsByClassName('nvl-row').length > 1) {
                        e.target.closest('.nvl-row').remove();
                    } else {
                        alert('Phải có ít nhất một nguyên vật liệu.');
                    }
                }
            });
        });
    </script>
</body>
</html>