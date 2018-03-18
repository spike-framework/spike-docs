<div class="box" id="this">
    <div class="title">this</div>
    <div class="desc">

        <p>
            <b>this</b> keyword in Spike language works <b>the same way</b> as in JavaScript.
            <br/>
            For convenience Spike introduce <b>$this</b> which is reference to <b>this</b> and avoids <b>self declarations</b>.
            <br/>
            In general <b>$this</b> is just <b>var $this = this;</b> piece of code added on begging of every function.
        </p>
        <p>
            An example usage of <b>$this</b>:
            <pre>
                <code class="language-js">
                    package app.service;

                    static class StatusManager {

                        status: 200,

                        getCurrentStatus: function(){
                            return $this.status;
                        }

                    }
                </code>
             </pre>
            In equivalent we can use <b>this</b>:
            <pre>
                <code class="language-js">
                    package app.service;

                    static class StatusManager {

                        status: 200,

                        getCurrentStatus: function(){
                            return this.status;
                        }

                    }
                </code>
             </pre>
        </p>
        <p>
            Look on example with <b>asynchronous callbacks</b>:
            <pre>
                <code class="language-js">
                    package app.service;

                    static class CustomerApi {

                        sessionData: null,

                        session: function(){

                            return Rest.get('/session')
                                .then(function(response){
                                    $this.sessionData = response;
                                });

                        }

                    }
                </code>
             </pre>
            If we won't use <b>$this</b> then we have to declare <b>self</b>:
            <pre>
                <code class="language-js">
                    package app.service;

                    static class CustomerApi {

                        sessionData: null,

                        session: function(){
                            var self = this;

                            return Rest.get('/session')
                                .then(function(response){
                                    self.sessionData = response;
                                });

                        }

                    }
                </code>
             </pre>
        </p>
    </div>
</div>