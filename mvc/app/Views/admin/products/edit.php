<div class="message">
    <?= $message ?>
</div>
<form action="" method="post" enctype="multipart/form-data">
    Tên sản phẩm:
    <input type="text" name="name" value="<?= $product->name ?>">
    <br>
    Giá sản phẩm:
    <input type="number" name="price" value="<?= $product->price ?>">
    <br>
    Hình ảnh: <br>
    <img src="<?= ROOT_PATH . "images/" . $product->image ?>" width="100" alt="">
    <br>
    <input type="file" name="image">
    <br>
    Danh mục:
    <select name="cate_id" id="">
        <?php foreach ($categories as $cate) : ?>
            <option value="<?= $cate->id ?>" <?= ($cate->id === $product->cate_id) ? 'selected' : '' ?>>
                <?= $cate->cate_name ?>
            </option>
        <?php endforeach ?>
    </select>
    <br>

    Chi tiết sản phẩm <br>
    <textarea name="detail" id="" cols="100" rows="10"><?= $product->detail ?></textarea>
    <br>
    <input type="hidden" name="id" value="<?= $product->id ?>">
    <button type="submit">Cập nhật</button>
</form>