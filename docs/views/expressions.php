<div class="box" id="expressions">
    <div class="title">Expressions</div>
    <div class="desc">

        <p>
            In Spike, expressions are JavaScript code snippets that are usually placed in double curly braces like {{ expression }}.
            Expressions are transformed into JavaScript during templates compilation.
        </p>
        <p>
            For example, we can create such expressions:
        </p>
        Evaluate addition:
        <pre>
            <code class="language-markup">
                <script type="prism-html-markup">
                    <div>{{ 1 + 1 }}</div>
                </script>
            </code>
        </pre>
        Print variable:
        <pre>
            <code class="language-markup">
                <script type="prism-html-markup">
                    <div>{{ scope.name }}</div>
                </script>
            </code>
         </pre>

        Crate placeholder:
        <pre>
            <code class="language-markup">
                <script type="prism-html-markup">
                    <input type="text" placeholder="{{ 'Name' }}" />
                </script>
            </code>
        </pre>
        Class adding:
        <pre>
            <code class="language-markup">
                <script type="prism-html-markup">
                    <div class="{{ scope.isOk ? 'show' : 'hide' }}">
                    Show if condition passed
                    </div>
                </script>
            </code>
        </pre>
        Execute function:
        <pre>
            <code class="language-markup">
                <script type="prism-html-markup">
                    <div>{{ scope.getPersonName() }}</div>
                </script>
            </code>
        </pre>
        <p>
            As you see, we can use expressions in many cases to template our view
        </p>

    </div>
</div>