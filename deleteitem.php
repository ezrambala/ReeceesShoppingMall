<div id="div2">
    <?php
        require ('header.php');
    ?>
        <div id="header">
            <div id="icon">
                <a href="">
                        <svg  width="30px" height ="30px"version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 354.319 354.319" style="enable-background:new 0 0 354.319 354.319;" xml:space="preserve">
        <path id="XMLID_2_" d="M293.765,125.461l-41.574-17.221l17.221-41.574c3.17-7.654-0.464-16.428-8.118-19.599L150.428,1.146
            C142.775-2.024,134,1.61,130.83,9.264l-17.221,41.574L72.035,33.617c-7.654-3.17-16.428,0.464-19.599,8.118
            c-3.17,7.654,0.464,16.428,8.118,19.599l55.433,22.961l96.628,40.024H87.16c-8.284,0-15,6.716-15,15v200c0,8.284,6.716,15,15,15h180
            c8.284,0,15-6.716,15-15V153.126l0.125,0.052c1.877,0.777,3.821,1.146,5.734,1.146c5.886,0,11.472-3.487,13.864-9.264
            C305.053,137.406,301.419,128.631,293.765,125.461z M141.326,62.318l11.48-27.716l83.148,34.441l-11.48,27.716L182.9,79.539
            L141.326,62.318z"/>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        </svg>

                </a>
            </div>
            <div id="heading">
                <p>Delete Item</p>

            </div>

        </div>
        <div id="form">
            <form autocomplete="off" novalidate method="post" action="delete_function.php">
                <div class="form1">
                    <div id="itemid" class="form2">
                        <label for="itemid">Item Id</label> <br />
                        <input type="number" class="formclass" name="itemid" />
                    </div>
                </div>
                <div class="form1">
                    <div class="form2">
                        <button type="submit" id="submit" class="formclass" name="delete">Delete Item</button>
                    </div>
                </div>
            </form>
        </div>