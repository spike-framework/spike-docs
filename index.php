<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'Home';include 'head.php'; ?>
</head>

<body>

<?php include('menu.php'); ?>

<div class="content">

    <div class="center-slogan first">
        <img src="/img/spike-icon.svg"/>
        <span>Spike Framework</span>
        <span>Consistent, practice, powerful</span>
    </div>

    <div class="center-slogan second">
        <div class="box">
            <i class="ion ion-ios-monitor-outline"></i>
            <div class="title">Cross-platform</div>
            <div class="desc">
                Designed for working with object-oriented style without any polyfills - write just in Spike and transpile fast into JavaScript
            </div>
        </div>
        <div class="box">
            <i class="ion ion-ios-heart-outline"></i>
            <div class="title">Backend devs friendly</div>
            <div class="desc">
                Thanks Spike in-build language, backend developer can use common OOP patterns and Java-like syntax in JavaScript
            </div>
        </div>
        <div class="box">
            <i class="ion ion-ios-color-wand-outline"></i>
            <div class="title">Two-way binding and templates</div>
            <div class="desc">
                Powerful template system with in-build optional two-way binding using sp-watch attribute
            </div>
        </div>
    </div>

    <div class="center-slogan third">

        <div class="why">
            <div class="introduction">But there are tons of frameworks...</div>
            <div class="title">...so why Spike?</div>
            <div class="desc">

                <p>
                Spike has been written from scratch, having all those features like Virtual DOM, Two-Way binding, MVC pattern, Object-oriented programming in JavaScript,
                without them nowadays we cannot imagine developing large and also small Web Applications.
                </p>

                <p>
                Spike connects all those features into consistent simple Core, with simple project setup, which makes you feel free of tons of libraries, configuration files,
                transpilers, compilers, polyfills, typing, keep your time and do not spend it on this stuff - you can just start working and write your lovely JavaScript as it is.
                </p>

                <p>
                Spike is great, because uses own language - also Spike - and avoid hard typing like in TypeScript, returning to JavaScript roots in object-oriented box.
                Look on examples and starter project - check it yourself.
                </p>

            </div>
        </div>

    </div>

    <!--<div class="center-slogan fourth">-->

        <!--<div class="example">-->

            <!--<div class="tabs">-->
                <!--<div class="tab" onclick="window.showTab(this, 1)">Form.spike</div>-->
                <!--<div class="tab" onclick="window.showTab(this, 1)">form.html</div>-->
            <!--</div>-->
            <!--<div class="content tab-1">-->
                <!--package app.controller.form;-->

                <!--import Controller from spike.core.Controller;-->

                <!--class Form extends Controller {-->

                    <!--name: null,-->
                    <!--surname: null,-->

                    <!--done: false,-->
                    <!--send: function(){-->
                        <!--this.done = true;-->
                    <!--}-->

                <!--}-->
            <!--</div>-->

            <!--<div class="content tab-1">-->

                <!--<div class="formController">-->

                    <!--<form autocomplete="off" sp-submit="scope.send()" sp-watch>-->

                        <!--Name <input type="text" sp-bind="scope.name"/>-->
                        <!--Surname <input type="text" sp-bind="scope.surname"/>-->

                        <!--<button type="submit">Send</button>-->
                        <!--<div class="message {{ (scope.done ? '' : 'hide') }}">Form has been sent</div>-->
                    <!--</form>-->

                <!--</div>-->

            <!--</div>-->

        <!--</div>-->

    <!--</div>-->

</div>

<?php include('footer.php'); ?>

</body>

</html>
