<div class="box" id="sp-foreach">
    <div class="title">sp-foreach</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can be used both on <b>spike</b> tag and other DOM elements
        </p>

        <p>
            <b>sp-foreach</b> processor is used to evaluate JavaScript <b>foreach</b> loop in Spike templates.
            This processor can contain only <b>in-build expression</b>.
            <br/>
        </p>
        <p>
            Usage with <b>spike</b> element:
        <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">

                        <spike sp-js>
                            var items = [
                                { name: 'Jack' },
                                { name: 'Bob' }
                            ];
                        </spike>

                        <spike sp-foreach="item in items">
                            <div>{{ item.name }}</div>
                        </spike>

                    </script>
                </code>
             </pre>
        </p>
        <p>
            Usage with any DOM element:
        <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">

                        <spike sp-js>
                            var items = [
                                { name: 'Jack' },
                                { name: 'Bob' }
                            ];
                        </spike>

                        <ul>
                            <li sp-foreach="item in items">{{ item.name }}</li>
                        </ul>

                    </script>
                </code>
             </pre>
        </p>
        <p>
            You can also pass second variable which will be our item index.
            <br/>Let's call it <b>index</b>:
        <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">

                        <spike sp-js>
                            var items = [
                                { name: 'Jack' },
                                { name: 'Bob' }
                            ];
                        </spike>

                        <ul>
                            <li sp-foreach="item, index in items">Index: {{ index }}, name: {{ item.name }}</li>
                        </ul>

                    </script>
                </code>
             </pre>
        </p>
    </div>
</div>