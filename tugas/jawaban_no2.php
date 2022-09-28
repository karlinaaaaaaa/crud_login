<?php 
class kereta{
    public $harga="30000";

    public function __construct()
    {
        echo "ini berasal dari construct kereta";
    }
    public function __destruct()
    {
        echo"ini berasal dari destruct kereta";
    }
}
$kereta = new kereta();