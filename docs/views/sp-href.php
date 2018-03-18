<div class="box" id="sp-href">
    <div class="title">sp-href</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can't be used with <b>spike</b> element
        </p>

        <p>
            <b>sp-href</b> processor is used to transform plain HTML href links into Spike router redirects.
            Spike offers single-page architecture but effort of this is, page shouldn't be reloaded often.
            <br/>
            Using plain <b>href</b> attribute you can navigate through pages but every time page will be reloaded
            which is against single-page architecture fundamentals. To avoid this, you can use <b>sp-href</b> processor instead of <b>href</b> attribute
            to give Spike control over hyperlinks.

        </p>
        <p>
            Plain href usage:
            <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">
                        <a href="/home">Link to the home</a>
                    </script>
                </code>
             </pre>
        </p>
        <p>
            Spike href equivalent usage:
            <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">
                        <a sp-href="/home">Link to the home controlled by spike</a>
                    </script>
                </code>
             </pre>
        </p>
        <p>
            In both cases you can also create dynamic links with <b>expressions</b>:
            <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">
                        <a sp-href="{{ '/person/'+scope.personId }}">Show person {{ scope.personId }}</a>
                    </script>
                </code>
             </pre>
        </p>
        <p>
            You can also use <b>Router</b> module to create complicated links.
            <br/>
            <b>Router.createLink(pathValue, pathParams, urlParams)</b> can be used to do this:
            <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">
                        import Router from spike.core.Router;

                        <a sp-href="{{ Router.createLink('/activate/:id', { id: scope.personId }, { status: 'OK' }) }}">Activate</a>
                    </script>
                </code>
             </pre>
        </p>
    </div>
</div>