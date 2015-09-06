(function() {  
    tinymce.create('tinymce.plugins.rowfluid', {  
        init : function(ed, url) {  
            ed.addButton('rowfluid', {  
                title : 'Add a Row',  
                image : url+'/row.png',  
                onclick : function() {  
                     ed.selection.setContent('[row]' + ed.selection.getContent() + '[/row]');  

                }  
            });
            ed.addButton('column', {  
                title : 'Add a Column',  
                image : url+'/column.png',  
                onclick : function() {  
                     ed.selection.setContent('[col xsmall="" small="" medium="" large="" class=""]' + ed.selection.getContent() + '[/col]');  

                }  
            }); 

            ed.addButton('btnshort', {  
                title : 'Add a button',  
                image : url+'/button.png',  
                onclick : function() {  
                     ed.selection.setContent('[btnshort href="" type="" size="" disabled=""]' + ed.selection.getContent() + '[/btnshort]');  

                }  
            });
            ed.addButton('label', {  
                title : 'Add a label',  
                image : url+'/label.png',  
                onclick : function() {  
                     ed.selection.setContent('[label type="" ]' + ed.selection.getContent() + '[/label]');  

                }  
            });
            ed.addButton('badge', {  
                title : 'Add a Badge',  
                image : url+'/badge.png',  
                onclick : function() {  
                     ed.selection.setContent('[badge type="" ]' + ed.selection.getContent() + '[/badge]');  

                }  
            });
            ed.addButton('hero', {  
                title : 'Add a Hero Unit',  
                image : url+'/hero.png',  
                onclick : function() {  
                     ed.selection.setContent('[hero headline="" href="test" type="btn-danger" size="btn-large" buttontext=""]' + ed.selection.getContent() + '[/hero]');  

                }  
            });
            ed.addButton('head', {  
                title : 'Add a Header',  
                image : url+'/head.png',  
                onclick : function() {  
                     ed.selection.setContent('[head headline="Headline" subtext="Subtext"]');  

                }  
            });
            ed.addButton('carosel', {  
                title : 'Add a Carousel',  
                image : url+'/carosel.png',  
                onclick : function() {  
                     ed.selection.setContent('[carosel]' + ed.selection.getContent() + '[/carosel]');  

                }  
            });
            ed.addButton('caroselimg', {  
                title : 'Add a Carousel Image',  
                image : url+'/image.png',  
                onclick : function() {  
                     ed.selection.setContent('[caroselimg class=""]' + ed.selection.getContent() + '[/caroselimg]');  

                }  
            });
            ed.addButton('modal', {  
                title : 'Add a Modal Window',  
                image : url+'/modal.png',  
                onclick : function() {  
                     ed.selection.setContent('[modal title=""]' + ed.selection.getContent() + '[/caroselimg]');  

                }  
            });
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('rowfluid', tinymce.plugins.rowfluid);  
})();