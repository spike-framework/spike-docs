<div class="box" id="sp-keep-name">
    <div class="title">sp-keep-name</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Can't be used with <b>spike</b> element
        </p>

        <p>
            Because of spike <b>unique selectors</b> mechanism, sometimes we need to skip making name attributes unique.
            <b>sp-keep-name</b> processor is created to do this.
        </p>
        <p>
            Example usage:
        <pre>
                <code class="language-markup">
                    <script type="prism-html-markup">
                        <input type="text" id="nameInput" sp-keep-name/>
                    </script>
                </code>
             </pre>
        </p>
        <p>
            Then you can access element using <b>document.getElementById</b>:
        <pre>
                <code class="language-js">
                    document.getElementById('nameInput')
                </code>
            </pre>
        </p>
    </div>
</div>