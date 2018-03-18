<div class="box" id="static-class">
    <div class="title">static-class</div>
    <div class="desc">

        <p>
            <b>static class</b> is special class type <b>singleton</b> which means, there's exist only one instance of this class.
            <br/>
            Every <b>spike</b> file has to have class (may be static) and has to be declared after <b>package</b> or after <b>imports</b> declarations.
            <br/>
            To point to current class instance just use <b>this</b> keyword or safer equivalent <b>$this</b> in class body.
            <br/>
            <b>static-class</b> can be used in many cases, like <b>business services</b>, <b>configurations</b> and everywhere where fast access and data persistence is required.
            <br/>Spike file can contain only one public class and one static
        </p>
        <p>
            An example static class:
            <pre>
                <code class="language-js">
                    package app.service;

                    static class Authorization {

                        allowedCustomerStatus: [
                            'TEMPORARY',
                            'ACTIVE'
                        ],

                        isAllowed: function(customerStatus){
                            return this.allowedCustomerStatus.indexOf(customerStatus) > -1;
                        }

                    }
                </code>
             </pre>
            Let's use our static class in public one:
            <pre>
                <code class="language-js">
                    package app.model;

                    import Authorization from spike.service.Authorization;

                    class Customer {

                        customerStatus: 'ACTIVE',

                        isAllowed: function(){
                            return Authorization.isAllowed(this.customerStatus);
                        }

                    }
                </code>
             </pre>
        </p>

    </div>
</div>