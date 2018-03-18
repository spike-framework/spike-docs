<div class="box" id="sp-while">
    <div class="title">sp-while</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can be used only with <b>spike</b> element
        </p>

        <p>
            <b>sp-while</b> processor is used to evaluate JavaScript <b>while</b> loop in Spike templates.
            This processor statement can contain any conditions as follow as in JavaScript
            <br/>
        </p>
        <p>
            Example while loop usage:
        <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">

                        <spike sp-js="var counter = 0"></spike>

                        <spike sp-while="counter < 10">

                           {{ counter }}

                           <spike sp-js="counter++"></spike>

                        </spike>

                    </script>
                </code>
             </pre>
        </p>
    </div>
</div>