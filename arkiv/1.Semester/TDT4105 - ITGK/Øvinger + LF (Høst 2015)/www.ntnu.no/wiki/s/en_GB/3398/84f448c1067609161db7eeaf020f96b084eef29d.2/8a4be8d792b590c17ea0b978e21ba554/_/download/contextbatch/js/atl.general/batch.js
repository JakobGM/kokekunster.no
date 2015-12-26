try {
if(AJS.DarkFeatures.isEnabled("navlinks.menu")){AJS.toInit(function(A){A.getJSON(AJS.params.contextPath+"/rest/menu/latest/home",function(C){var B=A(Navlinks.Templates.Menus.applicationsMenu({navLinkEntityList:C}));
var D=A("#header-menu-bar");
D.prepend(B);
B.ajsMenuItem({isFixedPosition:true})
})
})
};
} catch (err) {
    if (console && console.log) {
        console.log("Error loading resource (15294)");
        console.log(err);
    }
}

try {
// This file was automatically generated from menu.soy.
// Please don't edit this file by hand.

if (typeof Navlinks == 'undefined') { var Navlinks = {}; }
if (typeof Navlinks.Templates == 'undefined') { Navlinks.Templates = {}; }
if (typeof Navlinks.Templates.Menus == 'undefined') { Navlinks.Templates.Menus = {}; }


Navlinks.Templates.Menus.applicationsMenu = function(opt_data, opt_sb) {
  var output = opt_sb || new soy.StringBuilder();
  if (opt_data.navLinkEntityList.length > 0) {
    output.append('<li id="ajs-app-menu" class="normal ajs-menu-item"><a id="applications-menu-link" class="trigger ajs-menu-title" href="#"><span><span>', soy.$$escapeHtml("Applications"), '</span></span></a><div class="ajs-drop-down assistive"><ul id="applications-menu-link-global" class="section-global first">');
    var navLinkEntityList8 = opt_data.navLinkEntityList;
    var navLinkEntityListLen8 = navLinkEntityList8.length;
    for (var navLinkEntityIndex8 = 0; navLinkEntityIndex8 < navLinkEntityListLen8; navLinkEntityIndex8++) {
      var navLinkEntityData8 = navLinkEntityList8[navLinkEntityIndex8];
      Navlinks.Templates.Menus.applicationsMenuItem({label: navLinkEntityData8.label, link: navLinkEntityData8.link}, output);
    }
    output.append('</ul></div></li>');
  }
  return opt_sb ? '' : output.toString();
};


Navlinks.Templates.Menus.applicationsMenuItem = function(opt_data, opt_sb) {
  var output = opt_sb || new soy.StringBuilder();
  output.append('<li><a href="', soy.$$escapeHtml(opt_data.link), '">', soy.$$escapeHtml(opt_data.label), '</a></li>');
  return opt_sb ? '' : output.toString();
};

} catch (err) {
    if (console && console.log) {
        console.log("Error loading resource (18794)");
        console.log(err);
    }
}

try {
jQuery(function(a){a(".clickable").live("click",function(c){if(a(c.target).closest("a[href]").length===0&&a(c.target).closest(".clickable").length===1){var b=a(this).attr("href")||a("a[href]:first",this).attr("href");if(b){location.href=b}}})});
} catch (err) {
    if (console && console.log) {
        console.log("Error loading resource (61823)");
        console.log(err);
    }
}

