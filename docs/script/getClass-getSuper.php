<div class="box" id="getClass-getSuper">
    <div class="title">getClass-getSuper</div>
    <div class="desc">

        <p>
            Spike <b>classes</b> contains <b>inheritance functions</b> which are: <b>getClass</b> and <b>getSuper</b>.
            <br/>
            <b>getClass</b> returns full current class instance package string, where <b>getSuper</b> return parent class full package string - or <b>null</b> when there's no parent.
        </p>
        <p>
            Let's define some classes using inheritance:
            <pre>
                <code class="language-js">
                    package app.model;

                    class Employee {
                    }
                </code>
             </pre>
            <pre>
                <code class="language-js">
                    package app.model;

                    import Employee from app.model.Employee;

                    class Manager extends Employee{
                    }
                </code>
             </pre>
        </p>
        <p>
            Then we can create objects and get package full names from <b>getClass</b> and <b>getSuper</b>:
            <pre>
                <code class="language-js">

                    var employee = new Employee();

                    employee.getClass() === 'app.model.Employee';
                    employee.getSuper() === null
                </code>
             </pre>
            <pre>
                <code class="language-js">
                    var manager = new Manager();

                    employee.getClass() === 'app.model.Manager';
                    employee.getSuper() === 'app.model.Employee'
                </code>
             </pre>
        </p>
    </div>
</div>