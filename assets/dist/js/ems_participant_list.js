jQuery(document).ready(function(){jQuery(".toggle-header").on("click",function(e){if(!jQuery(e.target).is("a")){var $container=jQuery(this).closest(".toggle-container"),$content=$container.find(".toggle-content");$content.slideToggle(200,function(){$container.toggleClass("active")})}}),jQuery(".action").on("click",function(e){e.preventDefault();var r=confirm("Wirklich löschen?");if(1==r){var self=this,eventID=jQuery(this).data("event-id"),participantID=jQuery(this).data("participant-id"),action=jQuery(this).data("action"),data={ajax:"true",eventID:eventID,participantID:participantID,action:action};jQuery.ajax({type:"POST",data:data,success:function(data){"OK"==jQuery.trim(data)?(alert("Gelöscht"),self.closest(".toggle-container").remove()):alert("Fehlgeschlagen.")}})}})});