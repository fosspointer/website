<div id="navbar">
    <ul>
    <?php
    $current_view = end(explode('/', $current_view));
    $views_directory = __DIR__ . '/views';
    $views = array_diff(scandir($views_directory), array('.', '..', $current_view, '404.php'));

    foreach($views as $view)
    {
        $view = explode(".", $view)[0];
        echo sprintf('<li><a href="%s">%s</a></li>',
            $view, ucfirst($view));
    }
    ?>
    </ul>
</div>