try {
AJS.Confluence.SpacePermissions={updateField:function(d,c){var a=AJS.$("#"+d);if(c!=""){var b=a.val();a.val(b==""?c:b+", "+c)}},updateGroupsField:function(a){AJS.Confluence.SpacePermissions.updateField("groups-to-add",a)},updateUsersField:function(a){AJS.Confluence.SpacePermissions.updateField("users-to-add-autocomplete",a)},setPermissionsState:function(a,b,c){AJS.$("table#"+a+"PermissionsTable input:checkbox[name$='_"+b+"']").each(function(){this.checked=c})}};AJS.$(document).ready(function(){AJS.$(".dropdown-perm-actions").dropDown("Standard");AJS.$("a.select-all, a.deselect-all").click(function(b){var a="";if(AJS.$(this).attr("class")=="select-all"){a="checked"}AJS.Confluence.SpacePermissions.setPermissionsState(AJS.$(this).attr("data-entity"),AJS.$(this).attr("data-name"),a);b.preventDefault()})});
} catch (err) {
    if (console && console.log) {
        console.log("Error loading resource (23935)");
        console.log(err);
    }
}

try {
AJS.Confluence.SpaceDetails={setUsersToAddTextField:function(a){var b=document.forms.convertspace.usersToAdd;if(a!=""){if(b.value==""){b.value=a}else{b.value=b.value+", "+a}}}};
} catch (err) {
    if (console && console.log) {
        console.log("Error loading resource (1485)");
        console.log(err);
    }
}

try {
AJS.toInit(function(b){var a=b(".edit-space-details");Confluence.Binder.autocompletePage(a)});
} catch (err) {
    if (console && console.log) {
        console.log("Error loading resource (56107)");
        console.log(err);
    }
}

