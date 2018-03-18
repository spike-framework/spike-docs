<div class="box" id="class-functions">
    <div class="title">class functions</div>
    <div class="desc">

        <p>
            Spike <b>class</b> can contain functions, which are works the same way like in JavaScript
            <br/>
            To access functions in class just use <b>this</b> keyword or safer equivalent <b>$this</b>.
        </p>
        <p>
            Example class with empty function:
            <pre>
                <code class="language-js">
                    package app.model;

                    class Person {

                        getAge: function(){

                        }

                    }
                </code>
             </pre>
        </p>
        <p>
            Let's declare setter and getter for name field:
            <pre>
                <code class="language-js">
                    package app.model;

                    class Person {

                        name: null,

                        setName: function(name){
                            this.name = name;
                        },

                        getName: function(){
                            return this.name;
                        }

                    }
                </code>
             </pre>
        </p>
    </div>
</div>