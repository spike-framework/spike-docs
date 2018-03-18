<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'Docs views';
    include '../head.php'; ?>
</head>

<body>

<?php include('../menu.php'); ?>

<div class="content docs relative">

    <div class="docs-left">
        <div>
            <span>Spike Views</span>
            <span><i anchor class="ion ion-locked"></i></span>
        </div>
        <ul class="docs-menu">
            <li href="introduction" class="star">Introduction</li>
            <li href="expressions" class="star">Expressions</li>
            <li href="processors" class="star">Processors</li>
            <li href="sp-print" class="sub star">sp-print</li>
            <li href="sp-translation" class="sub star">sp-translation</li>
            <li href="sp-placeholder" class="sub star">sp-placeholder</li>
            <li href="sp-if" class="sub star">sp-if</li>
            <li href="sp-else-if" class="sub star">sp-else-if</li>
            <li href="sp-else" class="sub star">sp-else</li>
            <li href="sp-switch" class="sub star">sp-switch</li>
            <li href="sp-case" class="sub star">sp-case</li>
            <li href="sp-default" class="sub star">sp-default</li>
            <li href="sp-for" class="sub star">sp-for</li>
            <li href="sp-foreach" class="sub star">sp-foreach</li>
            <li href="sp-while" class="sub star">sp-while</li>
            <li href="sp-template" class="sub star">sp-template</li>
            <li href="sp-element" class="sub star">sp-element</li>
            <li href="sp-params" class="sub star">sp-params</li>
            <li href="sp-js" class="sub star">sp-js</li>
            <li href="sp-href" class="sub star">sp-href</li>
            <li href="sp-log" class="sub star">sp-log</li>
            <li href="sp-watch" class="sub star">sp-watch</li>
            <li href="sp-bind" class="sub star">sp-bind</li>
            <li href="sp-project" class="sub star">sp-project</li>
            <li href="sp-not-project" class="sub star">sp-not-project</li>
            <li href="sp-env" class="sub star">sp-env</li>
        </ul>
    </div>

    <div class="docs-right">

        <?php include('views/introduction.php') ?>
        <?php include('views/expressions.php') ?>
        <?php include('views/processors.php') ?>
        <?php include('views/sp-print.php') ?>
        <?php include('views/sp-translation.php') ?>
        <?php include('views/sp-placeholder.php') ?>
        <?php include('views/sp-if.php') ?>
        <?php include('views/sp-else-if.php') ?>
        <?php include('views/sp-else.php') ?>
        <?php include('views/sp-switch.php') ?>
        <?php include('views/sp-case.php') ?>
        <?php include('views/sp-default.php') ?>
        <?php include('views/sp-for.php') ?>
        <?php include('views/sp-foreach.php') ?>
        <?php include('views/sp-while.php') ?>
        <?php include('views/sp-template.php') ?>
        <?php include('views/sp-element.php') ?>
        <?php include('views/sp-params.php') ?>
        <?php include('views/sp-js.php') ?>
        <?php include('views/sp-href.php') ?>
        <?php include('views/sp-log.php') ?>
        <?php include('views/sp-watch.php') ?>
        <?php include('views/sp-bind.php') ?>
        <?php include('views/sp-project.php') ?>
        <?php include('views/sp-not-project.php') ?>
        <?php include('views/sp-env.php') ?>

    </div>

</div>

<?php include('../footer.php'); ?>

</body>

</html>
