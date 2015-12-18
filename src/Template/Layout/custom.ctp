<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('/vendor/foundation/css/foundation.min.css') ?>
    <?= $this->Html->css('main.css') ?>
</head>
<body>
<?= $this->Flash->render() ?>
<section class="container clearfix">
    <?= $this->fetch('content') ?>
</section>
<footer>
</footer>
<?= $this->Html->script('/vendor/foundation/js/vendor/jquery.min.js') ?>
<?= $this->Html->script('/vendor/foundation/js/foundation.min.js') ?>
<?= $this->Html->script('app.js') ?>
</body>
</html>
