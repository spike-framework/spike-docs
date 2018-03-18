<div class="box" id="sp-js">
    <div class="title">sp-js</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can be used only with <b>spike</b> element
        </p>

        <p>
            <b>sp-js</b> processor is used to execute JavaScript code into templates.
            In general this behaviour is bad practice but sometimes we need declare inner variable in template
            or just make some welding.
        </p>
        <p>
            Inline version:
        <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">
                        <spike sp-js="var myName = 'Jack'"></spike>
                        {{ myName }}
                    </script>
                </code>
             </pre>
        </p>
        <p>
            Multiline version:
        <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">
                        <spike sp-js>

                            var result = scope.productValue + scope.providerFee;

                            if(result > 10.0){
                                result = result/2;
                            }

                            result = result + (result * scope.tax)/100;

                        </spike>

                        Total cost: {{ result }}

                    </script>
                </code>
             </pre>
        </p>
    </div>
</div>