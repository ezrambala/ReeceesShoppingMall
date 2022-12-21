<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <div id="div2">
        <?php
            require ('header.php')
        ?>
        <div id="header">
            <div id="icon">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" x="0px" y="0px"
                     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
                <g>
                <path d="M139.13,0v233.739H384V0H139.13z M328.348,100.174H194.783V66.783h133.565V100.174z" />
	</g>
</g>
<g>
                <g>
                <path d="M5.565,267.13V512h233.739V267.13H5.565z M183.652,367.304H61.217v-33.391h122.435V367.304z" />
	</g>
</g>
<g>
                <g>
                <path d="M272.696,267.13V512h233.739V267.13H272.696z M450.783,367.304H328.348v-33.391h122.435V367.304z" />
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
                <p>Stock Item</p>

            </div>

        </div>
        <div id="form">
            <form autocomplete="off" novalidate method="post" action="./stock_function.php">
                <div class="form1">
                    <div id="itemid" class="form2">
                        <label for="itemid">Item Id</label><br />
                        <input type="number" class="formclass" name="itemid" />
                    </div>
                    <div id="quantity" class="form2">
                        <label for="quantity">Item Quantity</label><br />
                        <input type="number" class="formclass" name="quantity" />
                    </div>
                </div>
                <div class="form1">
                    <div class="form2">
                        <button type="submit" id="submit" class="formclass">Stock</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>
</html>