<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?= $this->Html->css('top'); ?>
    <title>LEDGERs</title>
    <?= $this->Html->css('copiednav'); ?>
    <?= $this->element('copiednav'); ?>
</head>
<body>
    <?= $this->element('finder'); ?>
    <?= $this->element('cards'); ?>
    <?= $this->element('bottom'); ?>
</body>
</html>
