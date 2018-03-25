<div class="box" id="class-fields">
    <div class="title">class fields</div>
    <div class="desc">

        <p>
            Spike <b>class</b> can contain fields, which are can be as well as primitives as objects as arrays.
            <br/>
            Fields works the same way like in JavaScript prototypes (for normal class) or objects (for static class).
            <br/>
            Good practice is to initialize fields with <b>null</b>.
            <br/>
            To access fields in class just use <b>this</b> keyword or safer equivalent <b>$this</b>.
        </p>
        <p>
            Example class with primitive fields:
            <pre>
                <code class="language-js">
                    package app.model;

                    class Person {

                        name: 'Jack',
                        age: 20,

                    }
                </code>
             </pre>
        </p>
        <p>
            We can also define objects and arrays:
            <pre>
                <code class="language-js">
                    package app.model;

                    class Person {

                        courses: [
                            { year: 2018, type: 'JavaScript' },
                            { year: 2018, type: 'Spike' }
                        ],

                        experience: {
                            2014: {},
                            2015: {},
                            2016: {}
                        }

                    }
                </code>
             </pre>
        </p>
        <p>
            Let's set some fields values during object creation in constructor:
            <pre>
                <code class="language-js">
                    package app.model;

                    class Person {

                        name: null,
                        age: null,

                        Person: function(){
                            this.name = 'Bob';
                            this.age = 30;
                        }


                    }
                </code>
             </pre>
        </p>
    </div>
</div>