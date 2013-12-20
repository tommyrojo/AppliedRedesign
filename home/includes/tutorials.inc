<div id="TabbedPanels1" class="TabbedPanels">
     <ul class="TabbedPanelsTabGroup">    
      <li class="TabbedPanelsTab" tabindex="0" onmouseover="TabbedPanels1.showPanel(this);">Tutorials</li>
      
      </ul>
     <div class="TabbedPanelsContentGroup">
      
      <div class="TabbedPanelsContent">
       <div class="MasterDetail">
        <div spry:region="dsTutorials" class="MasterContainer">
         <div class="MasterColumn" spry:repeat="dsTutorials" spry:setrow="dsTutorials" spry:hover="MasterColumnHover" spry:select="MasterColumnSelected"><ul><li>{Title}</li></ul></div>
        </div>
        <div spry:detailregion="dsTutorials" class="DetailContainer">
         <p class="title">{Title}</p>
		<p class="date">{Date}</p>
         <p class="description">{Image}{Description}</p>
         <p class="arrowlink">{Link}</p>
        </div>
        <br style="clear:both" />
       </div>
      </div>
      
    </div><!--END TabbedPanelsContentGroup-->
    </div><!--END TabbedPanels-->
    <br class="clearFloat" />
     <!--END TabbedPanels1-->
	