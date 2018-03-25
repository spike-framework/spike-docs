<div class="box" id="sp-switch">
    <div class="title">sp-switch</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can be used only with <b>spike</b> element
        </p>

        <p>
            <b>sp-switch</b> processor is used to evaluate JavaScript <b>switch</b> statement in Spike templates.
            In general, this processor's tag can contain JavaScript code which can be used in normal <b>switch</b> statement.
            <br/>
            Of course <b>switch</b> cannot work without <b>case</b> so you can use <b>sp-case</b> processor to complement <b>sp-switch</b>.
            <br/>
            Also to use <b>break</b> keyword, you can provide additional <b>sp-break</b> processor.
        </p>
        <p>
            Basic syntax:
            <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">

                        <spike sp-js="var status = 200"></spike>

                        <spike sp-switch="status">
                        </spike>

                    </script>
                </code>
             </pre>
        </p>
        <p>
            Basic usage with <b>sp-case</b> processor:
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
            Usage with <b>sp-case</b> and <b>sp-break</b> processor:
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
        <p>
            Usage with <b>sp-case</b> and <b>sp-break</b> and <b>sp-default</b> processor:
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
                            <spike sp-default>
                                Sorry, unknown status!
                            </spike>
                        </spike>

                    </script>
                </code>
             </pre>
        </p>
    </div>
</div>