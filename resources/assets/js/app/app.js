Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');

Vue.component('top', {
	template: '#top-stories',
	data: function() {
		return {
			posts: []
		};
	},

	created: function() {
		this.loading = true;
		this.fetchPosts();
		this.getAuth();
	},

	methods: {
		fetchPosts: function() {
			this.$http.get('/api/posts').then(function(response) {
				console.log(response.data);
				this.$set('posts', response.data);
				this.loading = false;
			}, function (response) {
				console.log(error);
			});
		},

		getAuth: function() {
			this.$http.get('/api/auth').then(function(response) {
				console.log(response);
			}, function (response) {
				console.log(response);
			});
		},
	}
});

Vue.component('share-story', {
	template: '#share-s',
	data: {
		postData: {
			title: null,
			content: null,
			_token: null
		}
	},

	methods: {
		sendForm: function() {
			var resource = this.$resource('/api/posts');
			resource.save({post: this.postData }).then(function (response) {
				console.log(response);
			}, function (response) {
				console.log(response);
			});
		},
	}
});


new Vue({
	el: 'body'
});