<?php
include "../../../include/cp_header.php";

$sort = 1;
foreach ($_POST['tr'] as $lot_sn) {
    $sql = "update " . $xoopsDB->prefix("lot") . " set ``='{$sort}' where `lot_sn`='{$lot_sn}'";
    $xoopsDB->queryF($sql) or die(_TAD_SORT_FAIL . " (" . date("Y-m-d H:i:s") . ")");
    $sort++;
}
echo "Sort saved! (" . date("Y-m-d H:i:s") . ")";
