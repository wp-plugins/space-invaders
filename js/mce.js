    (function() {  
	
		// Load plugin specific language pack
	tinymce.PluginManager.requireLangPack('jump');
	
        tinymce.create('tinymce.plugins.jump', {  
            init : function(ed, url) {  
                
				ed.addButton('jump', {  
                    title : 'jump.desc',  
                    image : url + '/../img/jump.png',  
                    onclick : function() {  
                        var content = '<p style="margin:50px 0 0 0; "></p>&nbsp;';
						ed.execCommand('mceInsertContent', false, content);
                    }  
                });

				ed.addButton('tabulation', {  
                    title : 'tabulation.desc',  
                    image : url + '/../img/tabulation.png',  
                    onclick : function() { 
						var content = ' &nbsp; &nbsp; &nbsp;  &nbsp; ';
						ed.execCommand('mceInsertContent', false, content);
						}
					});

				ed.addButton('clear', {  
                    title : 'clear.desc',  
                    image : url + '/../img/clear.png',  
                    onclick : function() { 
						var content = '<div style="clear:both;"></div>&nbsp;';
						ed.execCommand('mceInsertContent', false, content);
						}
					});
//-----------------------------------------------------------------------------

            },  
            createControl : function(n, cm) {  
                return null;  
            },  
        }); 
        tinymce.PluginManager.add('jump', tinymce.plugins.jump);  
    })();