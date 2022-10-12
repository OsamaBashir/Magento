define([	
    'ko',	
    'uiComponent'	
 ], function (ko, Component) {	
    'use strict';	
    return Component.extend({	
        initialize: function () {	
        //initialize parent Component
        this._super();
        this.qty = ko.observable(this.defaultQty);
        },	
        decreaseQty: function() {	
        var qty = jQuery('#qty').val();
        var newQty = parseInt(qty) - 1;
        if (newQty < 1) 
        {
            newQty = 1;
        }
        this.qty(newQty);
        },	
        increaseQty: function() {
        var qty = jQuery('#qty').val();	
        var newQty = parseInt(qty) + 1;
        this.qty(newQty);
        }	
    });	
 });