
<div class="shadowedBox" id="shadowedBox" style="display:none;">
    
    <table border="0" cellpadding="0" cellspacing="0">
        <tr valign="top">
          <td class="drop a"></td>
          <td class="drop b"></td>
          <td style="width: 623px;" class="drop c"></td>
          <td class="drop d"></td>
          <td class="drop e"></td>
        </tr>
    </table>

    <table border="0" cellpadding="0" cellspacing="0">
        
        <tr valign="top">
          <td class="drop p">
            <div>&nbsp;</div>
          </td>

          <td style="width: 800px;" class="shadowedBoxBody" rowspan="3">
	  
          <div id="headerDiv" class="shadowedBoxBodyTitleBar">
              <div class="leftDiv">
                  <img src="http://dev1.questionpro.net/images/dots.png">
              </div>

              <div style="position:relative;float:left;left:10px;top:5px;" id="shadowedBoxBodyTitleSpinner"></div>
              <div id="titlePopupHeader" align="center" style="display:block;">Change Theme</div>

              <div class="closeButton">
                  <a class="iconLink" href="javascript:closeInlinePopup('shadowedBox')"><img alt="Close Window" class="iconLink" src="http://dev1.questionpro.net/images/iconshock/closeRed_16.gif" border="0"></a>&nbsp;
              </div>
          </div>

          <table width="100%" cellpadding="0" cellspacing="0" id="layoutMainTableID">
            <tr>
              <td>
                <div id="Wizard2ContentPane" align="left">
                  <div style="position:relative;top:-8px;left:-10px;">
                    <table width="100%" cellspacing="0" cellpadding="0" >
                      <tr>
                        <td width="150" valign="top" style="background:#d0d0d0;" class="createQLeftNav">
                          <div id="Wizard2NavigationPane">

                            <table width="100%" cellspacing="0" cellpadding="0">
                              <script>
                                var navLinks = new Array(document.getElementById('add_1'),document.getElementById('add_2'),document.getElementById('add_3'),document.getElementById('add_4'),document.getElementById('add_5'),document.getElementById('add_6'),document.getElementById('add_7'),document.getElementById('add_8'),document.getElementById('add_9'),document.getElementById('add_10'),document.getElementById('add_11'),document.getElementById('add_12'),document.getElementById('add_13'),document.getElementById('addkb_1'),document.getElementById('addkb_2'),document.getElementById('addkb_3'));
                                var processor =  function (ele) {ele.className='createQNavigationLink';};
                              </script>

                              <tr>
                                <td>
                                  <div class="createQNavigationLink"  id="add_1" onmouseout="this.style.backgroundColor='';" style="cursor:pointer;cursor:hand;white-space: nowrap; " onclick="javascript:processElements(navLinks, processor);this.className=' createQNavigationSelect';ajaxRequestV2({'divID':'addQRightDivID','url':'wizard2AddQuestion.do?u_0=0&wizardProcessContainer.globalDisplayMode=standard&wizardProcessContainer.questionType=U&wizardProcessContainer.subtype=A&questionGroupID=0&questionIndexID=0','spinnerDivID':'shadowedBoxBodyTitleSpinner'})">
                                    Select a theme
                                  </div>


                                  <div class="createQNavigationSelect"  id="add_2" onmouseout="this.style.backgroundColor='';" style="cursor:pointer;cursor:hand;white-space: nowrap; " onclick="javascript:processElements(navLinks, processor);this.className=' createQNavigationSelect';ajaxRequestV2({'divID':'addQRightDivID','url':'wizard2AddQuestion.do?u_0=0&wizardProcessContainer.globalDisplayMode=standard&wizardProcessContainer.questionType=T&wizardProcessContainer.subtype=B&questionGroupID=1&questionIndexID=0','spinnerDivID':'shadowedBoxBodyTitleSpinner'})">
                                    Custom theme
                                  </div>


                                  <div class="createQNavigationLink"  id="add_3" onmouseout="this.style.backgroundColor='';" style="cursor:pointer;cursor:hand;white-space: nowrap; " onclick="javascript:processElements(navLinks, processor);this.className=' createQNavigationSelect';ajaxRequestV2({'divID':'addQRightDivID','url':'wizard2AddQuestion.do?u_0=0&wizardProcessContainer.globalDisplayMode=standard&wizardProcessContainer.questionType=B&wizardProcessContainer.subtype=A&questionGroupID=2&questionIndexID=0','spinnerDivID':'shadowedBoxBodyTitleSpinner'})">
                                    Full CSS Control
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </div>
                        </td>

                        <td valign="top" >
                          <div id="addQRightDivID" class="createQMain">  
                            <div class="createQContainer">
                              <div class="createQHeading">
                                <div>&nbsp;</div>
                              </div>

                              
                              <?php include('partials/lb_content_2.php'); ?>
                              
                              
                        </div>
                        <div style="clear:both;"></div>
                      </td>
                    </tr>
                    <tr>
                      <td valign="bottom"  style="margin:0px;padding:0px;background:#d0d0d0;">
                        <div style="background:#d0d0d0;height:23px;border-radius:0px 0px 0px 5px;position:relative;top:18px;left:0px;padding:0px;margin:0px;"></div>
                      </td>
                      <td></td>
                    </tr>
                  </table>
                </div>

                <script>
                  processElements(navLinks, processor);document.getElementById('add_1').className=' createQNavigationSelect';
                  ajaxRequestV2({'divID':'addQRightDivID','url':'/akira/wizard2AddQuestion.do?u_0=0&wizardProcessContainer.questionType=U&questionGroupID=0&questionIndexID=0', 'spinnerDivID':'shadowedBoxBodyTitleSpinner', 'inlinePopupTitle':'Add New Question'});
                </script>
                <script>
                  $("#layoutMainTableID").attr("cellspacing", "0");  
                  //alert($("#layoutMainTableID"));
                </script>
              </div>
            </td>
          </tr>
        </table>
      </td>
      <td class="drop f"></td>
    </tr>
          
    <tr valign="top">
      <td class="drop o">
        <div>&nbsp;</div>
      </td>
      <td class="drop g">
        <div>&nbsp;</div>
      </td>
    </tr>
    
    <tr valign="top">
      <td class="drop n">
        <div>&nbsp;</div>
      </td>
      <td class="drop h">
        <div>&nbsp;</div>
      </td>
    </tr>    
  </table>

  <table border="0" cellpadding="0" cellspacing="0">
      <tr valign="top">
          <td class="drop m"></td>
          <td class="drop l"></td>
          <td style="width: 623px;" class="drop k "></td>
          <td class="drop j"></td>
          <td class="drop i"></td>
      </tr>
  </table>
</div>