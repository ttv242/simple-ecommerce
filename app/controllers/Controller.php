<?php

require_once _DIR_ROOT . '/configs/database.php';

require_once _DIR_ROOT . '/helpers/Helper.php';

require_once _DIR_ROOT . '/app/models/model.php';

require_once _DIR_ROOT . '/app/controllers/PagesController.php';

// Gọi hàm check admin trước khi require_once (nếu thỏa mãn điều kiện) => Giảm cường độ load tối ưu hiệu suât
require_once _DIR_ROOT . '/app/controllers/DashboardController.php';

?>