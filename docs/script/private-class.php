<div class="box" id="private-class">
    <div class="title">private-class</div>
    <div class="desc">

        <p>
            <b>private class</b> is special class type which can be as well as <b>static</b> as normal class.
            <br/>
            Every <b>spike</b> file has to have class (may be static) and has to be declared after <b>package</b> or after <b>imports</b> declarations.
            <br/>
            To point to current class instance just use <b>this</b> keyword or safer equivalent <b>$this</b> in class body.
            <br/>
            <b>private-class</b> can be used in any spike file, alongside with another classes.
            <br/>
            Every spike file can contain lot of private classes instead of single public
        </p>
        <p>
            An empty private class alongside another class:
            <pre>
                <code class="language-js">
                    package app.model;

                    class Customer {

                        status: null,

                        Customer: function(){
                            this.status = new CustomerStatus();
                        }

                    }

                    private class CustomerStatus {

                        status: 'ACTIVE',
                        mailSend: false

                    }
                </code>
             </pre>
        </p>
        <p>
            Private class can be also <b>static</b>:
            <pre>
                <code class="language-js">
                package app.model;

                class Person {

                    educationYears: null,
                    age: null,
                    city: null,

                    Person: function(educationYears, age, city){
                        this.educationYears = educationYears;
                        this.age = age;
                        this.city = city;

                        this.proposedSalary = PersonUtils.calculateSalary(this);
                    }

                }

                private static class PersonUtils {

                    calculateSalary: function(person){
                        return person.age * person.educationYears * 50;
                    }

                }
                </code>
             </pre>
        </p>
    </div>
</div>