<div class="box" id="packages">
    <div class="title">packages</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Packages are required in every file
        </p>

        <p>
            <b>package</b> keyword helps organize project and inform which class is in which directory in file.
            <br/>
            The package correspond to file location in project, so if we put file in directory <b>app > model</b> then all files in this directory will have package <b>app.model</b>.
        </p>
        <p>
            <b>package</b> have to be declared on file begin before any other characters:
            <pre>
                <code class="language-js">
                    package app.model;
                </code>
             </pre>
        </p>
        <p>
            Full example with <b>class</b>:
            <pre>
                <code class="language-js">
                    package app.model;

                    class Person {

                    }
                </code>
             </pre>
        </p>
        <p>
            Summarize our example with directory tree:
            <div class="files">
                <pre file="Person.spike">
                   <code class="language-js">
                    package app.model;

                    class Person {

                    }
                   </code>
                </pre>
                <pre file="Files structure">
                   <code class="language-treeview">
                        app/
                        |-- model/
                        |   |-- Person.spike
                        </code>
                </pre>
            </div>
        </p>

    </div>
</div>