<div class="box" id="class-super">
    <div class="title">class-super</div>
    <div class="desc">

        <p>
            <b>super</b> keyword in Spike language is used to get <b>function or field</b> from <b>parent</b> class.
            <br/>
        </p>
        <p>
            Full example of inheritance and getting super function:
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