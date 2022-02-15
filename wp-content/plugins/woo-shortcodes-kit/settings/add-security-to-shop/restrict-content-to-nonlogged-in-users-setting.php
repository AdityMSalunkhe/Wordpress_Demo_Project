<?php
/*
Restrict content to users if they are not logged in
*/
?>
<!-- Header -->
    <div class="accordion">
  <table>
  <colgroup>
    <col span="2">
   
  </colgroup>
  <tr>
    <th><p><input type="checkbox" class="testininputclass" id="wshk_enablerestrictctnt" name="wshk_enablerestrictctnt" value='22' <?php if(get_option('wshk_enablerestrictctnt')!=''){ echo ' checked="checked"'; }?>/><label class="testintheclass" for=wshk_enablerestrictctnt></label><br /></th><th class="forcontainertitles" style="padding: 20px 20px 0px 20px;"> <big><?php esc_html_e( 'Restrict content to users if they are not logged in', 'woo-shortcodes-kit' ); ?></big><br /><small> <?php esc_html_e( 'Just need activate the function and use the restrict content shortcode!', 'woo-shortcodes-kit' ); ?></small></p></th></tr>
    </table>
</div>
<!-- content -->
<div class="panel">
    <br><br>
    <table style="float:right;"><tr><td><a class="miraqueben" href="https://disespubli.com/docs/restrict-content-to-users-if-they-are-not-logged-in/" target="_blank" style="color: grey;"><span class="dashicons dashicons-book"></span> <?php esc_html_e( 'How does it work? ', 'woo-shortcodes-kit' ); ?> </a></td><td><a class="miraqueben" href="https://disespubli.com/wshk-features/#contact" class="botoneratopadmin" target="_blank" style="color:grey;"><span class="dashicons dashicons-sos"></span> <?php esc_html_e( 'Get help!', 'woo-shortcodes-kit' ); ?></a></td></tr></table>
    <br><br>
    <p class="wshkfirststepfunc"><b>1.- <?php esc_html_e( 'The shortcode', 'woo-shortcodes-kit' ); ?></b><br><small><?php esc_html_e( 'You can use it on any page or post', 'woo-shortcodes-kit' ); ?></small></p>
<br><br><br>
    <div onmousedown="return false;" onselectstart="return false;" class="wshkshtboxes">
<table style="margin-top:-20px;">
          <colgroup>
    <col span="3">
   
  </colgroup>
         <tr>
        <td class="shtboxone" style="width: 26%; padding-left: 30px;"><p><big><strong><span class="dashicons dashicons-code-standards"></span> <?php esc_html_e( 'Shortcode:', 'woo-shortcodes-kit' ); ?></strong><br><input class="testininputclass" onmousedown="return false;" onselectstart="return false;" style="color:white;margin-top:10px;outline:0;-moz-outline: 0;border:none;" type="text" value="<?php esc_html_e( '[wshk]Content here[/wshk]', 'woo-shortcodes-kit' ); ?>" id="woomyrestnonlog" readonly></big><br /><br /></p></td>
        
        <td class="shtboxtwo" style="width: 23%; padding-left: 30px;"><p><big>

<div class="tooltip" style="width:120px;">
<button class="wshkshtboxesbtn" style="width:150px;" type="button" onclick="myFunctionrestnonlog()" onmouseout="outFuncrestnonlog()">
  <span class="tooltiptext" id="myTooltiprestnonlog"><?php esc_html_e( 'Copy to Clipboard', 'woo-shortcodes-kit' ); ?></span>
  <?php esc_html_e( 'Copy shortcode', 'woo-shortcodes-kit' ); ?>
  </button>
</div>



<script>

document.getElementById("woomyrestnonlog").addEventListener("mousedown", function(event){
  event.preventDefault();
});

function myFunctionrestnonlog() {
  var copyText = document.getElementById("woomyrestnonlog");
  copyText.select();
  document.execCommand("copy");
  
  var tooltiprestnonlog = document.getElementById("myTooltiprestnonlog");
  tooltiprestnonlog.innerHTML = "<?php esc_html_e( 'Copied:', 'woo-shortcodes-kit' ); ?> " + copyText.value;
}

function outFuncrestnonlog() {
  var tooltiprestnonlog = document.getElementById("myTooltiprestnonlog");
  tooltiprestnonlog.innerHTML = "<?php esc_html_e( 'Copy to Clipboard', 'woo-shortcodes-kit' ); ?>";
}
</script></big><br /><br /> </p></td>
        
        <td class="shtboxthree" style="width: 46%; padding-left: 30px;"><p><span class="dashicons dashicons-warning"></span><big style="font-size:14px !important;"><strong><?php esc_html_e( 'Copy the shortcode and paste in your custom post or page', 'woo-shortcodes-kit' ); ?></strong></big><br /><br /></p></td></tr>
        
        <br />
        <br />
        </table>
</div>
<br><br>
    
    
    
    </div>