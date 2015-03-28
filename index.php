<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>Add</title>
<link href="form.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="nova.css"" />
<link type="text/css" media="print" rel="stylesheet" href="printform.css" />
<style type="text/css">
    .form-label-left{
        width:150px !important;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px !important;
    }
    body, html{
        margin:0;
        padding:0;
        background:false;
    }

    .form-all{
        margin:0px auto;
        padding-top:0px;
        width:650px;
        color:#555 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
</style>
<script>

function add(text){
	 
    var TheTextBox = document.getElementById("key");
	TheTextBox.value = "";
    TheTextBox.value = TheTextBox.value + text;
}
function makekey()
{
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for( var i=0; i < 32; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}
</script>

</head>
<body>
<form  action="add.php" method="POST" name="form_1151" id="1151" accept-charset="utf-8">
  <input type="hidden" name="formID" value="1151" />
  <div class="form-all">
    <ul class="form-section">
      <li id="cid_5" class="form-input-wide" data-type="control_head">
        <div class="form-header-group">
          <div class="header-text httal htvam">
            <h2 id="header_5" class="form-header">
              Make a Post
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_1">
        <div id="cid_1" class="form-input-wide">
          <div id="text_1" class="form-html">
            <p> This site is does not log anything but the following:identification,Text,Date added. for more information about the site <strong><a target="_blank" href="/aboutus">click here</a></strong> please.<b><font color=#DC000000>The maximum text size is around 700 letters, over exceeding will result text loss.</font></b></p>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_7">
        <label class="form-label form-label-left form-label-auto" id="label_7" for="id"> identification </label>
        <div id="cid_7" class="form-input jf-required">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="id" name="id" size="63" value="" />
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_6">
        <label class="form-label form-label-left form-label-auto" id="label_6" for="text"> Text </label>
        <div id="cid_6" class="form-input jf-required">
          <textarea id="text" class="form-textarea" name="text" cols="40" rows="6"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_8">
        <label class="form-label form-label-left form-label-auto" id="label_8" for="key"> Encryption key </label>
        <div id="cid_8" class="form-input jf-required">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="key" name="key" size="62" value="abcdefghijuklmno0123456789012345" />
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper">
		  <button id="input_g" onclick="add(makekey())" type="button" class="form-submit-button">
              Generate Encryption key
            </button>
            <button id="input_2" type="submit" class="form-submit-button">
              Submit
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <input type="hidden" id="simple_spc" name="simple_spc" value="1151" />

</form>

<span style="padding-left:50px">
<li><center><b><p><font size=2 color=#C0C0C0>BTC address:3ENZS3k37XnBaYj89r4V14pEv3xDmtyigT</font></b></p></center></li>

</body>
</html>
