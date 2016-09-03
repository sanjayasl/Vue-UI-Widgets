<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/vue-ui-widgets.css" />
</head>
<body>
<?php include_once 'components/vue.widgets.php';?>
<div id="app">
    <h2>Modal</h2>
    <button @click="show = true">Show Modal</button>
    <modal :show.sync="show"></modal>

    <button @click="show2 = true">Show Modal</button>
    <modal :show.sync="show2">
        <div slot="header">
            <h3>This is custom header</h3>
        </div>
        <div slot="footer">This is custom footer</div>
    </modal>
    <h2>Tabs</h2>
    <tabs
        :tabnames = "['Tab 1', 'Tab 2']"
        >
        <div slot="tabdata">
            <div>
                <h3>Form Builder</h3>
            </div>
            <div class="post_type_settings">
                <h3>Post Settings</h3>
            </div>
        </div>
    </tabs>
    <h2>Accordion</h2>
    <accordion>
        <div slot="acc-panel">
            <button>Section 1</button>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button>Section 2</button>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button>Section 3</button>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </accordion>
    <h2>Accordion 2</h2>
    <accordion>
        <div slot="acc-panel">
            <button>Section 1</button>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button>Section 2</button>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button>Section 3</button>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </accordion>
    <h2>Card</h2>
    <card>
        <div slot="header"><h3>Default Header</h3></div>
        <div slot="content">This is some content</div>
        <div slot="footer">This is card footer</div>
    </card>
    <h2>Chip</h2>
    <chip :removable="true">
        <div slot="chip-data" >
            <img src="css/avatar.png" alt="Person" />
            John
        </div>
    </chip>
    <chip :removable="true">
        <div slot="chip-data" >
            <img src="css/avatar.png" alt="Person" />
            Doe
        </div>
    </chip>
    <h2>Notice</h2>
    <notice :type="'danger'">
        <div slot="notice-data">
            This is notice
        </div>
    </notice>
    <notice :type="'success'">
        <div slot="notice-data">
            This is notice
        </div>
    </notice>
    <notice :type="'info'">
        <div slot="notice-data">
            This is notice
        </div>
    </notice>
    <notice :type="'warning'">
        <div slot="notice-data">
            This is notice
        </div>
    </notice>
    <h2>Alert</h2>
    <alert :type="'danger'"><div slot="alert-data">This is danger alert !</div></alert>
    <alert :type="'success'"><div slot="alert-data">This is success alert !</div></alert>
    <alert :type="'info'"><div slot="alert-data">This is success alert !</div></alert>
    <alert :type="'warning'"><div slot="alert-data">This is success alert !</div></alert>
</div>
<script src="js/vue.js"></script>
<script src="js/vue-ui-widgets.js"></script>
<script>
    var app = new Vue({
        el : '#app',
        data : {
            show : false,
            show2 : false
        }
    });
</script>
</body>
</html>