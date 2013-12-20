<div id="TabbedPanels1" class="TabbedPanels">
     <ul class="TabbedPanelsTabGroup">    
      <li class="TabbedPanelsTab" tabindex="0" onmouseover="TabbedPanels1.showPanel(this);">Training</li>
      <li class="TabbedPanelsTab" tabindex="0" onmouseover="TabbedPanels1.showPanel(this);">Upcoming Events</li>
      </ul>
     <div class="TabbedPanelsContentGroup">
      
      <div class="TabbedPanelsContent">

       <div class="MasterDetail">
        <div spry:region="dsTraining" class="MasterContainer">
         <div class="MasterColumn" spry:repeat="dsTraining" spry:setrow="dsTraining" spry:hover="MasterColumnHover" spry:select="MasterColumnSelected"><ul><li>{Title}</li></ul></div>
        </div>
        <div spry:detailregion="dsTraining" class="DetailContainer">
         <p class="title">{Title}</p>
		<p class="date">{Date}</p>
         <p class="description">{Image}{Description}</p>
         <p class="arrowlink">{Link}</p>
        </div>
        <br style="clear:both" />
       </div>
      </div>
      
      <div class="TabbedPanelsContent">

       <div class="MasterDetail">
        <div spry:region="dsEvents" class="MasterContainer">
         <div class="MasterColumn" spry:repeat="dsEvents" spry:setrow="dsEvents" spry:hover="MasterColumnHover" spry:select="MasterColumnSelected"><ul><li>{Title}</li></ul></div>
        </div> <!--END MasterContainer-->
        <div spry:detailregion="dsEvents" class="DetailContainer">
         <p class="title">{Title}</p>
		<p class="date">{Date}</p>
         <p class="description">{Image}{Description}</p>
         <p class="arrowlink">{Link}</p>
        </div> <!--END DetailContainer-->
        <br style="clear:both" />
       </div><!--END MasterDetail-->
      </div><!--END TabbedPanelsContent-->
      
    </div><!--END TabbedPanelsContentGroup-->
    </div><!--END TabbedPanels-->
    <br class="clearFloat" />
     <!--END TabbedPanels1-->
	