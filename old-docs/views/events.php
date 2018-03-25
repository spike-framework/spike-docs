<div class="box" id="events">
    <div class="title">Events</div>
    <div class="desc">

        <p>
            In Spike, you can easy bind any event to elements using special <b>events processors</b>. If you wish bind click event, then simply use <b>sp-click</b>.
            <br/>Basically, every available event can be bind using schema: <b>sp-EVENT_NAME</b>.
            <br/>
            Every event attribute can contain JavaScript <b>expression</b>.
        </p>
        <p>
            We can bind events using such processors:
            <ul>
            <li>sp-click</li>
            <li>sp-change</li>
            <li>sp-keyup</li>
            <li>sp-keydown</li>
            <li>sp-keypress</li>
            <li>sp-blur</li>
            <li>sp-focus</li>
            <li>sp-dblclick</li>
            <li>sp-die</li>
            <li>sp-hover</li>
            <li>sp-keydown</li>
            <li>sp-mousemove</li>
            <li>sp-mouseover</li>
            <li>sp-mouseenter</li>
            <li>sp-mousedown</li>
            <li>sp-mouseleave</li>
            <li>sp-mouseout</li>
            <li>sp-submit</li>
            <li>sp-trigger</li>
            <li>sp-toggle</li>
            <li>sp-load</li>
            <li>sp-unload</li>
            </ul>
        </p>
        Example <b>click</b> event binding:
        <pre>
            <code class="language-markup">
                <script type="prism-html-markup">
                    <button type="button" sp-click="scope.clicked = true;">Click me</button>
                </script>
            </code>
        </pre>
        If you need <b>event</b> then just pass <b>event</b> variable into function:
        <pre>
            <code class="language-markup">
                <script type="prism-html-markup">
                    <form sp-submit="scope.submitForm(event)">

                        <input type="text" name="username" />
                        <button type="submit">Submit</button>

                    </form>
                </script>
            </code>
        </pre>
        Then in controller:
        <pre>
            <code class="language-js">
                package app.controller.form;

                import Controller from spike.core.Controller;

                class Form extends Controller {

                    Form: function(){
                    },

                    submitForm: function(event){
                        event.preventDefault();
                        //do stuff
                    }

                }
            </code>
        </pre>

    </div>
</div>