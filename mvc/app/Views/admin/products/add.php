<form action="<?= ROOT_PATH ?>product/create" method="post" enctype="multipart/form-data">
    Tên sản phẩm:
    <input type="text" name="name" id="">
    <?php echo $errors['name'] ?? '' ?>
    <br>
    Giá sản phẩm:
    <input type="number" name="price" id=""><?php echo $errors['price'] ?? '' ?>
    <br>
    Hình ảnh:
    <input type="file" name="image" id="">
    <br>
    Danh mục:
    <select name="cate_id" id="">
        <?php foreach ($categories as $cate) : ?>
            <option value="<?= $cate->id ?>">
                <?= $cate->cate_name ?>
            </option>
        <?php endforeach ?>
    </select>
    <br>

    Chi tiết sản phẩm <br>
    <textarea name="detail" id="" cols="100" rows="10"></textarea>
    <br>
    <button type="submit">Thêm</button>
</form>