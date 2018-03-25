<div class="box" id="sp-if">
    <div class="title">sp-if</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can be used both on <b>spike</b> tag and other DOM elements
        </p>

        <p>
            <b>sp-if</b> processor is used to evaluate JavaScript <b>if</b> statement in Spike templates.
            In general, this processor's tag can contain any JavaScript code which can be used in normal <b>if</b> statement.
        </p>
        <p>
            Usage with <b>spike</b> element:
            <br/>In this case, result will be only printed text inside <b>spike</b> tag.
            <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">

                        <spike sp-if="1 > 0">
                            1 is greater than 0
                        </spike>

                    </script>
                </code>
             </pre>
        </p>
        <p>
            Usage with any other DOM element:
            <br/>In this case, <b>div</b> element will be removed if statement doesn't qualify conditions.
        <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">

                        <div sp-if="scope.isActive(scope.person)">
                            Person {{ scope.person.name }} is active
                        </div>

                    </script>
                </code>
             </pre>
        </p>
    </div>
</div>