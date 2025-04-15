<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Daftar Buku</h3>
            <ul class="list-group">
                <?php if (!empty($buku)) : ?>
                    <?php foreach ($buku as $item) : ?>
                        <li class="list-group-item"><?php echo htmlspecialchars($item['judul']); ?></li>
                    <?php endforeach; ?>
                <?php else : ?>
                    <li class="list-group-item">Tidak ada buku tersedia.</li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>