<div class="box" id="fields-decorators">
    <div class="title">fields-decorators</div>
    <div class="desc">

        <p>
            Field decorators are small code hints signed with <b>@</b> tag above <b>field</b> in classes
            <br/>
            Decorators doesn't affect on code - it's only indicator for developer which type <b>should be</b> decorated field
        </p>
        <p>
            All allowed decorators:
            <pre>
                <code class="language-js">
                    package app.model;

                    class Person {

                        @string
                        name: 'Jack,

                        @number
                        age: 20,

                        @array
                        experience: [],

                        @object
                        mother: null,

                        @map
                        educationYears: null,

                    }
                </code>
             </pre>
        </p>
    </div>
</div>