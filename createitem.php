        <!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
   
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <div id="main">
        <div id="div2" >
        <?php
          require ('header.php');
        ?>
            <div id="header">
                <div id="icon">
                    <svg version="1.1" id="Layer_1" width="30px" height="30px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 472.615 472.615" style="enable-background:new 0 0 472.615 472.615;" xml:space="preserve">
<g>
                    <g>
                    <path d="M0,109.02v363.542h363.648V109.02H0z M290.825,300.654h-99.154v99.154h-19.692v-99.154H72.824v-19.692h99.155v-99.15
			h19.692v99.15h99.154V300.654z" />
	</g>
</g>
<g>
                    <g>
                    <polygon points="109.073,0.054 109.073,89.327 383.344,89.327 383.344,363.596 472.615,363.596 472.615,0.054 		" />
	</g>
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
<g>
</g>
</svg>
                </div>
                <div id="heading">
                    <p>Create Item</p>

                </div>

            </div>
            <div id="form">
                <form autocomplete="off" novalidate method="post" action="./create_function.php">
                    <div class="form1">
                        <div id="itemname" class="form2">
                            <label for="itemname">Item Name</label> <br />
                            <input type="text" class="formclass" name="itemname" />
                        </div>
                        <div id="itembrand"  class="form2">
                            <label for="itembrand">Item Brand</label><br />
                            <input type="text" class="formclass" name="itembrand" />
                        </div>
                    </div>
                    <div class="form1">
                        <div id="itemid"  class="form2">
                            <label for="itemid">Item Id</label><br />
                            <input type="number" class="formclass" name="itemid" />
                        </div>
                        <div id="itemtype"  class="form2">
                            <label for="itemtype">Item Type</label><br />
                            <input type="text" class="formclass" name="itemtype" />
                        </div>
                    </div>
                    <div class="form1">
                        <div id="productiondate"  class="form2">
                            <label for="productiondate">Production Date</label><br />
                            <input type="date" class="formclass" name="productiondate" />
                        </div>
                        <div id="expirydate"  class="form2">
                            <label for="expirydate">Expiration Date</label><br />
                            <input type="date" class="formclass" name="expirydate" />
                        </div>
                    </div>
                    <div class="form1">
                        <div id="quantity" class="form2">
                            <label for="quantity">Item Quantity</label><br />
                            <input type="number" class="formclass" name="quantity" />
                        </div>
                        <div id="price" class="form2">
                            <label for="price">Price</label><br />
                            <input type="number" class="formclass" name="price" />
                        </div>
                    </div>

                    <div class="form1" >
                        <div class="form2">
                            <button type="submit" id="submit" class="formclass">Create Item</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>
</html>