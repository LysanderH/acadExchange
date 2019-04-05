</main>
<footer class="footer">
    <nav class="nav">
        <ul class="nav__list">
            <h2 class="nav__link">Principal navigation</h2>
            <?php foreach (dw_getMenu('footer') as $item): ?>
                <li class="nav__item">
                    <a href="<?= $item->url; ?>" class="nav__link"><?= $item->label; ?></a>
                    <?php if (count($item->children)): ?>
                        <ul class="nav__sub">
                            <?php foreach ($item->children as $child): ?>
                                <li class="nav__item">
                                    <a href="<?= $child->url; ?>" class="nav__link"><?= $child->label; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <p class="copy">&copy; Lysander Hans</p>
</footer>

</body>
</html>