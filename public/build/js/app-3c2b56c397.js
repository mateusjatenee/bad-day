Vue.component('top', {
	template: '#top-stories',
	data: function() {
		return {
			posts: []
		};
	},

	created: function() {
		this.fetchPosts();
	},

	methods: {
		fetchPosts: function() {
			this.$http.get('/api/posts').then(function(response) {
				console.log(response.data);
				this.$set('posts', response.data)
			}, function (response) {
				console.log(error);
			})
		},
	}
});

new Vue({
	el: 'body',
	data: {
		tasks: [
			{ name: 'oi', age: 10 },
			{ name: 'lala', age: 10 }
		]
	}
});
//# sourceMappingURL=app.js.map
