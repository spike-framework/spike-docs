<div class="box" id="sp-env">
    <div class="title">sp-env</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can be used only with <b>spike</b> element
        </p>

        <p>
            <b>sp-env</b> processor is used to create <b>if</b> statement which is <b>executed during compilation time</b>.
            <br/>
            Templates compiler module can accept <b>constant</b> parameters as last one:
            <br/>
            java -jar spike-transpiler.jar templates src/app dist/js/templates.js dist/js/watchers.js new <b>PROJECT:PROJECT_NAME,ENV:ENV_TYPE</b>
        </p>
        <p>
            Let's execute <b>templates compiler</b> with <b>ENV:DEV</b> constant and use it:
            <br/>In this case in result <b>spike</b> element with non-dev env will be cut off from final template.
        <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">

                        <spike sp-env="DEV">
                            This will be used when we pass ENV:DEV to compiler
                        </spike>
                        <spike sp-env="PROD">
                            This will be removed in compiler output
                        </spike>

                    </script>
                </code>
             </pre>
        </p>
        <p>
            What to do when we want use it in Spike classes?
            <br/>Just use <b>@if</b> and <b>@endif</b> keywords.
            <br/><b>@if</b> statement accepts any condition which uses <b>ENV</b> or <b>PROJECT</b> constants, so we can for example do this:
        <pre>
                <code class="language-js">

                    class Config {

                        @if ENV = 'PROD'
                        apiUrl: '',
                        @endif

                        @if ENV = 'DEV'
                        apiUrl: 'https://server.com/',
                        @endif

                    }

                </code>
             </pre>
        </p>
        <p>
        <pre>
                <code class="language-js">

                    class Config {

                        @if PROJECT = 'DEMO' && ENV = 'DEV'
                        serverUrl: 'https://server.com/',
                        @endif

                        @if PROJECT = 'DEMO' && ENV = 'PROD'
                        serverUrl: '/',
                        @endif

                    }

                </code>
             </pre>
        </p>
    </div>
</div>