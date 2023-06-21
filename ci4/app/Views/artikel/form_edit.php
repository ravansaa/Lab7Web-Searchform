<style>
    .btn {
        background-color: #4285F4;
        color: #FFF;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-large {
        font-size: 18px;
        font-weight: bold;
    }
</style>

<<?= $this->include('template/admin_header'); ?> <h2><?= $title; ?></h2>
    <form action="" method="post">
        <p>
            <textarea name="judul" cols="10" rows="1" value="<?= $data['judul']; ?>">Edit Judul</textarea>
        </p>
        <p>
            <textarea name="isi" cols="50" rows="10"><?= $data['isi']; ?></textarea>
        </p>
        <p>
            <input type="file" name="gambar">
        </p>

        <p><input type="submit" value="Kirim" class="btn btn-large"></p>
    </form>
    <?= $this->include('template/admin_footer'); ?>