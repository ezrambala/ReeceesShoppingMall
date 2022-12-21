<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <div id="main">
        <div id="div2">
            <?php
            require ('header.php');
            ?>
            <div id="header">
                <div id="icon">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" x="0px" y="0px"
                                                        viewBox="0 0 490.584 490.584" style="enable-background:new 0 0 490.584 490.584;" xml:space="preserve">
                                <g>
                                                    <g>
                                                    <path d="M100.911,419.404l123.8-51c3.1-2.1,6.2-4.2,8.3-6.2l203.9-248.6c6.2-9.4,5.2-21.8-3.1-29.1l-96.8-80.1
                                            c-8-5.9-20.3-6.8-28.1,3.1l-204.9,248.5c-2.1,3.1-3.1,6.2-4.2,9.4l-26,132.1C72.511,420.104,90.611,424.004,100.911,419.404z
                                            M326.611,49.004l65.5,54.1l-177.7,217.1l-64.9-53.7L326.611,49.004z M133.411,306.904l44.4,36.8l-57.2,23.6L133.411,306.904z" />
                                                    <path d="M469.111,448.504h-349.5c0,0-72.5,3.4-75.2-15.2c0-1-1.8-5.6,7.6-17c7.3-9.4,6.2-21.8-2.1-29.1
                                            c-9.4-7.3-21.8-6.2-29.1,2.1c-19.8,23.9-25,44.7-15.6,63.5c25.5,47.5,111.3,36.3,115.4,37.3h348.5c11.4,0,20.8-9.4,20.8-20.8
                                            C490.011,457.804,480.611,448.504,469.111,448.504z" />
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
                    <p>Edit Item</p>

                </div>

            </div>
            <div id="form">
                <form autocomplete="off" novalidate method="post" action="./edit_function.php">
                    <div class="form1">
                        <div id="itemname" class="form2">
                            <label for="itemname">Item Name</label> <br />
                            <input type="text" class="formclass" name="itemname" />
                        </div>
                        <div id="itembrand" class="form2">
                            <label for="itembrand">Item Brand</label><br />
                            <input type="text" class="formclass" name="itembrand" />
                        </div>
                    </div>
                    <div class="form1">
                        <div id="itemid" class="form2">
                            <label for="itemid">Item Id</label><br />
                            <input type="number" class="formclass" name="itemid" />
                        </div>
                        <div id="itemtype" class="form2">
                            <label for="itemtype">Item Type</label><br />
                            <input type="text" class="formclass" name="itemtype" />
                        </div>
                    </div>
                    <div class="form1">
                        <div id="productiondate" class="form2">
                            <label for="productiondate">Production Date</label><br />
                            <input type="date" class="formclass" name="productiondate" />
                        </div>
                        <div id="expirydate" class="form2">
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

                    <div class="form1">
                        <div class="form2">
                            <button type="submit" id="submit" class="formclass">Edit Item</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>
</html>