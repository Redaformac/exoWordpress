<nav id="nav" class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="http://localhost/exoWordpress/index.php/">
            <span class="bg_red"> / </span>
            <span class="gris">Axis<span class="bleu">Group</span></span>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul id="menu" class="navbar-nav">
                <?php $menu = wp_get_nav_menu_items('main');
                    foreach ($menu as $key => $value) {
                    echo '<li class="nav-item active">';
                    echo "<a class='nav-link' href='".$value->url."'>$value->title</a>";
                    echo '</li>';
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>
