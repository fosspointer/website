<?php
$title = "Main page";
$current_view = __FILE__;
include 'header.php';
?>
<div id="blogPost">
    <a href="/home" style="font-size: 2rem"><strong>x</strong></a>
    <div></div> 
</div>
<div id="content">
    <p>fosspointer is a software engineer interested in <span class="cyan">programming language development</span>, <span class="purple">linguistics</span>, <span class="pink">music</span>, and just about <span class="orange">everything else...</span></p>
    <p></p>
    <h3>Posts</h3>
    <?php
        $blog_directory = __DIR__ . '/../blog';
        $posts = array_diff(scandir($blog_directory), array('.', '..'));
        if(count($posts) == 0) {
            echo '<p>No posts yet</p>';
        }
        else
        {
            usort($posts, function($first, $second) use ($blog_directory) {
                return filectime($blog_directory . '/' . $second) - filectime($blog_directory . '/' . $first);
            });

            echo '<ul class="blocks">';
            foreach($posts as $post) {
                echo '<li class="clickable">' . substr($post, 0, strlen($post) - 3) . '</li>';
            }
            echo '</ul>';
        }
    ?>
</div>
<?php include 'navbar.php' ?>
<script src="/js/drawdown.js"></script>
<script src="/js/posts.js"></script>
<?php include 'footer.php' ?>