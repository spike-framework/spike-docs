<div class="box" id="sp-params">
    <div class="title">sp-params</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can be used both on <b>spike</b> tag and other DOM elements
        </p>

        <p>
            <b>sp-params</b> processor is <b>helper</b> type of processor and is used to pass certain data to another processor.
            This processor is always optional, by default passing <b>scope</b> or empty array.
            <br/>
            Processors using <b>sp-params</b>:
            <ul>
                <li>sp-template  - by default passing scope</li>
                <li>sp-element  - by default passing scope</li>
                <li>sp-placeholder - by default passing empty array</li>
                <li>sp-translation - by default passing empty array</li>
            </ul>
        </p>
        <p>
            Example with <b>sp-placeholder</b>:
            <pre>
               <code class="language-markup">
                   <script type="prism-html-markup">
                       <input type="text" sp-placeholder="provider_placeholder" sp-params="scope.providerName"></span>
                   </script>
               </code>
            </pre>
        </p>
        <p>
            Example with <b>sp-translation</b>:
            <pre>
               <code class="language-markup">
                   <script type="prism-html-markup">
                       <span sp-translation="provider_name" sp-params="scope.providerId"></span>
                   </script>
               </code>
            </pre>
        </p>
        <p>
            Example with <b>sp-template</b>:
            <pre>
               <code class="language-markup">
                   <script type="prism-html-markup">
                       <spike sp-template="app.template.common" sp-params="{ surname: scope.surname }"></span>
                   </script>
               </code>
            </pre>
        </p>
        <p>
            Example with <b>sp-element</b>:
            <pre>
               <code class="language-markup">
                   <script type="prism-html-markup">
                       <spike sp-element="app.element.registerForm.RegisterForm" sp-params="{ type: 'CLIENT' }"></span>
                   </script>
               </code>
            </pre>
        </p>
    </div>
</div>