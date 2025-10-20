<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Messagebox Đăng Xuất</title>
    <style>
        /* CSS cho hộp thoại (modal) */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f0f0f0; /* Nền mờ để demo */
        }

        /* Lớp phủ nền mờ */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Màu đen mờ */
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        /* Hộp thoại */
        .modal-box {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 400px;
            max-width: 90%;
            overflow: hidden; /* Để bo góc header */
        }

        /* Header của hộp thoại */
        .modal-header {
            background-color: #f7f7f7;
            padding: 15px 20px;
            border-bottom: 1px solid #ddd;
        }
        .modal-header h4 {
            margin: 0;
            font-size: 1.2em;
            color: #333;
        }

        /* Nội dung hộp thoại */
        .modal-body {
            padding: 25px 20px;
            font-size: 1.1em;
            line-height: 1.6;
            color: #555;
        }

        /* Chân hộp thoại (chứa nút bấm) */
        .modal-footer {
            background-color: #f7f7f7;
            padding: 15px 20px;
            border-top: 1px solid #ddd;
            text-align: right; /* Căn phải các nút */
        }

        /* Nút bấm trong modal */
        .modal-button {
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.95em;
            font-weight: 600;
            margin-left: 10px;
        }

        /* Nút Hủy (màu xám) */
        .modal-button.cancel {
            background-color: #6c757d;
            color: white;
        }
        .modal-button.cancel:hover {
            background-color: #5a6268;
        }

        /* Nút Đồng ý/Đăng xuất (màu đỏ) */
        .modal-button.confirm {
            background-color: #dc3545;
            color: white;
        }
        .modal-button.confirm:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

    <div class="modal-overlay">
        <div class="modal-box">
            <div class="modal-header">
                <h4>Xác Nhận Đăng Xuất</h4>
            </div>
            <div class="modal-body">
                <p>Bạn có chắc chắn đăng xuất không?</p>
            </div>
            <div class="modal-footer">
                <button class="modal-button cancel">Hủy</button>
                <button class="modal-button confirm">Đồng ý</button>
            </div>
        </div>
    </div>

</body>
</html>