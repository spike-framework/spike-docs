<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'Guide';
    include '../head.php'; ?>
</head>

<body>

<?php include('../menu.php'); ?>

<div class="content docs relative">

    <div class="docs-left">
        <div>
            <span>Spike Guide</span>
            <span><i anchor class="ion ion-locked"></i></span>
        </div>
        <ul class="docs-menu">
            <li href="introduction" class="">Introduction</li>

            <li href="project-setup" class="">Project setup</li>
            <li href="transpiler" class="sub">Spike transpiler</li>
            <li href="grunt" class="sub">Grunt</li>
            <li href="gulp" class="sub">Gulp</li>
            <li href="webpack" class="sub">Webpack</li>

            <li href="ide-support" class="">IDE support</li>
            <li href="intelij" class="sub">IntelliJ IDEA</li>
            <li href="vsc" class="sub">Visual Studio Code</li>

            <li href="cli" class="">Spike CLI</li>

            <li href="language" class="">Spike language</li>

            <li href="architecture" class="">Architecture</li>
            <li href="lifecycle" class="">Lifecycle</li>

            <li href="templates" class="">Templates syntax</li>
            <li href="controllers" class="">Controllers</li>
            <li href="elements" class="">Elements</li>
            <li href="modals" class="">Modals</li>

            <li href="one-way-binding" class="">One-way binding</li>
            <li href="two-way-binding" class="">Two-way binding</li>
            <li href="forms" class="">Forms</li>

            <li href="services" class="">Services</li>
            <li href="enums" class="">Enums</li>
            <li href="routing" class="">Routing</li>
            <li href="http" class="">HTTP</li>
            <li href="i18" class="">Internationalization</li>

            <li href="events" class="">Events</li>
            <li href="cookies" class="">Cookies</li>

            <li href="logging" class="">Logging</li>
            <li href="testing" class="">Testing</li>

        </ul>
    </div>

    <div class="docs-right">

        <?php include('guide/introduction.php') ?>

    </div>

</div>

<?php include('../footer.php'); ?>

</body>

</html>
