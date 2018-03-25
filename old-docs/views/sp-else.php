<div class="box" id="sp-else">
    <div class="title">sp-else</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can be used both on <b>spike</b> tag and other DOM elements
        </p>

        <p>
            <b>sp-else</b> processor is used to evaluate JavaScript <b>else</b> statement in Spike templates.
            <br/>
            This processor can be used only with <b>sp-if</b> processor as it's completion.
        </p>
        <p>
            Usage with <b>spike</b> and <b>sp-if</b> element:
            <br/>In this case, result will be only printed text inside element with <b>sp-else</b> processor.
        <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">

                        <spike sp-if="0 > 1">
                            this is false
                        </spike>
                        <spike sp-else>
                            this is true
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

                        <div sp-if="scope.person.age > 18">
                            Is adult
                        </div>
                        <div sp-else>
                            Is teenager
                        </div>

                    </script>
                </code>
             </pre>
        </p>
    </div>
</div>