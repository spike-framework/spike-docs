<div class="box" id="sp-placeholder">
    <div class="title">sp-placeholder</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can't be used with <b>spike</b> element
        </p>

        <p>
            <b>sp-placeholder</b> processor is used to set element <b>placeholder</b> attribute with <b>translation</b> value from given key
        </p>
        <p>
            Basic usage:
        <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">
                        <span sp-placeholder="username_placeholder"></span>
                    </script>
                </code>
             </pre>
        </p>
        <p>
            Translation file:
        <pre>
               <code class="language-json">
                     {
                        "username_placeholder" : "Username",
                        "provider_placeholder" : "Provider {0} number"
                     }
               </code>
            </pre>
        </p>
        <p>
            Let's use <b>sp-params</b> processor:
            <pre>
               <code class="language-markup">
                   <script type="prism-html-markup">
                       <input type="text" sp-placeholder="provider_placeholder" sp-params="scope.providerName"></span>
                   </script>
               </code>
            </pre>
        </p>
        <p>
            By default, <b>sp-params</b> is empty array and don't have to be declared.
            <br/>
            When we want pass arguments, we can pass them with comma separator which will be transformed into array of arguments:
        <pre>
               <code class="language-markup">
                   <script type="prism-html-markup">

                    <input type="text" sp-placeholder="provider_placeholder" sp-params="scope.providerName"/>
                    <input type="text" sp-placeholder="provider_placeholder" sp-params="[scope.providerName]"/>

                   </script>
               </code>
            </pre>
        </p>
        <p>
            What about dynamic placeholder keys? We can do it just using <b>Message</b> class and <b>expression</b>:
        <pre>
               <code class="language-markup">
                   <script type="prism-html-markup">
                       import Message from spike.core.Message;

                       <input type="text" placeholder="{{ Message.get('provider_placeholder_'+scope.providerId) }}" />

                   </script>
               </code>
            </pre>
        </p>
        <p>
            Dynamic translation key with params:
        <pre>
               <code class="language-markup">
                   <script type="prism-html-markup">
                       import Message from spike.core.Message;

                       <input type="text" placeholder="{{ Message.get('provider_placeholder_'+scope.providerId, [scope.providerName]) }}" />

                   </script>
               </code>
            </pre>
        </p>
    </div>
</div>