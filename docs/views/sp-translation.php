<div class="box" id="sp-translation">
    <div class="title">sp-translation</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can't be used with <b>spike</b> element
        </p>

        <p>
            <b>sp-translation</b> processor is used to replace element content with <b>translation</b> from given key
            <br/>
            Processor will replace all existing content in element, so element should be empty
        </p>
        <p>
            Basic usage:
            <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">
                        <span sp-translation="simple_key"></span>
                    </script>
                </code>
             </pre>
        </p>
        <p>
            Translation file:
            <pre>
               <code class="language-json">
                     {
                        "simple_key" : "This is simple translation",
                        "with_arguments" : "This contains arguments {0} {1}"
                     }
               </code>
            </pre>
        </p>
        <p>
            Let's use <b>sp-params</b> processor:
            <pre>
               <code class="language-markup">
                   <script type="prism-html-markup">
                       <span sp-translation="with_arguments" sp-params="'first argument', 'second argument'"></span>
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
                    <span sp-translation="with_arguments" sp-params="scope.name, scope.surname"></span>
                    <span sp-translation="with_arguments" sp-params="[scope.name, scope.surname]"></span>
                   </script>
               </code>
            </pre>
        </p>
        <p>
            What about dynamic translation keys? We can do it just using <b>Message</b> class and <b>expression</b>:
            <pre>
               <code class="language-markup">
                   <script type="prism-html-markup">
                       import Message from spike.core.Message;

                       <span>{{ Message.get('dynamic_translation_'+scope.id) }}</span>

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

                       <span>{{ Message.get('dynamic_translation_'+scope.id, [scope.name, scope.surname]) }}</span>

                   </script>
               </code>
            </pre>
        </p>
    </div>
</div>