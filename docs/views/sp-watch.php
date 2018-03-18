<div class="box" id="sp-watch">
    <div class="title">sp-watch</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can't be used with <b>spike</b> element
        </p>

        <p>
            <b>sp-watch</b> processor is used to bind <b>scope</b> properties to template
            <br/>
            This is part of <b>two-way binding</b> feature which binds <b>scope</b> to template.
            <br/>Whenever <b>scope</b> changes, then template part with <b>sp-watch</b> processor is re-rendered.
            <br/><b>sp-watch</b> uses <b>reconciliation</b> algorithm to batch only those elements (or it's properties) which one changed.
        </p>
        <p>
            Let's declare controller:
        <pre>
                <code class="language-js">
                    package app.controller.home;

                    import Controller from spike.core.Controller;

                    class Home extends Controller {

                        name: null,

                        Home: function(){
                        }

                    }
                </code>
            </pre>
        </p>
        <p>
            Then controller's template:
            <br/>Here we use <b>sp-bind</b> processor which binds <b>scope.name</b> variable with input value.
            <br/>When we type in input, then <b>scope.name</b> value is updated.
            <br/>Then, we have <b>expression</b> which print those value every time when it change.
            <br/>If we do not declare <b>sp-watch</b> we will have printed this value only once when template is rendered.
        <pre>
               <code class="language-markup">
                   <script type="prism-html-markup">
                       <div class="homeController">

                           <div sp-watch>

                            <input type="text" sp-bind="scope.name" />

                            {{ scope.name }}

                           </div>

                       </div>
                   </script>
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

                     class Home extends Controller {

                         name: null,

                         Home: function(){
                         }

                     }
                    </code>
                 </pre>
            <pre file="home.html">
                   <code class="language-markup">
                       <script type="prism-html-markup">
                       <div class="homeController">

                           <div sp-watch>

                            <input type="text" sp-bind="scope.name" />

                            {{ scope.name }}

                           </div>

                       </div>
                       </script>
                   </code>
                </pre>
            <pre file="Files structure">
                   <code class="language-treeview">
                        app/
                        |-- controller/
                        |   |-- home/
                        |       |-- Home.spike
                        |       `-- home.html
                        </code>
                </pre>
        </div>
        </p>

    </div>
</div>