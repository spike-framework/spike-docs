window.location.hash = '';

function setToLocal(id) {

    var local = window.localStorage.getItem('_opened_menu');

    var arr;

    if (local) {
        arr = local.split(',');
    } else {
        arr = [];
    }

    arr.push(id);
    window.localStorage.setItem('_opened_menu', arr);

}

function delFromLocal(id) {


    var local = window.localStorage.getItem('_opened_menu');

    var arr;

    if (local) {
        arr = local.split(',');

        var newArr = [];

        for (var i = 0; i < arr.length; i++) {
            if (arr[i] !== id) {
                newArr.push(arr[i]);
            }
        }

        window.localStorage.setItem('_opened_menu', newArr);

    }

}

function opensMenus() {

    var local = window.localStorage.getItem('_opened_menu');

    var arr;

    if (local) {
        arr = local.split(',');

        for (var i = 0; i < arr.length; i++) {
            $('[data-id="' + arr[i] + '"]').toggleClass("hide");
        }

    }

}

var initializer = function () {

    generateDocsMenu();

    var url = window.location.href;

    var viewName = url.substring(url.lastIndexOf('/') + 1, url.length).trim();

    console.log('viewName '+viewName);

    if(viewName.lastIndexOf('#') == viewName.length-1){
        viewName = viewName.replace('#','');
    }

    var reference = localStorage.getItem('reference');

    console.log('reference');
    console.log(reference);

    if(viewName.trim().length > 0){

        if(!window.localStorage.getItem('_opened_menu')){
            var submenuSelector = $('a[href="'+viewName+'"]');

            if(submenuSelector){
                setToLocal(submenuSelector.parent().parent().attr('data-id'));
            }

        }

        opensMenus();

        if(reference){
            $('a[href="' + viewName + '"][reference-id="'+reference+'"]').addClass('active');
            $('#sidebar-wrapper').scrollTop($('a[href="' + viewName + '"][reference-id="'+reference+'"]').offset().top);
        }else{
            $('a[href="' + viewName + '"]').addClass('active');
            $('#sidebar-wrapper').scrollTop($('a[href="' + viewName + '"]').offset().top);
        }

    }

    $('a[href]').click(function(e){

        if($(this).attr('href') == 'source_reference.html'){
            var referenceName = $(this).attr('reference-id');
            localStorage.setItem('reference', referenceName);
        }else{
            localStorage.removeItem('reference');
        }

    });


    $('.has-submenu').click(function (e) {
        e.preventDefault();

        $('[data-id="' + $(this).attr('id') + '"]').toggleClass("hide");

        if ($('[data-id="' + $(this).attr('id') + '"]').hasClass('hide')) {
            delFromLocal($(this).attr('id'));
        } else {
            setToLocal($(this).attr('id'));
        }

    });

    $("#menu-toggle").click(function (e) {
        e.preventDefault();

        $("#wrapper").toggleClass("toggled");

        setTimeout(function () {

            if ($("#wrapper").hasClass('toggled')) {
                $("#menu-toggle").css('left', '0');
            } else {
                $("#menu-toggle").css('left', '250px');
            }

        }, 100);

    });

    $('#content').html($('#contentToApply').html());

    $(document).ready(function () {
        SyntaxHighlighter.all();
        setTimeout(function(){
            SyntaxHighlighter.all();
        }, 200);
    });

};


$("#wholeWrapper").load("wrapper.html", initializer);

function generateDocsMenu() {

    var files = [
        'core/config.js',
        'core/cordova.js',
        'core/events.js',
        'core/message.js',
        'core/router.js',
        'core/system.js',
        'core/test.js',

        'database/crud.js',
        'database/database.js',
        'database/model.js',
        'database/query.js',

        'modules/component.js',
        'modules/controller.js',
        'modules/lister.js',
        'modules/modal.js',

        'overrides/modal-bootstrap.js',

        'rest/rest.js',

        'singletons/enumerator.js',
        'singletons/global.js',
        'singletons/plugins.js',
        'singletons/service.js',
        'singletons/util.js',

    ]

    var html = '';

    for (var i = 0; i < files.length; i++) {
        html += '<li class="submenu"> <a href="source_reference.html" reference-id="'+files[i].replace('/','-').replace('.js','')+'">' + files[i] + '</a></li>';
    }

    $('div[data-id="' + $('li[source-reference]').attr('id') + '"]').html(html);



}