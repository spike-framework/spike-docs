<div class="box" id="class-abstract">
    <div class="title">class abstract</div>
    <div class="desc">

        <p>
            Spike <b>class</b> can contain <b>abstract</b> fields and functions which are something like interface for inheriting classes.
        </p>
        <p>
            Example class with abstract field:
            <br/>Let's say, not every animal has name.
            <pre>
                <code class="language-js">
                    package app.model;

                    class Animal {
                        abstract name;
                    }
                </code>
             </pre>
            <pre>
                <code class="language-js">
                    var person = new Animal();
                    person.name = 'Jack';

                    var elephant = new Animal();

                </code>
             </pre>
        </p>
        <p>
            Example class with abstract function:
            <br/>Let's say, not every phone has NFC.
            <pre>
                <code class="language-js">
                    package app.model;

                    class Phone {
                        abstract function switchOnNFC;
                    }
                </code>
             </pre>
             Smartphones has:
             <pre>
                <code class="language-js">
                    package app.model;

                    class Smartphone extends Phone {

                        switchOnNFC: function(){
                        //do logic
                        }

                    }
                </code>
             </pre>
             Old mobiles not:
             <pre>
                <code class="language-js">
                    package app.model;

                    class OldMobile extends Phone {

                    }
                </code>
             </pre>
        </p>
    </div>
</div>