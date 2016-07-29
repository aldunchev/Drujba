// jQuery(document).ready(function($){

//   var ArticlesModel = Backbone.Model.extend({
//     defaults: {
//       title: null,
//       body: null,
//     }
//   });

//   var ArticlesCollection = Backbone.Collection.extend({
//     url: "/articles",
//     model: ArticlesModel,

//     parse: function(data) {
//       // console.log(data);
//       return data;
//     }
//   });

//   var ArticlesListItemView = Backbone.View.extend({
//     tagName: 'li',
//     className: 'article',
//     template: _.template($('#article-item-tmpl').html()),

//     initialize: function() {
//       this.listenTo(this.model, 'destroy', this.remove)
//     },

//     render: function() {
//       var html = this.template(this.model.toJSON());
//       this.$el.html(html);
//       // console.log(this);

//       return this;
//     },
//   });

//   var ArticlesListView = Backbone.View.extend({
//     el: '#articles-app',
//     // template: _.template($('#articles-list').html()),
//     // tagName: 'ul',

//     initialize: function() {
//       this.listenTo(this.collection, 'sync', this.render);
//     },

//     render: function(){
//       var $list = this.$('ul.articles-list').empty();

//       this.collection.each(function(model) {
//         var item = new ArticlesListItemView({model: model});
//         $list.append(item.render().$el);
//       }, this);
//       return this;
//     }
//   });

//   // var articles = new ArticlesModel();
//   var articlesCollection = new ArticlesCollection();

//   var articlesView = new ArticlesListView({collection: articlesCollection});
//   articlesCollection.fetch();
//   // console.log(articlesCollection.fetch());
// });
