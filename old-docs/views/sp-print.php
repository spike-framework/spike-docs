<div class="box" id="sp-print">
    <div class="title">sp-print</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can be used both on <b>spike</b> tag and other DOM elements
        </p>

        <p>
            <b>sp-print</b> processor is used to print given variable.
            If processor is used on <b>spike</b> tag then variable is printed directly in place of this element.
            Otherwise variable is printed into element html, replacing all existing content.
        </p>
        <p>
            Basic usage:
            <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">
                        <spike sp-print="'Simple print'"></span>
                    </script>
                </code>
             </pre>
        </p>
        <p>
        <p>
            Usage with non-spike element:
            <pre>
               <code class="language-markup">
                   <script type="prism-html-markup">
                       <div sp-print="'Simple print in element'"></div>
                   </script>
               </code>
            </pre>
        </p>
        <p>
            <b>sp-print</b> processor can be replaced by <b>expressions</b>:
            <pre>
               <code class="language-markup">
                   <script type="prism-html-markup">
                       {{ 'Simple print' }}
                       <div>{{ 'Simple print in element' }}</div>
                   </script>
               </code>
            </pre>
        </p>
    </div>
</div>