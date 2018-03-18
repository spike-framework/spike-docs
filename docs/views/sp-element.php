<div class="box" id="sp-element">
    <div class="title">sp-element</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can be used only with <b>spike</b> element
        </p>

        <p>
            <b>sp-element</b> processor is used to include <b>elements</b> instances into another one.
            <br/>During <b>sp-element</b> evaluation, new instance of given <b>element</b> is created
        </p>
        <p>
            Basic usage:
        <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">
                        <spike sp-element="ELEMENT_PACKAGE"></spike>
                    </script>
                </code>
             </pre>
        </p>
        <p>
            Let's have template for some element <b>ListItem</b> in package <b>app.elements.list.listItem.ListItem</b> :
            <pre>
               <code class="language-markup">
                   <script type="prism-html-markup">

                       <li class="listItemElement">
                            <div>Name: {{ scope.name }}</div>
                       </li>

                   </script>
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