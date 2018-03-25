<div class="box" id="sp-default">
    <div class="title">sp-default</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can be used only with <b>spike</b> element
        </p>

        <p>
            <b>sp-default</b> processor is used to evaluate JavaScript <b>default</b> statement in Spike templates.
            <br/>This processor can be used only with <b>sp-switch</b> processor.
        </p>
        <p>
            Usage with <b>sp-switch</b> and <b>sp-case</b> and <b>sp-break</b> processor:
        <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">

                        <spike sp-js="var status = 100"></spike>

                        <spike sp-switch="status">
                            <spike sp-case="200" sp-break>
                                This is the case!
                            </spike>
                            <spike sp-case="500" sp-break>
                                This is the error!
                            </spike>
                            <spike sp-default>
                                Sorry, unknown error!
                            </spike>
                        </spike>

                    </script>
                </code>
             </pre>
        </p>
    </div>
</div>