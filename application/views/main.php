<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view($static['header']) ?>
</head>

<body>
    <?php $this->load->view($static['nav']) ?>
    <?php $this->load->view($body) ?>
    <?php $this->load->view($static['footer']) ?>
</body>

</html>