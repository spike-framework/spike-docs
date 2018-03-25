<div class="box" id="sp-template">
    <div class="title">sp-template</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can be used only with <b>spike</b> element
        </p>

        <p>
            <b>sp-template</b> processor is used to include <b>common</b> templates into another one
        </p>
        <p>
            Basic usage:
            <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">
                        <spike sp-template="TEMPLATE_PACKAGE"></spike>
                    </script>
                </code>
             </pre>
        </p>
        <p>
            Let's have simple common template in package <b>app.templates.common</b> :
            <pre>
               <code class="language-markup">
                   <script type="prism-html-markup">
                       <div class="common">
                           <p>Common element with passed data: {{ scope.surname }}</p>
                       </div>
                   </script>
               </code>
            </pre>
        </p>
        <p>
            Then let's have simple parent template:
            <pre>
               <code class="language-markup">
                   <script type="prism-html-markup">
                       <div class="homeController">

                           <spike sp-js="scope.surname = 'Kowalski'"></spike>

                           <spike sp-template="app.templates.common"></spike>

                       </div>
                   </script>
               </code>
            </pre>
        </p>
        <p>
            By default, <b>scope</b> from parent template is passed into children as on above example.
            We can specify passed model using <b>sp-params</b> processor:
            <pre>
               <code class="language-markup">
                   <script type="prism-html-markup">
                       <div class="homeController">

                           <spike sp-js="scope.surname = 'Kowalski'"></spike>

                           <spike sp-template="app.templates.common" sp-params="{ surname: scope.surname }"></spike>

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

                        Home: function(){
                        }

                       }
                   </code>
                </pre>
                <pre file="home.html">
                   <code class="language-markup">
                       <script type="prism-html-markup">
                           <div class="homeController">

                               <spike sp-js="scope.surname = 'Kowalski'"></spike>

                               <spike sp-template="app.templates.common" sp-params="{ surname: scope.surname }"></spike>

                           </div>
                       </script>
                   </code>
                </pre>
                <pre file="common.html">
                   <code class="language-markup">
                       <script type="prism-html-markup">
                        <div class="common">

                            <p>Common element with provided scope: {{ scope.surname }}</h5>

                        </div>
                       </script>
                   </code>
                </pre>
                <pre file="Files structure">
                   <code class="language-treeview">
                        app/
                        |-- templates/
                        |   `-- common.html
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