try {
// This file was automatically generated from wizard-templates.soy.
// Please don't edit this file by hand.

if (typeof plantuml == 'undefined') { var plantuml = {}; }
if (typeof plantuml.wizard == 'undefined') { plantuml.wizard = {}; }


plantuml.wizard.page1FormUml = function(opt_data, opt_sb) {
  var output = opt_sb || new soy.StringBuilder();
  output.append('<form action="#" method="post" class="aui"><fieldset><div class="field-group"><label for="template-key">', soy.$$escapeHtml("Type"), '</label><select id="template-key" class="select" name="contentTemplateKey"><option value="plantuml_template_activity_diagram_simple">', soy.$$escapeHtml("Activity Diagram"), '</option><option value="plantuml_template_class_diagram_simple">', soy.$$escapeHtml("Class Diagram"), '</option><option value="plantuml_template_component_diagram_simple">', soy.$$escapeHtml("Component Diagram"), '</option><option value="plantuml_template_state_diagram_simple">', soy.$$escapeHtml("State Diagram"), '</option><option value="plantuml_template_sequence_diagram_simple">', soy.$$escapeHtml("Sequence Diagram"), '</option><option value="plantuml_template_usecase_diagram_simple">', soy.$$escapeHtml("Use Case Diagram"), '</option></select><p><a href="', soy.$$escapeHtml("http://plantuml.sourceforge.net/classes.html"), '" class="external-link">', soy.$$escapeHtml("UML Documentation"), '</a></p></div></fieldset></form>');
  return opt_sb ? '' : output.toString();
};


plantuml.wizard.page1FormGraphviz = function(opt_data, opt_sb) {
  var output = opt_sb || new soy.StringBuilder();
  output.append('<form action="#" method="post" class="aui"><fieldset><div class="field-group"><label for="template-key">', soy.$$escapeHtml("Type"), '</label><select id="template-key" class="select" name="contentTemplateKey"><option value="plantuml_template_graphviz_diagram_simple">', soy.$$escapeHtml("Graphviz"), '</option><option value="plantuml_template_flowchart_diagram_simple">', soy.$$escapeHtml("Flowchart"), '</option></select><p><a href="', soy.$$escapeHtml("http://www.graphviz.org/Documentation.php"), '" class="external-link">', soy.$$escapeHtml("Graphviz Documentation"), '</a></p></div></fieldset></form>');
  return opt_sb ? '' : output.toString();
};


plantuml.wizard.page1FormDitaa = function(opt_data, opt_sb) {
  var output = opt_sb || new soy.StringBuilder();
  output.append('<form action="#" method="post" class="aui"><fieldset><div class="field-group"><label for="template-key">', soy.$$escapeHtml("Type"), '</label><select id="template-key" class="select" name="contentTemplateKey"><option value="plantuml_template_ditaa_diagram_simple">', soy.$$escapeHtml("DITAA"), '</option></select><p><a href="', soy.$$escapeHtml("http://ditaa.sourceforge.net/"), '" class="external-link">', soy.$$escapeHtml("DITAA Documentation"), '</a></p></div></fieldset></form>');
  return opt_sb ? '' : output.toString();
};


plantuml.wizard.page1FormJcckit = function(opt_data, opt_sb) {
  var output = opt_sb || new soy.StringBuilder();
  output.append('<form action="#" method="post" class="aui"><fieldset><div class="field-group"><label for="template-key">', soy.$$escapeHtml("Type"), '</label><select id="template-key" class="select" name="contentTemplateKey"><option value="plantuml_template_jcckit_diagram_simple">', soy.$$escapeHtml("JCCKit"), '</option></select><p><a href="', soy.$$escapeHtml("http://plantuml.sourceforge.net/jcckit.html"), '" class="external-link">', soy.$$escapeHtml("JCCKit Documentation"), '</a></p></div></fieldset></form>');
  return opt_sb ? '' : output.toString();
};


plantuml.wizard.page1FormPlantuml = function(opt_data, opt_sb) {
  var output = opt_sb || new soy.StringBuilder();
  output.append('<form action="#" method="post" class="aui"><fieldset><div class="field-group"><label for="template-key">', soy.$$escapeHtml("Function"), '</label><select id="template-key" class="select" name="contentTemplateKey"><option value="plantuml_template_plantuml_spacegraph">', soy.$$escapeHtml("Spacegraph"), '</option><option value="plantuml_template_plantuml_version">', soy.$$escapeHtml("PlantUML Version Info"), '</option><option value="plantuml_template_plantuml_xearth">', soy.$$escapeHtml("XEarth"), '</option></select><p><a href="', soy.$$escapeHtml("plantuml.blueprint.wizard.plantumlxearth.documentation_url"), '" class="external-link">', soy.$$escapeHtml("plantuml.blueprint.wizard.plantumlxearth.documentation"), '</a></p></div></fieldset></form>');
  return opt_sb ? '' : output.toString();
};


plantuml.wizard.page1FormSalt = function(opt_data, opt_sb) {
  var output = opt_sb || new soy.StringBuilder();
  output.append('<form action="#" method="post" class="aui"><fieldset><div class="field-group"><label for="template-key">', soy.$$escapeHtml("Type"), '</label><select id="template-key" class="select" name="contentTemplateKey"><option value="plantuml_template_salt_diagram_simple">', soy.$$escapeHtml("Salt"), '</option></select><p><a href="', soy.$$escapeHtml("http://plantuml.sourceforge.net/salt.html"), '" class="external-link">', soy.$$escapeHtml("Salt Documentation"), '</a></p></div></fieldset></form>');
  return opt_sb ? '' : output.toString();
};

} catch (err) {
    if (console && console.log) {
        console.log("Error loading resource (67326)");
        console.log(err);
    }
}

