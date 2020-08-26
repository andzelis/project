<?php  include('../config.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
<title>Admin | Dashboard</title>
</head>
<body>
<div class="header">
    <div class="logo">
        <a href="<?php echo BASE_URL ?>">
            <h1>Go to main page</h1>
        </a>
    </div>
    <?php if (isset($_SESSION['user'])): ?>
        <div class="user-info">
            <span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp;
            <a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
        </div>
    <?php endif ?>
</div>
<div class="container dashboard">
    <h1>Welcome</h1>
    <?php if ($_SESSION['user']['role'] === 'Admin'): ?>
    <div class="stats">
        <a href="users.php" class="first">
            <span><?php echo getUsersCount(); ?></span> <br>
            <span>Newly registered users</span>
        </a>
        <a href="posts.php">
            <span><?php echo getPostsCount()?></span> <br>
            <span>Published posts</span>
        </a>
        <a href="topics.php">
            <span><?php echo getTopicsCount()?></span> <br>
            <span>Published topics</span>
        </a>
    </div>
    <?php endif; ?>
    <br><br><br>
    <div class="buttons">
        <?php if ($_SESSION['user']['role'] === 'Admin'): ?>
            <a href="users.php">Add Users</a>
        <?php endif; ?>
        <a href="posts.php">Add Posts</a>
    </div>
</div>
</body>
</html>
