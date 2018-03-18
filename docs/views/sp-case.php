<div class="box" id="sp-case">
    <div class="title">sp-case</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can be used only with <b>spike</b> element
        </p>

        <p>
            <b>sp-case</b> processor is used to evaluate JavaScript <b>case</b> statement in Spike templates.
            In general, this processor's tag can contain JavaScript code which can be used in normal <b>case</b> statement.
            <br/>
            This processor can be used only with <b>sp-switch</b> processor.
            <br/>
            <b>sp-case</b> can also use special <b>sp-break</b> processor to evaluate JavaScript <b>break</b> keyword.
        </p>
        <p>
            Basic usage with <b>sp-switch</b> processor:
            <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">

                        <spike sp-js="var status = 200"></spike>

                        <spike sp-switch="status">
                            <spike sp-case="200">
                                This is the case!
                            </spike>
                        </spike>

                    </script>
                </code>
             </pre>
        </p>
        <p>
            Usage with <b>sp-switch</b> and <b>sp-break</b> processor:
            <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">

                        <spike sp-js="var status = 200"></spike>

                        <spike sp-switch="status">
                            <spike sp-case="200" sp-break>
                                This is the case!
                            </spike>
                            <spike sp-case="500" sp-break>
                                This is the error!
                            </spike>
                        </spike>

                    </script>
                </code>
             </pre>
        </p>
    </div>
</div>