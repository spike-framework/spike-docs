var docsMenu = document.getElementsByClassName('docs-left');
if (docsMenu.length > 0) {
    docsMenu = docsMenu[0];
} else {
    docsMenu = null;
}

var contentDocs = document.getElementsByClassName('docs')[0];

document.addEventListener('click', function (e) {

    if (e.target.tagName === 'LI' && e.target.getAttribute('href')) {

        var li = document.getElementById(e.target.getAttribute('href'));
        window.scrollTo(0, li.offsetTop);

        var lis = docsMenu.getElementsByTagName('li');
        for(var i = 0; i < lis.length; i++){
            lis[i].classList.remove('active');
        }

        e.target.classList.add('active');



    }

    if (e.target.tagName === 'I' && e.target.getAttribute('anchor') != null) {

        if(e.target.classList.contains("ion-unlocked")){
            e.target.classList.remove('ion-unlocked');
            e.target.classList.add('ion-locked');
            docsMenu.classList.remove('relative');
            contentDocs.classList.add('relative');
        }else{
            e.target.classList.remove('ion-locked');
            e.target.classList.add('ion-unlocked');
            contentDocs.classList.remove('relative');
        }

    }

});


    var backToTop = document.getElementById('backToTop');

    var scrollTop = 0;
    var isTop = false;
    document.addEventListener('scroll', function (e) {
        scrollTop = window.pageYOffset || document.body.scrollTop;
    });

    setInterval(function(){

        console.log(scrollTop);

        if(scrollTop > 50 && isTop){
            return;
        }

        if(scrollTop > 50 && !isTop){

            if(docsMenu){
                docsMenu.classList.add('bind-top');
            }
            backToTop.classList.remove('hide');

            isTop = true;
        }else{
            if(docsMenu) {
                docsMenu.classList.remove('bind-top');
            }
            backToTop.classList.add('hide');

            isTop = false;
        }

    }, 500);


var files = document.getElementsByClassName('files');

for(var i = 0; i < files.length; i++){

    var pres = files[i].getElementsByTagName('pre');

    var toolbar = document.createElement('div');
    toolbar.classList.add('navigation');

    for(var k = 0; k < pres.length; k++){
        toolbar.innerHTML += '<div class="'+(k === 0 ? 'active' : '') +'" tab-file="'+pres[k].getAttribute('file')+'" onclick="openFile(\''+pres[k].getAttribute('file')+'\');">'+pres[k].getAttribute('file')+'</div>';

        if(k > 0){
            pres[k].classList.add('hide');
        }

    }

    files[i].appendChild(toolbar);

}

function openFile(file){

    var fileDiv = document.querySelectorAll('[file="'+file+'"]');

    for(var k = 0; k < fileDiv.length; k++){

        var fileDivs = fileDiv[k].parentNode.parentNode.querySelectorAll('[file]');
        for(var i = 0; i < fileDivs.length; i++){
            fileDivs[i].classList.add('hide');
        }

        var tabDivs = fileDiv[k].parentNode.parentNode.querySelectorAll('[tab-file]');

        for(var i = 0; i < tabDivs.length; i++){
            tabDivs[i].classList.remove('active');
        }

        fileDiv[k].classList.remove('hide');
        var tabDiv = fileDiv[k].parentNode.parentNode.querySelectorAll('[tab-file="'+file+'"]');

        for(var i = 0; i < tabDiv.length; i++){
            tabDiv[i].classList.add('active');
        }

    }


}