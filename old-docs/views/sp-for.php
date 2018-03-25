<div class="box" id="sp-if">
    <div class="title">sp-for</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can be used both on <b>spike</b> tag and other DOM elements
        </p>

        <p>
            <b>sp-for</b> processor is used to evaluate JavaScript <b>for</b> loop in Spike templates.
            This processor can contain <b>in-build expression</b> or plain <b>JavaScript for loop statement</b>
            <br/>
        </p>
        <p>
            Usage with <b>spike</b> element:
            <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">

                        <spike sp-js="var items = [1,2,3,4]"></spike>

                        <spike sp-for="item in items">
                            <div>{{ item }}</div>
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

                        <spike sp-js="var items = [1,2,3,4]"></spike>

                        <ul>
                            <li sp-for="item in items">{{ item }}</li>
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

                        <spike sp-js="var items = [1,2,3,4]"></spike>

                        <ul>
                            <li sp-for="item, index in items">
                            Index: {{ index }}, value: {{ item }}
                            </li>
                        </ul>

                    </script>
                </code>
             </pre>
        </p>
        <p>
            If you need, for example, reverse iteration, you can use normal for loop conditions inside <b>sp-for</b>:
        <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">

                        <spike sp-js="var items = [1,2,3,4]"></spike>

                        <ul>
                            <li sp-for="var i = items.length-1; i >= 0; i--">
                                Index: {{ i }}, value: {{ items[i] }}
                            </li>
                        </ul>

                    </script>
                </code>
             </pre>
        </p>
    </div>
</div>