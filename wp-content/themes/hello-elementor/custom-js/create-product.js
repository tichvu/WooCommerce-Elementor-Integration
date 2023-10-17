
jQuery(document).ready(function(jQuery) {
    
    function showCreateProductView(){
        var productCreating = new ProductModel();
        var viewModel = new AddProductView({model:productCreating});
        viewModel.render().showModal();
    }


    elementor.hooks.addAction( 'panel/open_editor/widget', function( panel, model, view ) {
        if(model.attributes.widgetType == 'widget_create_product' ){ 
            // there is a product, it's not dragged, and the product-id in the panel is null
            if(createdProduct.get('id') != 0 && createdProduct.attributes.attributes.dragged == 0 && model.getSetting('product-id') == ''){
                model.setSetting('product-id', createdProduct.get('id'));
                console.log('product-id is setted to panel');
            } 
        }

    } );

    elementorFrontend.hooks.addAction( 'frontend/element_ready/widget', function( $scope ) {
        if($scope[0].classList.contains('elementor-widget-widget_create_product')){ 
            if(createdProduct.get('id') != 0){
                if(createdProduct.attributes.attributes.dragged == 1){
                    showCreateProductView();
                } else{
                    $scope.html("\
                    <div class='product'>\
                        <h3>" + 'Product Name: ' + createdProduct.attributes.attributes.name + "</h3>\
                        <h3>" + 'Product Price: $' + createdProduct.attributes.attributes.price + "</h3>\
                    </div>\
                    ");
                    //createdProduct.set('dragged', 1);
                    createdProduct.attributes.attributes.dragged = 1;
                }
            } else {
                showCreateProductView();
            }
        }
        
    } );
});

