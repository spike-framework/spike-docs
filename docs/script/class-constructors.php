<div class="box" id="class-constructors">
    <div class="title">class constructors</div>
    <div class="desc">

        <p>
            Spike <b>class</b> can contain multiple constructors, which are works the same way like JavaScript functions.
            <br/>
            To access class instance in class body just use <b>this</b> keyword or safer equivalent <b>$this</b>.
            <br/>
            Every class has <b>default constructor</b> which don't have to be declared.
            <br/>
            Constructor function name is always <b>class name</b>.
            <br/>
            Constructors can be <b>overloaded</b> only with arguments number.
        </p>
        <p>
            Example class with default constructor:
            <pre>
                <code class="language-js">
                    package app.model;

                    class Person {

                        Person: function(){

                        }

                    }
                </code>
             </pre>
             We can create class instance without arguments:
             <pre>
                <code class="language-js">
                    var person = new Person();
                </code>
             </pre>
        </p>
        <p>
            Let's define some constructor with arguments:
            <pre>
                <code class="language-js">
                    package app.model;

                    class Person {

                        name: null,
                        age: null,

                        Person: function(name, age){
                            this.name = name;
                            this.age = age;
                        }

                    }
                </code>
             </pre>
             Then we can create some person instances:
             <pre>
                <code class="language-js">
                    var person = new Person();
                    var person2 = new Person('Bob', 32);
                </code>
             </pre>

        </p>
        <p>
            We can define few constructors but everyone has to have unique arguments number:
        <pre>
                <code class="language-js">
                    package app.model;

                    class Person {

                        name: null,
                        surname: null,
                        age: null,

                        Person: function(name){
                            this.name = name;
                            this.age = age;
                        },

                        Person: function(name, surname){
                            this.name = name;
                            this.surname = surname;
                        },

                        Person: function(name, surname, age){
                            this.name = name;
                            this.surname = surname;
                            this.age = age;
                        }

                    }
                </code>
             </pre>
             Then we can create multiple person instances:
             <pre>
                <code class="language-js">
                    var person = new Person();
                    var personWithName = new Person('Bob');
                    var personWithNameSurname = new Person('Bob', 'Marley');
                    var personWithNameSurnameAndAge = new Person('Bob', 'Marley', 32);
                </code>
             </pre>

        </p>
    </div>
</div>