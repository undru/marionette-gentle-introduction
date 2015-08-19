ContactManager.module("ContactsApp.List", function(List, ContactManager, Backbone, Marionette, $, _){
  List.Contact = Marionette.ItemView.extend({
    tagName: "tr",
    template: "#contact-list-item",

    events: {
      "click": "highlightName",
      "click td a.js-show": "showClicked",
      "click button.js-delete": "deleteClicked",
      "click a.js-edit": "editClicked"
    },

    highlightName: function(e){
      this.$el.toggleClass("warning");
    },

    showClicked: function(e){
      e.preventDefault();
      e.stopPropagation();
      this.trigger("contact:show", this.model);
    },

    deleteClicked: function(e){
      e.stopPropagation();
      this.trigger("contact:delete", this.model);
    },
    
    editClicked: function(e){
       e.preventDefault();
       e.stopPropagation();
       this.trigger("contact:edit", this.model);
    },

    remove: function(){
      var self = this;
      this.$el.fadeOut(function(){
        Marionette.ItemView.prototype.remove.call(self);
      });
    }
  });
  
  List.Empty = Marionette.ItemView.extend({
      template: "#empty-contact-view",
      tagName: "span"
  });

  List.Contacts = Marionette.CompositeView.extend({
    template: "#contact-list",
    tagName: "table",
    className: "table table-hover",
    itemView: List.Contact,
    itemViewContainer: "tbody",
    emptyView: List.Empty
  });
});
