<div class="box" id="sp-trigger">
    <div class="title">sp-trigger</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can be used only with <b>spike</b> element
        </p>

        <p class="alert">
            <i class="ion ion-alert"></i> You cannot use <b>sp-params</b> with <b>sp-trigger</b>
        </p>

        <p>
            <b>sp-trigger</b> processor is used to include <b>elements</b> or <b>template</b> instances without immediate evaluation.
            <br/>Normally, during <b>element</b> instance creation, every child <b>elements</b> and <b>templates</b> are included and evaluated.
            <br/>Using <b>sp-trigger</b> you can stop including those elements and include them only when you need. Great example of this is waiting for data
            and don't want to use <b>sp-watch</b> to refresh some templates or elements.
        </p>
        <p>
        <p class="alert">
            <i class="ion ion-alert"></i> Alternative version of <b>sp-trigger</b> for <b>two-way binding</b> is using <b>sp-watch-manual</b> where you can control when given watcher runs
        </p>
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

                   class TopMenu extends Element {

                        TopMenu: function(){

                            Rest.get('/api/login')
                                .then(function(response){

                                    $this.trigger('whenLogged');
                                    $this.trigger('whenNotify');

                                });

                        }

                   }
               </code>
            </pre>
        </p>
        <p>
            By default, <b>trigger</b> passes current element <b>scope</b> into <b>sp-template</b>:
            <div class="files">
                <pre file="TopMenu.spike">
                   <code class="language-js">
                    package app.element.topMenu;

                    import Element from spike.core.Element;

                    class TopMenu extends Element {

                        isLogged: false,

                        TopMenu: function () {

                            setTimeout(function(){
                                $this.trigger('whenLogged');
                            });

                        }

                    }
                   </code>
                </pre>
                <pre file="topMenu.html">
                   <code class="language-markup">
                       <script type="prism-html-markup">
                           <div class="topMenuElement">

                              <spike sp-template="app.element.topMenu.logged" sp-trigger="whenLogged"></spike>

                           </div>
                       </script>
                   </code>
                </pre>
                <pre file="topMenu.html">
                   <code class="language-markup">
                       <script type="prism-html-markup">
                           <div class="loggedTemplate">

                              User is {{ (scope.isLogged ? 'logged' : 'not logged') }}

                           </div>
                       </script>
                   </code>
                </pre>
                <pre file="Files structure">
                   <code class="language-treeview">
                        app/
                        |-- elements/
                        |   |-- topMenu/
                        |       |-- TopMenu.spike
                        |       |-- logged.html
                        |       `-- topMenu.html
                        </code>
                </pre>
            </div>
        </p>
        <p>
            You can also pass additional data as <b>second argument</b>.
            <br/>This works for <b>sp-element</b> and <b>sp-template</b> both:
            <div class="files">
                <pre file="TopMenu.spike">
                   <code class="language-js">
                    package app.element.topMenu;

                    import Element from spike.core.Element;

                    class TopMenu extends Element {

                        isLogged: false,

                        TopMenu: function () {

                            setTimeout(function(){
                                $this.trigger('whenLogged', {
                                    username: 'Jack'
                                });
                            });

                        }

                    }
                   </code>
                </pre>
                <pre file="topMenu.html">
                   <code class="language-markup">
                       <script type="prism-html-markup">
                           <div class="topMenuElement">

                              <spike sp-template="app.element.topMenu.logged" sp-trigger="whenLogged"></spike>

                           </div>
                       </script>
                   </code>
                </pre>
                <pre file="topMenu.html">
                   <code class="language-markup">
                       <script type="prism-html-markup">
                           <div class="loggedTemplate">

                              User is {{ (scope.isLogged ? 'logged' : 'not logged') }}
                              Username: {{ scope.username }}

                           </div>
                       </script>
                   </code>
                </pre>
                <pre file="Files structure">
                   <code class="language-treeview">
                        app/
                        |-- elements/
                        |   |-- topMenu/
                        |       |-- TopMenu.spike
                        |       |-- logged.html
                        |       `-- topMenu.html
                        </code>
                </pre>
            </div>
        </p>

    </div>
</div>