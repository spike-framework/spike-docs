<div class="box" id="inheritance">
    <div class="title">inheritance</div>
    <div class="desc">

        <p>
            <b>inheritance</b> in Spike language is realized by extending <b>only one</b> class at the time.
            <br/>
            You can build chain of inherited classes and if you need some more abstraction, you can use <b>abstract</b>
            to create <b>abstract fields and functions</b>.
        </p>
        <p>
            Inheritance in examples:
        <pre>
                <code class="language-js">
                    package app.model;

                    class Employee {

                        name: null,
                        surname: null,

                        Employee: function(name, surname){
                            this.name = name;
                            this.surname = surname;
                        }

                    }
                </code>
             </pre>
        <pre>
                <code class="language-js">
                    package app.model;

                    import Employee from app.model.Employee;

                    class Manager extends Employee {

                        bonus: 0,
                        Manager: function(name, surname, bonus){
                            this.name = name;
                            this.surname = surname;
                            this.bonus = bonus;
                        }

                    }
                </code>
             </pre>
        </p>
        <p>
            Then you can create object <b>Manager</b> which inherit fields from <b>Employee</b> and also inherits <b>constructor</b>:
            <pre>
                <code class="language-js">
                    var manager = new Manager("Jack", "Strong");

                    manager.getClass() === 'app.model.Manager'
                    manager.getSuper() === 'app.model.Employee'

                    var managerWithBonus = new Manager("Jack", "Strong", 500);

                    managerWithBonus.getClass() === 'app.model.Manager'
                    managerWithBonus.getSuper() === 'app.model.Employee'

                </code>
             </pre>
        </p>
        <p>
            You can also use <b>super</b> keyword to get super-functions and super-fields:
            <pre>
                <code class="language-js">
                package app.model;

                class Employee {

                    getPosition: function(){
                        return "worker";
                    }

                }
                </code>
             </pre>
            <pre>
                <code class="language-js">
                package app.model;

                import Employee from app.model.Employee;

                class Manager extends Employee {

                    getPosition: function(){
                        return "manager";
                    }

                }
                </code>
             </pre>
            <pre>
                <code class="language-js">
                var manager = new Manager();

                manager.getPosition() === 'manager'
                manager.super.getPosition() === 'worker'

                </code>
             </pre>
        </p>
    </div>
</div>