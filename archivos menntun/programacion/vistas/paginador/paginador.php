<br>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <?php
        if ($pagina != 1) {
        ?>
            <li class="page-item" ">
            <a class=" page-link" href="?pagina=<?php echo 1; ?>">
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="?pagina=<?php echo $pagina - 1; ?>">
                </a>
            </li>
        <?php
        }
        for ($i = 1; $i <= $totalPaginas; $i++) {
            if ($i == $pagina) {
                echo '<li class="page-item active" aria-current="page"><a class="page-link" href="?pagina=' . $i . '">' . $i . '</a></li>';
            } else {
                echo '<li class="page-item "><a class="page-link" href="?pagina=' . $i . '">' . $i . '</a></li>';
            }
        }
        if ($pagina != $totalPaginas) {
        ?>

            <li class="page-item">
                <a class="page-link" href="?pagina=<?php echo $pagina + 1; ?>">>></a>
            </li>
            <li class="page-item">
                <a class="page-link" href="?pagina=<?php echo $totalPaginas; ?>">></a>
            </li>
        <?php
        }
        ?>
    </ul>
</nav>