<div class="box" id="enum">
    <div class="title">enum</div>
    <div class="desc">

        <p>
            <b>enum</b> keyword in Spike creates <b>static class</b> instance containing some constant data.
            <br/>
            Enumerator can be also private.
        </p>
        <p>
            Example enumerator:
            <pre>
                <code class="language-js">
                    package app.model;

                    enum Status {

                        OK: 200,
                        INTERNAL_SERVER_ERROR: 500

                    }
                </code>
             </pre>
        </p>
        <p>
            Enum can be private, let's use it internally with <b>class</b>:
            <pre>
                <code class="language-js">
                    package app.model;

                    class Response {

                        status: null,
                        data: null,

                        Response: function(data){

                            if(!data){
                                this.status = Status.NO_CONTENT;
                            }

                        }

                    }

                    private enum Status {

                        OK: 200,
                        NO_CONTENT: 201

                    }

                </code>
             </pre>
        </p>

    </div>
</div>