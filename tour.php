<?php 
$title="Tour Bag at golfessentials.in";
include 'header.php'; ?>
  <div role="main" class="container_24">
          <div class="relative clearfix">
               <div class="sidemenu grid_4">
                    <ul>
                         <li><a href="<?php echo $men; ?>">Men<img src="img/plus.png" width="16" height="16" class="right"></a></li>
                         <li><a href="<?php echo $ladies; ?>">Ladies<img src="img/plus.png" width="16" height="16" class="right"></a></li>
                         <li><a href="<?php echo $juniors; ?>">Juniors<img src="img/plus.png" width="16" height="16" class="right"></a></li>
                         <li><a href="<?php echo $lefthanders; ?>" class="no-border">Left-handers<img src="img/plus.png" width="16" height="16" class="right"></a></li>
                    </ul>
               </div>
               <?php echo $sliders; ?>
              <a href="special" class="so" title="Contact us if you can’t find what you are looking for.">
                <img src="img/so.png" width="18" height="109" class="center_align">
                <img src="img/white_button.png" width="22" height="21" class="center_align">
              </a>
              <a href="feedback" class="f" title="Share your ideas, expectations and views with us.">
                <img src="img/f.png" width="14" height="78" class="center_align">
                <img src="img/white_button.png" width="22" height="21" class="center_align">
              </a>
          </div>
          <div id="products">
               <div class="customize">
                    <h2>Tour Bag</h2>
                    <hr>
                    <div id="content" class="alpha grid_10 omega">
                         <div>
                              <a href="JStewart/custom/tour bag/1.jpg" class="jqzoom left" rel='gal2'  title=" " >
                                   <img src="JStewart/custom/tour bag/1_small.jpg"  title=" ">
                              </a>
                         </div>
                         <div>
                              <ul id="thumblist">
                                   <li>
                                        <a class="zoomThumbActive" href='javascript:void(0);' rel="{gallery: 'gal2', smallimage: 'JStewart/custom/tour bag/1_small.jpg',largeimage: 'JStewart/custom/tour bag/1.jpg'}">
                                             <img src='JStewart/custom/tour bag/1_thumb.jpg'>
                                        </a>
                                   </li>
                                   <li>
                                        <a href='javascript:void(0);' rel="{gallery: 'gal2', smallimage: 'JStewart/custom/tour bag/2_small.jpg',largeimage: 'JStewart/custom/tour bag/2.jpg'}">
                                             <img src='JStewart/custom/tour bag/2_thumb.jpg'>
                                        </a>
                                   </li>
                                   <li>
                                        <a href='javascript:void(0);' rel="{gallery: 'gal2', smallimage: 'JStewart/custom/tour bag/3_small.jpg',largeimage: 'JStewart/custom/tour bag/3.jpg'}">
                                             <img src='JStewart/custom/tour bag/3_thumb.jpg'>
                                        </a>
                                   </li>
                              </ul>
                         </div>
                    </div>
                    <div class="alpha grid_14 omega details">
                         <p><b>Size</b> : 8" by 10"</p>
                         <p><b>Fabrics</b> : PU</p>
                         <p><b>Full Length Divider</b> : Yes</p>
                         <p><b>Top Configuration</b> : 6 Sections</p>
                         <p><b>Construction</b> : Tube</p>
                         <p><b>Number of Pockets</b> : 10</p>
                         <p><b>Hood</b> : Yes ( Zipper )</p>
                         <p><b>Strap</b> : Double</p>
                         <p><b>Weight</b> : approx 6 kg</p>
                         <p><b>Embroidery Locations</b> : Side Panels, Front Panels, Ball Pockets, Bottom Ring, Strap</p>
                         <p><b>Player Name Embroidery</b> : Available</p>
                         <p><b>Production Lead Time</b> : 45 days</p>
                         <p class="green"><b>Price</b> : <b class="ruppeefont">`</b> 31,950</p>
                         <ul>
                              <b>Extra Features:</b>
                              <li>-&nbsp;Two side cooler water bottle pockets</li>
                              <li>-&nbsp;Detachable front pocket, so that embroidery can be added at a later time.</li>
                         </ul>
                         <img src="JStewart/custom/tour%20bag/top.jpg">
                    </div>
                    <div class="clearfix"></div>
                    <div class="placement">
                         <br>
                         <br>
                         <h2>How to customise your equipment:</h2>
                         <h5>Step 1. <a href="register" class="proper_link">Sign in</a> or <a href="register" class="proper_link">Register</a> to place an order</h5></a>
                         <h5>Step 2. Select the colours and personalised embroideries of your choice, and their placement, on the product. Please remember to upload the highest resolution file possible of the logos to ensure optimum quality output. EPS/open files, high resolution PDF files are preferred. The above mentioned price includes 4 personalised embroideries that would comprise of Name, Country Name, Logo and/or Website URL, which can be used in the combination of your choice. There would be an additional charge of Rs. 1000 for every personalised embroidery that exceeds your entitlement. The maximum number of embroderies possible on this product is 11. </h5>
                         <h5>Step 3. Submit your order and wait to hear from us!</h5>
                         <h3>Color Guide</h3>
                         <hr>
                         <img src="JStewart/custom/colour.jpg"><br>
                         <img src="JStewart/custom/tour%20bag/colorplacement.jpg">
                         <br>
                         <h3>Logo Placement</h3>
                         <hr>
                         <img src="JStewart/custom/tour%20bag/logoplacement.jpg">
                         <br>
                         <h3>Colour Chart</h3>
                         <hr>
                         <img src="JStewart/custom/swatch.jpg">
                         <br>
                         <h3>Select Options</h3>
                         <hr>
                         <form action="customiseprocessing.php" method="POST" enctype="multipart/form-data" name="tour" id="customiseform">
                              <table>
                                   <tr>
                                        <td class="green">Embroider name on the bag ?</td>
                                        <td class="green">Colour 1 <span class="requiredField">*</span></td></tr>
                                   <tr>
                                        <td>
                                             Yes&nbsp;<input type="radio" <?php if (isset($_SESSION['nameb'])) { echo "checked=\"checked\""; } ?> name="name" value="yes">
                                             &nbsp;
                                             No&nbsp;<input type="radio" name="name" value="no">
                                        </td>
                                        <td>
                                             <select name="color1" required>
                                                  <option value="<?php if(isset($_SESSION['color1'])){echo $_SESSION['color1'];} ?>" selected="selected"><?php if(isset($_SESSION['color1'])){echo $_SESSION['color1'];}else{echo "None";} ?></option>
                                                  <option value="Red RCP2">Red RCP2</option>
                                                  <option value="Pink PCP1">Pink PCP1</option>
                                                  <option value="Orange OCP1">Orange OCP1</option>
                                                  <option value="Blue BL-CP3">Blue BL-CP3</option>
                                                  <option value="Green GR-CP2">Green GR-CP2</option>
                                                  <option value="Gray GCP1">Gray GCP1</option>
                                                  <option value="Black BDCP3">Black BDCP3</option>
                                                  <option value="White WCP3">White WCP3</option>
                                                  <option value="Black BCP4">Black BCP4</option>
                                                  <option value="Yellow YCP1">Yellow YCP1</option>
                                                  <option value="Blue BL-CP1">Blue BL-CP1</option>
                                                  <option value="Silver SCP1">Silver SCP1</option>
                                                  <option value="Golden GCP1">Golden GCP1</option>
                                                  <option value="White WMPG2">White WMPG2</option>
                                                  <option value="Blue BL-GP2">Blue BL-GP2</option>
                                                  <option value="Green GR-MP1">Green GR-MP1</option>
                                                  <option value="Black BMPG2">Black BMPG2</option>
                                                  <option value="White WMP1">White WMP1</option>
                                                  <option value="Red RMP1">Red RMP1</option>
                                                  <option value="Black BMP1">Black BMP1</option>
                                                  <option value="Brown BR-MP1">Brown BR-MP1</option>
                                                  <option value="Purple PP1">Purple PP1</option>
                                             </select>
                                        </td>
                                   </tr>
                                   <tr>
                                        <td>Name [If Yes above]</td>
                                        <td class="green">Colour 2 <span class="requiredField">*</span></td></tr>
                                   <tr>
                                        <td>
                                             <input type="text" name="namevalue" <?php if(isset($_SESSION['namevalue'])){echo "value='".$_SESSION['namevalue']."'";} ?>>
                                        </td>
                                        <td>
                                             <select name="color2" required>
                                                  <option value="<?php if(isset($_SESSION['color1'])){echo $_SESSION['color1'];} ?>" selected="selected"><?php if(isset($_SESSION['color1'])){echo $_SESSION['color1'];}else{echo "None";} ?></option>
                                                  <option value="Red RCP2">Red RCP2</option>
                                                  <option value="Pink PCP1">Pink PCP1</option>
                                                  <option value="Orange OCP1">Orange OCP1</option>
                                                  <option value="Blue BL-CP3">Blue BL-CP3</option>
                                                  <option value="Green GR-CP2">Green GR-CP2</option>
                                                  <option value="Gray GCP1">Gray GCP1</option>
                                                  <option value="Black BDCP3">Black BDCP3</option>
                                                  <option value="White WCP3">White WCP3</option>
                                                  <option value="Black BCP4">Black BCP4</option>
                                                  <option value="Yellow YCP1">Yellow YCP1</option>
                                                  <option value="Blue BL-CP1">Blue BL-CP1</option>
                                                  <option value="Silver SCP1">Silver SCP1</option>
                                                  <option value="Golden GCP1">Golden GCP1</option>
                                                  <option value="White WMPG2">White WMPG2</option>
                                                  <option value="Blue BL-GP2">Blue BL-GP2</option>
                                                  <option value="Green GR-MP1">Green GR-MP1</option>
                                                  <option value="Black BMPG2">Black BMPG2</option>
                                                  <option value="White WMP1">White WMP1</option>
                                                  <option value="Red RMP1">Red RMP1</option>
                                                  <option value="Black BMP1">Black BMP1</option>
                                                  <option value="Brown BR-MP1">Brown BR-MP1</option>
                                                  <option value="Purple PP1">Purple PP1</option>
                                             </select>
                                        </td>
                                   </tr>

                                   <tr><td>Name Position</td><td class="green">Colour 3 <span class="requiredField">*</span></td></tr>
                                   <tr>
                                        <td class="borderbottom">
                                             <select name="nameposition">
                                                  <option value="<?php if(isset($_SESSION['nameposition'])){echo $_SESSION['nameposition'];} else {echo "0";} ?>" selected="selected"><?php if(isset($_SESSION['nameposition'])){echo "Position #".$_SESSION['nameposition'];}else{echo "None";} ?></option>
                                                  <option value="1">Position #1</option>
                                                  <option value="2">Position #2</option>
                                                  <option value="3">Position #3</option>
                                                  <option value="4">Position #4</option>
                                                  <option value="5">Position #5</option>
                                                  <option value="6">Position #6</option>
                                                  <option value="7">Position #7</option>
                                                  <option value="8">Position #8</option>
                                                  <option value="9">Position #9</option>
                                                  <option value="10">Position #10</option>
                                                  <option value="11">Position #11</option>
                                             </select>

                                        </td>
                                        <td class="borderbottom">
                                             <select name="color3" required>
                                                  <option value="<?php if(isset($_SESSION['color1'])){echo $_SESSION['color1'];} ?>" selected="selected"><?php if(isset($_SESSION['color1'])){echo $_SESSION['color1'];}else{echo "None";} ?></option>
                                                  <option value="Red RCP2">Red RCP2</option>
                                                  <option value="Pink PCP1">Pink PCP1</option>
                                                  <option value="Orange OCP1">Orange OCP1</option>
                                                  <option value="Blue BL-CP3">Blue BL-CP3</option>
                                                  <option value="Green GR-CP2">Green GR-CP2</option>
                                                  <option value="Gray GCP1">Gray GCP1</option>
                                                  <option value="Black BDCP3">Black BDCP3</option>
                                                  <option value="White WCP3">White WCP3</option>
                                                  <option value="Black BCP4">Black BCP4</option>
                                                  <option value="Yellow YCP1">Yellow YCP1</option>
                                                  <option value="Blue BL-CP1">Blue BL-CP1</option>
                                                  <option value="Silver SCP1">Silver SCP1</option>
                                                  <option value="Golden GCP1">Golden GCP1</option>
                                                  <option value="White WMPG2">White WMPG2</option>
                                                  <option value="Blue BL-GP2">Blue BL-GP2</option>
                                                  <option value="Green GR-MP1">Green GR-MP1</option>
                                                  <option value="Black BMPG2">Black BMPG2</option>
                                                  <option value="White WMP1">White WMP1</option>
                                                  <option value="Red RMP1">Red RMP1</option>
                                                  <option value="Black BMP1">Black BMP1</option>
                                                  <option value="Brown BR-MP1">Brown BR-MP1</option>
                                                  <option value="Purple PP1">Purple PP1</option>
                                             </select>
                                        </td>
                                   </tr>

                                   <tr><td class="green">Embroider Country's flag on the bag ?</td><td class="green">Would you like your website on the bag?</td></tr>
                                   <tr>
                                        <td>
                                             Yes&nbsp;<input type="radio" <?php if (isset($_SESSION['flagb'])) { echo "checked=\"checked\""; } ?> name="flag" value="yes">
                                             &nbsp;
                                             No&nbsp;<input type="radio" name="flag" value="no">
                                        </td>
                                        <td>
                                             Yes&nbsp;<input type="radio" <?php if (isset($_SESSION['urlb'])) { echo "checked=\"checked\""; } ?> name="url" value="yes">
                                             &nbsp;
                                             No&nbsp;<input type="radio" name="url" value="no">
                                        </td>
                                   </tr>

                                   <tr><td>Country Name [If Yes above]</td><td>Website URL [If Yes above]</td></tr>
                                   <tr>
                                        <td>
                                             <input type="text" name="flagvalue" <?php if(isset($_SESSION['flagvalue'])){echo "value='".$_SESSION['flagvalue']."'";} ?>>
                                        </td>
                                        <td>
                                             <input type="text" name="urlvalue" <?php if(isset($_SESSION['urlvalue'])){echo "value='".$_SESSION['urlvalue']."'";} ?>>
                                        </td>
                                   </tr>

                                   <tr><td>Flag's Position</td><td>Website URL Position</td></tr>
                                   <tr>
                                        <td class="borderbottom">
                                             <select name="flagposition">
                                                  <option value="<?php if(isset($_SESSION['flagposition'])){echo $_SESSION['flagposition'];} else {echo "0";} ?>" selected="selected"><?php if(isset($_SESSION['flagposition'])){echo "Position #".$_SESSION['flagposition'];}else{echo "None";} ?></option>
                                                  <option value="1">Position #1</option>
                                                  <option value="2">Position #2</option>
                                                  <option value="3">Position #3</option>
                                                  <option value="4">Position #4</option>
                                                  <option value="5">Position #5</option>
                                                  <option value="6">Position #6</option>
                                                  <option value="7">Position #7</option>
                                                  <option value="8">Position #8</option>
                                                  <option value="9">Position #9</option>
                                                  <option value="10">Position #10</option>
                                                  <option value="11">Position #11</option>
                                             </select>

                                        </td>
                                        <td class="borderbottom">
                                             <select name="urlposition">
                                                  <option value="<?php if(isset($_SESSION['urlposition'])){echo $_SESSION['urlposition'];} else {echo "0";} ?>" selected="selected"><?php if(isset($_SESSION['urlposition'])){echo "Position #".$_SESSION['urlposition'];}else{echo "None";} ?></option>
                                                  <option value="1">Position #1</option>
                                                  <option value="2">Position #2</option>
                                                  <option value="3">Position #3</option>
                                                  <option value="4">Position #4</option>
                                                  <option value="5">Position #5</option>
                                                  <option value="6">Position #6</option>
                                                  <option value="7">Position #7</option>
                                                  <option value="8">Position #8</option>
                                                  <option value="9">Position #9</option>
                                                  <option value="10">Position #10</option>
                                                  <option value="11">Position #11</option>
                                             </select>

                                        </td>
                                   </tr>
                                   <tr><td class="green">Logo #1</td><td class="green">Logo #2</td></tr>
                                   <tr>
                                        <td>
                                             Yes&nbsp;<input type="radio" <?php if (isset($_SESSION['logo1b'])) { echo "checked=\"checked\""; } ?> name="logo1" value="yes">
                                             &nbsp;
                                             No&nbsp;<input type="radio" name="logo1" value="no">
                                        </td>
                                        <td>
                                             Yes&nbsp;<input type="radio" <?php if (isset($_SESSION['logo2b'])) { echo "checked=\"checked\""; } ?> name="logo2" value="yes">
                                             &nbsp;
                                             No&nbsp;<input type="radio" name="logo2" value="no">
                                        </td>
                                   </tr>
                                   <tr><td>Upload Logo [If yes above]</td><td>Upload Logo [If yes above]</td></tr>
                                   <tr>
                                        <td>
                                             <input type="file" name="logo1file">
                                        </td>
                                        <td>
                                             <input type="file" name="logo2file">
                                        </td>
                                   </tr>
                                   <tr><td>Logo #1 Position</td><td>Logo #2 Position</td></tr>
                                   <tr>
                                        <td class="borderbottom">
                                             <select name="logo1position">
                                                  <option value="<?php if(isset($_SESSION['logo1position'])){echo $_SESSION['logo1position'];} else {echo "0";} ?>" selected="selected"><?php if(isset($_SESSION['logo1position'])){echo "Position #".$_SESSION['logo1position'];}else{echo "None";} ?></option>
                                                  <option value="1">Position #1</option>
                                                  <option value="2">Position #2</option>
                                                  <option value="3">Position #3</option>
                                                  <option value="4">Position #4</option>
                                                  <option value="5">Position #5</option>
                                                  <option value="6">Position #6</option>
                                                  <option value="7">Position #7</option>
                                                  <option value="8">Position #8</option>
                                                  <option value="9">Position #9</option>
                                                  <option value="10">Position #10</option>
                                                  <option value="11">Position #11</option>
                                             </select>

                                        </td>
                                        <td class="borderbottom">
                                             <select name="logo2position">
                                                  <option value="<?php if(isset($_SESSION['logo2position'])){echo $_SESSION['logo2position'];} else {echo "0";} ?>" selected="selected"><?php if(isset($_SESSION['logo2position'])){echo "Position #".$_SESSION['logo2position'];}else{echo "None";} ?></option>
                                                  <option value="1">Position #1</option>
                                                  <option value="2">Position #2</option>
                                                  <option value="3">Position #3</option>
                                                  <option value="4">Position #4</option>
                                                  <option value="5">Position #5</option>
                                                  <option value="6">Position #6</option>
                                                  <option value="7">Position #7</option>
                                                  <option value="8">Position #8</option>
                                                  <option value="9">Position #9</option>
                                                  <option value="10">Position #10</option>
                                                  <option value="11">Position #11</option>
                                             </select>

                                        </td>
                                   </tr>
                                   <tr><td class="green">Logo #3</td><td class="green">Logo #4</td></tr>
                                   <tr>
                                        <td>
                                             Yes&nbsp;<input type="radio" <?php if (isset($_SESSION['logo3b'])) { echo "checked=\"checked\""; } ?> name="logo3" value="yes">
                                             &nbsp;
                                             No&nbsp;<input type="radio" name="logo3" value="no">
                                        </td>
                                        <td>
                                             Yes&nbsp;<input type="radio" <?php if (isset($_SESSION['logo4b'])) { echo "checked=\"checked\""; } ?> name="logo4" value="yes">
                                             &nbsp;
                                             No&nbsp;<input type="radio" name="logo4" value="no">
                                        </td>
                                   </tr>
                                   <tr><td>Upload Logo [If yes above]</td><td>Upload Logo [If yes above]</td></tr>
                                   <tr>
                                        <td>
                                             <input type="file" name="logo3file">
                                        </td>
                                        <td>
                                             <input type="file" name="logo4file">
                                        </td>
                                   </tr>
                                   <tr><td>Logo #3 Position</td><td>Logo #4 Position</td></tr>
                                   <tr>
                                        <td class="borderbottom">
                                             <select name="logo3position">
                                                  <option value="<?php if(isset($_SESSION['logo3position'])){echo $_SESSION['logo3position'];} else {echo "0";} ?>" selected="selected"><?php if(isset($_SESSION['logo3position'])){echo "Position #".$_SESSION['logo3position'];}else{echo "None";} ?></option>
                                                  <option value="1">Position #1</option>
                                                  <option value="2">Position #2</option>
                                                  <option value="3">Position #3</option>
                                                  <option value="4">Position #4</option>
                                                  <option value="5">Position #5</option>
                                                  <option value="6">Position #6</option>
                                                  <option value="7">Position #7</option>
                                                  <option value="8">Position #8</option>
                                                  <option value="9">Position #9</option>
                                                  <option value="10">Position #10</option>
                                                  <option value="11">Position #11</option>
                                             </select>

                                        </td>
                                        <td class="borderbottom">
                                             <select name="logo4position">
                                                  <option value="<?php if(isset($_SESSION['logo4position'])){echo $_SESSION['logo4position'];} else {echo "0";} ?>" selected="selected"><?php if(isset($_SESSION['logo4position'])){echo "Position #".$_SESSION['logo4position'];}else{echo "None";} ?></option>
                                                  <option value="1">Position #1</option>
                                                  <option value="2">Position #2</option>
                                                  <option value="3">Position #3</option>
                                                  <option value="4">Position #4</option>
                                                  <option value="5">Position #5</option>
                                                  <option value="6">Position #6</option>
                                                  <option value="7">Position #7</option>
                                                  <option value="8">Position #8</option>
                                                  <option value="9">Position #9</option>
                                                  <option value="10">Position #10</option>
                                                  <option value="11">Position #11</option>
                                             </select>

                                        </td>
                                   </tr>
                                   <tr><td class="green">Logo #5</td><td class="green">Logo #6</td></tr>
                                   <tr>
                                        <td>
                                             Yes&nbsp;<input type="radio" <?php if (isset($_SESSION['logo5b'])) { echo "checked=\"checked\""; } ?> name="logo5" value="yes">
                                             &nbsp;
                                             No&nbsp;<input type="radio" name="logo5" value="no">
                                        </td>
                                        <td>
                                             Yes&nbsp;<input type="radio" <?php if (isset($_SESSION['logo6b'])) { echo "checked=\"checked\""; } ?> name="logo6" value="yes">
                                             &nbsp;
                                             No&nbsp;<input type="radio" name="logo6" value="no">
                                        </td>
                                   </tr>
                                   <tr><td>Upload Logo [If yes above]</td><td>Upload Logo [If yes above]</td></tr>
                                   <tr>
                                        <td>
                                             <input type="file" name="logo5file">
                                        </td>
                                        <td>
                                             <input type="file" name="logo6file">
                                        </td>
                                   </tr>
                                   <tr><td>Logo #5 Position</td><td>Logo #6 Position</td></tr>
                                   <tr>
                                        <td class="borderbottom">
                                             <select name="logo5position">
                                                  <option value="<?php if(isset($_SESSION['logo5position'])){echo $_SESSION['logo5position'];} else {echo "0";} ?>" selected="selected"><?php if(isset($_SESSION['logo5position'])){echo "Position #".$_SESSION['logo5position'];}else{echo "None";} ?></option>
                                                  <option value="1">Position #1</option>
                                                  <option value="2">Position #2</option>
                                                  <option value="3">Position #3</option>
                                                  <option value="4">Position #4</option>
                                                  <option value="5">Position #5</option>
                                                  <option value="6">Position #6</option>
                                                  <option value="7">Position #7</option>
                                                  <option value="8">Position #8</option>
                                                  <option value="9">Position #9</option>
                                                  <option value="10">Position #10</option>
                                                  <option value="11">Position #11</option>
                                             </select>

                                        </td>
                                        <td class="borderbottom">
                                             <select name="logo6position">
                                                  <option value="<?php if(isset($_SESSION['logo6position'])){echo $_SESSION['logo6position'];} else {echo "0";} ?>" selected="selected"><?php if(isset($_SESSION['logo6position'])){echo "Position #".$_SESSION['logo6position'];}else{echo "None";} ?></option>
                                                  <option value="1">Position #1</option>
                                                  <option value="2">Position #2</option>
                                                  <option value="3">Position #3</option>
                                                  <option value="4">Position #4</option>
                                                  <option value="5">Position #5</option>
                                                  <option value="6">Position #6</option>
                                                  <option value="7">Position #7</option>
                                                  <option value="8">Position #8</option>
                                                  <option value="9">Position #9</option>
                                                  <option value="10">Position #10</option>
                                                  <option value="11">Position #11</option>
                                             </select>

                                        </td>
                                   </tr>
                                   <tr><td class="green">Logo #7</td><td class="green">Logo #8</td></tr>
                                   <tr>
                                        <td>
                                             Yes&nbsp;<input type="radio" <?php if (isset($_SESSION['logo7b'])) { echo "checked=\"checked\""; } ?> name="logo7" value="yes">
                                             &nbsp;
                                             No&nbsp;<input type="radio" name="logo7" value="no">
                                        </td>
                                        <td>
                                             Yes&nbsp;<input type="radio" <?php if (isset($_SESSION['logo8b'])) { echo "checked=\"checked\""; } ?> name="logo8" value="yes">
                                             &nbsp;
                                             No&nbsp;<input type="radio" name="logo8" value="no">
                                        </td>
                                   </tr>
                                   <tr><td>Upload Logo [If yes above]</td><td>Upload Logo [If yes above]</td></tr>
                                   <tr>
                                        <td>
                                             <input type="file" name="logo7file">
                                        </td>
                                        <td>
                                             <input type="file" name="logo8file">
                                        </td>
                                   </tr>
                                   <tr><td>Logo #7 Position</td><td>Logo #8 Position</td></tr>
                                   <tr>
                                        <td class="borderbottom">
                                             <select name="logo7position">
                                                  <option value="<?php if(isset($_SESSION['logo7position'])){echo $_SESSION['logo7position'];} else {echo "0";} ?>" selected="selected"><?php if(isset($_SESSION['logo7position'])){echo "Position #".$_SESSION['logo7position'];}else{echo "None";} ?></option>
                                                  <option value="1">Position #1</option>
                                                  <option value="2">Position #2</option>
                                                  <option value="3">Position #3</option>
                                                  <option value="4">Position #4</option>
                                                  <option value="5">Position #5</option>
                                                  <option value="6">Position #6</option>
                                                  <option value="7">Position #7</option>
                                                  <option value="8">Position #8</option>
                                                  <option value="9">Position #9</option>
                                                  <option value="10">Position #10</option>
                                                  <option value="11">Position #11</option>
                                             </select>

                                        </td>
                                        <td class="borderbottom">
                                             <select name="logo8position">
                                                  <option value="<?php if(isset($_SESSION['logo8position'])){echo $_SESSION['logo8position'];} else {echo "0";} ?>" selected="selected"><?php if(isset($_SESSION['logo8position'])){echo "Position #".$_SESSION['logo8position'];}else{echo "None";} ?></option>
                                                  <option value="1">Position #1</option>
                                                  <option value="2">Position #2</option>
                                                  <option value="3">Position #3</option>
                                                  <option value="4">Position #4</option>
                                                  <option value="5">Position #5</option>
                                                  <option value="6">Position #6</option>
                                                  <option value="7">Position #7</option>
                                                  <option value="8">Position #8</option>
                                                  <option value="9">Position #9</option>
                                                  <option value="10">Position #10</option>
                                                  <option value="11">Position #11</option>
                                             </select>

                                        </td>
                                   </tr>
                                   <tr><td class="green" colspan="2">Quantity <span class="requiredField">*</span></td></tr>
                                   <tr>
                                        <td class="borderbottom" colspan="2">
                                             <input type="number" <?php if(isset($_SESSION['quantity'])){echo "value='".$_SESSION['quantity']."'";} ?> name="quantity" required>
                                        </td>
                                   </tr>
                              </table>
                              <?php
                                   function del($name){
                                        if (isset($_SESSION[$name])) {
                                             unset($_SESSION[$name]);
                                        }
                                   }
                                   del('nameb');del('namevalue');del('nameposition');
                                   del('flagb');del('flagvalue');del('flagposition');
                                   del('urlb');del('urlvalue');del('urlposition');
                                   del('logo1b');del('logo1value');del('logo1position');
                                   del('logo2b');del('logo2value');del('logo2position');
                                   del('logo3b');del('logo3value');del('logo3position');
                                   del('logo4b');del('logo4value');del('logo4position');
                                   del('logo5b');del('logo5value');del('logo5position');
                                   del('logo6b');del('logo6value');del('logo6position');
                                   del('logo7b');del('logo7value');del('logo7position');
                                   del('logo8b');del('logo8value');del('logo8position');
                                   del('color1');del('color2');del('color3');del('count');
                                   del('price');del('orderid');del('newpath');del('pageurl');
                                   del('leadtime');del('productname');del('baseprice');del('quantity');
                                   if (isset($_SESSION['mailsent'])) { unset($_SESSION['mailsent']); }
                              ?>
                              <div id="error" class="show_error">
                                   <ul>

                                   </ul>
                              </div>
                              <input type="hidden" name="productname" value="Tour Bag">
                              <input type="hidden" name="baseprice" value="31950">
                              <input type="hidden" name="leadtime" value="45 days">
                              <input type="hidden" name="page" value="tour">
                              <input type="submit" value="Continue">
                              <?php $_SESSION['lastpage']=$_SERVER['SCRIPT_NAME']."?".$_SERVER['QUERY_STRING']; ?>
                         </form>
                    </div>
               </div>
<?php include 'footer.php'; ?>
<!--
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.8.2.min.js"><\/script>')</script>

  <script src="js/plugins.js"></script>
-->
    <script type="text/javascript" src="js/libs/jquery-1.8.2.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    <script type='text/javascript' src='js/jquery.jqzoom-core.js'></script>
    <script type="text/javascript">
     $(document).ready(function() {
          $('.jqzoom').jqzoom({
                 zoomType: 'reverse',
                 lens:true,
                 preloadImages: false,
                 alwaysOn:false
             });
          //$('.jqzoom').jqzoom();
     });
     </script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33105754-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>