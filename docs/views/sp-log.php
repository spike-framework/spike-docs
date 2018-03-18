<div class="box" id="sp-log">
    <div class="title">sp-log</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can be used only with <b>spike</b> element
        </p>

        <p>
            <b>sp-log</b> processor is used to logging certain data on <b>console</b>.
            Processor uses <b>spike.core.Log.templateLog</b> function to log data on console.
            <br/>
            Data printed on console via this processor is coloured <b style="color: chocolate;">chocolate</b>.
        </p>
        <p>
            Basic usage:
            <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">
                        <spike sp-log="scope.providerId"></span>
                    </script>
                </code>
             </pre>
        </p>
        <p>
            Print whole scope:
            <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">
                        <spike sp-log="scope"></span>
                    </script>
                </code>
             </pre>
        </p>
    </div>
</div>