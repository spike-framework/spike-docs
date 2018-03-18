<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'Docs script';
    include '../head.php'; ?>
</head>

<body>

<?php include('../menu.php'); ?>

<div class="content docs relative">

    <div class="docs-left">
        <div>
            <span>Spike Script</span>
            <span><i anchor class="ion ion-locked"></i></span>
        </div>
        <ul class="docs-menu">
            <li href="introduction" class="star">Introduction</li>
            <li href="packages" class="star">packages</li>
            <li href="imports" class="star">imports</li>
            <li href="class" class="star">class</li>
            <li href="class-fields" class="sub star">fields</li>
            <li href="class-functions" class="sub star">functions</li>
            <li href="class-constructors" class="sub star">constructors</li>
            <li href="class-super" class="sub star">super</li>
            <li href="class-abstract" class="sub star">abstract fields/functions</li>
            <li href="static-class" class="star">static class</li>
            <li href="private-class" class="star">private class</li>
            <li href="enum" class="star">enum</li>
            <li href="inheritance" class="star">inheritance</li>
            <li href="fields-decorators" class="star">fields decorators</li>
            <li href="this" class="star">this keyword</li>
            <li href="getClass-getSuper" class="star">getClass and getSuper</li>
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
