!function(a){"use strict";a(function(){var b;a(".image-button").click(function(c){return c.preventDefault(),b?(b.$button=a(this),void b.open()):(b=wp.media.frames.meta_image_frame=wp.media({title:"Select Author Image",button:{text:"Use Image"},library:{type:"image"}}),b.$button=a(this),b.on("select",function(){var a=b.state().get("selection").first().toJSON();b.$button.siblings(".image-id").val(a.id),b.$button.siblings(".image-preview").attr("src",a.url)}),void b.open())})})}(jQuery);
//# sourceMappingURL=admin.js.map