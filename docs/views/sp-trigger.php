<div class="box" id="sp-trigger">
    <div class="title">sp-trigger</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can be used only with <b>spike</b> element
        </p>

        <p>
            <b>sp-trigger</b> processor is used to include <b>elements</b> or <b>template</b> instances without immediate evaluation.
            <br/>Normally, during <b>element</b> instance creation, every child <b>elements</b> and <b>templates</b> are included and evaluated.
            <br/>Using <b>sp-trigger</b> you can stop including those elements and include them only when you need. Great example of this is waiting for data
            and don't want to use <b>sp-watch</b> to refresh some templates or elements.
        </p>
        <p>
            Basic usage:
        <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">
                        <div class="topMenuElement">

                            <spike sp-element="app.elements.loggedPanel.LoggedPanel" sp-trigger="whenLogged"></spike>
                            <spike sp-template="app.templates.common.notifier" sp-trigger="whenNotify"></spike>

                        </div>
                    </script>
                </code>
             </pre>
        </p>
        <p>
            Then simply use in your element's class <b>trigger</b> function:
            <pre>
               <code class="language-js">
                   package app.elements.topMenu;

                   import Element from spike.core.Element;
                   import Rest from spike.core.Rest;
                   import Watchers from spike.core.Watchers;

                   class TopMenu extends Element {

                        TopMenu: function(){

                            Rest.get('/api/login')
                                .then(function(response){

                                    Watchers.trigger('whenLogged', this);
                                    Watchers.trigger('whenNotify', this);

                                });

                        }

                   }

               </code>
            </pre>
        </p>
        <p>
            Then let's have simple template for controller <b>List</b> in package <b>app.controller.list.List</b> :
            <pre>
               <code class="language-markup">
                   <script type="prism-html-markup">
                       import ListItem from app.elements.list.listItem.ListItem;

                       <div class="listController">

                           <spike sp-for="item in items">
                               <spike sp-element="ListItem" sp-param="item"></spike>
                           </spike>

                       </div>
                   </script>
               </code>
            </pre>
        </p>
        <p>
            Finally we declare controller and element classes:
            <pre>
               <code class="language-js">
                package app.controller.home;

                import Controller from spike.core.Controller;
                import Log from spike.core.Log;
                import Router from spike.core.Router;

                class Home extends Controller {

                    items: [
                        { name: 'Jack' },
                        { name: 'Bob' }
                    ],

                    Home: function () {
                    }

                }
               </code>
            </pre>
            <pre>
               <code class="language-js">
                package app.elements.list.listItem;

                import Element from spike.core.Element;
                import Log from spike.core.Log;

                class ListItem extends Element {

                    ListItem: function () {
                    }

                }
               </code>
            </pre>
        </p>

        <p>
            Summarize our example on few complete files:
            <div class="files">
                <pre file="Home.spike">
                   <code class="language-js">
                    package app.controller.home;

                    import Controller from spike.core.Controller;
                    import Log from spike.core.Log;
                    import Router from spike.core.Router;

                    class Home extends Controller {

                        items: [
                            { name: 'Jack' },
                            { name: 'Bob' }
                        ],

                        Home: function () {
                        }

                    }
                   </code>
                </pre>
                <pre file="home.html">
                   <code class="language-markup">
                       <script type="prism-html-markup">
                           import ListItem from app.elements.list.listItem.ListItem;

                           <div class="listController">

                               <spike sp-for="item in items">
                                   <spike sp-element="ListItem" sp-param="item"></spike>
                               </spike>

                           </div>
                       </script>
                   </code>
                </pre>
                <pre file="ListItem.spike">
                   <code class="language-js">
                    package app.elements.list.listItem;

                    import Element from spike.core.Element;
                    import Log from spike.core.Log;

                    class ListItem extends Element {

                        ListItem: function () {
                        }

                    }
                   </code>
                </pre>
                <pre file="listItem.html">
                   <code class="language-markup">
                       <script type="prism-html-markup">
                           import ListItem from app.elements.list.listItem.ListItem;

                           <div class="listController">

                               <spike sp-for="item in items">
                                   <spike sp-element="ListItem" sp-param="item"></spike>
                               </spike>

                           </div>
                       </script>
                   </code>
                </pre>
                <pre file="Files structure">
                   <code class="language-treeview">
                        app/
                        |-- elements/
                        |   |-- list/
                        |       |-- listItem/
                        |           |-- ListItem.spike
                        |           `-- listItem.html
                        |-- controller/
                        |   |-- list/
                        |       |-- List.spike
                        |       `-- list.html
                        </code>
                </pre>
            </div>
        </p>

    </div>
</div>