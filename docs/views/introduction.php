<div class="box" id="introduction">
    <div class="title">Introduction</div>
    <div class="desc">

        <p>
            An Spike template is the single HTML file which can contain spike processors and expressions.
            Some templates can be totally separate and reusable, another can be bind to spike element or controller.
            <br/>
            Template also can be only static HTML without any spike processors.
        </p>
        <p>
            These are the types of Spike specific features you can use in a template:
            <ul>
                <li>Expression - The double and triple curly brace notation to bind expressions to elements</li>
                <li>Processor - An attribute on DOM element which is transformed into JavaScript behaviour during template compilation</li>
            </ul>
        </p>

        <p>
            Important feature of Spike are <b>sp-watch</b> and <b>sp-bind</b> processors, which allows developer to make some part of DOM be <b>two-way bind</b> with given controller or element.
        </p>
        <p>
            In Spike, two-way binding is only declarative so if you don't declare <b>sp-watch</b> or <b>sp-bind</b> then template will be rendered only once and only place where you can modify data
            before rendering, is class constructor.
        </p>
        <p>
            Every template in Spike, have got passed <b>scope</b> variable which is directly reference to <b>element's class instance</b>
        </p>

    </div>
</div>