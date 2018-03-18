<div class="box" id="class">
    <div class="title">class</div>
    <div class="desc">

        <p>
            <b>class</b> keyword in Spike declares code template for creating object.
            <br/>
            Class is basic element of <b>object-oriented</b> programming in Spike Script.
            <br/>
            Every <b>spike</b> file has to have class (may be static) and has to be declared after <b>package</b> or after <b>imports</b> declarations.
            <br/>
            To point to current class instance just use <b>this</b> keyword or safer equivalent <b>$this</b> in class body.
            <br/>Spike file can contain only one public class and one static
        </p>
        <p>
            An empty public class:
            <pre>
                <code class="language-js">
                    package app.model;

                    class Person {

                    }
                </code>
             </pre>
        </p>
        <p>
            Class with <b>imports</b>:
            <pre>
                <code class="language-js">
                    package app.model;

                    import Car from app.model.Car;

                    class Person {

                    }
                </code>
             </pre>
        </p>

    </div>
</div>