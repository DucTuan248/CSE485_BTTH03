<body>
    <div class="container mt-5">
        <h1>Thêm mới sách</h1>
        <form action="index.php?action=save" method="POST">
            <div class="form-group">
                <label for="tenSach">Tên sách:</label>
                <input type="text" class="form-control" id="tenSach" name="tenSach">
            </div>
            <div class="form-group">
                <label for="namXuatBan">Năm xuất bản:</label>
                <input type="number" class="form-control" id="namXuatBan" name="namXuatBan">
            </div>
            <div class="form-group">
                <label for="idTacGia">Tác giả:</label>
                <select class="form-control" id="idTacGia" name="idTacGia">
                    <?php foreach ($authors as $author): ?>
                    <option value="<?php echo $author['id']; ?>"><?php echo $author['tenTacGia']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
            <a href="booklist.php" class="btn btn-secondary">Hủy</a>
        </form>
    </div>
</body>
</html>