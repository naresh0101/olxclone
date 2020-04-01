 <nav id="sidebar">
    <div class="sidebar-header">
        <h3> <?php echo $_SESSION['username'] ?> </h3>
    </div>
        <ul class="list-unstyled components">
            <li>
                <a href="product/new.php">Post Ad</a>
            </li>
            <li>
                <a href="#">My Ads</a>
            </li>
            <li>
                <a href="../private/controler/user.php?actionis=logout">Logout</a>
            </li>
    </ul>
</nav>