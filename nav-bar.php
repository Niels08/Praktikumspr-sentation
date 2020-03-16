<nav class="navbar navbar-green bg-green">
        <?php foreach ($pages as $pageNumber => $page) { ?>
               <?php if ($pageNumber == $_GET['page']) { ?>
                   <a class="nav-link1" href="index.php?page=<?php echo $pageNumber ?>"><?php echo $page['title'] ?></a>
               <?php } else { ?>
                   <a class="nav-link" href="index.php?page=<?php echo $pageNumber ?>"><?php echo $page['title'] ?></a>
        <?php } ?>
    <?php } ?>

</nav>