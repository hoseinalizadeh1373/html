<?php
class layout {
    public function pageheader()
    {
        require(__DIR__."/header.php");
    }
    public function pagefooter()
    {
        require(__DIR__ . "/footer.php");
    }
}