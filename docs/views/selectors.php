<div class="box" id="expressions">
    <div class="title">Expressions</div>
    <div class="desc">

        <p>
            Spike has unique selectors feature which can handle multiple same id attributes in views and generates getters for them.
            <br/>
            Selectors are created for every element and template HTML view, so it allows you to declare the same id attribute in different views,
            summarize we can have non-unique id selectors on page.
            <br/>
        </p>
        For example, we have simple template:
        <pre>
            <code class="language-markup">
                <script type="prism-html-markup">
                   <div class="homeController">

                        <div id="title"></div>
                        <input id="name" type="text" />

                   </div>
                </script>
            </code>
        </pre>
        In Spike, we cannot access them using <b>document.getElementById</b> because framework creates unique id elements:
        <pre>
            <code class="language-markup">
                <script type="prism-html-markup">

                     <div id="title-3df34-f3f55"></div>
                     <input id="name-f54t3-aq2s3" type="text" />

                </script>
            </code>
         </pre>

        We have to use <b>selector</b> object to access elements:
        <pre>
            <code class="language-js">

                var titleElement = $this.selector.title();
                var nameElement = $this.selector.name();

                titleElement.innerHTML = 'This is title';
                nameElement.value = 'Eveline';

            </code>
        </pre>
        Also we can <b>skip making id attributes unique</b> for some good reason using <b>sp-keep-id</b>:
        <pre>
            <code class="language-markup">
                <script type="prism-html-markup">

                    <div>
                        <label for="accept-checkbox">Accept</label>
                        <input id="accept-checkbox" sp-keep-id type="checkbox" />
                    </div>

                </script>
            </code>
        </pre>
        Also, you can access <b>forms elements</b> using <b>$this.selector.names</b> object:
        <pre>
            <code class="language-markup">
                <script type="prism-html-markup">

                    <form autocomplete="off">
                        Username: <input type="text" name="username" />
                        Password: <input type="password" name="password" />
                    </form>

                </script>
            </code>
        </pre>
        Then you can access them easy way:
        <pre>
            <code class="language-js">

                var username = $this.selector.names.username().value;
                var password = $this.selector.names.password().value;

            </code>
        </pre>

    </div>
</div>