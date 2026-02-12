<footer>
        <p>&copy; 2025 Your Website. All rights reserved.</p>

        <?php
$filename = basename($_SERVER['PHP_SELF']);
echo "Last modified: " . date("F d Y H:i:s.", filemtime($filename));
?>
    </footer>

    </body>
</html>