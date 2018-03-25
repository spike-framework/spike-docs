<div class="box" id="imports">
    <div class="title">imports</div>
    <div class="desc">

        <p class="alert">
            <i class="ion ion-alert"></i> Imports are optional
        </p>

        <p>
            <b>import</b> keyword helps organize project and create alias to <b>package</b>.
            <br/>
            The import can provide full location of certain class in project.
        </p>
        <p>
            <b>imports</b> have to be declared immediately after <b>package</b> declaration and before any <b>classes</b> declarations:
            <pre>
                <code class="language-js">
                    package app.model;

                    import Car from app.model.Car;

                </code>
             </pre>
        </p>
        <p>
            Full example with <b>class</b>:
            <pre>
                <code class="language-js">
                    package app.model;

                    import Car from app.model.Car;

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
                       import Car from app.model.Car;

                    class Person {

                       personCar: null,

                       Person: function(){
                        this.personCar = new Car();
                       }

                    }
                   </code>
                </pre>
                <pre file="Files structure project">
                   <code class="language-treeview">
                        app/
                        |-- model/
                        |   |-- Person.spike
                        |   |-- Car.spike
                        </code>
                </pre>
            </div>
        </p>

    </div>
</div>