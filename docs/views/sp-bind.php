<div class="box" id="sp-bind">
    <div class="title">sp-bind</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can't be used with <b>spike</b> element
        </p>

        <p>
            <b>sp-bind</b> processor is used to bind <b>scope</b> properties to interactive elements like <b>select</b> and <b>input</b>
            <br/>
            This is part of <b>two-way binding</b> feature but can be used without <b>sp-watch</b> processor if we want only bind variables from
            view to model.
        </p>
        <p>

            Basic usage:
            <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">
                        <input type="text" sp-bind="scope.name" />
                    </script>
                </code>
             </pre>
        </p>
        <p>
            Let's declare some controller:
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
            <pre>
               <code class="language-markup">
                   <script type="prism-html-markup">
                       <div class="homeController">

                           <input type="text" sp-bind="scope.name" />

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

                           <input type="text" sp-bind="scope.name" />

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