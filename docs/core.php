<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'Docs core';
    include '../head.php'; ?>
</head>

<body>

<?php include('../menu.php'); ?>

<div class="content docs relative">

    <div class="docs-left">
        <div>
            <span>Spike Core</span>
            <span><i anchor class="ion ion-locked"></i></span>
        </div>
        <ul class="docs-menu">
            <li href="introduction" class="">Introduction</li>
            <li href="assembler" class="">assembler</li>
            <li href="config" class="">config</li>
            <li href="message" class="">message</li>
            <li href="log" class="">log</li>

            <li href="element" class="">element</li>
            <li href="global-elements" class="sub">global element</li>
            <li href="controller" class="sub">controller</li>
            <li href="modal" class="sub">modal</li>
            <li href="modal-interface" class="sub2">modal interface</li>

            <li href="events" class="">events</li>
            <li href="events-interface" class="sub">events interface</li>
            <li href="broadcaster" class="sub">broadcaster</li>

            <li href="rest" class="">rest</li>
            <li href="request" class="sub">request</li>
            <li href="multi-request" class="sub">multi request</li>

            <li href="router" class="">router</li>
            <li href="routing-interface" class="sub">routing interface</li>

            <li href="watchers" class="">watchers</li>
            
            <li href="errors" class="">errors</li>
            <li href="cookies" class="">cookies</li>
            <li href="util" class="">util</li>

        </ul>
    </div>

    <div class="docs-right">

        <?php include('script/introduction.php') ?>
        <?php include('script/packages.php') ?>
        <?php include('script/imports.php') ?>
        <?php include('script/class.php') ?>
        <?php include('script/class-fields.php') ?>
        <?php include('script/class-functions.php') ?>
        <?php include('script/class-constructors.php') ?>
        <?php include('script/class-super.php') ?>
        <?php include('script/class-abstract.php') ?>
        <?php include('script/static-class.php') ?>
        <?php include('script/private-class.php') ?>
        <?php include('script/enum.php') ?>
        <?php include('script/inheritance.php') ?>
        <?php include('script/fields-decorators.php') ?>
        <?php include('script/this.php') ?>
        <?php include('script/getClass-getSuper.php') ?>

    </div>

</div>

<?php include('../footer.php'); ?>

</body>

</html>
