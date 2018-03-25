<div class="box" id="sp-not-project">
    <div class="title">sp-not-project</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can be used only with <b>spike</b> element
        </p>

        <p>
            <b>sp-not-project</b> processor is used to create <b>if</b> statement which is <b>executed during compilation time</b>.
            <br/>
            Templates compiler module can accept <b>constant</b> parameters as last one:
            <br/>
            java -jar spike-transpiler.jar templates src/app dist/js/templates.js dist/js/watchers.js new <b>PROJECT:PROJECT_NAME,ENV:ENV_TYPE</b>
            <br/>
            <b>sp-not-project</b> is in opposite to <b>sp-project</b> processor.
        </p>
        <p>
            Let's execute <b>templates compiler</b> with <b>PROJECT:DEMO</b> constant and use it:
            <br/>In this case in result <b>spike</b> element with non-demo project will be cut off from final template.
        <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">

                        <spike sp-project="FACEBOOK">
                           This will be removed in compiler output
                        </spike>
                        <spike sp-not-project="OTHER">
                           This will be used when we pass PROJECT:DEMO to compiler
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

                        @if PROJECT = 'DEMO'
                        apiUrl: 'demo api',
                        @endif

                        @if PROJECT != 'DEMO'
                        apiUrl: 'common api'
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