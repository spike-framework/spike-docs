<div class="box" id="processors">
    <div class="title">Processors</div>
    <div class="desc">

        <p>
            In Spike, processors are special HTML attributes which are transformed into JavaScript code during templates compilation.
        </p>
        <p>
            Most of processors are flow-control statements like: if, while, switch. Spike offers also <b>two-way binding processors</b>,
            printing processor, <b>system variables processors</b>, logging processor, <b>javascript snippets processor</b>, and some attribute-like processors for translations, links, placeholders etc.
        </p>
        <p>
            In many cases, processors can be used with special <b>spike</b> tag which means that this tag will be finally removed from template.
        </p>
        <p>
        Thanks to the fact <b>spike</b> tags are removed, you don't have to create additional DOM elements which persist in final template to control flow.
        </p>
        <p>
            Processors which can be used only on <b>spike</b> tag:
            <ul>
                <li>sp-switch</li>
                <li>sp-case</li>
                <li>sp-default</li>
                <li>sp-element</li>
                <li>sp-log</li>
                <li>sp-switch</li>
                <li>sp-template</li>
                <li>sp-while</li>
                <li>sp-env</li>
                <li>sp-js</li>
                <li>sp-log</li>
                <li>sp-project</li>
                <li>sp-not-project</li>
            </ul>
        </p>
        <p>
            Processors which can't be used on <b>spike</b> tag:
            <ul>
                <li>sp-watch</li>
                <li>sp-bind</li>
                <li>sp-event</li>
                <li>sp-href</li>
                <li>sp-translation</li>
                <li>sp-placeholder</li>
            </ul>
        </p>
        <p>
            Processors which can be used both on <b>spike</b> tag and other DOM elements:
            <ul>
                <li>sp-if</li>
                <li>sp-else-if</li>
                <li>sp-else</li>
                <li>sp-foreach</li>
                <li>sp-for</li>
                <li>sp-print</li>
            </ul>
        </p>
        Example processor usage on regular DOM element:
        <pre>
            <code class="language-markup">
                <script type="prism-html-markup">
                    <div sp-if="scope.showDiv">
                        When condition
                    </div>
                    <div sp-else>
                        When not condition
                    </div>
                </script>
            </code>
        </pre>
        Example usage on <b>spike</b> element:
        <pre>
            <code class="language-markup">
                <script type="prism-html-markup">
                    <spike sp-if="scope.showDiv">
                        <div>When condition</div>
                    </spike>
                    <spike sp-else>
                        <div>When not condition</div>
                    </spike>
                </script>
            </code>
         </pre>

    </div>
</div>